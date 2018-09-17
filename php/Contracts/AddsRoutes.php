<?php


namespace calderawp\CalderaPay\WpClient\Contracts;

interface AddsRoutes
{

	/**
	 * Add custom REST API routes
	 *
	 * @param string $nameSpace Namespace of all routes
	 * @return $this
	 */
	public function addRoutes(string $nameSpace);
}
