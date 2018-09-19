<?php


namespace calderawp\CalderaPay\WpClient\Qualpay;

use calderawp\CalderaPay\WpClient\Contracts\QualpayContainerContract;
use calderaPayQualpayPlatform\Api\EmbeddedFieldsApi;
use calderaPayQualpayPlatform\Api\PaymentGatewayApi;
use calderaPayQualpayPlatform\Api\RecurringBillingApi;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

class Container implements QualpayContainerContract
{
    /**
     * @var Settings
     */
    private $settings;
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
     * @param Settings $settings Qualpay settings
     */
    public function __construct(\calderawp\CalderaContainers\Service\Container $container, Settings $settings)
    {
        $this->container = $container;
        $this->securityKey = $settings->getApiKey();
        $this->settings = $settings;

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
            return new \GuzzleHttp\Client();
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
                $this->container->make(self::OFFSET_PLATFORM_CONFIG )
            );
        });

        $this->container->singleton(RecurringBillingApi::class, function () {
            return new RecurringBillingApi(
                $this->container->make(self::OFFSET_API_CLIENT),
                $this->container->make(self::OFFSET_PLATFORM_CONFIG)
            );
        });
    }

    /**
     * Get transient key required for embedded fields
     *
     * @return string
     * @throws \Exception
     */
    public function getTransientKey(): string
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
    public function getEmbeddedFieldsApi(): EmbeddedFieldsApi
    {
        return $this->container->make(EmbeddedFieldsApi::class);
    }

    public function getPaymentGatewayApi()
    //: PaymentGatewayApi
    {
        return $this->container->make(PaymentGatewayApi::class);
    }

    /**
     * @return \calderaPayQualpayPlatform\Configuration
     */
    public function getPlatformConfiguration(): \calderaPayQualpayPlatform\Configuration
    {
        return $this->container->make(self::OFFSET_PLATFORM_CONFIG);
    }

    /**
     * @return RecurringBillingApi
     */
    public function getRecurringBillingApi(): RecurringBillingApi
    {
        return $this->container->make(RecurringBillingApi::class);
    }


    /**
     * @return Settings
     */
    public function getSettings() : Settings
    {

        return $this->settings;
    }
}
