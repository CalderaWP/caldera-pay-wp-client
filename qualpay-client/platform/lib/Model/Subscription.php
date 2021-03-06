<?php
/**
 * Subscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Qualpay Platform API
 *
 * This document describes the Qualpay Platform API.
 *
 * OpenAPI spec version: 1.1.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace calderaPayQualpayPlatform\Model;

use \ArrayAccess;
use \calderaPayQualpayPlatform\ObjectSerializer;

/**
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subscription_id' => 'int',
        'merchant_id' => 'int',
        'customer_id' => 'string',
        'status' => 'string',
        'profile_id' => 'string',
        'plan_id' => 'int',
        'plan_name' => 'string',
        'plan_code' => 'string',
        'customer_first_name' => 'string',
        'customer_last_name' => 'string',
        'date_start' => 'string',
        'date_next' => 'string',
        'date_end' => 'string',
        'amt_setup' => 'float',
        'prorate_date_start' => 'string',
        'prorate_amt' => 'float',
        'trial_date_start' => 'string',
        'trial_date_end' => 'string',
        'trial_amt' => 'float',
        'recur_date_start' => 'string',
        'recur_date_end' => 'string',
        'recur_amt' => 'float',
        'response' => '\calderaPayQualpayPlatform\Model\GatewayResponse',
        'tran_currency' => 'string',
        'plan_desc' => 'string',
        'plan_frequency' => 'int',
        'plan_duration' => 'int',
        'interval' => 'int',
        'subscription_on_plan' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subscription_id' => 'int64',
        'merchant_id' => 'int64',
        'customer_id' => null,
        'status' => null,
        'profile_id' => null,
        'plan_id' => 'int64',
        'plan_name' => null,
        'plan_code' => null,
        'customer_first_name' => null,
        'customer_last_name' => null,
        'date_start' => null,
        'date_next' => null,
        'date_end' => null,
        'amt_setup' => null,
        'prorate_date_start' => null,
        'prorate_amt' => null,
        'trial_date_start' => null,
        'trial_date_end' => null,
        'trial_amt' => null,
        'recur_date_start' => null,
        'recur_date_end' => null,
        'recur_amt' => null,
        'response' => null,
        'tran_currency' => null,
        'plan_desc' => null,
        'plan_frequency' => 'int32',
        'plan_duration' => 'int32',
        'interval' => 'int32',
        'subscription_on_plan' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'subscription_id' => 'subscription_id',
        'merchant_id' => 'merchant_id',
        'customer_id' => 'customer_id',
        'status' => 'status',
        'profile_id' => 'profile_id',
        'plan_id' => 'plan_id',
        'plan_name' => 'plan_name',
        'plan_code' => 'plan_code',
        'customer_first_name' => 'customer_first_name',
        'customer_last_name' => 'customer_last_name',
        'date_start' => 'date_start',
        'date_next' => 'date_next',
        'date_end' => 'date_end',
        'amt_setup' => 'amt_setup',
        'prorate_date_start' => 'prorate_date_start',
        'prorate_amt' => 'prorate_amt',
        'trial_date_start' => 'trial_date_start',
        'trial_date_end' => 'trial_date_end',
        'trial_amt' => 'trial_amt',
        'recur_date_start' => 'recur_date_start',
        'recur_date_end' => 'recur_date_end',
        'recur_amt' => 'recur_amt',
        'response' => 'response',
        'tran_currency' => 'tran_currency',
        'plan_desc' => 'plan_desc',
        'plan_frequency' => 'plan_frequency',
        'plan_duration' => 'plan_duration',
        'interval' => 'interval',
        'subscription_on_plan' => 'subscription_on_plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_id' => 'setSubscriptionId',
        'merchant_id' => 'setMerchantId',
        'customer_id' => 'setCustomerId',
        'status' => 'setStatus',
        'profile_id' => 'setProfileId',
        'plan_id' => 'setPlanId',
        'plan_name' => 'setPlanName',
        'plan_code' => 'setPlanCode',
        'customer_first_name' => 'setCustomerFirstName',
        'customer_last_name' => 'setCustomerLastName',
        'date_start' => 'setDateStart',
        'date_next' => 'setDateNext',
        'date_end' => 'setDateEnd',
        'amt_setup' => 'setAmtSetup',
        'prorate_date_start' => 'setProrateDateStart',
        'prorate_amt' => 'setProrateAmt',
        'trial_date_start' => 'setTrialDateStart',
        'trial_date_end' => 'setTrialDateEnd',
        'trial_amt' => 'setTrialAmt',
        'recur_date_start' => 'setRecurDateStart',
        'recur_date_end' => 'setRecurDateEnd',
        'recur_amt' => 'setRecurAmt',
        'response' => 'setResponse',
        'tran_currency' => 'setTranCurrency',
        'plan_desc' => 'setPlanDesc',
        'plan_frequency' => 'setPlanFrequency',
        'plan_duration' => 'setPlanDuration',
        'interval' => 'setInterval',
        'subscription_on_plan' => 'setSubscriptionOnPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_A = 'A';
    const STATUS_D = 'D';
    const STATUS_P = 'P';
    const STATUS_C = 'C';
    const STATUS_S = 'S';
    const PLAN_FREQUENCY_0 = 0;
    const PLAN_FREQUENCY_1 = 1;
    const PLAN_FREQUENCY_3 = 3;
    const PLAN_FREQUENCY_4 = 4;
    const PLAN_FREQUENCY_5 = 5;
    const PLAN_FREQUENCY_6 = 6;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_A,
            self::STATUS_D,
            self::STATUS_P,
            self::STATUS_C,
            self::STATUS_S,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlanFrequencyAllowableValues()
    {
        return [
            self::PLAN_FREQUENCY_0,
            self::PLAN_FREQUENCY_1,
            self::PLAN_FREQUENCY_3,
            self::PLAN_FREQUENCY_4,
            self::PLAN_FREQUENCY_5,
            self::PLAN_FREQUENCY_6,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['plan_code'] = isset($data['plan_code']) ? $data['plan_code'] : null;
        $this->container['customer_first_name'] = isset($data['customer_first_name']) ? $data['customer_first_name'] : null;
        $this->container['customer_last_name'] = isset($data['customer_last_name']) ? $data['customer_last_name'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['date_next'] = isset($data['date_next']) ? $data['date_next'] : null;
        $this->container['date_end'] = isset($data['date_end']) ? $data['date_end'] : null;
        $this->container['amt_setup'] = isset($data['amt_setup']) ? $data['amt_setup'] : null;
        $this->container['prorate_date_start'] = isset($data['prorate_date_start']) ? $data['prorate_date_start'] : null;
        $this->container['prorate_amt'] = isset($data['prorate_amt']) ? $data['prorate_amt'] : null;
        $this->container['trial_date_start'] = isset($data['trial_date_start']) ? $data['trial_date_start'] : null;
        $this->container['trial_date_end'] = isset($data['trial_date_end']) ? $data['trial_date_end'] : null;
        $this->container['trial_amt'] = isset($data['trial_amt']) ? $data['trial_amt'] : null;
        $this->container['recur_date_start'] = isset($data['recur_date_start']) ? $data['recur_date_start'] : null;
        $this->container['recur_date_end'] = isset($data['recur_date_end']) ? $data['recur_date_end'] : null;
        $this->container['recur_amt'] = isset($data['recur_amt']) ? $data['recur_amt'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['tran_currency'] = isset($data['tran_currency']) ? $data['tran_currency'] : null;
        $this->container['plan_desc'] = isset($data['plan_desc']) ? $data['plan_desc'] : null;
        $this->container['plan_frequency'] = isset($data['plan_frequency']) ? $data['plan_frequency'] : null;
        $this->container['plan_duration'] = isset($data['plan_duration']) ? $data['plan_duration'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['subscription_on_plan'] = isset($data['subscription_on_plan']) ? $data['subscription_on_plan'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPlanFrequencyAllowableValues();
        if (!in_array($this->container['plan_frequency'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'plan_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPlanFrequencyAllowableValues();
        if (!in_array($this->container['plan_frequency'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets subscription_id
     *
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param int $subscription_id Qualpay generated ID that identifies a subscription
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int $merchant_id Unique ID assigned by Qualpay for a Merchant
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id Unique ID that identifies a customer
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the subscription. Following are descriptions of the statuses              <ul>              <li>A - Active</li>              <li>D - Complete</li>              <li>P - Paused</li>              <li>C - Cancelled</li>              <li>S - Suspended</li>              </ul>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id The unique profile ID to be used in payment gateway requests.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return int
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param int $plan_id Qualpay generated ID that identifies a Recurring Plan
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string $plan_name A Name assigned by Merchant to a plan. Name should be unique for a merchant
     *
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_code
     *
     * @return string
     */
    public function getPlanCode()
    {
        return $this->container['plan_code'];
    }

    /**
     * Sets plan_code
     *
     * @param string $plan_code A Code assigned by Merchant to a plan. Should be Unique
     *
     * @return $this
     */
    public function setPlanCode($plan_code)
    {
        $this->container['plan_code'] = $plan_code;

        return $this;
    }

    /**
     * Gets customer_first_name
     *
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->container['customer_first_name'];
    }

    /**
     * Sets customer_first_name
     *
     * @param string $customer_first_name First name of the Plan subscriber
     *
     * @return $this
     */
    public function setCustomerFirstName($customer_first_name)
    {
        $this->container['customer_first_name'] = $customer_first_name;

        return $this;
    }

    /**
     * Gets customer_last_name
     *
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->container['customer_last_name'];
    }

    /**
     * Sets customer_last_name
     *
     * @param string $customer_last_name Last name of the Plan subscriber
     *
     * @return $this
     */
    public function setCustomerLastName($customer_last_name)
    {
        $this->container['customer_last_name'] = $customer_last_name;

        return $this;
    }

    /**
     * Gets date_start
     *
     * @return string
     */
    public function getDateStart()
    {
        return $this->container['date_start'];
    }

    /**
     * Sets date_start
     *
     * @param string $date_start Start Date of subscription. When adding a subscription, the start date should be in future.
     *
     * @return $this
     */
    public function setDateStart($date_start)
    {
        $this->container['date_start'] = $date_start;

        return $this;
    }

    /**
     * Gets date_next
     *
     * @return string
     */
    public function getDateNext()
    {
        return $this->container['date_next'];
    }

    /**
     * Sets date_next
     *
     * @param string $date_next Next Billing date of subscription. This field will be empty for cancelled and completed subscriptions.
     *
     * @return $this
     */
    public function setDateNext($date_next)
    {
        $this->container['date_next'] = $date_next;

        return $this;
    }

    /**
     * Gets date_end
     *
     * @return string
     */
    public function getDateEnd()
    {
        return $this->container['date_end'];
    }

    /**
     * Sets date_end
     *
     * @param string $date_end Date when the subscription will end.
     *
     * @return $this
     */
    public function setDateEnd($date_end)
    {
        $this->container['date_end'] = $date_end;

        return $this;
    }

    /**
     * Gets amt_setup
     *
     * @return float
     */
    public function getAmtSetup()
    {
        return $this->container['amt_setup'];
    }

    /**
     * Sets amt_setup
     *
     * @param float $amt_setup One-Time Fee amount. This fee will be charged when a subscription is added.
     *
     * @return $this
     */
    public function setAmtSetup($amt_setup)
    {
        $this->container['amt_setup'] = $amt_setup;

        return $this;
    }

    /**
     * Gets prorate_date_start
     *
     * @return string
     */
    public function getProrateDateStart()
    {
        return $this->container['prorate_date_start'];
    }

    /**
     * Sets prorate_date_start
     *
     * @param string $prorate_date_start If first payment is prorated, the date the customer will be billed the prorate amount.
     *
     * @return $this
     */
    public function setProrateDateStart($prorate_date_start)
    {
        $this->container['prorate_date_start'] = $prorate_date_start;

        return $this;
    }

    /**
     * Gets prorate_amt
     *
     * @return float
     */
    public function getProrateAmt()
    {
        return $this->container['prorate_amt'];
    }

    /**
     * Sets prorate_amt
     *
     * @param float $prorate_amt If first payment is prorated, the Prorate amount
     *
     * @return $this
     */
    public function setProrateAmt($prorate_amt)
    {
        $this->container['prorate_amt'] = $prorate_amt;

        return $this;
    }

    /**
     * Gets trial_date_start
     *
     * @return string
     */
    public function getTrialDateStart()
    {
        return $this->container['trial_date_start'];
    }

    /**
     * Sets trial_date_start
     *
     * @param string $trial_date_start If there is a trial period, the start date of the trial period.
     *
     * @return $this
     */
    public function setTrialDateStart($trial_date_start)
    {
        $this->container['trial_date_start'] = $trial_date_start;

        return $this;
    }

    /**
     * Gets trial_date_end
     *
     * @return string
     */
    public function getTrialDateEnd()
    {
        return $this->container['trial_date_end'];
    }

    /**
     * Sets trial_date_end
     *
     * @param string $trial_date_end If there is a trial period, the end date of the trial period
     *
     * @return $this
     */
    public function setTrialDateEnd($trial_date_end)
    {
        $this->container['trial_date_end'] = $trial_date_end;

        return $this;
    }

    /**
     * Gets trial_amt
     *
     * @return float
     */
    public function getTrialAmt()
    {
        return $this->container['trial_amt'];
    }

    /**
     * Sets trial_amt
     *
     * @param float $trial_amt If there is a trial period, the amount billed during the trial period. Should be a positive amount.
     *
     * @return $this
     */
    public function setTrialAmt($trial_amt)
    {
        $this->container['trial_amt'] = $trial_amt;

        return $this;
    }

    /**
     * Gets recur_date_start
     *
     * @return string
     */
    public function getRecurDateStart()
    {
        return $this->container['recur_date_start'];
    }

    /**
     * Sets recur_date_start
     *
     * @param string $recur_date_start Date Regular billing cycle will start.
     *
     * @return $this
     */
    public function setRecurDateStart($recur_date_start)
    {
        $this->container['recur_date_start'] = $recur_date_start;

        return $this;
    }

    /**
     * Gets recur_date_end
     *
     * @return string
     */
    public function getRecurDateEnd()
    {
        return $this->container['recur_date_end'];
    }

    /**
     * Sets recur_date_end
     *
     * @param string $recur_date_end Date Regular billing cycle will end.
     *
     * @return $this
     */
    public function setRecurDateEnd($recur_date_end)
    {
        $this->container['recur_date_end'] = $recur_date_end;

        return $this;
    }

    /**
     * Gets recur_amt
     *
     * @return float
     */
    public function getRecurAmt()
    {
        return $this->container['recur_amt'];
    }

    /**
     * Sets recur_amt
     *
     * @param float $recur_amt Regular Billing Amount. Amount should be a positive amount.
     *
     * @return $this
     */
    public function setRecurAmt($recur_amt)
    {
        $this->container['recur_amt'] = $recur_amt;

        return $this;
    }

    /**
     * Gets response
     *
     * @return \calderaPayQualpayPlatform\Model\GatewayResponse
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \calderaPayQualpayPlatform\Model\GatewayResponse $response Response from Gateway for one time set up fee transactions. Valid only when adding subscriptions with one time fee.
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets tran_currency
     *
     * @return string
     */
    public function getTranCurrency()
    {
        return $this->container['tran_currency'];
    }

    /**
     * Sets tran_currency
     *
     * @param string $tran_currency This field contains the ISO numeric currency code for the transaction.
     *
     * @return $this
     */
    public function setTranCurrency($tran_currency)
    {
        $this->container['tran_currency'] = $tran_currency;

        return $this;
    }

    /**
     * Gets plan_desc
     *
     * @return string
     */
    public function getPlanDesc()
    {
        return $this->container['plan_desc'];
    }

    /**
     * Sets plan_desc
     *
     * @param string $plan_desc A short description of the  plan, can be one off plan.
     *
     * @return $this
     */
    public function setPlanDesc($plan_desc)
    {
        $this->container['plan_desc'] = $plan_desc;

        return $this;
    }

    /**
     * Gets plan_frequency
     *
     * @return int
     */
    public function getPlanFrequency()
    {
        return $this->container['plan_frequency'];
    }

    /**
     * Sets plan_frequency
     *
     * @param int $plan_frequency This field identifies the frequency of billing. Use one of the following codes for frequency. <ul>      <li>0 - Weekly</li>      <li>1 - Bi-Weekly</li>      <li>3 - Monthly</li>      <li>4 - Quarterly</li>      <li>5 - BiAnnually</li>      <li>6 - Annually</li>   </ul>
     *
     * @return $this
     */
    public function setPlanFrequency($plan_frequency)
    {
        $allowedValues = $this->getPlanFrequencyAllowableValues();
        if (!is_null($plan_frequency) && !in_array($plan_frequency, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'plan_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['plan_frequency'] = $plan_frequency;

        return $this;
    }

    /**
     * Gets plan_duration
     *
     * @return int
     */
    public function getPlanDuration()
    {
        return $this->container['plan_duration'];
    }

    /**
     * Sets plan_duration
     *
     * @param int $plan_duration Number of billing cycles in the recurring transaction, -1 indicates bill until cancelled
     *
     * @return $this
     */
    public function setPlanDuration($plan_duration)
    {
        $this->container['plan_duration'] = $plan_duration;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval Applicable only for monthly frequency. Number of months in a subscription cycle.
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets subscription_on_plan
     *
     * @return bool
     */
    public function getSubscriptionOnPlan()
    {
        return $this->container['subscription_on_plan'];
    }

    /**
     * Sets subscription_on_plan
     *
     * @param bool $subscription_on_plan True for subscriptions associated with a plan. False for one off subscriptions
     *
     * @return $this
     */
    public function setSubscriptionOnPlan($subscription_on_plan)
    {
        $this->container['subscription_on_plan'] = $subscription_on_plan;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


