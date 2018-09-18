<?php

namespace calderawp\CalderaPay\WpClient\Tests\Integration;

/**
 * Test that integration test dependencies work
 */
class EnvironmentTest extends IntegrationTestCase
{

	/**
	 * Make sure WordPress functions works
	 */
	public function testFunctions()
	{
		$this->assertTrue(function_exists( 'do_action') );
	}

    /**
     * Make sure WordPress database works
     */
	public function testDatabase()
    {
	    $id = wp_insert_post(['post_title' => 'lol', 'post_content' => 'lol', 'post_type' => 'page' ] );
	    $this->assertTrue( is_numeric( $id ) );

    }

    /**
     * Make sure EDD is active
     */
    public function testEdd()
    {
        $this->assertTrue(function_exists( 'edd_get_download') );
    }
}
