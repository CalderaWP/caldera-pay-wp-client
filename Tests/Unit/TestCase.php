<?php

namespace calderawp\CalderaPay\WpClient\Tests\Unit;

use Brain\Monkey;


use calderawp\CalderaPay\WpClient\Tests\Traits\SharedFactories;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

/**
 * Class TestCase
 *
 * Default test case for all unit tests
 * @package CalderaLearn\RestSearch\Tests\Unit
 */
abstract class TestCase extends FrameworkTestCase
{
	use SharedFactories;
	/**
	 * Prepares the test environment before each test.
	 */
	protected function setUp()
	{
		parent::setUp();
		Monkey\setUp();

		$this->setup_common_wp_stubs();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	protected function tearDown()
	{
		Monkey\tearDown();
		parent::tearDown();
	}

	//phpcs:disable
	/**
	 * Set up the stubs for the common WordPress escaping and internationalization functions.
	 */
	protected function setup_common_wp_stubs()
	{
		// Common internationalization functions.
		Monkey\Functions\stubs(array(
			'__',
			'esc_html_x',
			'esc_html_e',
			'esc_attr_x',
			'esc_attr_e',
		));

        // Common escape functions.
        Monkey\Functions\stubs(array(
            'esc_html__',
            'esc_attr',
        ));
	}
	//phpcs:enable

	/**
	 * @param string $id
	 * @return FormEntity
	 */
	protected function formEntityFactory($id = '')
	{
		if (! $id) {
			$id = uniqid('cf');
		}

		return (new FormEntity() )->setId($id);
	}

	/**
	 * @return CalderaForms
	 */
	protected function calderaFormsFactory()
	{
		return new CalderaForms(new Container());
	}
}
