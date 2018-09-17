# calderaPayQualpayPlatform\QualpayCheckoutApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCheckout**](QualpayCheckoutApi.md#addCheckout) | **POST** /checkout | Create a checkout payment link
[**getDetails**](QualpayCheckoutApi.md#getDetails) | **GET** /checkout/{checkoutId} | Lookup checkout payment


# **addCheckout**
> \calderaPayQualpayPlatform\Model\CheckoutLinkResponse addCheckout($body)

Create a checkout payment link

Creates a new checkout object which contains a payment link, through which checkout payments can be made. This operation generates a unique id, checkout_id, that can be used to query the status of a Qualpay Hosted Checkout payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\QualpayCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\CheckoutRequest(); // \calderaPayQualpayPlatform\Model\CheckoutRequest | Checkout Resource

try {
    $result = $apiInstance->addCheckout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualpayCheckoutApi->addCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\CheckoutRequest**](../Model/CheckoutRequest.md)| Checkout Resource |

### Return type

[**\calderaPayQualpayPlatform\Model\CheckoutLinkResponse**](../Model/CheckoutLinkResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetails**
> \calderaPayQualpayPlatform\Model\CheckoutResponse getDetails($checkout_id)

Lookup checkout payment

This operation can be used to query the status of a payment made through Qualpay Hosted Checkout. The operation returns a checkout object which contains payment information. using the checkout link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\QualpayCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_id = "checkout_id_example"; // string | Checkout ID

try {
    $result = $apiInstance->getDetails($checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualpayCheckoutApi->getDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **string**| Checkout ID |

### Return type

[**\calderaPayQualpayPlatform\Model\CheckoutResponse**](../Model/CheckoutResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

