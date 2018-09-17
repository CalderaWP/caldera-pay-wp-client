# AccountUpdaterSummaryReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **int** | Unique ID assigned by Qualpay to the account updater request. | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant. | [optional] 
**status** | **string** | Status of the request. The status can be one of the following               &lt;ul&gt;              &lt;li&gt;QUEUED - Account updater request is queued in the Account updater service&lt;/li&gt;              &lt;li&gt;COMPLETED - Account updater request has completed&lt;/li&gt;              &lt;/ul&gt; | [optional] 
**cnt_request** | **int** | Number of cards in this request. | [optional] 
**cnt_response** | **int** | Number of cards in this request that were reviewed by the account updater service. (This should match the cnt_request.). The cnt_response field will be zero if the status field is not COMPLETED. | [optional] 
**cnt_update** | **int** | Number of cards in this request that were updated by the account updater service. The cnt_update field will be zero if the status field is not COMPLETED or if there are no updates by the account updater service. | [optional] 
**request_date** | **string** | Account updater request date in YYYY-MM-DD format. Date when a harvest request was sent to the account updater service. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


