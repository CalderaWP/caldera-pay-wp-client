# CheckoutRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amt_tran** | **double** | The total amount of the transaction including sales tax (if applicable). | 
**tran_currency** | **string** | The ISO numeric currency code for the transaction.  If the profile_id field is provided, this field will be overridden by the profile’s currency. | [optional] 
**purchase_id** | **string** | The purchase identifier (also referred to as the invoice number) generated by the merchant. | [optional] 
**profile_id** | **string** | The unique profile ID to be used in payment gateway requests. Specify this field if there are multiple profiles for the same currency or if the request should be processed using specific profile_id. By default, if provided, the profile_id derives the tran_currency field.  When profile_id is used, the tran_currency is not required. | [optional] 
**merch_ref_num** | **string** | Merchant provided reference value that will be stored with the transaction data and will be included with the transaction data reported in the Qualpay Manager. This value will also be attached to any lifecycle transactions (e.g. retrieval requests and chargebacks) that may occur. | [optional] 
**customer_first_name** | **string** | The customer first name. If this field value is longer than the maximum allowed length, the name will be truncated to maximum allowed length. | [optional] 
**customer_last_name** | **string** | The customer last name. If this field value is longer than the maximum allowed length, the name will be truncated to maximum allowed length. | [optional] 
**customer_email** | **string** | The email address of the customer. | [optional] 
**customer_id** | **string** | A unique id to identify the customer in Qualpay. If this is an existing customer, the checkout transaction will be linked to the customer. If this is a new customer, a new customer record is created in Qualpay. The customer_first_name and customer_last_name fields are required for new customers. This field is applicable only for merchant ids that are configured to use Qualpay Customer Vault. | [optional] 
**customer_phone** | **string** | The customer phone number. | [optional] 
**billing_addr1** | **string** | The billing street address of the cardholder. | [optional] 
**billing_state** | **string** | The billing state of the cardholder. | [optional] 
**billing_city** | **string** | The billing city of the cardholder. | [optional] 
**billing_zip** | **string** | The billing zip code of the cardholder. | [optional] 
**preferences** | [**\calderaPayQualpayPlatform\Model\CheckoutPreferences**](CheckoutPreferences.md) | Overrides the preferences set through Qualpay Manager Checkout settings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


