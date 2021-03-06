# TransactionReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rec_id** | **int** | Unique ID assigned by Qualpay to this deposit. | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant. | [optional] 
**batch_date** | **string** | The date the batch was settled to Qualpay. | [optional] 
**dba_name** | **string** | The doing business as name of the merchant. | [optional] 
**merch_city_ph** | **string** | Sent to the card issuer; either the merchant&#39;s city, or phone number. | [optional] 
**merch_state** | **string** | Sent to the card issuer; the merchant&#39;s state. | [optional] 
**merch_zip** | **string** | Sent to the card issuer; the merchant&#39;s ZIP code. | [optional] 
**merch_country** | **string** | Sent to the card issuer; the merchant&#39;s country code. | [optional] 
**batch_number** | **int** | A non-unique ID assigned by the merchant&#39;s terminal, POS device, or gateway for this batch, in the range of 1 - 999. | [optional] 
**batch_id** | **int** | Unique ID assigned by Qualpay to this batch. | [optional] 
**card_number** | **string** | The truncated card number of the transaction. | [optional] 
**card_type** | **string** | The card brand of this transaction. | [optional] 
**auth_date** | **string** | The date the transaction was authorized by the merchant. | [optional] 
**tran_date** | **string** | The date the transaction was captured by the merchant. | [optional] 
**settle_date** | **string** | The date Qualpay settled the transaction with the issuer. | [optional] 
**amt_auth** | **string** | The amount of the original authorization. | [optional] 
**amt_tran** | **string** | The amount of the settled transaction. | [optional] 
**tran_currency** | **string** | The ISO 4217 numeric currency code of the dispute. | [optional] 
**reference_number** | **string** | The bank reference number of the deposit. | [optional] 
**purchase_id** | **string** | A merchant supplied tracking number, generally an invoice or purchase number. This number may be visible to the cardholder, depending on card issuer. | [optional] 
**auth_code** | **string** | The authorization code provided by the card issuer when the card was approved. | [optional] 
**moto_ecomm_ind** | **string** | The transaction ECI (e-commerce indicator), an indicatior of how the card was processed. | [optional] 
**pos_entry_mode** | **string** | Indicates the way a card number was entered. For all codes, please see &lt;a href&#x3D;\&quot;/developer/api/reference#pos_entry_mode\&quot; target&#x3D;\&quot;_blank\&quot;&gt;POS Entry Modes&lt;/a&gt;. | [optional] 
**amt_funded** | **string** | The amount of this transaction funded to the merchant (in the funded currency). | [optional] 
**funded_currency** | **string** | The ISO 4217 numeric currency code of the transaction. | [optional] 
**pg_id** | **string** | 32-byte unique identifier generated by the payment gateway, returned in all valid responses. Applicable only to Qualpay Payment Gateway transactions. It provides a reference to the transaction and is required for some post-auth operations (e.g. capture, refund, or void). | [optional] 
**merch_ref_num** | **string** | Merchant provided reference value that will be stored with the transaction data and included with transaction data in reports within Qualpay Manager. This value will also be attached to any lifecycle transactions (e.g. retrieval requests and chargebacks) that may occur. | [optional] 
**acq_reference_number** | **string** | Acquirer reference number is an 11-digit number generated by the product initiating the transaction. It is a unique number that both the acquirer and the issuer can use to identify a transaction. For chargeback adjustments, the acquirer reference number is used as the deposit reference number. | [optional] 
**auth_rrn** | **string** | The Authorization Retrieval Reference Number (RRN) is a unique identifier assigned by an acquirer to an authorization. | [optional] 
**auth_tran_id** | **string** | The Authorization transaction identifier is a unique identifier returned by the issuing bank for an electronically authorized transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


