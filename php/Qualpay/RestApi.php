<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\AddsRoutes;
use calderawp\CalderaPay\WpClient\RestApi\Response;

class RestApi extends CalderaPayWpBase implements  AddsRoutes
{


    public function addRoutes(string $nameSpace)
    {
        $routeUri = 'pay/qualpay';
        register_rest_route( $nameSpace, $routeUri.'/key',
            [
                'methods' => ['OPTIONS', 'GET'],
                'args' => [

                ],
                'callback' => [$this,'getTransientKey']
            ]
        );
    }


    public function getTransientKey( \WP_REST_Request $request )
    {

        try{
            $key = $this
                ->getContainer()
                ->getQualpayContainer()
                ->getTransientKey();
        }catch (Exception $exception ){
            return $exception->toResponse();
        }

        return new Response(['transientKey' => $key ] );

    }
}