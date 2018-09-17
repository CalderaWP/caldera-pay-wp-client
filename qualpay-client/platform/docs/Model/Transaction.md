# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant | [optional] 
**tran_time** | **string** | Transaction Time in YYYY-MM-DD HH:MM:ss. All Times are Pacific Time. | [optional] 
**tran_date** | **string** | The date the transaction was captured by the merchant. | [optional] 
**tran_status** | **string** | Transaction Status&lt;ul&gt;&lt;li&gt;A - Transaction is approved&lt;/li&gt;&lt;li&gt;H - Transaction Held&lt;/li&gt;&lt;li&gt;C - Transaction is captured&lt;/li&gt;&lt;li&gt;V - Transaction is voided by Merchant&lt;/li&gt;&lt;li&gt;v - Transaction is voided by System&lt;/li&gt;&lt;li&gt;K - Transaction is cancelled&lt;/li&gt;&lt;li&gt;D - Transaction is declined by issuer&lt;/li&gt;&lt;li&gt;F - Transaction failures other than Issuer Declines&lt;/li&gt;&lt;li&gt;S - Transaction Settled&lt;/li&gt;&lt;li&gt;P - Deposit Sent&lt;/li&gt;&lt;li&gt;N - Transaction Settled, but will not be funded by Qualpay&lt;/li&gt;&lt;li&gt;R - Transaction Rejected&lt;/li&gt;&lt;/ul&gt; | [optional] 
**auth_code** | **string** | Authorization Code from Issuer | [optional] 
**rcode** | **string** | Gateway Response Code. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#gateway-response-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Payment Gateway Response Codes&lt;/a&gt; for Gateway Response Codes | [optional] 
**card_number** | **string** | Masked Card Number. | [optional] 
**card_type** | **string** | Card Type. The card type is derived from the card number. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#card-types\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Card Types&lt;/a&gt; for a list of card types. | [optional] 
**purchase_id** | **string** | Purchase ID of the transaction | [optional] 
**pg_id** | **string** | Qualpay generated Payment gateway ID of the transaction | [optional] 
**cardholder_first_name** | **string** | First name of Card holder | [optional] 
**cardholder_last_name** | **string** | Last name of Card holder | [optional] 
**amt_tran** | **double** | Transaction Amount | [optional] 
**tran_currency** | **string** | Numeric Currency Code. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#country-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Country Codes&lt;/a&gt; for a list of currency codes. | [optional] 
**dispute_flag** | **bool** | Will be set to true if the transaction is disputed. | [optional] 
**amt_refunded** | **double** | Amount refunded if there are any refunds | [optional] 
**batch_number** | **int** | Settlement Batch Number | [optional] 
**dba_name** | **string** | DBA name used in the transaction | [optional] 
**customer_id** | **string** | Customer Vault ID | [optional] 
**subscription_id** | **string** | Subscription Identifier | [optional] 
**merch_ref_num** | **string** | Merchant provided reference number for this transaction | [optional] 
**batch_id** | **int** | Unique ID assigned by Qualpay to this batch. | [optional] 
**batch_date** | **string** | The date the batch was settled to Qualpay. | [optional] 
**settle_date** | **string** | The date Qualpay settled the transaction with the issuer. | [optional] 
**amt_funded** | **double** | The amount of this transaction funded to the merchant (in the funded currency). | [optional] 
**funded_currency** | **string** | The ISO 4217 numeric currency code of the transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


