<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit\RestApi;

use calderawp\CalderaPay\WpClient\RestApi\NonceCheck;
use calderawp\CalderaPay\WpClient\Tests\Unit\TestCase;

class NonceCheckTest extends TestCase
{


    /**
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::setNonceAction()
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::$nonceAction
     */
    public function testSetNonceAction()
    {
        $check = new NonceCheck();
        $check->setNonceAction('act' );
        $this->assertAttributeEquals( 'act', 'nonceAction',$check );
    }

    /**
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::setNonceParamName()
     * @covers \calderawp\CalderaPay\WpClient\RestApi\NonceCheck::$nonceParamName
     */
    public function testSetNonceParamName()
    {

        $check = new NonceCheck();
        $check->setNonceParamName('act' );
        $this->assertAttributeEquals( 'act', 'nonceParamName',$check );
    }
}
