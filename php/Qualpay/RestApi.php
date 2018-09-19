<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\AddsRoutes;
use calderawp\CalderaPay\WpClient\RestApi\NonceCheck;
use calderawp\CalderaPay\WpClient\RestApi\Response;

class RestApi extends CalderaPayWpBase implements AddsRoutes
{

    const NONCE_FIELD = 'paymentNonce';

	public function addRoutes(string $nameSpace)
	{
	    $controller = new Controller($this->getContainer() );

		$routeUri = 'pay/qualpay';
		$nonceCheck = (new NonceCheck() )->setNonceParamName(self::NONCE_FIELD)->setNonceAction( self::NONCE_FIELD );
		register_rest_route(
			$nameSpace,
			$routeUri.'/key',
			[
				'methods' => ['OPTIONS', 'GET'],
				'args' => [

				],
                'permissions_callback' => [$nonceCheck, 'verifyRequest' ],
				'callback' => [$controller,'getTransientKey']
			]
		);

        register_rest_route(
            $nameSpace,
            $routeUri,
            [
                'methods' => [ 'POST'],
                'args' => $controller->fieldGroupsAsRestApiArgs(),
                'callback' => [$controller,'createPayment'],
                'permissions_callback' => [$nonceCheck, 'verifyRequest' ]
            ]
        );
	}



}
