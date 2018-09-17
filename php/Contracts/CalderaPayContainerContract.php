<?php


namespace calderawp\CalderaPay\WpClient\Contracts;

use calderawp\CalderaPay\WpClient\EDD\PriceFinder;
use calderawp\CalderaPay\WpClient\Contracts\FeatureImageFinderContract;
use calderawp\CalderaPay\WpClient\QualPay\Container;

interface CalderaPayContainerContract
{
	public function getPriceFinder() //:FinderContract
	: PriceFinder;

	public function getFeaturedImageFinder() : FeatureImageFinderContract;

	public function getApiNamespace() : string;


	public function getQualPayContainer(): Container;
}
