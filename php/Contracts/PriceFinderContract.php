<?php


namespace calderawp\CalderaPay\WpClient\Contracts;

interface PriceFinderContract extends FinderContract
{
	public function productPrices(int $productId) :array;
}
