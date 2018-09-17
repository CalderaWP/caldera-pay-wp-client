# calderaPayQualpayPaymentGateway\PaymentGatewayApi

All URIs are relative to *https://api-test.Qualpay.com:443/pg*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorization**](PaymentGatewayApi.md#authorization) | **POST** /auth | Authorize transaction
[**batchClose**](PaymentGatewayApi.md#batchClose) | **POST** /batchClose | Close batch
[**capture**](PaymentGatewayApi.md#capture) | **POST** /capture/{pgIdOrig} | Capture authorized transaction
[**credit**](PaymentGatewayApi.md#credit) | **POST** /credit | Issue credit to cardholder
[**force**](PaymentGatewayApi.md#force) | **POST** /force | Force transaction approval
[**refund**](PaymentGatewayApi.md#refund) | **POST** /refund/{pgIdOrig} | Refund previously captured transaction
[**sale**](PaymentGatewayApi.md#sale) | **POST** /sale | Sale (Auth + Capture)
[**sendReceipt**](PaymentGatewayApi.md#sendReceipt) | **POST** /emailReceipt/{pgId} | Send transaction receipt email
[**tokenize**](PaymentGatewayApi.md#tokenize) | **POST** /tokenize | Tokenize card
[**verify**](PaymentGatewayApi.md#verify) | **POST** /verify | Verify Card
[**void**](PaymentGatewayApi.md#void) | **POST** /void/{pgIdOrig} | Void previously authorized transaction


# **authorization**
> \calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse authorization($body)

Authorize transaction

An approved transaction will continue to be open until it expires or a capture message is received. Authorizations are automatically voided if they are not captured within 28 days, although most issuing banks will release the hold after 24 hours in retail environments or 7 days in card not present environments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest | Payment Gateway Authorization Request

try {
    $result = $apiInstance->authorization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->authorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest**](../Model/PGApiTransactionRequest.md)| Payment Gateway Authorization Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse**](../Model/PGApiTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchClose**
> \calderaPayQualpayPaymentGateway\Model\PGApiBatchCloseResponse batchClose($body)

Close batch

This message is used when the timing of the batch close needs to be controlled by the merchant rather than relying on the daily automatic batch close.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiBatchCloseRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiBatchCloseRequest | Payment Gateway Batch Close Request

try {
    $result = $apiInstance->batchClose($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->batchClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiBatchCloseRequest**](../Model/PGApiBatchCloseRequest.md)| Payment Gateway Batch Close Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiBatchCloseResponse**](../Model/PGApiBatchCloseResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **capture**
> \calderaPayQualpayPaymentGateway\Model\PGApiCaptureResponse capture($pg_id_orig, $body)

Capture authorized transaction

A capture message may be completed for any amount up to the originally authorized amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pg_id_orig = "pg_id_orig_example"; // string | pgIdOrig
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiCaptureRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiCaptureRequest | Payment Gateway Capture Request

try {
    $result = $apiInstance->capture($pg_id_orig, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->capture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pg_id_orig** | **string**| pgIdOrig |
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiCaptureRequest**](../Model/PGApiCaptureRequest.md)| Payment Gateway Capture Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiCaptureResponse**](../Model/PGApiCaptureResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **credit**
> \calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse credit($body)

Issue credit to cardholder

A non-referenced credit requires that the cardholder data be provided in the message. This message is only available during the first 30 days of account production activity - the refund message should generally be used to return money to the cardholder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest | Payment Gateway Credit Request

try {
    $result = $apiInstance->credit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->credit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest**](../Model/PGApiTransactionRequest.md)| Payment Gateway Credit Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse**](../Model/PGApiTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **force**
> \calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse force($body)

Force transaction approval

Can be used when an online authorization request received a 'declined' reason code and the merchant received an authorization from a voice or automated response (ARU) system. The required fields are the same as a sale or authorization request, except that the expiration date (exp_date) is not required, and the 6-character authorization code (auth_code) IS required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest | Payment Gateway Force Request

try {
    $result = $apiInstance->force($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->force: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest**](../Model/PGApiTransactionRequest.md)| Payment Gateway Force Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse**](../Model/PGApiTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refund**
> \calderaPayQualpayPaymentGateway\Model\PGApiRefundResponse refund($pg_id_orig, $body)

Refund previously captured transaction

Returns money to the cardholder from a previously captured transaction. Multiple refunds are allowed per captured transaction, provided that the sum of all refunds does not exceed the original captured transaction amount. Authorizations that have not been captured are not eligible for refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pg_id_orig = "pg_id_orig_example"; // string | pgIdOrig
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiRefundRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiRefundRequest | Payment Gateway Refund Request

try {
    $result = $apiInstance->refund($pg_id_orig, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pg_id_orig** | **string**| pgIdOrig |
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiRefundRequest**](../Model/PGApiRefundRequest.md)| Payment Gateway Refund Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiRefundResponse**](../Model/PGApiRefundResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sale**
> \calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse sale($body)

Sale (Auth + Capture)

This message will perform an authorization of the transaction, and if approved will immediately capture the transaction to be included in the next batch close. It is used in card present environments, and also card not present environments where no physical goods are being shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest | Payment Gateway Sale Request

try {
    $result = $apiInstance->sale($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->sale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionRequest**](../Model/PGApiTransactionRequest.md)| Payment Gateway Sale Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiTransactionResponse**](../Model/PGApiTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendReceipt**
> \calderaPayQualpayPaymentGateway\Model\PGApiEmailReceiptResponse sendReceipt($pg_id, $body)

Send transaction receipt email

Sent the transaction receipt to multiple email addresses. Receipts can be sent only for successful transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pg_id = "pg_id_example"; // string | pgId
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiEmailReceiptRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiEmailReceiptRequest | Payment Gateway Email Receipt Request

try {
    $result = $apiInstance->sendReceipt($pg_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->sendReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pg_id** | **string**| pgId |
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiEmailReceiptRequest**](../Model/PGApiEmailReceiptRequest.md)| Payment Gateway Email Receipt Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiEmailReceiptResponse**](../Model/PGApiEmailReceiptResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokenize**
> \calderaPayQualpayPaymentGateway\Model\PGApiTokenizeResponse tokenize($body)

Tokenize card

Once stored, a unique card identifier is returned for use in future transactions. Optionally, tokenization can be requested in an auth, verify, force, credit, or sale message by sending the tokenize field set to true.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiTokenizeRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiTokenizeRequest | Payment Gateway Tokenize Request

try {
    $result = $apiInstance->tokenize($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->tokenize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiTokenizeRequest**](../Model/PGApiTokenizeRequest.md)| Payment Gateway Tokenize Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiTokenizeResponse**](../Model/PGApiTokenizeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verify**
> \calderaPayQualpayPaymentGateway\Model\PGApiVerifyResponse verify($body)

Verify Card

A verify message will return success if the cardholder information was verified by the issuer. If AVS or CVV data is included in the message, then the AVS or CVV result code will be returned in the response message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiVerifyRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiVerifyRequest | Payment Gateway Card Verify Request

try {
    $result = $apiInstance->verify($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->verify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiVerifyRequest**](../Model/PGApiVerifyRequest.md)| Payment Gateway Card Verify Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiVerifyResponse**](../Model/PGApiVerifyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **void**
> \calderaPayQualpayPaymentGateway\Model\PGApiVoidResponse void($pg_id_orig, $body)

Void previously authorized transaction

Authorizations can be voided at any time. Captured transactions can be voided until the batch is closed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPaymentGateway\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pg_id_orig = "pg_id_orig_example"; // string | pgIdOrig
$body = new \calderaPayQualpayPaymentGateway\Model\PGApiVoidRequest(); // \calderaPayQualpayPaymentGateway\Model\PGApiVoidRequest | Payment Gateway Void Request

try {
    $result = $apiInstance->void($pg_id_orig, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->void: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pg_id_orig** | **string**| pgIdOrig |
 **body** | [**\calderaPayQualpayPaymentGateway\Model\PGApiVoidRequest**](../Model/PGApiVoidRequest.md)| Payment Gateway Void Request |

### Return type

[**\calderaPayQualpayPaymentGateway\Model\PGApiVoidResponse**](../Model/PGApiVoidResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

