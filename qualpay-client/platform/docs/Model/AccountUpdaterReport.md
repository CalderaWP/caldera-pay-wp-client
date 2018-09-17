# AccountUpdaterReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **int** | Unique ID assigned by Qualpay to a Merchant. | [optional] 
**request_id** | **int** | Unique ID assigned by Qualpay to the account updater request. | [optional] 
**request_date** | **string** | Account updater request date in YYYY-MM-DD format. Date when a harvest request was sent to the account updater service. | [optional] 
**response_date** | **string** | Account updater response date in YYYY-MM-DD format. Date when the account updater service responded. This field is empty if the response is not yet received. | [optional] 
**card_id** | **string** | Card ID received from a tokenization request for a card. The card_id may be used in place of a card number in messages requiring cardholder account data. | [optional] 
**card_number** | **string** | Cardholder card number(masked). | [optional] 
**exp_date** | **string** | Card Expiration Date in MMYY format. | [optional] 
**card_number_new** | **string** | Updated cardholder card number(masked). This field will be empty if there are no updates to the card number. | [optional] 
**exp_date_new** | **string** | Updated card expiration date in MMYY format. This field will be empty if there are no updates to the expiration date. | [optional] 
**reason_code** | **string** | Account updater reason code.  Account updater reason code. Following are descriptions of the codes              &lt;ul&gt;              &lt;li&gt;000 - New Card/No response&lt;/li&gt;              &lt;li&gt;200 - Valid account no update&lt;/li&gt;              &lt;li&gt;201 - Account Expiration Date Updated&lt;/li&gt;              &lt;li&gt;202 - Account Number Updated&lt;/li&gt;              &lt;li&gt;203 - Account is Closed&lt;/li&gt;              &lt;li&gt;204 - Contact Cardholder&lt;/li&gt;              &lt;li&gt;206 - No Match&lt;/li&gt;              &lt;li&gt;315 - Invalid Expiration Date&lt;/li&gt;              &lt;li&gt;320 - Invalid Account Number&lt;/li&gt;              &lt;li&gt;329 - Invalid Card Type&lt;/li&gt;              &lt;/ul&gt; | [optional] 
**billable** | **bool** | Merchants will be billed only for matches. Reason codes 201, 202, 203 and 204 are billable. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


