<?php

namespace calderawp\CalderaPay\WpClient\Tests\Integration\RestApi;

use calderawp\CalderaPay\WpClient\RestApi\NonceCheck;
use calderawp\CalderaPay\WpClient\Tests\Integration\IntegrationTestCase;

class NonceCheckTest extends IntegrationTestCase
{

    /**
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::setNonceParamName()
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::verifyRequest
     */
    public function testValidNonce()
    {

        $check = new NonceCheck();
        $check->setNonceParamName('nonce' );
        $check->setNonceAction('action' );
        $request = new \WP_REST_Request();
        $request->set_param( 'nonce', wp_create_nonce( 'action' ) );
        $this->assertTrue( $check->verifyRequest( $request ) );

    }


    /**
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::verifyRequest()
     */
    public function testInValidNonce()
    {
        $check = new NonceCheck();
        $check->setNonceParamName('nonce' );
        $check->setNonceAction('action' );
        $request = new \WP_REST_Request();
        $request->set_param( 'nonce', wp_create_nonce( 'action' . rand() ) );//bad nonce action
        $this->assertFalse( $check->verifyRequest( $request ) );

    }
}
