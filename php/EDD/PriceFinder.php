<?php


namespace calderawp\CalderaPay\WpClient\EDD;
use calderawp\CalderaPay\WpClient\Contracts\PriceFinderContract;

class PriceFinder implements PriceFinderContract
{


    public function productPrices(int $productId) :array
    {
        $post = get_post($productId);

        $return = [
            'ID' => $productId,
            'price' => 0,
            'free' => false,
            'options' => [],
            'includes' => [],
            'isBundle' => false,
        ];

        if ($post) {
            $download = new \EDD_Download( $productId );
            $return['price' ] = $download->get_price();
            $return['addToCart' ] = add_query_arg( [
                'edd_action' => 'add_to_cart',
                'download_id' => $productId,
            ], home_url( 'checkout' ) );
            $options = [];
            if( $download->get_prices() ){
                foreach ( $download->get_prices() as $i => $price ){

                    $bundled = $download->get_variable_priced_bundled_downloads($i);
                    $options[$i] = $price;
                    $args = [
                        'edd_action' => 'add_to_cart',
                        'download_id' => $productId,
                    ];

                    if( $i ){
                        $args[ 'edd_options[price_id]' ] = $i;
                    }

                    $options[$i]['addToCart' ] = add_query_arg( $args, home_url( 'checkout' ) );

                }
            }



            $return['options'] = array_values($options);
            $return[ 'free' ] = $download->is_free();
        }
        return $return;
    }


    public function bundle(int$productId) :array{
        $download = edd_get_download($productId);
        $return = [
            'isBundle' => false,
            'includes' => []
        ];
        if( $download->is_bundled_download() ){
            $return['isBundle'] = true;
            $return['includes' ] = $download->get_bundled_downloads();
        }
        return $return;
    }
}