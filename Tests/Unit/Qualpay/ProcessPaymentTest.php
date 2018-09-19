<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit\Qualpay;

use calderaPayQualpayPlatform\Api\RecurringBillingApi;
use calderaPayQualpayPlatform\Model\BillingCard;
use calderaPayQualpayPlatform\Model\CustomerVault;
use calderaPayQualpayPlatform\Model\SubscriptionRequest;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;
use calderawp\CalderaPay\WpClient\Tests\Unit\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;


class ProcessPaymentTest extends TestCase
{

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::__construct()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::$container
     */
    public function test__construct()
    {
        $container = $this->getMainContainer();
        $processPayment = new ProcessPayment(
            $container,
            $container->getQualPayContainer()->getRecurringBillingApi()
        );
        $this->assertAttributeEquals( $container, 'container', $processPayment );
    }

    public function testCreatePayment()
    {
        $responseData = [
            'foo' => 'bar'
        ];
        $requestData = [
            'card_id' => '123451',
            'billing_zip' => '15217',
            'customer_first_name' => 'Josh',
            'customer_last_name' => 'Pollock',
            'customer_email' => 'josh@calderawp.com',
            'customer_id' => '11a1111w11'
        ];
        $price = '1.01';
        $renewalPrice = '2.01';
        $mock = new MockHandler([
            new Response(200, ['X-HI-ROY' => 'true'], json_encode( $responseData )),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $container = $this->getMainContainer();
        $qualpayContainer = new Container($container,(new Settings() )->setApiKey('12345' )  );
        $billingApi = new RecurringBillingApi($client,$container->getQualPayContainer()->getPlatformConfiguration() );
        $processor = new ProcessPayment($container, $container->getQualPayContainer()->getRecurringBillingApi() );
        $processor->setFromRestApiRequest( $requestData,$price,$renewalPrice );
        try{
            $result = $processor->createPayment();
        }catch (\Exception $e ){
            var_dump( $e );exit;
        }

        $this->assertArrayHasKey( 'success', $result );
        $this->assertTrue( $result[ 'success'] );
        $this->assertArrayHasKey( 'data', $result );
        $this->assertEquals( $responseData, $result['data' ] );



    }


    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::setFromRestApiRequest()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::$subscriptionRequest
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::$customer
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\ProcessPayment::$card
     */
    public function testSetFromRestApiRequest()
    {
        $requestData = [
            'card_id' => '123451',
            'billing_zip' => '15217',
            'customer_first_name' => 'Josh',
            'customer_last_name' => 'Pollock',
            'customer_email' => 'josh@calderawp.com',
            'customer_id' => '11a1111w11'
        ];
        $price = '1.01';
        $renewalPrice = '2.01';
        $processor = new ProcessPayment($this->getMainContainer(), $this->getMainContainer()->getQualPayContainer()->getRecurringBillingApi() );
        $processor->setFromRestApiRequest( $requestData,$price,$renewalPrice  );
        $this->assertObjectPropertyType(
            $processor,
            'subscriptionRequest',
            SubscriptionRequest::class
        );

        /** @var SubscriptionRequest $subscriptionRequest */
        $subscriptionRequest = $this->getPropValueViaReflection( $processor, 'subscriptionRequest');
        $this->assertEquals( $requestData[ 'customer_id' ], $subscriptionRequest->getCustomerId() );
        $this->assertEquals( $price, $subscriptionRequest->getAmtSetup() );
        $this->assertEquals( $renewalPrice, $subscriptionRequest->getAmtTran() );
        $this->assertEquals( 6, $subscriptionRequest->getInterval() );
        $this->assertEquals( -1, $subscriptionRequest->getPlanDuration() );
        $this->assertEquals( date( 'Y-m-d', time() ), $subscriptionRequest->getDateStart() );

        $this->assertObjectPropertyType(
            $processor,
            'card',
            BillingCard::class
        );
        $card = $this->getPropValueViaReflection( $processor, 'card');
        $this->assertEquals( $requestData[ 'card_id'], $card[ 'card_id' ]);
        $this->assertEquals( $requestData[ 'billing_zip'], $card[ 'billing_zip' ]);

        $this->assertObjectPropertyType(
            $processor,
            'customer',
            CustomerVault::class
        );
        $customer = $this->getPropValueViaReflection( $processor, 'customer');
        $this->assertEquals( $requestData[ 'customer_first_name'], $customer[ 'customer_first_name' ]);
        $this->assertEquals( $requestData[ 'customer_last_name'], $customer[ 'customer_last_name' ]);
        $this->assertEquals( $requestData[ 'customer_email'], $customer[ 'customer_email' ]);



    }
}
