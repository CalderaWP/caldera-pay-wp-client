# SubscriptionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_start** | **string** | Date Subscription will start | [optional] 
**customer_id** | **string** | Customer ID of the Subscriber. Customer ID should be a valid customer from theCustomer Vault | [optional] 
**plan_code** | **string** | Plan code of the Recurring Plan. Plan should be an active, valid recurring plan. Required only if subscription is on a plan. Do not define this field if adding a subscription with a one-off plan. | [optional] 
**plan_desc** | **string** | Applicable only to one-off subscriptions. A short description of the one off plan. | [optional] 
**plan_frequency** | **int** | Applicable only to one-off subscriptions. Required for one-off subscriptions. This field identifies the frequency of billing. Use one of the following codes for frequency. &lt;ul&gt;      &lt;li&gt;0 - Weekly&lt;/li&gt;      &lt;li&gt;1 - Bi-Weekly&lt;/li&gt;      &lt;li&gt;3 - Monthly&lt;/li&gt;      &lt;li&gt;4 - Quarterly&lt;/li&gt;      &lt;li&gt;5 - BiAnnually&lt;/li&gt;      &lt;li&gt;6 - Annually&lt;/li&gt;   &lt;/ul&gt; | [optional] 
**interval** | **int** | Applicable only to one-off subscriptions. Applicable only for monthly frequency. Number of months in a subscription cycle. | [optional] 
**plan_duration** | **int** | Applicable only to one-off subscriptions. Required for one-off subscriptions. Number of billing cycles in the recurring transaction, Use -1 if billing cycles are indefinite | [optional] 
**amt_setup** | **double** | Applicable only to one-off subscriptions. One-Time Fee amount. This fee will be charged when a subscription is added. | [optional] 
**amt_tran** | **double** | Plan Transaction Amount. Amount that will be billed each cycle period. Applicable only to one-off subscriptions. &lt;br&gt;&lt;strong&gt;Conditional Requirement: &lt;/strong&gt;Required for one-off subscription. | [optional] 
**profile_id** | **string** | Applicable only to one-off subscriptions. Payment Gateway Profile id that will be used when billing transactions. tran_currency will be used if profile_id is not provided.If both tran_currency and profile_id is not provided, default USD profile is used. | [optional] 
**tran_currency** | **string** | Applicable only to one-off subscriptions. Numeric Currency Code. If Profile_id is provded, the currency is determined from profile. Default is 840 - USD. Refer to &lt;a href&#x3D;\&quot;/developer/api/reference#country-codes\&quot;target&#x3D;\&quot;_blank\&quot;&gt;Country Codes&lt;/a&gt; for a list of currency codes. | [optional] 
**use_existing_customer** | **bool** | Use an existing customer_id if one is available. Applicable only when adding subscriptions. If there is an existing customer with the same customer_first_name and customer_last_name and primary card_number or card_id, then the subscription is added to the matching customer.  If a customer is not found, a new customer is generated. The generated customer_id will be returned in the response. &lt;br&gt;&lt;strong&gt;Default: &lt;/strong&gt;false&lt;br&gt;&lt;strong&gt;Conditional Requirement: &lt;/strong&gt;customer is required, if this field is set to true. | [optional] 
**customer** | [**\calderaPayQualpayPlatform\Model\CustomerVault**](CustomerVault.md) | If customer_id is not included in the request, this customer record will be added to customer vault and a recurring payment will be added to the primary card.  Applicable only when adding subscriptions. Set use_existing_customer field to true, if system should re-use an existing customer. Set customer.auto_generate_customer_id to true if the customer_id should be auto generated when adding a customer. | [optional] 
**vendor_id** | **int** | Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


