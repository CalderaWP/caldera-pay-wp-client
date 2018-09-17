# Settings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **int** | The application ID for this merchant account.  Only returned if an application exists. | [optional] 
**merchant_id** | **int** | The merchant ID this merchant account. | [optional] 
**dba_name** | **string** | The DBA name for the merchant account. | [optional] 
**payments_accepted** | [**\calderaPayQualpayPlatform\Model\Payment[]**](Payment.md) | An array of the card types and currency accepted by the merchant account. | [optional] 
**payment_profiles** | [**\calderaPayQualpayPlatform\Model\PaymentProfile[]**](PaymentProfile.md) | An array payment profiles available for the merchant account. | [optional] 
**user_login** | **string** | The user login created for the merchant account.  Only returned if a new user was requested during account creation. | [optional] 
**reset_url** | **string** | The URL to establish a new password for the created user.  Only returned if a new user was requested during account creation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


