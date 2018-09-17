<?php


namespace calderawp\CalderaPay\WpClient;

use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;
use calderawp\CalderaPay\WpClient\EDD\PriceFinder;
use calderawp\CalderaPay\WpClient\Contracts\FeatureImageFinderContract;
use calderawp\CalderaPay\WpClient\QualPay\Container;


/**
 * Class CalderaPayWp
 *
 * Main container for Caldera Pay in WordPress Context
 */
class CalderaPayWp extends \calderawp\CalderaContainers\Service\Container implements CalderaPayContainerContract
{


    /** @inheritdoc */
    public function getPriceFinder() //:FinderContract
    : PriceFinder
    {
        return $this->make(PriceFinder::class);
    }

    /** @inheritdoc */
    public function getFeaturedImageFinder() : FeatureImageFinderContract
    {
        return $this->make( FeaturedImageFinder::class );
    }

    /** @inheritdoc */
    public function getApiNamespace() : string
    {
        return 'calderapay/v1';
    }

    /** @inheritdoc */
    public function getQualPayContainer(): Container
    {
        return $this->make( Container::class );
    }

}