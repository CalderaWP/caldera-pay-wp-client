# CheckoutPreferences

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success_url** | **string** | A URL to which the customer will be directed after a successful payment. If not defined in the API or within the Checkout Settings, the customer will be directed to the default Qualpay receipt page. Must be formatted as http://www.domain.com/ or https://www.domain.com/. | [optional] 
**failure_url** | **string** | A URL to which the customer will be directed after a failed transaction. If not defined in the API or within the Checkout Settings, the customer will be directed to the  default Qualpay receipt page. Must be formatted as http://www.domain.com/ or https://www.domain.com/. | [optional] 
**notification_url** | **string** | A merchant provided URL that will be notified whenever a hosted checkout payment is made. Qualpay will send a Post message to the URI. | [optional] 
**allow_partial_payments** | **bool** | If set to true, the customer can make changes to the transaction amount. | [optional] 
**allow_save_card** | **bool** | Applicable only for checkout associated with a Qualpay customer. If set to true, the checkout page will display the &#39;Save Card&#39; checkbox that lets the customer decide if the card information can be saved. The customer card information is always updated if this field is set to false.  Default value is false. | [optional] 
**email_receipt** | **bool** | If set to true and the customer email address is provided, a receipt is sent to the customer | [optional] 
**request_type** | **string** | Identifies the type of request when the customer submits the payment data on the checkout page. | [optional] 
**expire_in_secs** | **int** | The time period for which the checkout_link will be valid in seconds. The minimum value for this field is 900 seconds  (5 minutes),  the maximum value is 7776000 (90 days) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


