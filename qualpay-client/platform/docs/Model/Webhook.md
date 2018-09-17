# Webhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_id** | **int** | A unique ID generated by Qualpay to identify a webhook | [optional] 
**webhook_node** | **string** | The node at which the webhook will be created. If a merchant id is sent in this field, the webhook is created for the merchant. If a webhook_node is not included in the request, the webhook will be created at the api key&#39;s node. | [optional] 
**status** | **string** | Status of the webhook. Following are descriptions of the statuses              &lt;ul&gt;              &lt;li&gt;ACTIVE - The webhook is active.&lt;/li&gt;              &lt;li&gt;DISABLED - The webhook was disabled by the user. &lt;/li&gt;              &lt;li&gt;SUSPENDED - The webhook was suspended by the system. A webhook is suspended when the system is unable to post a request for 48 hours. &lt;/li&gt;              &lt;/ul&gt;While a webhook is disabled or suspended, no new requests will be posted or added for it. If there are existing requests for this webhook in the request queue, they will be held. | [optional] 
**label** | **string** | A label to identify the webhook | 
**notification_url** | **string** | The webhook endpoint to which requests will be posted. The endpoint must use HTTPs and should serve HTTP POST requests. The endpoint URL should respond with an HTTP 2xx response.  Any other HTTP response message is considered a failure and Qualpay will retry posting the same request until a successful response is received or the request expires, whichever comes first. | 
**email_address** | **string[]** | An array of email addresses that will be notified when a webhook is suspended. | [optional] 
**events** | **string[]** | An array of events that will trigger the POST request. Refer to Webhooks documentation for a list of available events. | [optional] 
**db_timestamp** | **string** | Webhook creation timestamp in YYYY-MM-DD HH:mm:ss format | [optional] 
**secret** | **string** | A secret that will be used by Qualpay to generate the x-Qualpay-webhook-signature header. Qualpay signs each webhook request using the x-Qualpay-webhook-signature header. This signature can be used to validate that a request is initiated by Qualpay.  The signature is a Base 64 encoded HMAC-256 digest generated from the request payload using the webhook’s secret.This secret can be viewed only when adding a webhook. Use Qualpay manager to change the secret. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

