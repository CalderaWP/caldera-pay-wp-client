# calderaPayQualpayPlatform\IntegratorApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTestAccount**](IntegratorApi.md#createTestAccount) | **POST** /vendor/settings/account/add | Generate Test Account
[**getMerchantSettings**](IntegratorApi.md#getMerchantSettings) | **GET** /vendor/settings/{mid} | Merchant Settings
[**rotateApiKey**](IntegratorApi.md#rotateApiKey) | **POST** /vendor/settings/key/{mid} | Generate Security Key


# **createTestAccount**
> \calderaPayQualpayPlatform\Model\MerchantSettingsResponse createTestAccount($body)

Generate Test Account

Generates a new test merchant account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\IntegratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\NewAccountRequest(); // \calderaPayQualpayPlatform\Model\NewAccountRequest | NewAccount

try {
    $result = $apiInstance->createTestAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratorApi->createTestAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\NewAccountRequest**](../Model/NewAccountRequest.md)| NewAccount | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\MerchantSettingsResponse**](../Model/MerchantSettingsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantSettings**
> \calderaPayQualpayPlatform\Model\MerchantSettingsResponse getMerchantSettings($mid)

Merchant Settings

Request the card types and currencies supported by the requested merchant ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\IntegratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mid = 789; // int | Merchant ID

try {
    $result = $apiInstance->getMerchantSettings($mid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratorApi->getMerchantSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mid** | **int**| Merchant ID |

### Return type

[**\calderaPayQualpayPlatform\Model\MerchantSettingsResponse**](../Model/MerchantSettingsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rotateApiKey**
> \calderaPayQualpayPlatform\Model\RotateKeyResponse rotateApiKey($mid, $body)

Generate Security Key

Generates an API key for the specified merchant account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\IntegratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mid = 789; // int | Merchant ID
$body = new \calderaPayQualpayPlatform\Model\RotateKeyRequest(); // \calderaPayQualpayPlatform\Model\RotateKeyRequest | Data

try {
    $result = $apiInstance->rotateApiKey($mid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegratorApi->rotateApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mid** | **int**| Merchant ID |
 **body** | [**\calderaPayQualpayPlatform\Model\RotateKeyRequest**](../Model/RotateKeyRequest.md)| Data |

### Return type

[**\calderaPayQualpayPlatform\Model\RotateKeyResponse**](../Model/RotateKeyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

