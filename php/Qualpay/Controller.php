<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;


use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\RestApi\Response;

class Controller extends CalderaPayWpBase
{

    use DescribesPaymentRequests;



    public function createPayment(\WP_REST_Request $request )
    {
        $requestData = [];
        foreach ($this->getFieldGroups() as $fieldGroup => $fieldGroupFields ){
            foreach ( $fieldGroupFields as $field ){
                if( $request->get_param( $field ) ){
                    $requestData[$field] = $request->get_param( $field );
                }
            }
        }

        $processor = new ProcessPayment(
            $this->getContainer(),
            $this->getContainer()
                ->getQualPayContainer()
                ->getRecurringBillingApi()
        );

        //Bad way to set product
        $product = edd_get_download( $request->get_param( 'product' ) );
        if( empty( $product ) ){
            return new Response(
                ['message' => 'Invalid Product'],
                400
            );
        }

        //Bad way to set product price option
        if( $request->get_param( 'priceOption' ) ){
            $price = edd_get_price_option_amount( $product->get_ID(),$request->get_param( 'priceOption' ) );
        }else{
            $price = edd_get_download_price($product->get_ID() );
        }



        $processor->setFromRestApiRequest(
            $requestData,
            $price,
            $price
        );
        try{
            $responseData = $processor->createPayment();
        }catch (\calderawp\CalderaPay\WpClient\Exception $e ){
            return $e->toResponse();
        }

        return new Response($responseData, 201 );

    }

    public function getTransientKey(\WP_REST_Request $request)
    {

        try {
            $key = $this
                ->getContainer()
                ->getQualpayContainer()
                ->getTransientKey();
        } catch (Exception $exception) {
            return $exception->toResponse();
        }

        return new Response(['transientKey' => $key ]);
    }

}