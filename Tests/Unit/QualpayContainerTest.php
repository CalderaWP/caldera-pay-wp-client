<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit;

use calderaPayQualpayPlatform\Api\EmbeddedFieldsApi;
use calderaPayQualpayPlatform\Api\PaymentGatewayApi;
use calderaPayQualpayPlatform\Api\RecurringBillingApi;
use calderaPayQualpayPlatform\Configuration;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

class QualpayContainerTest extends TestCase
{

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Container::getSettings()
     */
    public function testGetSettings()
    {
        $this->assertEquals(
            Settings::class,
            get_class(
                $this->getQualpayContainer()->getSettings()
            )
        );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Container::getEmbeddedFieldsApi()
     */
    public function testGetEmbeddedFieldsApi()
    {
        $this->assertEquals(
            EmbeddedFieldsApi::class,
            get_class(
                $this->getQualpayContainer()->getEmbeddedFieldsApi()
            )
        );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Container::getPaymentGatewayApi()
     */
    public function testGetPaymentGatewayApi()
    {
        $this->markTestSkipped('Need to figure out typing first');
        $this->assertEquals(
            \calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi::class,
            get_class(
                $this->getQualpayContainer()->getPaymentGatewayApi()
            )
        );
}
    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Container::getPlatformConfiguration()
     */
    public function testGetPlatformConfiguration()
    {
        $this->assertEquals(
                Configuration::class,
            get_class(
                $this->getQualpayContainer()->getPlatformConfiguration()
            )
        );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Container::getRecurringBillingApi()
     */
    public function testGetRecurringBillingApi()
    {
        $this->assertEquals(
            RecurringBillingApi::class,
            get_class(
                $this->getQualpayContainer()->getRecurringBillingApi()
            )
        );
    }


}
