# calderaPayQualpayPlatform\EmbeddedFieldsApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEmbeddedTransientKey**](EmbeddedFieldsApi.md#getEmbeddedTransientKey) | **GET** /embedded | Get Transient Key


# **getEmbeddedTransientKey**
> \calderaPayQualpayPlatform\Model\EmbeddedKeyResponse getEmbeddedTransientKey()

Get Transient Key

Get a transient key for use with Qualpay Embedded Fields. This key will be invalidated in 30 minutes or  when a card is sucessfully verified using Embedded fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\EmbeddedFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEmbeddedTransientKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddedFieldsApi->getEmbeddedTransientKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\calderaPayQualpayPlatform\Model\EmbeddedKeyResponse**](../Model/EmbeddedKeyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

