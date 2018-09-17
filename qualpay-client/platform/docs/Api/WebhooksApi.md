# calderaPayQualpayPlatform\WebhooksApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEvent**](WebhooksApi.md#addEvent) | **POST** /webhook/{webhook_id}/event/{event} | Add an event
[**addWebhook**](WebhooksApi.md#addWebhook) | **POST** /webhook | Add webhook
[**browseWebhook**](WebhooksApi.md#browseWebhook) | **GET** /webhook | Browse webhooks
[**disableWebhook**](WebhooksApi.md#disableWebhook) | **PUT** /webhook/{webhook_id}/disable | Disable a Webhook
[**editWebhook**](WebhooksApi.md#editWebhook) | **PUT** /webhook/{webhook_id} | Update webhook
[**enableWebhook**](WebhooksApi.md#enableWebhook) | **PUT** /webhook/{webhook_id}/enable | Enable a Webhook
[**getEvents**](WebhooksApi.md#getEvents) | **GET** /webhook/{webhook_id}/event | Get events
[**getWebhook**](WebhooksApi.md#getWebhook) | **GET** /webhook/{webhook_id} | Get webhook
[**removeEvent**](WebhooksApi.md#removeEvent) | **DELETE** /webhook/{webhook_id}/event/{event} | Delete event


# **addEvent**
> \calderaPayQualpayPlatform\Model\QPApiResponse addEvent($webhook_id, $event, $body)

Add an event

Add an event to a webhook. Refer to the Webhook documentation for a list of available events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID
$event = "event_example"; // string | Event
$body = new \calderaPayQualpayPlatform\Model\QPApiData(); // \calderaPayQualpayPlatform\Model\QPApiData | Webhook

try {
    $result = $apiInstance->addEvent($webhook_id, $event, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->addEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |
 **event** | **string**| Event |
 **body** | [**\calderaPayQualpayPlatform\Model\QPApiData**](../Model/QPApiData.md)| Webhook | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWebhook**
> \calderaPayQualpayPlatform\Model\WebhookResponse addWebhook($body)

Add webhook

Configure a new webhook. Save the webhook_id in the response for use in future requests. Save the generated secret, the secret can be used to validate the webhook. Refer to webhook documentation for secret usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\Webhook(); // \calderaPayQualpayPlatform\Model\Webhook | Webhook

try {
    $result = $apiInstance->addWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->addWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\Webhook**](../Model/Webhook.md)| Webhook | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseWebhook**
> \calderaPayQualpayPlatform\Model\WebhooksListResponse browseWebhook($count, $order_on, $order_by, $page, $filter)

Browse webhooks

Gets an array of webhook objects. Optional query parameters determines, size and sort order of returned array. Filters can be used to filter results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "webhook_id"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "asc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseWebhook($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->browseWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to webhook_id]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to asc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\WebhooksListResponse**](../Model/WebhooksListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableWebhook**
> \calderaPayQualpayPlatform\Model\QPApiResponse disableWebhook($webhook_id, $body)

Disable a Webhook

Disable a webhook. Events will not be triggered on a disabled webhook. When disabled, all active requests for this webhook will be held. If the webhook is enabled before a request expires, Qualpay will attempt to post the request again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID
$body = new \calderaPayQualpayPlatform\Model\QPApiData(); // \calderaPayQualpayPlatform\Model\QPApiData | Webhook

try {
    $result = $apiInstance->disableWebhook($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->disableWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |
 **body** | [**\calderaPayQualpayPlatform\Model\QPApiData**](../Model/QPApiData.md)| Webhook | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editWebhook**
> \calderaPayQualpayPlatform\Model\QPApiResponse editWebhook($webhook_id, $body)

Update webhook

Manage a webhook. Once created, the webhook node cannot be modified. Only the fields to be updated can be sent in the request.  When events array is included in the request, all events will be replaced with the events in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID
$body = new \calderaPayQualpayPlatform\Model\Webhook(); // \calderaPayQualpayPlatform\Model\Webhook | Webhook

try {
    $result = $apiInstance->editWebhook($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->editWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |
 **body** | [**\calderaPayQualpayPlatform\Model\Webhook**](../Model/Webhook.md)| Webhook | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableWebhook**
> \calderaPayQualpayPlatform\Model\QPApiResponse enableWebhook($webhook_id, $body)

Enable a Webhook

Enable a webhook. Events are triggered and requests are posted only for active webhooks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID
$body = new \calderaPayQualpayPlatform\Model\QPApiData(); // \calderaPayQualpayPlatform\Model\QPApiData | Webhook

try {
    $result = $apiInstance->enableWebhook($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->enableWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |
 **body** | [**\calderaPayQualpayPlatform\Model\QPApiData**](../Model/QPApiData.md)| Webhook | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \calderaPayQualpayPlatform\Model\WebhookEventResponse getEvents($webhook_id)

Get events

Get all events for a webhook. Refer to the Webhook documentation for a list of available events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID

try {
    $result = $apiInstance->getEvents($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |

### Return type

[**\calderaPayQualpayPlatform\Model\WebhookEventResponse**](../Model/WebhookEventResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \calderaPayQualpayPlatform\Model\WebhookResponse getWebhook($webhook_id)

Get webhook

Gets a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID

try {
    $result = $apiInstance->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |

### Return type

[**\calderaPayQualpayPlatform\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeEvent**
> \calderaPayQualpayPlatform\Model\QPApiResponse removeEvent($webhook_id, $event)

Delete event

Delete an event from a webhook. Refer to the Webhook documentation for a list of available events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 789; // int | Webhook ID
$event = "event_example"; // string | Event

try {
    $result = $apiInstance->removeEvent($webhook_id, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->removeEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **int**| Webhook ID |
 **event** | **string**| Event |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

