<?php


namespace calderawp\CalderaPay\WpClient\Contracts;

interface FeatureImageFinderContract extends FinderContract
{
	public function data(int $featuredImageId) :array;
}
