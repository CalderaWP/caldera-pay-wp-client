<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi;
use calderaPayQualpayPlatform\Api\EmbeddedFieldsApi;

class Container
{

	 const OFFSET_API_CLIENT = 'client';
	 const OFFSET_PLATFORM_CONFIG = 'platform-config';
	 const OFFSET_PAYMENT_GATEWAY_CONFIG = 'pg-config';
	/**
	 * @var string
	 */
	private $securityKey;

	/**
	 * @var \calderawp\CalderaContainers\Service\Container
	 */
	private $container;

	/**
	 * @var \calderaPayQualpayPlatform\Model\EmbeddedKey
	 */
	private $transientKeyData;

	/**
	 * Container constructor.
	 * @param \calderawp\CalderaContainers\Service\Container $container
	 * @param string|null $securityKey
	 */
	public function __construct(\calderawp\CalderaContainers\Service\Container $container, string  $securityKey = null)
	{
		$this->container = $container;
		$this->securityKey = $securityKey ? $securityKey : '05e1b282b91111e8b4480aaca8f8c8fa';

		$this->container->singleton(self::OFFSET_PLATFORM_CONFIG, function () {
			$config = new \calderaPayQualpayPlatform\Configuration();
			$config->setUsername($this->securityKey)
				->setHost("https://api-test.Qualpay.com/platform");
			return $config;
		});

		$this->container->singleton(self::OFFSET_PAYMENT_GATEWAY_CONFIG, function () {
			$config = new \calderaPayQualpayPaymentGateway\Configuration();
			$config->setUsername($this->securityKey)
				->setHost("https://api-test.Qualpay.com/platform");
			return $config;
		});
		$this->container->singleton(self::OFFSET_API_CLIENT, function () {
			return new \GuzzleHttp\client();
		});
		$this->container->singleton(EmbeddedFieldsApi::class, function () {
			return new EmbeddedFieldsApi(
				$this->container->make(self::OFFSET_API_CLIENT),
				$this->getPlatformConfiguration()
			);
		});
		$this->container->singleton(PaymentGatewayApi::class, function () {
			return new PaymentGatewayApi(
				$this->container->make(self::OFFSET_API_CLIENT),
				$this->container->make(self::OFFSET_PAYMENT_GATEWAY_CONFIG)
			);
		});
	}

	/**
	 * Get transient key required for embedded fields
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getTransientKey() : string
	{
		if (!$this->transientKeyData) {
			try {
				$response = $this->getEmbeddedFieldsApi()->getEmbeddedTransientKey();
				$this->transientKeyData = $response->getData();
			} catch (\Exception $exception) {
				throw new Exception($exception->getMessage(), $exception->getCode());
			}
		}
		if (is_object($this->transientKeyData)) {
			return $this->transientKeyData->getTransientKey();
		}
		throw new Exception();
	}

	/**
	 * Get embedded fields API client
	 *
	 * @return EmbeddedFieldsApi
	 */
	public function getEmbeddedFieldsApi() : EmbeddedFieldsApi
	{
		return $this->container->make(EmbeddedFieldsApi::class);
	}

	public function getPaymentGatewayApi() :PaymentGatewayApi
	{
		return $this->container->make(PaymentGatewayApi::class);
	}

	/**
	 * @return \calderaPayQualpayPlatform\Configuration
	 */
	public function getPlatformConfiguration()
	{
		return $this->container->make(self::OFFSET_PLATFORM_CONFIG);
	}
}
