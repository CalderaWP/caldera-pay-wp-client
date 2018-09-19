<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderaPayQualpayPaymentGateway\Model\ModelInterface;
use calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest;
use calderaPayQualpayPlatform\Api\RecurringBillingApi;
use calderaPayQualpayPlatform\Model\BillingCard;
use calderaPayQualpayPlatform\Model\CustomerVault;
use calderaPayQualpayPlatform\Model\SubscriptionRequest;
use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;

class ProcessPayment
{

    use DescribesPaymentRequests;


	/**
	 * @var BillingCard
	 */
	private $card;

    /**
     * @var CustomerVault
     */
	private $customer;

    /**
     * @var SubscriptionRequest
     */
	private $subscriptionRequest;

    /**
     * @var CalderaPayContainerContract
     */
    private $container;

    private $api;

	public function __construct(CalderaPayContainerContract $container, RecurringBillingApi $api )
	{
		$this->container = $container;
		$this->api = $api;
	}


    /**
     * @param array $requestData
     * @param float $price
     * @param float|null $renewalPrice
     */
	public function setFromRestApiRequest(
        $requestData,
        float $price,
        float $renewalPrice = null ) : void
	{

        $fieldGroups = $this->getFieldGroups();
        $data = [];
	    foreach ( $fieldGroups['card'] as  $field ) {
	        $data[$field] = $requestData[ $field ];
        }
        $this->card = new BillingCard($data);

        $data = [];
	    foreach ( $fieldGroups['customer'] as  $field ) {
            $data[$field] = $requestData[ $field ];
        }
        $this->customer = new CustomerVault($data);
        $this->customer->setBillingCards( [$this->card] );
        if( $requestData[ 'customer_id' ] ){
            $this->customer->setCustomerId( $requestData[ 'customer_id' ] );
            $this->customer->setAutoGenerateCustomerId(false);
        }else{
            $this->customer->setAutoGenerateCustomerId(true);
        }

        $this->subscriptionRequest = new SubscriptionRequest();
        $this->subscriptionRequest
            ->setPlanDuration( -1 )
            ->setCustomerId( $this->customer->getCustomerId() )
            ->setCustomer( $this->customer )
            ->setAmtSetup( $price ) //charge full price now
            ->setAmtTran( is_float( $renewalPrice ) ? $renewalPrice : $price )
            ->setInterval( 6 ) //yearly
            ->setDateStart( date( 'Y-m-d', time() ) );

	}

    /**
     * @return array
     * @throws Exception
     */
	public function createPayment() : array
	{
	    if( ! is_object( $this->subscriptionRequest ) ){
            throw new Exception(
                400,
                __('Must set request first', 'caldera-pay')
            );
        }
		if (! $this->subscriptionRequest->valid()) {
			throw new Exception(
				400,
				__('Invalid request', 'caldera-pay'),
				$this->subscriptionRequest->listInvalidProperties()
			);
		}

		$responseData = [
		    'success' => false
        ];

		try {
		    /** @var \calderaPayQualpayPlatform\Model\SubscriptionResponse $result */
			$result = $this->getQualpayContainer()
				->getRecurringBillingApi()
				->addSubscription($this->subscriptionRequest);
            $responseData['success' ] = true;
            $responseData['data' ] = $result->getData();
		} catch (\calderaPayQualpayPlatform\ApiException $e) {
            $responseData['message']= $e->getMessage();
        }catch( \InvalidArgumentException $e ){
            $responseData['message']= $e->getMessage();
        }


        return $responseData;
	}

	protected function getQualpayContainer() : Container
	{
		return $this->container->getQualPayContainer();
	}


}
