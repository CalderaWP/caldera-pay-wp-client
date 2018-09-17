# InvoicePaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The mode of payment. &lt;br&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;CARD&lt;/strong&gt; Invoice checkout payment by customer using a card. A card payment cannot be manually added. &lt;/li&gt;&lt;li&gt;&lt;strong&gt;CASH&lt;/strong&gt; Cash payment.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;CHECK&lt;/strong&gt; Check Payment.&lt;/li&gt;&lt;li&gt;&lt;strong&gt;OTHER&lt;/strong&gt; Other modes of payment.&lt;/li&gt;&lt;/ul&gt;&lt;br&gt;&lt;strong&gt;Maximum Length: &lt;/strong&gt;16 | 
**date_payment** | **string** | Date the payment was made.&lt;br&gt;&lt;strong&gt;Format: &lt;/strong&gt;YYYY-mm-DD | 
**amt_paid** | **double** | Amount paid. The payment currency should be the same as the invoice currency. &lt;br&gt;&lt;strong&gt;Maximum Length: &lt;/strong&gt;10&lt;br&gt;&lt;strong&gt;Number Of Decimals: &lt;/strong&gt;2 | 
**description** | **string** | A short description of the payment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


