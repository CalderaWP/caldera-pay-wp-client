# BillingCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | The payment Card Number - masked if this is part of reponse. When adding payment information, a full card number or card id is required, A masked card number can be used if card_id is also included in the request. Once a card is added, the card number will always remain masked on any subsequent requests returning this field. A card can be added only once,  duplicate cards are not permitted for a customer in the system | 
**exp_date** | **string** | Expiry Date in MMYY format. | [optional] 
**cvv2** | **string** | The CVV2 or CID value from the credit card. If present during a verify, the cvv will be sent to the issuer for validation. The CVV2 will not be stored in vault. The response will also not include CVV2. | [optional] 
**card_id** | **string** | Tokenized Card number. If a card_id is not present in an add request, it is automatically created from the card_number. A card can be added only once. Duplicate cards are not permitted for a customer in the system. The card_id should be permanent. If this is a single use card_id, set the verify field to true which will make the card_id permanent. | [optional] 
**billing_first_name** | **string** | Billing First Name. Can contain upto 32 characters. | [optional] 
**billing_last_name** | **string** | Billing Last Name. Can contain upto 32 characters. | [optional] 
**billing_firm_name** | **string** | Business name on billing card, if applicable. | [optional] 
**billing_addr1** | **string** | Billing Street Address. This address will also used for AVS verification if AVS verificaiton is enabled. | [optional] 
**billing_city** | **string** | Billing City. | [optional] 
**billing_state** | **string** | Billing State. | [optional] 
**billing_zip** | **string** | Billing Zip. | 
**billing_zip4** | **string** | Billing zip+4 code if applicable. | [optional] 
**billing_country** | **string** | Billing Country. | [optional] 
**billing_country_code** | **string** | ISO numeric country code for the billing address. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#country-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Country Codes&lt;/a&gt; for a list of country codes. | [optional] 
**card_type** | **string** | Card Type. The card type is derived from the card number. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#card-types\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Card Types&lt;/a&gt; for a list of card types. | [optional] 
**verify** | **bool** | Set this field to true if a card_number or card_id should be verified by the issuer before adding to Customer Vault. When this field is set to true, the customer will be added to vault either if the card verification successful or if card verification is not supported by the issuer.Default value is false and the card will not be verified before adding to vault | [optional] 
**verified_date** | **string** | Verified Date. The date the card was last verified successfully. | [optional] 
**primary** | **bool** | Set this field to true if this should be the default card. If there are multiple cards with primary true, only one of the card will be choosen to be the default card. Default value is false. | [optional] 
**vendor_id** | **int** | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


