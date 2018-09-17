# DisputeReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rec_id** | **int** | Unique ID assigned by Qualpay to this deposit. | 
**data_type** | **string** | The type of dispute. For all types, please see &lt;a href&#x3D;\&quot;/developer/api/reference#data_type\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Dispute Types&lt;/a&gt;. | 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant. | 
**incoming_date** | **string** | The date Qualpay received the dispute from the card issuer. | 
**dba_name** | **string** | The doing business as name of the merchant. | 
**batch_id** | **int** | Unique ID assigned by Qualpay to this batch. | 
**card_number** | **string** | The truncated card number of the dispute. | 
**card_type** | **string** | The card brand of this dispute. | 
**tran_date** | **string** | The date the initial transaction occured on. | 
**amt_tran** | **string** | The amount of the original settled transaction. | 
**amt_dispute** | **string** | The amount of the dispute: equal to, or less than the amt_tran (when in USD). | 
**tran_currency** | **string** | The ISO 4217 numeric currency code of the dispute. | 
**purchase_id** | **string** | A merchant supplied tracking number, generally an invoice or purchase number. This number may be visible to the cardholder, depending on card issuer. | 
**merch_ref_num** | **string** | A merchant supplied tracking number which is stored by Qualpay, and does not pass to the card issuer. | 
**pg_id** | **string** | If the transaction originated through the Qualpay Virtual Terminal, or Qualpay Payment Gateway, this is the tracking ID returned in the gateway response. | 
**auth_code** | **string** | The authorization code provided by the card issuer when the card was approved. | 
**reason_code** | **string** | The card association reason why the dispute was issued. | 
**rec_id_linked** | **string** | TODO | 
**auth_avs_result** | **string** | The AVS (address validation service) match code of the original transaction. | 
**auth_cvv2_result** | **string** | The CVV2 match code of the original transaction. | 
**card_number_original** | **string** | The truncated card number of the original captured transactions. In some rare cases a dispute may be issued on a different card than the original. This can occur when, for example, the card was was re-issued between the transaction date, and the dispute date. | 
**date_status_change** | **string** | Records dispute status date. The dispute status of a dispute record will change over time and as a result of merchant actions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


