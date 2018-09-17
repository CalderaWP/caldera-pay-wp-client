# ShippingAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary** | **bool** | &lt;br&gt;&lt;strong&gt;Default: &lt;/strong&gt;false&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Identifies the primary shipping address where there are multiple shipping addresses. | [optional] 
**shipping_addr1** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer street and number, P.O. box, c/o. | 
**shipping_addr2** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer apartment, suite, unit, building, floor, etc. | [optional] 
**shipping_city** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping city. | 
**shipping_country** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping country. | [optional] 
**shipping_country_code** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Fixed length, 3 N&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;ISO numeric country code for the shipping address. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#country-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Country Codes&lt;/a&gt; for a list of country codes. If the country code is provided, the shipping_country will be updated to match the country code. | [optional] 
**shipping_firm_name** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length, up to 64 AN&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Business name if applicable. | [optional] 
**shipping_first_name** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length, up to 32 AN&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping first name. | 
**shipping_last_name** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length, up to 32 AN&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping last name. | 
**shipping_state** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping state (abbreviated). | 
**shipping_zip** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Variable length&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping zip code. | 
**shipping_zip4** | **string** | &lt;strong&gt;Format: &lt;/strong&gt;Fixed length, 4 N&lt;br&gt;&lt;strong&gt;Description: &lt;/strong&gt;Customer shipping zip+4 code if applicable. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


