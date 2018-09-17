# calderaPayQualpayPlatform\ReportingApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**browseAusRequests**](ReportingApi.md#browseAusRequests) | **GET** /reporting/aus/detail | Account Updater Detail Report
[**browseAusSummary**](ReportingApi.md#browseAusSummary) | **GET** /reporting/aus/summary | Account Updater Summary Report
[**browseBatches**](ReportingApi.md#browseBatches) | **GET** /reporting/batches | Batch Report
[**browseDeposits**](ReportingApi.md#browseDeposits) | **GET** /reporting/deposits | Deposit Report
[**browseDisputes**](ReportingApi.md#browseDisputes) | **GET** /reporting/disputes | Disputes Report
[**browseTrans**](ReportingApi.md#browseTrans) | **GET** /reporting/transactions | Transaction Report
[**getTransactionByPgId**](ReportingApi.md#getTransactionByPgId) | **GET** /reporting/transactions/bypgid/{pg_id} | Get transaction by PG ID


# **browseAusRequests**
> \calderaPayQualpayPlatform\Model\AccountUpdaterResponse browseAusRequests($count, $order_on, $order_by, $page, $filter)

Account Updater Detail Report

Browses a paginated list of Account updater requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseAusRequests($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseAusRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\AccountUpdaterResponse**](../Model/AccountUpdaterResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseAusSummary**
> \calderaPayQualpayPlatform\Model\AccountUpdaterSummaryResponse browseAusSummary($count, $order_on, $order_by, $page, $filter)

Account Updater Summary Report

Browses a paginated list of account updater summary report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseAusSummary($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseAusSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\AccountUpdaterSummaryResponse**](../Model/AccountUpdaterSummaryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseBatches**
> \calderaPayQualpayPlatform\Model\BatchResponse browseBatches($count, $order_on, $order_by, $page, $filter)

Batch Report

Browses a paginated list of merchant batches. These are whole batches which have been settled from the merchant's POS device, software, or gateway.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseBatches($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\BatchResponse**](../Model/BatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseDeposits**
> \calderaPayQualpayPlatform\Model\DepositResponse browseDeposits($count, $order_on, $order_by, $page, $filter)

Deposit Report

Browses a paginated list of bank deposits and withdrawls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseDeposits($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\DepositResponse**](../Model/DepositResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseDisputes**
> \calderaPayQualpayPlatform\Model\DisputeResponse browseDisputes($count, $order_on, $order_by, $page, $filter)

Disputes Report

Browses a paginated list of disputes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseDisputes($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\DisputeResponse**](../Model/DisputeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseTrans**
> \calderaPayQualpayPlatform\Model\TransactionResponse browseTrans($count, $order_on, $order_by, $page, $filter)

Transaction Report

Browses a paginated list of transactions. Some additional text about deposits and stuff.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "order_on_example"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "order_by_example"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseTrans($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->browseTrans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionByPgId**
> \calderaPayQualpayPlatform\Model\PGTransactionResponse getTransactionByPgId($pg_id)

Get transaction by PG ID

Gets a payment gateway transaction by Payment Gateway ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pg_id = "pg_id_example"; // string | PG ID

try {
    $result = $apiInstance->getTransactionByPgId($pg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getTransactionByPgId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pg_id** | **string**| PG ID |

### Return type

[**\calderaPayQualpayPlatform\Model\PGTransactionResponse**](../Model/PGTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

