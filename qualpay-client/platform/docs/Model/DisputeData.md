# DisputeData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rec_id** | **int** | Unique ID assigned by Qualpay to dispute. | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a merchant. | [optional] 
**incoming_date** | **string** | The date the dispute was issued. | [optional] 
**amt_tran** | **double** | The amount of the original settled transaction. | [optional] 
**amt_dispute** | **double** | The amount of the dispute; equal to or less than the amt_tran (when in USD). | [optional] 
**reason_code** | **string** | The card association&#39;s reason why the dispute was issued. | [optional] 
**reason_desc** | **string** | The card association&#39;s reason code desc why the dispute was issued. | [optional] 
**data_type** | **string** | The type of dispute. For all types, please refer to &lt;a href&#x3D;\&quot;/developer/api/reference#dispute-type\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Dispute Type&lt;/a&gt; | [optional] 
**cbr_workflow** | **string** | The type of dispute workflow. For all types, please refer to &lt;a href&#x3D;\&quot;/developer/api/reference#dispute-workflow\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Dispute Workflow&lt;/a&gt; | [optional] 
**status** | **string** | Current Dispute Status. | [optional] 
**date_status_change** | **string** | The date the dispute&#39;s status most recently changed. | [optional] 
**card_number** | **string** | The truncated card number of the dispute. | [optional] 
**tran_date** | **string** | The date of the initial transaction. | [optional] 
**reference_number** | **string** | The bank reference number of the deposit. | [optional] 
**cb_ref_num** | **string** | Issuer provided reference number for this transaction. | [optional] 
**vendor_id** | **int** | Unique Vendor ID assigned by Qualpay to integrator. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


