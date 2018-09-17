# EmbeddedKey

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transient_key** | **string** | A single use token used for loading embedded fields. The key will be invalidated   when a card is successfully verified. The token will expire in 30 minutes. | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant | 
**db_timestamp** | **string** | This field contains the key creation time stamp. | [optional] 
**expiry_time** | **string** | This field contains the timestamp when the key will expire. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


