# SwaggerClient-php
This document describes the Qualpay Platform API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.1.9
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
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

## Documentation for API Endpoints

All URIs are relative to *https://api-test.Qualpay.com/platform*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationBoardingApi* | [**addApp**](docs/Api/ApplicationBoardingApi.md#addapp) | **POST** /application/add | Create Application
*ApplicationBoardingApi* | [**browseApps**](docs/Api/ApplicationBoardingApi.md#browseapps) | **GET** /application/browse | Browse applications
*ApplicationBoardingApi* | [**browseSalesReps**](docs/Api/ApplicationBoardingApi.md#browsesalesreps) | **GET** /application/sales/browse | Browse Sales Reps
*ApplicationBoardingApi* | [**emailApp**](docs/Api/ApplicationBoardingApi.md#emailapp) | **POST** /application/{appId}/email | Email Application
*ApplicationBoardingApi* | [**getApp**](docs/Api/ApplicationBoardingApi.md#getapp) | **GET** /application/{appId}/get | Get Application
*ApplicationBoardingApi* | [**saveData**](docs/Api/ApplicationBoardingApi.md#savedata) | **POST** /application/{appId}/data | Save Data
*ApplicationBoardingApi* | [**uploadFile**](docs/Api/ApplicationBoardingApi.md#uploadfile) | **POST** /application/{appId}/upload | Upload Document
*ApplicationBoardingApi* | [**validateApp**](docs/Api/ApplicationBoardingApi.md#validateapp) | **GET** /application/{appId}/validate | Validate Application
*CustomerVaultApi* | [**addBillingCard**](docs/Api/CustomerVaultApi.md#addbillingcard) | **POST** /vault/customer/{customer_id}/billing | Add a billing card
*CustomerVaultApi* | [**addCustomer**](docs/Api/CustomerVaultApi.md#addcustomer) | **POST** /vault/customer | Add a customer
*CustomerVaultApi* | [**addShippingAddress**](docs/Api/CustomerVaultApi.md#addshippingaddress) | **POST** /vault/customer/{customer_id}/shipping | Add a shipping address
*CustomerVaultApi* | [**browseCustomers**](docs/Api/CustomerVaultApi.md#browsecustomers) | **GET** /vault/customer | Get all customers
*CustomerVaultApi* | [**deleteBillingCard**](docs/Api/CustomerVaultApi.md#deletebillingcard) | **PUT** /vault/customer/{customer_id}/billing/delete | Delete a billing card
*CustomerVaultApi* | [**deleteCustomer**](docs/Api/CustomerVaultApi.md#deletecustomer) | **DELETE** /vault/customer/{customer_id} | Delete a customer
*CustomerVaultApi* | [**deleteShippingAddress**](docs/Api/CustomerVaultApi.md#deleteshippingaddress) | **DELETE** /vault/customer/{customer_id}/shipping/{id} | Delete a shipping address
*CustomerVaultApi* | [**getBillingCards**](docs/Api/CustomerVaultApi.md#getbillingcards) | **GET** /vault/customer/{customer_id}/billing | Get billing cards
*CustomerVaultApi* | [**getCustomer**](docs/Api/CustomerVaultApi.md#getcustomer) | **GET** /vault/customer/{customer_id} | Get by customer ID
*CustomerVaultApi* | [**getShippingAddresses**](docs/Api/CustomerVaultApi.md#getshippingaddresses) | **GET** /vault/customer/{customer_id}/shipping | Get shipping addresses
*CustomerVaultApi* | [**setPrimaryBillingCard**](docs/Api/CustomerVaultApi.md#setprimarybillingcard) | **PUT** /vault/customer/{customer_id}/billing/primary | Set primary billing card
*CustomerVaultApi* | [**setPrimaryShippingAddress**](docs/Api/CustomerVaultApi.md#setprimaryshippingaddress) | **PUT** /vault/customer/{customer_id}/shipping/primary | Set primary shipping address
*CustomerVaultApi* | [**updateBillingCard**](docs/Api/CustomerVaultApi.md#updatebillingcard) | **PUT** /vault/customer/{customer_id}/billing | Update a billing card
*CustomerVaultApi* | [**updateCustomer**](docs/Api/CustomerVaultApi.md#updatecustomer) | **PUT** /vault/customer/{customer_id} | Update a customer
*CustomerVaultApi* | [**updateShippingAddress**](docs/Api/CustomerVaultApi.md#updateshippingaddress) | **PUT** /vault/customer/{customer_id}/shipping | Update a shipping address
*DisputeManagementApi* | [**addDisputesResponse**](docs/Api/DisputeManagementApi.md#adddisputesresponse) | **POST** /vendor/disputes/{merchantId}/{recId} | Submit Dispute Response
*DisputeManagementApi* | [**createDispute**](docs/Api/DisputeManagementApi.md#createdispute) | **GET** /vendor/createDispute/{merchantId} | Create Dispute Data
*DisputeManagementApi* | [**getCreditedTranDetail**](docs/Api/DisputeManagementApi.md#getcreditedtrandetail) | **GET** /vendor/tran/{merchantId}/{cardNumber} | Credited Transaction Detail
*DisputeManagementApi* | [**getDisputes**](docs/Api/DisputeManagementApi.md#getdisputes) | **GET** /vendor/disputes | Get Disputes
*DisputeManagementApi* | [**getNotDisputedTran**](docs/Api/DisputeManagementApi.md#getnotdisputedtran) | **GET** /vendor/notdisputedtrans/{merchantId}/{cardNumber} | Non Disputed Transaction
*DisputeManagementApi* | [**getTranbyPurchaseID**](docs/Api/DisputeManagementApi.md#gettranbypurchaseid) | **GET** /vendor/pidtrans/browse/{merchantId}/{cardNumber}/{purchaseID} | Credited Transaction with Purchase ID
*DisputeManagementApi* | [**resetDispute**](docs/Api/DisputeManagementApi.md#resetdispute) | **GET** /vendor/resetDispute/{recId} | Reset Dispute Data
*EmbeddedFieldsApi* | [**getEmbeddedTransientKey**](docs/Api/EmbeddedFieldsApi.md#getembeddedtransientkey) | **GET** /embedded | Get Transient Key
*IntegratorApi* | [**createTestAccount**](docs/Api/IntegratorApi.md#createtestaccount) | **POST** /vendor/settings/account/add | Generate Test Account
*IntegratorApi* | [**getMerchantSettings**](docs/Api/IntegratorApi.md#getmerchantsettings) | **GET** /vendor/settings/{mid} | Merchant Settings
*IntegratorApi* | [**rotateApiKey**](docs/Api/IntegratorApi.md#rotateapikey) | **POST** /vendor/settings/key/{mid} | Generate Security Key
*InvoicingApi* | [**addInvoicePayment**](docs/Api/InvoicingApi.md#addinvoicepayment) | **POST** /invoice/{invoice_id}/payments | Add payment to an invoice
*InvoicingApi* | [**browseBouncedInvoices**](docs/Api/InvoicingApi.md#browsebouncedinvoices) | **GET** /invoice/bounced | Get undelivered invoices
*InvoicingApi* | [**browseInvoicePayments**](docs/Api/InvoicingApi.md#browseinvoicepayments) | **GET** /invoice/payments | Get invoice payments
*InvoicingApi* | [**browseInvoicePaymentsById**](docs/Api/InvoicingApi.md#browseinvoicepaymentsbyid) | **GET** /invoice/{invoice_id}/payments | Get invoice payments by id
*InvoicingApi* | [**browseInvoices**](docs/Api/InvoicingApi.md#browseinvoices) | **GET** /invoice | Get all invoices
*InvoicingApi* | [**cancelInvoice**](docs/Api/InvoicingApi.md#cancelinvoice) | **DELETE** /invoice/{invoice_id}/cancel | Cancel an invoice
*InvoicingApi* | [**copyInvoice**](docs/Api/InvoicingApi.md#copyinvoice) | **POST** /invoice/{invoice_id}/copy | Copy an invoice
*InvoicingApi* | [**createInvoice**](docs/Api/InvoicingApi.md#createinvoice) | **POST** /invoice | Create an invoice
*InvoicingApi* | [**getInvoice**](docs/Api/InvoicingApi.md#getinvoice) | **GET** /invoice/{invoice_id}/detail | Get by Invoice ID
*InvoicingApi* | [**removeInvoicePayment**](docs/Api/InvoicingApi.md#removeinvoicepayment) | **DELETE** /invoice/{invoice_id}/payments/{payment_id} | Remove an invoice payment
*InvoicingApi* | [**resendInvoice**](docs/Api/InvoicingApi.md#resendinvoice) | **POST** /invoice/{invoice_id}/resend | Resend an invoice
*InvoicingApi* | [**sendInvoice**](docs/Api/InvoicingApi.md#sendinvoice) | **POST** /invoice/{invoice_id}/send | Send an invoice
*InvoicingApi* | [**updateDraftInvoice**](docs/Api/InvoicingApi.md#updatedraftinvoice) | **PUT** /invoice/{invoice_id}/draft | Update a draft invoice
*InvoicingApi* | [**updateInvoicePayment**](docs/Api/InvoicingApi.md#updateinvoicepayment) | **PUT** /invoice/{invoice_id}/payments/{payment_id} | Update an invoice payment
*InvoicingApi* | [**updateOutstandingInvoice**](docs/Api/InvoicingApi.md#updateoutstandinginvoice) | **PUT** /invoice/{invoice_id}/outstanding | Update an outstanding invoice
*QualpayCheckoutApi* | [**addCheckout**](docs/Api/QualpayCheckoutApi.md#addcheckout) | **POST** /checkout | Create a checkout payment link
*QualpayCheckoutApi* | [**getDetails**](docs/Api/QualpayCheckoutApi.md#getdetails) | **GET** /checkout/{checkoutId} | Lookup checkout payment
*RecurringBillingApi* | [**addPlan**](docs/Api/RecurringBillingApi.md#addplan) | **POST** /plan | Add a Recurring Plan
*RecurringBillingApi* | [**addSubscription**](docs/Api/RecurringBillingApi.md#addsubscription) | **POST** /subscription | Add a subscription
*RecurringBillingApi* | [**archivePlan**](docs/Api/RecurringBillingApi.md#archiveplan) | **POST** /plan/{plan_code}/archive | Archive a Recurring Plan
*RecurringBillingApi* | [**browsePlans**](docs/Api/RecurringBillingApi.md#browseplans) | **GET** /plan | Get all Recurring Plans
*RecurringBillingApi* | [**browseSubscriptions**](docs/Api/RecurringBillingApi.md#browsesubscriptions) | **GET** /subscription | Get all subscriptions
*RecurringBillingApi* | [**cancelSubscription**](docs/Api/RecurringBillingApi.md#cancelsubscription) | **POST** /subscription/{subscription_id}/cancel | Cancel a subscription
*RecurringBillingApi* | [**deletePlan**](docs/Api/RecurringBillingApi.md#deleteplan) | **DELETE** /plan/{plan_id}/delete | Delete a Recurring Plan
*RecurringBillingApi* | [**getAllSubscriptionTransactions**](docs/Api/RecurringBillingApi.md#getallsubscriptiontransactions) | **GET** /subscription/transactions | Get all subscription transactions
*RecurringBillingApi* | [**getPlan**](docs/Api/RecurringBillingApi.md#getplan) | **GET** /plan/{plan_code} | Find Recurring Plan by Plan Code
*RecurringBillingApi* | [**getSubscription**](docs/Api/RecurringBillingApi.md#getsubscription) | **GET** /subscription/{subscription_id} | Get subscription by subscription ID
*RecurringBillingApi* | [**getSubscriptionTransactions**](docs/Api/RecurringBillingApi.md#getsubscriptiontransactions) | **GET** /subscription/transactions/{subscription_id} | Get transactions by subscription ID
*RecurringBillingApi* | [**pauseSubscription**](docs/Api/RecurringBillingApi.md#pausesubscription) | **POST** /subscription/{subscription_id}/pause | Pause a subscription
*RecurringBillingApi* | [**resumeSubscription**](docs/Api/RecurringBillingApi.md#resumesubscription) | **POST** /subscription/{subscription_id}/resume | Resume a subscription
*RecurringBillingApi* | [**updatePlan**](docs/Api/RecurringBillingApi.md#updateplan) | **PUT** /plan/{plan_code} | Update a Recurring Plan
*RecurringBillingApi* | [**updateSubscription**](docs/Api/RecurringBillingApi.md#updatesubscription) | **PUT** /subscription/{subscription_id} | Update a subscription
*ReportingApi* | [**browseAusRequests**](docs/Api/ReportingApi.md#browseausrequests) | **GET** /reporting/aus/detail | Account Updater Detail Report
*ReportingApi* | [**browseAusSummary**](docs/Api/ReportingApi.md#browseaussummary) | **GET** /reporting/aus/summary | Account Updater Summary Report
*ReportingApi* | [**browseBatches**](docs/Api/ReportingApi.md#browsebatches) | **GET** /reporting/batches | Batch Report
*ReportingApi* | [**browseDeposits**](docs/Api/ReportingApi.md#browsedeposits) | **GET** /reporting/deposits | Deposit Report
*ReportingApi* | [**browseDisputes**](docs/Api/ReportingApi.md#browsedisputes) | **GET** /reporting/disputes | Disputes Report
*ReportingApi* | [**browseTrans**](docs/Api/ReportingApi.md#browsetrans) | **GET** /reporting/transactions | Transaction Report
*ReportingApi* | [**getTransactionByPgId**](docs/Api/ReportingApi.md#gettransactionbypgid) | **GET** /reporting/transactions/bypgid/{pg_id} | Get transaction by PG ID
*WebhooksApi* | [**addEvent**](docs/Api/WebhooksApi.md#addevent) | **POST** /webhook/{webhook_id}/event/{event} | Add an event
*WebhooksApi* | [**addWebhook**](docs/Api/WebhooksApi.md#addwebhook) | **POST** /webhook | Add webhook
*WebhooksApi* | [**browseWebhook**](docs/Api/WebhooksApi.md#browsewebhook) | **GET** /webhook | Browse webhooks
*WebhooksApi* | [**disableWebhook**](docs/Api/WebhooksApi.md#disablewebhook) | **PUT** /webhook/{webhook_id}/disable | Disable a Webhook
*WebhooksApi* | [**editWebhook**](docs/Api/WebhooksApi.md#editwebhook) | **PUT** /webhook/{webhook_id} | Update webhook
*WebhooksApi* | [**enableWebhook**](docs/Api/WebhooksApi.md#enablewebhook) | **PUT** /webhook/{webhook_id}/enable | Enable a Webhook
*WebhooksApi* | [**getEvents**](docs/Api/WebhooksApi.md#getevents) | **GET** /webhook/{webhook_id}/event | Get events
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhook/{webhook_id} | Get webhook
*WebhooksApi* | [**removeEvent**](docs/Api/WebhooksApi.md#removeevent) | **DELETE** /webhook/{webhook_id}/event/{event} | Delete event


## Documentation For Models

 - [AccountUpdaterReport](docs/Model/AccountUpdaterReport.md)
 - [AccountUpdaterResponse](docs/Model/AccountUpdaterResponse.md)
 - [AccountUpdaterSummaryReport](docs/Model/AccountUpdaterSummaryReport.md)
 - [AccountUpdaterSummaryResponse](docs/Model/AccountUpdaterSummaryResponse.md)
 - [AddAppRequest](docs/Model/AddAppRequest.md)
 - [ApiKey](docs/Model/ApiKey.md)
 - [ApplicationData](docs/Model/ApplicationData.md)
 - [ApplicationModel](docs/Model/ApplicationModel.md)
 - [BatchReport](docs/Model/BatchReport.md)
 - [BatchResponse](docs/Model/BatchResponse.md)
 - [BillingCard](docs/Model/BillingCard.md)
 - [BouncedInvoice](docs/Model/BouncedInvoice.md)
 - [BrowseAppsData](docs/Model/BrowseAppsData.md)
 - [BrowseAppsResult](docs/Model/BrowseAppsResult.md)
 - [BrowseSalesRepsData](docs/Model/BrowseSalesRepsData.md)
 - [BrowseSalesRepsResult](docs/Model/BrowseSalesRepsResult.md)
 - [Checkout](docs/Model/Checkout.md)
 - [CheckoutCustomer](docs/Model/CheckoutCustomer.md)
 - [CheckoutLink](docs/Model/CheckoutLink.md)
 - [CheckoutLinkResponse](docs/Model/CheckoutLinkResponse.md)
 - [CheckoutPreferences](docs/Model/CheckoutPreferences.md)
 - [CheckoutRequest](docs/Model/CheckoutRequest.md)
 - [CheckoutResponse](docs/Model/CheckoutResponse.md)
 - [CheckoutSettings](docs/Model/CheckoutSettings.md)
 - [Contact](docs/Model/Contact.md)
 - [Cookies](docs/Model/Cookies.md)
 - [CopyInvoiceRequest](docs/Model/CopyInvoiceRequest.md)
 - [CorrespondingTransactionResponse](docs/Model/CorrespondingTransactionResponse.md)
 - [CreateInvoiceRequest](docs/Model/CreateInvoiceRequest.md)
 - [CustomerListResponse](docs/Model/CustomerListResponse.md)
 - [CustomerResponse](docs/Model/CustomerResponse.md)
 - [CustomerVault](docs/Model/CustomerVault.md)
 - [DepositReport](docs/Model/DepositReport.md)
 - [DepositResponse](docs/Model/DepositResponse.md)
 - [DisputeData](docs/Model/DisputeData.md)
 - [DisputeReport](docs/Model/DisputeReport.md)
 - [DisputeResponse](docs/Model/DisputeResponse.md)
 - [EmbeddedKey](docs/Model/EmbeddedKey.md)
 - [EmbeddedKeyResponse](docs/Model/EmbeddedKeyResponse.md)
 - [GatewayResponse](docs/Model/GatewayResponse.md)
 - [GetAppData](docs/Model/GetAppData.md)
 - [GetAppResult](docs/Model/GetAppResult.md)
 - [HttpEntity](docs/Model/HttpEntity.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceBouncedResponse](docs/Model/InvoiceBouncedResponse.md)
 - [InvoiceListResponse](docs/Model/InvoiceListResponse.md)
 - [InvoicePayment](docs/Model/InvoicePayment.md)
 - [InvoicePaymentListResponse](docs/Model/InvoicePaymentListResponse.md)
 - [InvoicePaymentRequest](docs/Model/InvoicePaymentRequest.md)
 - [InvoicePaymentResponse](docs/Model/InvoicePaymentResponse.md)
 - [InvoiceResponse](docs/Model/InvoiceResponse.md)
 - [LineItem](docs/Model/LineItem.md)
 - [MerchantSettingsResponse](docs/Model/MerchantSettingsResponse.md)
 - [NewAccountRequest](docs/Model/NewAccountRequest.md)
 - [PGTransactionResponse](docs/Model/PGTransactionResponse.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentProfile](docs/Model/PaymentProfile.md)
 - [PaymentTerm](docs/Model/PaymentTerm.md)
 - [PlanModel](docs/Model/PlanModel.md)
 - [PricingModel](docs/Model/PricingModel.md)
 - [QPApiData](docs/Model/QPApiData.md)
 - [QPApiListResponse](docs/Model/QPApiListResponse.md)
 - [QPApiResponse](docs/Model/QPApiResponse.md)
 - [RecurringPlan](docs/Model/RecurringPlan.md)
 - [RecurringPlanListResponse](docs/Model/RecurringPlanListResponse.md)
 - [RecurringPlanResponse](docs/Model/RecurringPlanResponse.md)
 - [ResendInvoiceRequest](docs/Model/ResendInvoiceRequest.md)
 - [Result](docs/Model/Result.md)
 - [RotateKeyRequest](docs/Model/RotateKeyRequest.md)
 - [RotateKeyResponse](docs/Model/RotateKeyResponse.md)
 - [SalesTax](docs/Model/SalesTax.md)
 - [SaveDataRequest](docs/Model/SaveDataRequest.md)
 - [SendInvoiceRequest](docs/Model/SendInvoiceRequest.md)
 - [Settings](docs/Model/Settings.md)
 - [ShippingAddress](docs/Model/ShippingAddress.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionListResponse](docs/Model/SubscriptionListResponse.md)
 - [SubscriptionRequest](docs/Model/SubscriptionRequest.md)
 - [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionData](docs/Model/TransactionData.md)
 - [TransactionListResponse](docs/Model/TransactionListResponse.md)
 - [TransactionReport](docs/Model/TransactionReport.md)
 - [TransactionResponse](docs/Model/TransactionResponse.md)
 - [UpdateDraftRequest](docs/Model/UpdateDraftRequest.md)
 - [UpdateOutstandingRequest](docs/Model/UpdateOutstandingRequest.md)
 - [UpdatedDisputeResponse](docs/Model/UpdatedDisputeResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookEvent](docs/Model/WebhookEvent.md)
 - [WebhookEventResponse](docs/Model/WebhookEventResponse.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [WebhooksListResponse](docs/Model/WebhooksListResponse.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author




