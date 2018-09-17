# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **int** | Qualpay generated ID that identifies a subscription | [optional] 
**merchant_id** | **int** | Unique ID assigned by Qualpay for a Merchant | [optional] 
**customer_id** | **string** | Unique ID that identifies a customer | [optional] 
**status** | **string** | Status of the subscription. Following are descriptions of the statuses              &lt;ul&gt;              &lt;li&gt;A - Active&lt;/li&gt;              &lt;li&gt;D - Complete&lt;/li&gt;              &lt;li&gt;P - Paused&lt;/li&gt;              &lt;li&gt;C - Cancelled&lt;/li&gt;              &lt;li&gt;S - Suspended&lt;/li&gt;              &lt;/ul&gt; | [optional] 
**profile_id** | **string** | The unique profile ID to be used in payment gateway requests. | [optional] 
**plan_id** | **int** | Qualpay generated ID that identifies a Recurring Plan | [optional] 
**plan_name** | **string** | A Name assigned by Merchant to a plan. Name should be unique for a merchant | [optional] 
**plan_code** | **string** | A Code assigned by Merchant to a plan. Should be Unique | [optional] 
**customer_first_name** | **string** | First name of the Plan subscriber | [optional] 
**customer_last_name** | **string** | Last name of the Plan subscriber | [optional] 
**date_start** | **string** | Start Date of subscription. When adding a subscription, the start date should be in future. | [optional] 
**date_next** | **string** | Next Billing date of subscription. This field will be empty for cancelled and completed subscriptions. | [optional] 
**date_end** | **string** | Date when the subscription will end. | [optional] 
**amt_setup** | **float** | One-Time Fee amount. This fee will be charged when a subscription is added. | [optional] 
**prorate_date_start** | **string** | If first payment is prorated, the date the customer will be billed the prorate amount. | [optional] 
**prorate_amt** | **float** | If first payment is prorated, the Prorate amount | [optional] 
**trial_date_start** | **string** | If there is a trial period, the start date of the trial period. | [optional] 
**trial_date_end** | **string** | If there is a trial period, the end date of the trial period | [optional] 
**trial_amt** | **float** | If there is a trial period, the amount billed during the trial period. Should be a positive amount. | [optional] 
**recur_date_start** | **string** | Date Regular billing cycle will start. | [optional] 
**recur_date_end** | **string** | Date Regular billing cycle will end. | [optional] 
**recur_amt** | **float** | Regular Billing Amount. Amount should be a positive amount. | [optional] 
**response** | [**\calderaPayQualpayPlatform\Model\GatewayResponse**](GatewayResponse.md) | Response from Gateway for one time set up fee transactions. Valid only when adding subscriptions with one time fee. | [optional] 
**tran_currency** | **string** | This field contains the ISO numeric currency code for the transaction. | [optional] 
**plan_desc** | **string** | A short description of the  plan, can be one off plan. | [optional] 
**plan_frequency** | **int** | This field identifies the frequency of billing. Use one of the following codes for frequency. &lt;ul&gt;      &lt;li&gt;0 - Weekly&lt;/li&gt;      &lt;li&gt;1 - Bi-Weekly&lt;/li&gt;      &lt;li&gt;3 - Monthly&lt;/li&gt;      &lt;li&gt;4 - Quarterly&lt;/li&gt;      &lt;li&gt;5 - BiAnnually&lt;/li&gt;      &lt;li&gt;6 - Annually&lt;/li&gt;   &lt;/ul&gt; | [optional] 
**plan_duration** | **int** | Number of billing cycles in the recurring transaction, -1 indicates bill until cancelled | [optional] 
**interval** | **int** | Applicable only for monthly frequency. Number of months in a subscription cycle. | [optional] 
**subscription_on_plan** | **bool** | True for subscriptions associated with a plan. False for one off subscriptions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


