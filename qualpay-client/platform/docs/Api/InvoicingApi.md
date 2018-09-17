# calderaPayQualpayPlatform\InvoicingApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoicePayment**](InvoicingApi.md#addInvoicePayment) | **POST** /invoice/{invoice_id}/payments | Add payment to an invoice
[**browseBouncedInvoices**](InvoicingApi.md#browseBouncedInvoices) | **GET** /invoice/bounced | Get undelivered invoices
[**browseInvoicePayments**](InvoicingApi.md#browseInvoicePayments) | **GET** /invoice/payments | Get invoice payments
[**browseInvoicePaymentsById**](InvoicingApi.md#browseInvoicePaymentsById) | **GET** /invoice/{invoice_id}/payments | Get invoice payments by id
[**browseInvoices**](InvoicingApi.md#browseInvoices) | **GET** /invoice | Get all invoices
[**cancelInvoice**](InvoicingApi.md#cancelInvoice) | **DELETE** /invoice/{invoice_id}/cancel | Cancel an invoice
[**copyInvoice**](InvoicingApi.md#copyInvoice) | **POST** /invoice/{invoice_id}/copy | Copy an invoice
[**createInvoice**](InvoicingApi.md#createInvoice) | **POST** /invoice | Create an invoice
[**getInvoice**](InvoicingApi.md#getInvoice) | **GET** /invoice/{invoice_id}/detail | Get by Invoice ID
[**removeInvoicePayment**](InvoicingApi.md#removeInvoicePayment) | **DELETE** /invoice/{invoice_id}/payments/{payment_id} | Remove an invoice payment
[**resendInvoice**](InvoicingApi.md#resendInvoice) | **POST** /invoice/{invoice_id}/resend | Resend an invoice
[**sendInvoice**](InvoicingApi.md#sendInvoice) | **POST** /invoice/{invoice_id}/send | Send an invoice
[**updateDraftInvoice**](InvoicingApi.md#updateDraftInvoice) | **PUT** /invoice/{invoice_id}/draft | Update a draft invoice
[**updateInvoicePayment**](InvoicingApi.md#updateInvoicePayment) | **PUT** /invoice/{invoice_id}/payments/{payment_id} | Update an invoice payment
[**updateOutstandingInvoice**](InvoicingApi.md#updateOutstandingInvoice) | **PUT** /invoice/{invoice_id}/outstanding | Update an outstanding invoice


# **addInvoicePayment**
> \calderaPayQualpayPlatform\Model\InvoicePaymentResponse addInvoicePayment($invoice_id, $body)

Add payment to an invoice

Add payment manually to an invoice. A payment can be added to a saved or an outstanding invoice. Card payments cannot be added manually. Payments can be added only to SAVED or OUTSTANDING invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\InvoicePaymentRequest(); // \calderaPayQualpayPlatform\Model\InvoicePaymentRequest | Invoice Payment

try {
    $result = $apiInstance->addInvoicePayment($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->addInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\InvoicePaymentRequest**](../Model/InvoicePaymentRequest.md)| Invoice Payment |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoicePaymentResponse**](../Model/InvoicePaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseBouncedInvoices**
> \calderaPayQualpayPlatform\Model\InvoiceBouncedResponse browseBouncedInvoices($count, $order_on, $order_by, $page, $filter)

Get undelivered invoices

Browse all undelivered invoices. Optional query parameters determines, size and sort order of returned array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "db_timestamp"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseBouncedInvoices($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->browseBouncedInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to db_timestamp]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceBouncedResponse**](../Model/InvoiceBouncedResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseInvoicePayments**
> \calderaPayQualpayPlatform\Model\InvoicePaymentListResponse browseInvoicePayments($count, $order_on, $order_by, $page, $filter)

Get invoice payments

Browse all invoice payments. Optional query parameters determines, size and sort order of returned array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "date_payment"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseInvoicePayments($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->browseInvoicePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to date_payment]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoicePaymentListResponse**](../Model/InvoicePaymentListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseInvoicePaymentsById**
> \calderaPayQualpayPlatform\Model\InvoicePaymentListResponse browseInvoicePaymentsById($invoice_id, $count, $order_on, $order_by, $page, $filter)

Get invoice payments by id

Browse all invoice payments made to an invoice. Optional query parameters determines, size and sort order of returned array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$count = 10; // int | The number of records in the result.
$order_on = "date_payment"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseInvoicePaymentsById($invoice_id, $count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->browseInvoicePaymentsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to date_payment]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoicePaymentListResponse**](../Model/InvoicePaymentListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseInvoices**
> \calderaPayQualpayPlatform\Model\InvoiceListResponse browseInvoices($count, $order_on, $order_by, $page, $filter)

Get all invoices

Gets an array of invoice objects. Optional query parameters determines, size and sort order of returned array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "invoice_number"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.

try {
    $result = $apiInstance->browseInvoices($count, $order_on, $order_by, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->browseInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to invoice_number]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceListResponse**](../Model/InvoiceListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse cancelInvoice($invoice_id)

Cancel an invoice

Cancel an invoice. Canceling an invoice sets the status of the Invoice to CANCELED. A canceled invoice cannot be edited.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 

try {
    $result = $apiInstance->cancelInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse copyInvoice($invoice_id, $body)

Copy an invoice

Make a copy of an invoice. A replica of the invoice will be created, the invoice date will be set to today's date and due date will be adjusted based on the invoice date and the payment terms. Optional invoice_number can be sent in the POST body to make a copy of the invoice with a different invoice number. Invoice Payments from original invoice will not be copied over.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\CopyInvoiceRequest(); // \calderaPayQualpayPlatform\Model\CopyInvoiceRequest | Invoice

try {
    $result = $apiInstance->copyInvoice($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->copyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\CopyInvoiceRequest**](../Model/CopyInvoiceRequest.md)| Invoice | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse createInvoice($body)

Create an invoice

Creates a draft invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\CreateInvoiceRequest(); // \calderaPayQualpayPlatform\Model\CreateInvoiceRequest | Invoice

try {
    $result = $apiInstance->createInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\CreateInvoiceRequest**](../Model/CreateInvoiceRequest.md)| Invoice |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse getInvoice($invoice_id)

Get by Invoice ID

Gets an invoice by invoice id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | Invoice ID

try {
    $result = $apiInstance->getInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| Invoice ID |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeInvoicePayment**
> \calderaPayQualpayPlatform\Model\QPApiResponse removeInvoicePayment($invoice_id, $payment_id)

Remove an invoice payment

Remove an invoice payment. A payment can be removed on a saved or an outstanding invoice. CARD type payments cannot be removed. Payments can be deleted only from SAVED or OUTSTANDING invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$payment_id = 789; // int | 

try {
    $result = $apiInstance->removeInvoicePayment($invoice_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->removeInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **payment_id** | **int**|  |

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendInvoice**
> \calderaPayQualpayPlatform\Model\QPApiResponse resendInvoice($invoice_id, $body)

Resend an invoice

Resend an invoice to the customer. An outstanding or paid invoice can be resent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\ResendInvoiceRequest(); // \calderaPayQualpayPlatform\Model\ResendInvoiceRequest | Email Addresses

try {
    $result = $apiInstance->resendInvoice($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->resendInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\ResendInvoiceRequest**](../Model/ResendInvoiceRequest.md)| Email Addresses | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse sendInvoice($invoice_id, $body)

Send an invoice

Send an invoice to the customer. Sending an invoice sets the status of the invoice to OUTSTANDING. Once sent, only the from_contact and business_contact of the invoice can be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\SendInvoiceRequest(); // \calderaPayQualpayPlatform\Model\SendInvoiceRequest | Email Addresses

try {
    $result = $apiInstance->sendInvoice($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->sendInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\SendInvoiceRequest**](../Model/SendInvoiceRequest.md)| Email Addresses | [optional]

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDraftInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse updateDraftInvoice($invoice_id, $body)

Update a draft invoice

Update a draft invoice. Only the fields that have to be updated can be sent in the request body. If updating JSON object fields, the complete JSON should be sent in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\UpdateDraftRequest(); // \calderaPayQualpayPlatform\Model\UpdateDraftRequest | Invoice

try {
    $result = $apiInstance->updateDraftInvoice($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->updateDraftInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\UpdateDraftRequest**](../Model/UpdateDraftRequest.md)| Invoice |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoicePayment**
> \calderaPayQualpayPlatform\Model\InvoicePaymentResponse updateInvoicePayment($invoice_id, $payment_id, $body)

Update an invoice payment

Update an invoice payment. A payment can be updated on a saved or an outstanding invoice. CARD type payments cannot be updated. Payments can be updated only on SAVED or OUTSTANDING invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$payment_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\InvoicePaymentRequest(); // \calderaPayQualpayPlatform\Model\InvoicePaymentRequest | Invoice Payment

try {
    $result = $apiInstance->updateInvoicePayment($invoice_id, $payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->updateInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **payment_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\InvoicePaymentRequest**](../Model/InvoicePaymentRequest.md)| Invoice Payment |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoicePaymentResponse**](../Model/InvoicePaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOutstandingInvoice**
> \calderaPayQualpayPlatform\Model\InvoiceResponse updateOutstandingInvoice($invoice_id, $body)

Update an outstanding invoice

Update an outstanding invoice. Only the from_contact and business_contact fields can be updated on an outstanding invoice. Only the fields that have to be updated can be sent in the request body. If updating JSON object fields, the complete JSON should be sent in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\InvoicingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 789; // int | 
$body = new \calderaPayQualpayPlatform\Model\UpdateOutstandingRequest(); // \calderaPayQualpayPlatform\Model\UpdateOutstandingRequest | Invoice

try {
    $result = $apiInstance->updateOutstandingInvoice($invoice_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicingApi->updateOutstandingInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**|  |
 **body** | [**\calderaPayQualpayPlatform\Model\UpdateOutstandingRequest**](../Model/UpdateOutstandingRequest.md)| Invoice |

### Return type

[**\calderaPayQualpayPlatform\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

