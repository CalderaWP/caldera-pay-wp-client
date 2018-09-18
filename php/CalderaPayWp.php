<?php


namespace calderawp\CalderaPay\WpClient;

use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;
use calderawp\CalderaPay\WpClient\EDD\PriceFinder;
use calderawp\CalderaPay\WpClient\Contracts\FeatureImageFinderContract;
use calderawp\CalderaPay\WpClient\Qualpay\Container;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

/**
 * Class CalderaPayWp
 *
 * Main container for Caldera Pay in WordPress Context
 */
class CalderaPayWp extends \calderawp\CalderaContainers\Service\Container implements CalderaPayContainerContract
{

    /**
     * @var Container
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
	public function getQualPayContainer(): Container
	{
		if( ! $this->qualpayContainer ){
		    $defaults = apply_filters( 'calderaPay/qualpay/settings/defaults', [
		        'apiKey' => ''
            ] );
		    $this->qualpayContainer = new Container(
		        $this,
                new Settings($defaults)
            );
        }

        return $this->qualpayContainer;
	}

}
