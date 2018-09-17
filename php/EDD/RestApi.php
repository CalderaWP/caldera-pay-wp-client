<?php


namespace calderawp\CalderaPay\WpClient\EDD;

use calderawp\CalderaPay\WpClient\CalderaPayWpBase;
use calderawp\CalderaPay\WpClient\Contracts\CalderaPayContainerContract;
use calderawp\CalderaPay\WpClient\FeaturedImageFinder;
use calderawp\CalderaPay\WpClient\Contracts\AddsRoutes;

class RestApi extends CalderaPayWpBase implements AddsRoutes
{

    const QUERY_FOR_PRO = 'cf-pro';
    const IS_CALDERA_PAY = 'calderaPay';
    const FIELD = 'calderaPay';


    /**
     * Add the calderaPay field to REST API responses for EDD downloads
     *
     * @return $this
     */
    public function addField()
    {
        register_rest_field('download', self::FIELD, [
            'get_callback' => function(array $post_array, $meta_key, \WP_REST_Request $rest_request ){
                $productId = $post_array[ 'id'];
                return [
                    'prices' => $this->getContainer()->getPriceFinder()->productPrices($productId),
                    'featuredImage' => $this->getContainer()->getFeaturedImageFinder()->data($post_array[ 'featured_media']),
                    'bundle' => $this->getContainer()->getPriceFinder()->bundle($productId)
                ];
            }
        ]);

        return $this;
    }

    /**
     * Add custom REST API routes
     *
     * @param string $nameSpace Namespace of all routes
     * @return $this
     */
    public function addRoutes(string $nameSpace )
    {
        $routeUri = 'cart';
        register_rest_route( $nameSpace, $routeUri,
            [
                'methods' => 'POST',
                'args' => [
                    'addProduct' => [
                        'type' => 'integer',
                        'required' => false,
                        'description' => __( 'Add an item to the cart' )
                    ],
                    'removeProduct' => [
                        'type' => 'integer',
                        'required' => false,
                        'description' => __( 'Remove an item from the cart' )
                    ]
                ],
                'callback' => function(\WP_REST_Request $request ){
                    if( $request->get_param( 'addProduct' ) ){
                        edd_add_to_cart( $request->get_param( 'addProduct' ) );
                    }
                    if( $request->get_param( 'removeProduct' ) ){
                        edd_remove_from_cart( $request->get_param( 'removeProduct' ) );
                    }
                    return new \WP_REST_Response( edd_get_cart_contents() );
                }
            ]
        );

        register_rest_route( $nameSpace, $routeUri,[
            'methods' => 'GET',
            'callback' => function(\WP_REST_Request $request ){
                return new \WP_REST_Response( edd_get_cart_contents() );
            }
        ]);


        $routeUri = 'payment';


        return $this;
    }

    /**
     * Filter download queries to only show the right Caldera Forms add-ons
     *
     * @return $this
     */
    public function filterQuery(){
        $postType = 'download';
        add_filter("rest_{$postType}_collection_params", function($query_params, $post_type)
        {
            $query_params[self::QUERY_FOR_PRO] = [
                [
                    'default' => false,
                    'description' => __('Show pro bundles only' ),
                    'type' => 'boolean',
                ]
            ];
            $query_params[self::IS_CALDERA_PAY] = [
                [
                    'default' => false,
                    'description' => __('Designate this as a caldera pay query' ),
                    'type' => 'boolean',
                ]
            ];

            return $query_params;
        }, 25, 2);
        add_filter("rest_{$postType}_query", function($args, \WP_REST_Request $request){
            if( $request->get_param( self::IS_CALDERA_PAY ) ){
                $bundles = [
                    //20521, //free
                    20520, //Individual
                    20518, //Advanced
                    //20515, //unlimited (discontinued)
                    48255, //Agency
                ];
                if( $request->get_param( self::QUERY_FOR_PRO ) ){
                    $args[ 'post__in' ] = $bundles;
                }else{
                    $category = 'caldera-forms-add-ons';
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'download_category',
                            'field' => 'slug',
                            'terms' => $category,
                        ],
                    ];
                    $args[ 'post__not_in' ] = $bundles;
                }

                /**
                 *
                 * @todo use this filter instead of the above code
                 *
                 * @param array $args
                 * @param \WP_REST_Request $request
                 */
                $args = apply_filters( 'calderaPay/restApi/queryArgs', $args, $request );


            }



            return $args;
        }, 25, 2);
        return $this;
    }


}