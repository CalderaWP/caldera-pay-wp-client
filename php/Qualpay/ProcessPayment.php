<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderaPayQualpayPaymentGateway\Model\ModelInterface;
use calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest;
use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;

class ProcessPayment
{

    private $container;
    /**
     * @var ModelInterface|PGApiTransactionRequest
     */
    private $paymentRequest;
    public function __construct(CalderaPayContainerContract $container, ModelInterface $paymentRequest )
    {
        $this->container = $container;
        $this->paymentRequest = $paymentRequest;
    }


    public function setFromRestApiRequest(\WP_REST_Request $request ) : void
    {
        $setters = PGApiTransactionRequest::setters();
        foreach ( PGApiTransactionRequest::swaggerTypes() as $key => $dataTypeForKey ){
            if( $request->get_param( $key ) ){
                $this->paymentRequest->$setters[$key]($request->get_param( $key ) );
            }
        }


    }

    public function createPayment(){
        if( ! $this->paymentRequest->valid() ){
            throw new Exception(400, __( 'Invalid request', 'caldera-pay' ), $this->paymentRequest->listInvalidProperties() );
        }
        $responseData = [];
        /**
        $merchant_id = $_POST['MERCHANT_ID'];
        $mode = $_POST['MODE'];
        $amount = $_POST['AMOUNT'];
        $card_id = $_POST['CARD_ID'];
        $security_key = $_POST['SECURITY_KEY'];
        $zip_code = $_POST['ZIP_CODE'];
         */

        try {
            $result = $this->getQualpayContainer()
                ->getPaymentGatewayApi()
                ->sale($this->paymentRequest);
        }catch (  \calderaPayQualpayPaymentGateway\ApiException $e ){
            foreach($e->getResponseBody() as $key => $value) {
               $responseData[$key]= $value;
            }
        }



    }

    protected function getQualpayContainer() : Container
    {
        return $this->container->getQualPayContainer();
    }

}
