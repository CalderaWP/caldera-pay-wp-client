<?php


namespace calderawp\CalderaPay\WpClient\User;

use calderawp\CalderaPay\WpClient\Contracts\AddsRoutes;
use calderawp\CalderaPay\WpClient\CalderaPayWpBase;

class RestApi extends CalderaPayWpBase implements AddsRoutes
{


	public function addRoutes(string $nameSpace)
	{
		$routeUri = 'user';
		register_rest_route(
			$nameSpace,
			"$routeUri/exists",
			[
				'methods' => ['OPTIONS','GET'],
				'args' => [
					'email' => [
						'type' => 'string',
						'required' => true,
						'validate_callback' => 'is_email',
						'sanitize_callback' => 'sanitize_email'
					],

				],
				'callback' => function (\WP_REST_Request $request) {
					if (is_email($request[ 'email' ]) && is_numeric(email_exists($request[ 'email' ]))) {
						$user = get_user_by('email', $request[ 'email' ]);

						return rest_ensure_response([ 'exists' => true ]);
					}
					/**
					 * Fires when user exist check fails
					 *
					 * @param string$email Email address
					 * @param \WP_REST_Request $request  Current request
					 */
					do_action('calderaPay/user/exists/notFound', $request[ 'email' ], $request);
					return rest_ensure_response([ 'exists' => false ]);
				}
			]
		);
	}
}
