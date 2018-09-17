# TransactionData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tran_date** | **string** | The date the transaction was captured by the merchant. | [optional] 
**reference_number** | **string** | The bank reference number of the deposit. | [optional] 
**tran_status** | **string** | Transaction Status&lt;ul&gt;&lt;li&gt;A - Transaction is approved&lt;/li&gt;&lt;li&gt;H - Transaction Held&lt;/li&gt;&lt;li&gt;C - Transaction is captured&lt;/li&gt;&lt;li&gt;V - Transaction is voided by Merchant&lt;/li&gt;&lt;li&gt;v - Transaction is voided by System&lt;/li&gt;&lt;li&gt;K - Transaction is cancelled&lt;/li&gt;&lt;li&gt;D - Transaction is declined by issuer&lt;/li&gt;&lt;li&gt;F - Transaction failures other than Issuer Declines&lt;/li&gt;&lt;li&gt;S - Transaction Settled&lt;/li&gt;&lt;li&gt;P - Deposit Sent&lt;/li&gt;&lt;li&gt;N - Transaction Settled, but will not be funded by Qualpay&lt;/li&gt;&lt;li&gt;R - Transaction Rejected&lt;/li&gt;&lt;/ul&gt; | [optional] 
**purchase_id** | **string** | Purchase ID of the transaction | [optional] 
**amt_tran** | **double** | Transaction Amount | [optional] 
**tran_currency** | **string** | Numeric Currency Code. Refer to&lt;a href&#x3D;\&quot;/developer/api/reference#country-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Country Codes&lt;/a&gt; for a list of currency codes. | [optional] 
**batch_date** | **string** | The date the batch was settled to Qualpay. | [optional] 
**request_type** | **string** | Identifies the type of request when the customer submits the payment data on the checkout page. | [optional] 
**merch_ref_num** | **string** | Merchant provided reference number for this transaction | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


