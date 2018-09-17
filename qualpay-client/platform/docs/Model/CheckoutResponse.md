# CheckoutResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Response code from API. 0 indicates success. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#api-response-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Platform API Response Codes&lt;/a&gt; for entire list of return codes. | 
**message** | **string** | A short description of the API response code. | 
**data** | [**\calderaPayQualpayPlatform\Model\Checkout**](Checkout.md) | If request is successful, this field will contain the response resource. If there are input validation errors i.e, the  code is 2, this field may contain a list of fields that failed the validation. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


