<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit;

use calderawp\CalderaPay\WpClient\CalderaPayWp;
use calderawp\CalderaPay\WpClient\EDD\PriceFinder;
use calderawp\CalderaPay\WpClient\FeaturedImageFinder;
use calderawp\CalderaPay\WpClient\Qualpay\Container;

class CalderaPayWpTest extends TestCase
{
    /**
     * @covers \calderawp\CalderaPay\WpClient\CalderaPayWp::getFeaturedImageFinder()
     */
    public function testGetFeaturedImageFinder()
    {
        $this->assertEquals( FeaturedImageFinder::class, get_class($this->getMainContainer()->getFeaturedImageFinder()));
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\CalderaPayWp::getApiNamespace()
     */
    public function testGetApiNamespace()
    {
        $this->assertSame( 'calderapay/v1', $this->getMainContainer()->getApiNamespace() );
    }
    /**
     * @covers \calderawp\CalderaPay\WpClient\CalderaPayWp::getPriceFinder()
     */
    public function testGetPriceFinder()
    {
        $this->assertEquals( PriceFinder::class, get_class($this->getMainContainer()->getPriceFinder()));

    }
    /**
     * @covers \calderawp\CalderaPay\WpClient\CalderaPayWp::getQualPayContainer()
     */
    public function testGetQualPayContainer()
    {
        $this->assertEquals( Container::class, get_class($this->getMainContainer()->getQualPayContainer()));

    }
}
