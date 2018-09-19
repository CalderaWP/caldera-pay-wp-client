<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\AddsRoutes;
use calderawp\CalderaPay\WpClient\RestApi\Response;

class RestApi extends CalderaPayWpBase implements AddsRoutes
{


	public function addRoutes(string $nameSpace)
	{
	    $controller = new Controller($this->getContainer() );

		$routeUri = 'pay/qualpay';
		register_rest_route(
			$nameSpace,
			$routeUri.'/key',
			[
				'methods' => ['OPTIONS', 'GET'],
				'args' => [

				],
				'callback' => [$controller,'getTransientKey']
			]
		);

        register_rest_route(
            $nameSpace,
            $routeUri,
            [
                'methods' => [ 'POST'],
                'args' => $controller->fieldGroupsAsRestApiArgs(),
                'callback' => [$controller,'createPayment']
            ]
        );
	}



}
