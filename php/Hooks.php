<?php


namespace calderawp\CalderaPay\WpClient;
use calderawp\CalderaPay\WpClient\EDD\RestApi;

class Hooks extends CalderaPayWpBase
{
    private $basePath;

    /**
     * Add all of the hooks
     */
    public function init(){
        add_action( 'init', [$this,'initRestApi'] );

    }


    public function setBasePath(string $basePath){
        $this->basePath = $basePath;
    }

    /**
     * Initialize the REST API
     */
    public function initRestApi(){

        //EDD
        (new RestApi($this->getContainer()))
            ->addField()
            ->filterQuery()
            ->addRoutes($this->getContainer()->getApiNamespace() );

        //calderaPay generic
        (new \calderawp\CalderaPay\WpClient\User\RestApi($this->getContainer()))
            ->addRoutes($this->getContainer()->getApiNamespace() );


        //Qualpay
        (new \calderawp\CalderaPay\WpClient\Qualpay\RestApi($this->getContainer()))
            ->addRoutes($this->getContainer()->getApiNamespace());
        /**
         * Add ID to JWT auth token return
         *
         * @param
         */
        add_filter( 'jwt_auth_token_before_dispatch', [$this,'filterJwtReply'],25,2);
    }

    /**
     * @param array $data
     * @param \WP_User $user
     *
     * @return array
     */
    public function filterJwtReply($data, $user ){
        $data[ 'calderaPay' ] = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name
        ];
        return $data;
    }

    public function enqueueApp()
    {

         try{

                \CalderaPayScripts\enqueue_assets($this->basePath, [
                        'styles' => 'wp-components'
                ] );
                wp_enqueue_script( 'qualpay-hosted', 'https://app-dev.qualpay.com/hosted/embedded/js/qp-embedded-sdk.min.js' );
                wp_enqueue_style( 'wp-components' );
            }catch ( \LogicException $e ){

            }


    }


}