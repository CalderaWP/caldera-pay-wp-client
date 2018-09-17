# BatchReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **int** | Unique ID assigned by Qualpay to this batch. | 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant. | 
**tran_currency** | **string** | The ISO 4217 numeric currency code of the batch. | 
**batch_number** | **int** | A non-unique ID assigned by the merchant&#39;s terminal, POS device, or gateway for this batch, in the range of 1 - 999. | 
**batch_date** | **string** | The date the batch was settled to Qualpay. | 
**amt_total** | **string** | The total, or net amount of the batch, in the batches currency. | 
**cnt_total** | **string** | The count of transactions in the batch, including purchases and credits. | 
**amt_purch** | **string** | The amount of purchases within the batch, in the batches currency. | 
**cnt_purch** | **string** | The count of purchases in the batch. | 
**amt_return** | **string** | The amount of returns, or credits back to the customer, in the batches currency. | 
**cnt_return** | **string** | The count of returns or credits back to the customer in the batch. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


