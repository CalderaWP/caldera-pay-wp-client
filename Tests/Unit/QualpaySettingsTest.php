<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit;

use calderawp\CalderaPay\WpClient\Qualpay\Settings;

class QualpaySettingsTest extends TestCase
{

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::setApiKey()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::$apiKey
     */
    public function testSetApiKey()
    {
        $settings = $this->qualpaySettingsFactory();
        $this->assertInstanceOf( Settings::class, $settings->setApiKey( '12345' ) );
        $this->assertAttributeSame('12345', 'apiKey', $settings );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::getApiKey()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::$apiKey
     */
    public function testGetApiKey()
    {
        $settings = $this->qualpaySettingsFactory();
        $settings->setApiKey('12345' );
        $this->assertSame( '12345', $settings->getApiKey() );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::getApiKey()
     */
    public function testGetApiKeyDefault()
    {
        $settings = $this->qualpaySettingsFactory();
        $this->assertSame( '', $settings->getApiKey() );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::setIsSandbox()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::$isSandbox
     */
    public function testSetIsSandbox()
    {
        $settings = $this->qualpaySettingsFactory();
        $this->assertInstanceOf( Settings::class, $settings->setIsSandbox(false ) );
        $this->assertAttributeSame(false, 'isSandbox', $settings );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::setIsSandbox()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::isSandbox()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::$isSandbox
     */
    public function testIsSandbox()
    {
        $settings = $this->qualpaySettingsFactory();
        $settings->setIsSandbox(true  );
        $this->assertSame(true, $settings->isSandbox() );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::isSandbox()
     */
    public function testIsSandboxDefault()
    {
        $settings = $this->qualpaySettingsFactory();
        $this->assertAttributeSame(null, 'isSandbox', $settings );
        $this->assertSame(true, $settings->isSandbox() );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::__construct()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::getApiKey()
     */
    public function testSetApiKeyThroughConstructor(){
        $settings = new Settings([ 'apiKey' => 'h1' ]);
        $this->assertSame('h1', $settings->getApiKey()  );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::__construct()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::isSandbox()
     */
    public function testSetSandboxThroughConstructor(){
        $settings = new Settings([ 'isSandbox' => false ]);
        $this->assertSame(false, $settings->isSandbox()  );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::__construct()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::isSandbox()
     * @covers \calderawp\CalderaPay\WpClient\Qualpay\Settings::getApiKey()
     */
    public function testSetThroughConstructor(){
        $settings = new Settings([
            'apiKey' => 'h1',
            'isSandbox' => false
        ]);
        $this->assertSame('h1', $settings->getApiKey()  );
        $this->assertSame(false, $settings->isSandbox()  );

    }
}
