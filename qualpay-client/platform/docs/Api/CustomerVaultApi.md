# calderaPayQualpayPlatform\CustomerVaultApi

All URIs are relative to *https://api-test.Qualpay.com/platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingCard**](CustomerVaultApi.md#addBillingCard) | **POST** /vault/customer/{customer_id}/billing | Add a billing card
[**addCustomer**](CustomerVaultApi.md#addCustomer) | **POST** /vault/customer | Add a customer
[**addShippingAddress**](CustomerVaultApi.md#addShippingAddress) | **POST** /vault/customer/{customer_id}/shipping | Add a shipping address
[**browseCustomers**](CustomerVaultApi.md#browseCustomers) | **GET** /vault/customer | Get all customers
[**deleteBillingCard**](CustomerVaultApi.md#deleteBillingCard) | **PUT** /vault/customer/{customer_id}/billing/delete | Delete a billing card
[**deleteCustomer**](CustomerVaultApi.md#deleteCustomer) | **DELETE** /vault/customer/{customer_id} | Delete a customer
[**deleteShippingAddress**](CustomerVaultApi.md#deleteShippingAddress) | **DELETE** /vault/customer/{customer_id}/shipping/{id} | Delete a shipping address
[**getBillingCards**](CustomerVaultApi.md#getBillingCards) | **GET** /vault/customer/{customer_id}/billing | Get billing cards
[**getCustomer**](CustomerVaultApi.md#getCustomer) | **GET** /vault/customer/{customer_id} | Get by customer ID
[**getShippingAddresses**](CustomerVaultApi.md#getShippingAddresses) | **GET** /vault/customer/{customer_id}/shipping | Get shipping addresses
[**setPrimaryBillingCard**](CustomerVaultApi.md#setPrimaryBillingCard) | **PUT** /vault/customer/{customer_id}/billing/primary | Set primary billing card
[**setPrimaryShippingAddress**](CustomerVaultApi.md#setPrimaryShippingAddress) | **PUT** /vault/customer/{customer_id}/shipping/primary | Set primary shipping address
[**updateBillingCard**](CustomerVaultApi.md#updateBillingCard) | **PUT** /vault/customer/{customer_id}/billing | Update a billing card
[**updateCustomer**](CustomerVaultApi.md#updateCustomer) | **PUT** /vault/customer/{customer_id} | Update a customer
[**updateShippingAddress**](CustomerVaultApi.md#updateShippingAddress) | **PUT** /vault/customer/{customer_id}/shipping | Update a shipping address


# **addBillingCard**
> \calderaPayQualpayPlatform\Model\CustomerResponse addBillingCard($customer_id, $body)

Add a billing card

Adds a Billing Card to a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\BillingCard(); // \calderaPayQualpayPlatform\Model\BillingCard | Customer

try {
    $result = $apiInstance->addBillingCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->addBillingCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\BillingCard**](../Model/BillingCard.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCustomer**
> \calderaPayQualpayPlatform\Model\CustomerResponse addCustomer($body)

Add a customer

Add a Customer to Vault. All Read only fields will be ignored. <br><br><strong> Additional required body fields: </strong><br>customer_id or auto_generate_customer_id<br>customer_first_name<br>customer_last_name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \calderaPayQualpayPlatform\Model\CustomerVault(); // \calderaPayQualpayPlatform\Model\CustomerVault | Customer

try {
    $result = $apiInstance->addCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->addCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\calderaPayQualpayPlatform\Model\CustomerVault**](../Model/CustomerVault.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addShippingAddress**
> \calderaPayQualpayPlatform\Model\CustomerResponse addShippingAddress($customer_id, $body)

Add a shipping address

Add a shipping address to a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Shipping Address
$body = new \calderaPayQualpayPlatform\Model\ShippingAddress(); // \calderaPayQualpayPlatform\Model\ShippingAddress | Shipping Address

try {
    $result = $apiInstance->addShippingAddress($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->addShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Shipping Address |
 **body** | [**\calderaPayQualpayPlatform\Model\ShippingAddress**](../Model/ShippingAddress.md)| Shipping Address |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseCustomers**
> \calderaPayQualpayPlatform\Model\CustomerListResponse browseCustomers($count, $order_on, $order_by, $page, $filter, $vendor_id)

Get all customers

Gets an array of Customer Vault objects. Optional query parameters determines, size and sort order of returned array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of records in the result.
$order_on = "customer_id"; // string | The field on which the results will be sorted on. Refer to the response model for available fields.
$order_by = "desc"; // string | Ascending or Descending Sort order of the result.
$page = 0; // int | Zero-based page number, use this to choose a page when there are more results than the count parameter.
$filter = "filter_example"; // string | Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter.
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->browseCustomers($count, $order_on, $order_by, $page, $filter, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->browseCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of records in the result. | [optional] [default to 10]
 **order_on** | **string**| The field on which the results will be sorted on. Refer to the response model for available fields. | [optional] [default to customer_id]
 **order_by** | **string**| Ascending or Descending Sort order of the result. | [optional] [default to desc]
 **page** | **int**| Zero-based page number, use this to choose a page when there are more results than the count parameter. | [optional] [default to 0]
 **filter** | **string**| Results can be filtered by custom filter criteria. Refer to [Filter](/developer/api/reference#filters) to use the filter parameter. | [optional]
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerListResponse**](../Model/CustomerListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCard**
> \calderaPayQualpayPlatform\Model\CustomerResponse deleteBillingCard($customer_id, $body)

Delete a billing card

Deletes a Customer's specific Billing Card based on the card_id. card_id is required in the request body to delete the billing record. A billing card with active subscriptions cannot be deleted. <br><br><strong> Additional required body fields: </strong><br>card_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\BillingCard(); // \calderaPayQualpayPlatform\Model\BillingCard | Customer

try {
    $result = $apiInstance->deleteBillingCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->deleteBillingCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\BillingCard**](../Model/BillingCard.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \calderaPayQualpayPlatform\Model\QPApiResponse deleteCustomer($customer_id, $vendor_id)

Delete a customer

Deletes a customer vault record. **This operation cannot be reversed.** Note that deleting a customer  will delete all the subscriptions associated with the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->deleteCustomer($customer_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\QPApiResponse**](../Model/QPApiResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShippingAddress**
> \calderaPayQualpayPlatform\Model\CustomerResponse deleteShippingAddress($customer_id, $id, $vendor_id)

Delete a shipping address

Deletes a Customer's specific Shipping Address based on the shipping_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$id = 789; // int | Shipping ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->deleteShippingAddress($customer_id, $id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->deleteShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **id** | **int**| Shipping ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCards**
> \calderaPayQualpayPlatform\Model\CustomerResponse getBillingCards($customer_id, $vendor_id)

Get billing cards

Gets a list of Billing cards associated with the customer. The response will contain an array of billing_cards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getBillingCards($customer_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->getBillingCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \calderaPayQualpayPlatform\Model\CustomerResponse getCustomer($customer_id, $vendor_id)

Get by customer ID

Gets a Customer Vault Resource By Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getCustomer($customer_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingAddresses**
> \calderaPayQualpayPlatform\Model\CustomerResponse getShippingAddresses($customer_id, $vendor_id)

Get shipping addresses

Gets all shipping Addresses for a customer. Response will include an array of shipping addresses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$vendor_id = 0; // int | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.

try {
    $result = $apiInstance->getShippingAddresses($customer_id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->getShippingAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **vendor_id** | **int**| Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] [default to 0]

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPrimaryBillingCard**
> \calderaPayQualpayPlatform\Model\CustomerResponse setPrimaryBillingCard($customer_id, $body)

Set primary billing card

Sets as Customer's specific Billing Card as primary. Only the card_id is required in the request. All other fields will be ignored.<br><br><strong> Additional required body fields: </strong><br>card_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\BillingCard(); // \calderaPayQualpayPlatform\Model\BillingCard | Customer

try {
    $result = $apiInstance->setPrimaryBillingCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->setPrimaryBillingCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\BillingCard**](../Model/BillingCard.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPrimaryShippingAddress**
> \calderaPayQualpayPlatform\Model\CustomerResponse setPrimaryShippingAddress($customer_id, $body)

Set primary shipping address

Sets as Customer's specific shipping address as primary. Only shipping_id is required in the POST request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\ShippingAddress(); // \calderaPayQualpayPlatform\Model\ShippingAddress | Shipping Address

try {
    $result = $apiInstance->setPrimaryShippingAddress($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->setPrimaryShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\ShippingAddress**](../Model/ShippingAddress.md)| Shipping Address |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingCard**
> \calderaPayQualpayPlatform\Model\CustomerResponse updateBillingCard($customer_id, $body)

Update a billing card

Updates a Customer's specific Billing Card based on the card_id. The complete billing record is required in the request body to update.<br><br><strong> Additional required body fields: </strong><br>card_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\BillingCard(); // \calderaPayQualpayPlatform\Model\BillingCard | Customer

try {
    $result = $apiInstance->updateBillingCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->updateBillingCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\BillingCard**](../Model/BillingCard.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \calderaPayQualpayPlatform\Model\CustomerResponse updateCustomer($customer_id, $body)

Update a customer

Updates a customer vault record. You can send the entire resource or only the fields that require an update. When updating array fields - billing_cards or shipping_addresses - the entire array should be included in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Customer ID
$body = new \calderaPayQualpayPlatform\Model\CustomerVault(); // \calderaPayQualpayPlatform\Model\CustomerVault | Customer

try {
    $result = $apiInstance->updateCustomer($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **body** | [**\calderaPayQualpayPlatform\Model\CustomerVault**](../Model/CustomerVault.md)| Customer |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingAddress**
> \calderaPayQualpayPlatform\Model\CustomerResponse updateShippingAddress($customer_id, $body)

Update a shipping address

Update a shipping address for a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = calderaPayQualpayPlatform\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new calderaPayQualpayPlatform\Api\CustomerVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Shipping Address
$body = new \calderaPayQualpayPlatform\Model\ShippingAddress(); // \calderaPayQualpayPlatform\Model\ShippingAddress | Shipping Address

try {
    $result = $apiInstance->updateShippingAddress($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerVaultApi->updateShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Shipping Address |
 **body** | [**\calderaPayQualpayPlatform\Model\ShippingAddress**](../Model/ShippingAddress.md)| Shipping Address |

### Return type

[**\calderaPayQualpayPlatform\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

