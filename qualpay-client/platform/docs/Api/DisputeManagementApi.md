# calderaPayQualpayPlatform\DisputeManagementApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDisputesResponse**](DisputeManagementApi.md#addDisputesResponse) | **POST** /vendor/disputes/{merchantId}/{recId} | Submit Dispute Response
[**createDispute**](DisputeManagementApi.md#createDispute) | **GET** /vendor/createDispute/{merchantId} | Create Dispute Data
[**getCreditedTranDetail**](DisputeManagementApi.md#getCreditedTranDetail) | **GET** /vendor/tran/{merchantId}/{cardNumber} | Credited Transaction Detail
[**getDisputes**](DisputeManagementApi.md#getDisputes) | **GET** /vendor/disputes | Get Disputes
[**getNotDisputedTran**](DisputeManagementApi.md#getNotDisputedTran) | **GET** /vendor/notdisputedtrans/{merchantId}/{cardNumber} | Non Disputed Transaction
[**getTranbyPurchaseID**](DisputeManagementApi.md#getTranbyPurchaseID) | **GET** /vendor/pidtrans/browse/{merchantId}/{cardNumber}/{purchaseID} | Credited Transaction with Purchase ID
[**resetDispute**](DisputeManagementApi.md#resetDispute) | **GET** /vendor/resetDispute/{recId} | Reset Dispute Data


# **addDisputesResponse**
> \calderaPayQualpayPlatform\Model\QPApiResponse addDisputesResponse($merchant_id, $rec_id, $file, $response)

Submit Dispute Response

Submit dispute responses with supporting documentation. Response options are dynamic and are based on the reason code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 789; // int | Merchant ID
$rec_id = 789; // int | Control Number
$file = "/path/to/file.txt"; // \SplFileObject | The file to upload.
$response = "response_example"; // string | Dispute response

try {
    $result = $apiInstance->addDisputesResponse($merchant_id, $rec_id, $file, $response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->addDisputesResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| Merchant ID |
 **rec_id** | **int**| Control Number |
 **file** | **\SplFileObject**| The file to upload. |
 **response** | **string**| Dispute response |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDispute**
> \calderaPayQualpayPlatform\Model\QPApiListResponse createDispute($merchant_id, $reason_code)

Create Dispute Data

For testing purposes, create a dispute for a specific reason or for all the reason codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 789; // int | Merchant ID
$reason_code = "null"; // string | Reason Code

try {
    $result = $apiInstance->createDispute($merchant_id, $reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->createDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| Merchant ID |
 **reason_code** | **string**| Reason Code | [optional] [default to null]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiListResponse**](../Model/QPApiListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditedTranDetail**
> \calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse getCreditedTranDetail($merchant_id, $card_number)

Credited Transaction Detail

Request the credited transactions from the past 90 days associated with a merchant id and card no

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 789; // int | Merchant ID
$card_number = "card_number_example"; // string | Card No

try {
    $result = $apiInstance->getCreditedTranDetail($merchant_id, $card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->getCreditedTranDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| Merchant ID |
 **card_number** | **string**| Card No |

### Return type

[**\calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse**](../Model/CorrespondingTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisputes**
> \calderaPayQualpayPlatform\Model\UpdatedDisputeResponse getDisputes()

Get Disputes

Request all disputes and their detail associated with a vendor or a node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDisputes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->getDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\calderaPayQualpayPlatform\Model\UpdatedDisputeResponse**](../Model/UpdatedDisputeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotDisputedTran**
> \calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse getNotDisputedTran($merchant_id, $card_number)

Non Disputed Transaction

Request the non-disputed transactions for the past 90 days associated with a merchant id and card no

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 789; // int | Merchant ID
$card_number = "card_number_example"; // string | Card No

try {
    $result = $apiInstance->getNotDisputedTran($merchant_id, $card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->getNotDisputedTran: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| Merchant ID |
 **card_number** | **string**| Card No |

### Return type

[**\calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse**](../Model/CorrespondingTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranbyPurchaseID**
> \calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse getTranbyPurchaseID($merchant_id, $card_number, $purchase_id)

Credited Transaction with Purchase ID

Request credited transactions using a purchase id from the past 90 days associated with a merchant id and card no

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 789; // int | Merchant ID
$card_number = "card_number_example"; // string | Card No
$purchase_id = "purchase_id_example"; // string | Purchase Id

try {
    $result = $apiInstance->getTranbyPurchaseID($merchant_id, $card_number, $purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->getTranbyPurchaseID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **int**| Merchant ID |
 **card_number** | **string**| Card No |
 **purchase_id** | **string**| Purchase Id |

### Return type

[**\calderaPayQualpayPlatform\Model\CorrespondingTransactionResponse**](../Model/CorrespondingTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetDispute**
> \calderaPayQualpayPlatform\Model\QPApiResponse resetDispute($rec_id)

Reset Dispute Data

For testing purposes, request to reset a test dispute case to New status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\DisputeManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rec_id = 789; // int | Control Number

try {
    $result = $apiInstance->resetDispute($rec_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeManagementApi->resetDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rec_id** | **int**| Control Number |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

