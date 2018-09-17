# calderaPayQualpayPlatform\RecurringBillingApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPlan**](RecurringBillingApi.md#addPlan) | **POST** /plan | Add a Recurring Plan
[**addSubscription**](RecurringBillingApi.md#addSubscription) | **POST** /subscription | Add a subscription
[**archivePlan**](RecurringBillingApi.md#archivePlan) | **POST** /plan/{plan_code}/archive | Archive a Recurring Plan
[**browsePlans**](RecurringBillingApi.md#browsePlans) | **GET** /plan | Get all Recurring Plans
[**browseSubscriptions**](RecurringBillingApi.md#browseSubscriptions) | **GET** /subscription | Get all subscriptions
[**cancelSubscription**](RecurringBillingApi.md#cancelSubscription) | **POST** /subscription/{subscription_id}/cancel | Cancel a subscription
[**deletePlan**](RecurringBillingApi.md#deletePlan) | **DELETE** /plan/{plan_id}/delete | Delete a Recurring Plan
[**getAllSubscriptionTransactions**](RecurringBillingApi.md#getAllSubscriptionTransactions) | **GET** /subscription/transactions | Get all subscription transactions
[**getPlan**](RecurringBillingApi.md#getPlan) | **GET** /plan/{plan_code} | Find Recurring Plan by Plan Code
[**getSubscription**](RecurringBillingApi.md#getSubscription) | **GET** /subscription/{subscription_id} | Get subscription by subscription ID
[**getSubscriptionTransactions**](RecurringBillingApi.md#getSubscriptionTransactions) | **GET** /subscription/transactions/{subscription_id} | Get transactions by subscription ID
[**pauseSubscription**](RecurringBillingApi.md#pauseSubscription) | **POST** /subscription/{subscription_id}/pause | Pause a subscription
[**resumeSubscription**](RecurringBillingApi.md#resumeSubscription) | **POST** /subscription/{subscription_id}/resume | Resume a subscription
[**updatePlan**](RecurringBillingApi.md#updatePlan) | **PUT** /plan/{plan_code} | Update a Recurring Plan
[**updateSubscription**](RecurringBillingApi.md#updateSubscription) | **PUT** /subscription/{subscription_id} | Update a subscription


# **addPlan**
> \calderaPayQualpayPlatform\Model\RecurringPlanResponse addPlan($body)

Add a Recurring Plan

Adds a new Recurring Plan. Save the generated unique plan_id, the plan_id is required to delete a plan. Read only fields in the request body will be ignored. <br><br><strong> Additional required body fields: </strong><br>plan_frequency<br>plan_code<br>plan_name<br>amt_tran<br>plan_duration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\RecurringPlan(); // \calderaPayQualpayPlatform\Model\RecurringPlan | Recurring Plan Object that needs to be added

try {
    $result = $apiInstance->addPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->addPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\RecurringPlan**](../Model/RecurringPlan.md)| Recurring Plan Object that needs to be added |

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanResponse**](../Model/RecurringPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse addSubscription($body)

Add a subscription

Create a new subscription on the start date. Returns the subscription_id, save this id to interact with this subscription using the API. Once the subscription is added successfully, If the plan has one time set up fee,  a payment gateway request is also made to bill the customer the one time fee. Check the response in the return model to check status of the  Gateway request. Note that the subscription remains active even if the gateway request fails. A one off subscription - i.e., a subscription without a plan can be created by not sending the plan_code and sending fields applicable to one-off plans. <br><br><strong> Additional required body fields: </strong><br>customer_id or customer<br>date_start

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\SubscriptionRequest(); // \calderaPayQualpayPlatform\Model\SubscriptionRequest | Subscription Request

try {
    $result = $apiInstance->addSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->addSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Subscription Request | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **archivePlan**
> \calderaPayQualpayPlatform\Model\RecurringPlanResponse archivePlan($plan_code, $body)

Archive a Recurring Plan

Archive a Plan. Only active plans can be archived. Plan Name should be sent in the request body.  Note that if there are subscribers to this plan, then all subscriptions related to this plan will continue to be active. No updates can be made to an archived plan. New subscribers cannot be added to a archived plan. You can always pull up information on an archived plan from the system. <br><br><strong> Additional required body fields: </strong><br>plan_name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_code = "plan_code_example"; // string | Plan Code that will be archived
$body = new \calderaPayQualpayPlatform\Model\RecurringPlan(); // \calderaPayQualpayPlatform\Model\RecurringPlan | Plan Name

try {
    $result = $apiInstance->archivePlan($plan_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->archivePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_code** | **string**| Plan Code that will be archived |
 **body** | [**\calderaPayQualpayPlatform\Model\RecurringPlan**](../Model/RecurringPlan.md)| Plan Name | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanResponse**](../Model/RecurringPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browsePlans**
> \calderaPayQualpayPlatform\Model\RecurringPlanListResponse browsePlans($count, $order_on, $order_by, $page, $filter, $vendor_id)

Get all Recurring Plans

Gets an array of Plan objects. Optional query parameters determines, size and sort order of returned array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "plan_code"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "asc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->browsePlans($count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->browsePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to plan_code]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to asc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanListResponse**](../Model/RecurringPlanListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseSubscriptions**
> \calderaPayQualpayPlatform\Model\SubscriptionListResponse browseSubscriptions($count, $order_on, $order_by, $page, $filter, $vendor_id)

Get all subscriptions

Gets an array of Subscription objects. Optional query parameters determines, size and sort order of returned array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "date_next"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->browseSubscriptions($count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->browseSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to date_next]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionListResponse**](../Model/SubscriptionListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse cancelSubscription($subscription_id, $body)

Cancel a subscription

Cancel an existing subscription. Only Active or suspended or paused subscriptions can be cancelled. Customer ID is required in the Request body.<br><br><strong> Additional required body fields: </strong><br>customer_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | Subscription ID
$body = new \calderaPayQualpayPlatform\Model\SubscriptionRequest(); // \calderaPayQualpayPlatform\Model\SubscriptionRequest | Customer ID

try {
    $result = $apiInstance->cancelSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription ID |
 **body** | [**\calderaPayQualpayPlatform\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Customer ID |

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlan**
> \calderaPayQualpayPlatform\Model\RecurringPlanResponse deletePlan($plan_id, $vendor_id)

Delete a Recurring Plan

Deletes a Plan. Any plan, active or not can be deleted. If there are subscribers to this plan, then all subscriptions related to this plan will be cancelled. A deleted plan cannot be updated, neither can new subscrbers  be added to a deleted plan. Even if a plan is deleted, you can query the system to get information about the deleted plan. <br><br><strong> Additional required body fields: </strong><br>plan_name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_id = 789; // int | Plan ID that will flagged as deleted
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->deletePlan($plan_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Plan ID that will flagged as deleted |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanResponse**](../Model/RecurringPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptionTransactions**
> \calderaPayQualpayPlatform\Model\TransactionListResponse getAllSubscriptionTransactions($count, $order_on, $order_by, $page, $filter, $vendor_id)

Get all subscription transactions

Gets all subscription transactions. Optional Parameters will help filter and restrict the result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "tran_time"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getAllSubscriptionTransactions($count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->getAllSubscriptionTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to tran_time]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlan**
> \calderaPayQualpayPlatform\Model\RecurringPlanListResponse getPlan($plan_code, $count, $order_on, $order_by, $page, $filter, $vendor_id)

Find Recurring Plan by Plan Code

Returns an array of Recurring plans for the plan code. Search Result includes Active, Archived and Deleted plans. Optional Query parameters determines, size and sort order of returned array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_code = "plan_code_example"; // string | Plan Code
$count = 10; // int | The number of records in the result.
$order_on = "plan_code"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "asc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getPlan($plan_code, $count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_code** | **string**| Plan Code |
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to plan_code]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to asc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanListResponse**](../Model/RecurringPlanListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse getSubscription($subscription_id, $vendor_id)

Get subscription by subscription ID

Gets a Subscription object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | Subscription ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getSubscription($subscription_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionTransactions**
> \calderaPayQualpayPlatform\Model\TransactionListResponse getSubscriptionTransactions($subscription_id, $count, $order_on, $order_by, $page, $filter, $vendor_id)

Get transactions by subscription ID

Gets all transactions for a subscription. Optional Parameters will help filter and restrict the result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | Subscription ID
$count = 10; // int | The number of records in the result.
$order_on = "tran_time"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getSubscriptionTransactions($subscription_id, $count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->getSubscriptionTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription ID |
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to tran_time]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pauseSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse pauseSubscription($subscription_id, $body)

Pause a subscription

Pause an active subscription. Only Active subscriptions can be paused Customer ID is required in the Request body.<br><br><strong> Additional required body fields: </strong><br>customer_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\SubscriptionRequest(); // \calderaPayQualpayPlatform\Model\SubscriptionRequest | Customer ID

try {
    $result = $apiInstance->pauseSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->pauseSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Customer ID |

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumeSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse resumeSubscription($subscription_id, $body)

Resume a subscription

Resume a suspended or paused subscription. Customer ID is required in the Request body.<br><br><strong> Additional required body fields: </strong><br>customer_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\SubscriptionRequest(); // \calderaPayQualpayPlatform\Model\SubscriptionRequest | Customer ID

try {
    $result = $apiInstance->resumeSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->resumeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Customer ID |

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlan**
> \calderaPayQualpayPlatform\Model\RecurringPlanResponse updatePlan($plan_code, $body)

Update a Recurring Plan

Update an active Recurring Plan. Only the fields sent in the request body will be updated. Only an active plan can be edited. If there are subscribers to this plan, then this plan will be archived and a copy of the plan with a new plan_id will be generated. All updates will be made on the new plan. Save the plan_id, the plan_id is required to delete a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_code = "plan_code_example"; // string | Plan Code of the plan that will be updated
$body = new \calderaPayQualpayPlatform\Model\RecurringPlan(); // \calderaPayQualpayPlatform\Model\RecurringPlan | Recurring Plan Object. Send only the fields that require an update. Read only fields will be ignored

try {
    $result = $apiInstance->updatePlan($plan_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_code** | **string**| Plan Code of the plan that will be updated |
 **body** | [**\calderaPayQualpayPlatform\Model\RecurringPlan**](../Model/RecurringPlan.md)| Recurring Plan Object. Send only the fields that require an update. Read only fields will be ignored |

### Return type

[**\calderaPayQualpayPlatform\Model\RecurringPlanResponse**](../Model/RecurringPlanResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \calderaPayQualpayPlatform\Model\SubscriptionResponse updateSubscription($subscription_id, $body)

Update a subscription

Updates the start date of an existing subscription. Only subscriptions that has not yet started can be updated. Only start date can be updated. <br><br><strong> Additional required body fields: </strong><br>date_start

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\RecurringBillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\SubscriptionRequest(); // \calderaPayQualpayPlatform\Model\SubscriptionRequest | Subscription Request

try {
    $result = $apiInstance->updateSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringBillingApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Subscription Request |

### Return type

[**\calderaPayQualpayPlatform\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

