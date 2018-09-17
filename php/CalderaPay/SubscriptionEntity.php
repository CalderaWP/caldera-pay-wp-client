<?php


namespace calderawp\CalderaPay\WpClient\CalderaPay;

class SubscriptionEntity extends Entity
{
	/** @inheritdoc */
	public function __construct()
	{

		$subscriptionFields = [
			'subscription_id' => 'getSubscriptionId',
			'merchant_id' => 'getMerchantId',
			'customer_id' => 'getCustomerId',
			'status' => 'getStatus',
			'profile_id' => 'getProfileId',
			'plan_id' => 'getPlanId',
			'plan_name' => 'getPlanName',
			'plan_code' => 'getPlanCode',
			'customer_first_name' => 'getCustomerFirstName',
			'customer_last_name' => 'getCustomerLastName',
			'date_start' => 'getDateStart',
			'date_next' => 'getDateNext',
			'date_end' => 'getDateEnd',
			'amt_setup' => 'getAmtSetup',
			'prorate_date_start' => 'getProrateDateStart',
			'prorate_amt' => 'getProrateAmt',
			'trial_date_start' => 'getTrialDateStart',
			'trial_date_end' => 'getTrialDateEnd',
			'trial_amt' => 'getTrialAmt',
			'recur_date_start' => 'getRecurDateStart',
			'recur_date_end' => 'getRecurDateEnd',
			'recur_amt' => 'getRecurAmt',
			'response' => 'getResponse',
			'tran_currency' => 'getTranCurrency',
			'plan_desc' => 'getPlanDesc',
			'plan_frequency' => 'getPlanFrequency',
			'plan_duration' => 'getPlanDuration',
			'interval' => 'getInterval',
			'subscription_on_plan' => 'getSubscriptionOnPlan'
		];
		$this->setAttributes([
			'id' => [
				'type' => 'id',
				'default' => $this->getId(),
				'sanitize' => '',
				'validate' => 'is_string'
			],
			'vendor_id' => [
				'type' => 'string',
				'default' => '',
				'sanitize' => '',
				'validate' => 'is_string'
			]
		]);
	}
}
