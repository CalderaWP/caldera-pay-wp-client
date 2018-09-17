# GatewayResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pg_id** | **string** | Qualpay generated Payment gateway ID for the transaction | [optional] 
**rcode** | **string** | Gateway Response Code. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#gateway-response-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Payment Gateway Response Codes&lt;/a&gt; for Gateway Response Codes and their description. | [optional] 
**rmsg** | **string** | A short description of the Response Code. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#gateway-response-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Payment Gateway Response Codes&lt;/a&gt; for Gateway Response Codes and their description. | [optional] 
**status** | **string** | Status of Gateway Transaction | [optional] 
**auth_code** | **string** | Authorization Code from Issuer | [optional] 
**card_number** | **string** | Masked Card Number used in transaction. | [optional] 
**tran_time** | **string** | Transaction Time in YYYY-MM-DD HH:MM:ss. All Times are Pacific Time. | [optional] 
**amt_tran** | **double** | Transaction Amount | [optional] 
**purchase_id** | **string** | Purchase ID of the transaction | [optional] 
**cvv2_result** | **string** | If CVV is sent, then the result from the card issuer will be returned in this field. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#cvv2-result-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Payment Result Codes for CVV2&lt;/a&gt; for valid CVV2 result codes. | [optional] 
**avs_result** | **string** | If the billing_zip (and optionally the billing_street_addr1) is sent, then the result from the card issuer will be returned in this field. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#avs-result-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Payment Result Codes for AVS&lt;/a&gt; for | [optional] 
**duration** | **int** | Duration of Gateway request in ms | [optional] 
**http_status** | **int** | HTTP Status of the Payment Gateway Request. | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant | [optional] 
**profile_id** | **string** | The unique profile ID used in the payment gateway requests | [optional] 
**merch_ref_num** | **string** | This field contains a merchant provided reference value that will be stored with the transaction data and will be included with the transaction data reported in the Qualpay Manager. This value will also be attached to any lifecycle transactions (e.g. retrieval requests and chargebacks) that may occur. | [optional] 
**tran_currency** | **string** | This field contains the ISO numeric currency code for the transaction.  If the profile_id field is provided, this field will be overridden by the profile’s tran_currency. | [optional] 
**dba_name** | **string** | DBA name associated with the profile | [optional] 
**customer_id** | **string** | Unique ID established by merchant to identify a customer. Customer ID is included in the response if it is sent in the request. | [optional] 
**customer** | [**\calderaPayQualpayPlatform\Model\CheckoutCustomer**](CheckoutCustomer.md) | The customer data input by the user for this transaction in the checkout page.  Applicable only for Qualpay Checkout transactions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


