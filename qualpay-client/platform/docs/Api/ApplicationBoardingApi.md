# calderaPayQualpayPlatform\ApplicationBoardingApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApp**](ApplicationBoardingApi.md#addApp) | **POST** /application/add | Create Application
[**browseApps**](ApplicationBoardingApi.md#browseApps) | **GET** /application/browse | Browse applications
[**browseSalesReps**](ApplicationBoardingApi.md#browseSalesReps) | **GET** /application/sales/browse | Browse Sales Reps
[**emailApp**](ApplicationBoardingApi.md#emailApp) | **POST** /application/{appId}/email | Email Application
[**getApp**](ApplicationBoardingApi.md#getApp) | **GET** /application/{appId}/get | Get Application
[**saveData**](ApplicationBoardingApi.md#saveData) | **POST** /application/{appId}/data | Save Data
[**uploadFile**](ApplicationBoardingApi.md#uploadFile) | **POST** /application/{appId}/upload | Upload Document
[**validateApp**](ApplicationBoardingApi.md#validateApp) | **GET** /application/{appId}/validate | Validate Application


# **addApp**
> \calderaPayQualpayPlatform\Model\GetAppResult addApp($body)

Create Application

Creates a new merchant application, returning the new application's ID as well as the pricing options available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\AddAppRequest(); // \calderaPayQualpayPlatform\Model\AddAppRequest | Application Request

try {
    $result = $apiInstance->addApp($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->addApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\AddAppRequest**](../Model/AddAppRequest.md)| Application Request | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\GetAppResult**](../Model/GetAppResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseApps**
> \calderaPayQualpayPlatform\Model\BrowseAppsResult browseApps($count, $order_on, $order_by, $page, $filter)

Browse applications

Retrieves an array of Applications. Optional query parameters determine the page size and sorting of the data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
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
    $result = $apiInstance->browseApps($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->browseApps: ', $e->getMessage(), PHP_EOL;
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

[**\calderaPayQualpayPlatform\Model\BrowseAppsResult**](../Model/BrowseAppsResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseSalesReps**
> \calderaPayQualpayPlatform\Model\BrowseSalesRepsResult browseSalesReps($count, $order_on, $order_by, $page, $filter)

Browse Sales Reps

Retrieves an array of Users who can be used during the creation of an application to identify the sales representitive. Optional query parameters determine the page size and sorting of the data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
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
    $result = $apiInstance->browseSalesReps($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->browseSalesReps: ', $e->getMessage(), PHP_EOL;
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

[**\calderaPayQualpayPlatform\Model\BrowseSalesRepsResult**](../Model/BrowseSalesRepsResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailApp**
> \calderaPayQualpayPlatform\Model\QPApiResponse emailApp($app_id)

Email Application

Emails an application to the business contact for click-through agreement. The business_contact_email must be pre-populated before calling this service.  If present, the business_contact_name will be used to adress the recipient in the email.  An application otherwise does not have to pass validation in order to be emailed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | Application ID

try {
    $result = $apiInstance->emailApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->emailApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application ID |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApp**
> \calderaPayQualpayPlatform\Model\GetAppResult getApp($app_id)

Get Application

Retrieve an application's details and available pricing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | Application ID

try {
    $result = $apiInstance->getApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->getApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application ID |

### Return type

[**\calderaPayQualpayPlatform\Model\GetAppResult**](../Model/GetAppResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveData**
> \calderaPayQualpayPlatform\Model\QPApiResponse saveData($app_id, $body)

Save Data

Saves one or more data fields to a new merchant application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | Application ID
$body = new \calderaPayQualpayPlatform\Model\SaveDataRequest(); // \calderaPayQualpayPlatform\Model\SaveDataRequest | Application Request

try {
    $result = $apiInstance->saveData($app_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->saveData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application ID |
 **body** | [**\calderaPayQualpayPlatform\Model\SaveDataRequest**](../Model/SaveDataRequest.md)| Application Request | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \calderaPayQualpayPlatform\Model\QPApiResponse uploadFile($app_id, $file, $bucket, $label)

Upload Document

Uploads a document relevant to this application to the provided bucket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | Application ID
$file = "/path/to/file.txt"; // \SplFileObject | The file to upload.
$bucket = "bucket_example"; // string | The bucket to upload the file into.
$label = "label_example"; // string | An optional label to apply to the file.

try {
    $result = $apiInstance->uploadFile($app_id, $file, $bucket, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application ID |
 **file** | **\SplFileObject**| The file to upload. |
 **bucket** | **string**| The bucket to upload the file into. |
 **label** | **string**| An optional label to apply to the file. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateApp**
> \calderaPayQualpayPlatform\Model\QPApiResponse validateApp($app_id)

Validate Application

All data fields in an application are validated, including dependencies they may have between eachother. An application can not be submitted until it passes validation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\ApplicationBoardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | Application ID

try {
    $result = $apiInstance->validateApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationBoardingApi->validateApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application ID |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

