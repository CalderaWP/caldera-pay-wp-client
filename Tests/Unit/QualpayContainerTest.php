<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit;

use calderaPayQualpayPlatform\Api\EmbeddedFieldsApi;
use calderaPayQualpayPlatform\Api\PaymentGatewayApi;
use calderaPayQualpayPlatform\Configuration;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

class QualpayContainerTest extends TestCase
{

    public function testGetSettings()
    {
        $this->assertEquals(
            Settings::class,
            get_class(
                $this->getQualpayContainer()->getSettings()
            )
        );
    }

    public function testGetEmbeddedFieldsApi()
    {
        $this->assertEquals(
            EmbeddedFieldsApi::class,
            get_class(
                $this->getQualpayContainer()->getEmbeddedFieldsApi()
            )
        );
    }

    public function testGetPaymentGatewayApi()
    {
        $this->assertEquals(
            \calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi::class,
            get_class(
                $this->getQualpayContainer()->getPaymentGatewayApi()
            )
        );
}
    public function testGetPlatformConfiguration()
    {
        $this->assertEquals(
                Configuration::class,
            get_class(
                $this->getQualpayContainer()->getPlatformConfiguration()
            )
        );
    }


}
