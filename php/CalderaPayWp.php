<?php


namespace calderawp\CalderaPay\WpClient;

use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;
use calderawp\CalderaPay\WpClient\EDD\PriceFinder;
use calderawp\CalderaPay\WpClient\Contracts\FeatureImageFinderContract;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;
use calderawp\CalderaPay\WpClient\Contracts\QualpayContainerContract;


/**
 * Class CalderaPayWp
 *
 * Main container for Caldera Pay in WordPress Context
 */
class CalderaPayWp extends \calderawp\CalderaContainers\Service\Container implements CalderaPayContainerContract
{

    /**
     * @var CalderaPayContainerContract|Container
     */
    private $qualpayContainer;

	/** @inheritdoc */
	public function getPriceFinder() //:FinderContract
	: PriceFinder
	{
		return $this->make(PriceFinder::class);
	}

	/** @inheritdoc */
	public function getFeaturedImageFinder() : FeatureImageFinderContract
	{
		return $this->make(FeaturedImageFinder::class);
	}

	/** @inheritdoc */
	public function getApiNamespace() : string
	{
		return 'calderapay/v1';
	}

	/** @inheritdoc */
	public function getQualPayContainer(): QualpayContainerContract
	{
		if( ! $this->qualpayContainer ){
		    $defaults = apply_filters( 'calderaPay/qualpay/settings/defaults', [
		        'apiKey' => '1eec65cbbc4e11e897bc0aaca8f8c8fa'//CalderaWP Sandbox test key
            ] );
		    $this->qualpayContainer = new \calderawp\CalderaPay\WpClient\Qualpay\Container(
		        $this,
                new Settings($defaults)
            );
        }

        return $this->qualpayContainer;
	}

}
