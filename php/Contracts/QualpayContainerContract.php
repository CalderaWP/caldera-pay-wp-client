<?php


namespace calderawp\CalderaPay\WpClient\Contracts;


use calderaPayQualpayPlatform\Api\EmbeddedFieldsApi;
use calderaPayQualpayPlatform\Api\PaymentGatewayApi;
use calderaPayQualpayPlatform\Api\RecurringBillingApi;
use calderawp\CalderaPay\WpClient\Qualpay\Settings;

interface QualpayContainerContract
{

    /**
     * Get transient key required for embedded fields
     *
     * @return string
     * @throws \Exception
     */
    public function getTransientKey(): string;

    /**
     * Get embedded fields API client
     *
     * @return EmbeddedFieldsApi
     */
    public function getEmbeddedFieldsApi(): EmbeddedFieldsApi;

    public function getPaymentGatewayApi();
    //: PaymentGatewayApi;

    /**
     * @return \calderaPayQualpayPlatform\Configuration
     */
    public function getPlatformConfiguration(): \calderaPayQualpayPlatform\Configuration;

    /**
     * @return RecurringBillingApi
     */
    public function getRecurringBillingApi(): RecurringBillingApi;

    /**
     * @return Settings
     */
    public function getSettings(): Settings;

}