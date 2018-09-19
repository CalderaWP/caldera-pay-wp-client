<?php
/**
 Plugin Name: Caldera Pay WordPress
 */
include_once __DIR__ .'/vendor/autoload.php';

if( function_exists( 'add_action' )){

    /**
     * Ensure EDD API routes exist.
     * Temporary until our own API is added in
     */
    add_action( 'init', function(){
        global $wp_post_types;
        $post_type_name = 'download';
        if( isset( $wp_post_types[ $post_type_name ] ) ) {
            $wp_post_types[$post_type_name]->show_in_rest = true;
            $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        }
    });
    $container = new \calderawp\CalderaPay\WpClient\CalderaPayWp();
    $hooks = new \calderawp\CalderaPay\WpClient\Hooks($container);
    $hooks->init();

    add_filter( 'reactwpscripts.is_development', '__return_true' );

    add_action( 'calderaPay/init',
        function(
            \calderawp\CalderaPay\WpClient\CalderaPayWp $container,
            \calderawp\CalderaPay\WpClient\Hooks $hooks
        ){
            $hooks->setBasePath( plugin_dir_path( __FILE__ ) );
            add_shortcode( 'caldera_pay', function($atts) use($hooks ){
                add_action( 'wp_footer', [$hooks,'enqueueApp']);
                return
                    '<style>.caldera-pay .field-config {border-bottom: 1px solid;}</style>
                    <noscript>You need to enable JavaScript to run this app.</noscript>
                    <div class="caldera-pay">
                        <div class="container">
                           <div class="row">
                             <div class="col-sm-12 col-lg-6" id="caldera-pay-left"></div>
                             <div class="col-sm-12 col-lg-6" id="caldera-pay-right"></div>
                           </div>
                           <div id="caldera-pay-app"></div>
                         </div>
                   </div>';
            });

        },10,2
    );

    /**
     *
     */
    do_action( 'calderaPay/init', $container, $hooks );

}

