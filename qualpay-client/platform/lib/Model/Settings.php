<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Settings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_id' => 'int',
        'merchant_id' => 'int',
        'dba_name' => 'string',
        'payments_accepted' => '\calderaPayQualpayPlatform\Model\Payment[]',
        'payment_profiles' => '\calderaPayQualpayPlatform\Model\PaymentProfile[]',
        'user_login' => 'string',
        'reset_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_id' => 'int64',
        'merchant_id' => 'int64',
        'dba_name' => null,
        'payments_accepted' => null,
        'payment_profiles' => null,
        'user_login' => null,
        'reset_url' => null
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
        'app_id' => 'app_id',
        'merchant_id' => 'merchant_id',
        'dba_name' => 'dba_name',
        'payments_accepted' => 'payments_accepted',
        'payment_profiles' => 'payment_profiles',
        'user_login' => 'user_login',
        'reset_url' => 'reset_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'merchant_id' => 'setMerchantId',
        'dba_name' => 'setDbaName',
        'payments_accepted' => 'setPaymentsAccepted',
        'payment_profiles' => 'setPaymentProfiles',
        'user_login' => 'setUserLogin',
        'reset_url' => 'setResetUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'merchant_id' => 'getMerchantId',
        'dba_name' => 'getDbaName',
        'payments_accepted' => 'getPaymentsAccepted',
        'payment_profiles' => 'getPaymentProfiles',
        'user_login' => 'getUserLogin',
        'reset_url' => 'getResetUrl'
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
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['dba_name'] = isset($data['dba_name']) ? $data['dba_name'] : null;
        $this->container['payments_accepted'] = isset($data['payments_accepted']) ? $data['payments_accepted'] : null;
        $this->container['payment_profiles'] = isset($data['payment_profiles']) ? $data['payment_profiles'] : null;
        $this->container['user_login'] = isset($data['user_login']) ? $data['user_login'] : null;
        $this->container['reset_url'] = isset($data['reset_url']) ? $data['reset_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets app_id
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param int $app_id The application ID for this merchant account.  Only returned if an application exists.
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

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
     * @param int $merchant_id The merchant ID this merchant account.
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets dba_name
     *
     * @return string
     */
    public function getDbaName()
    {
        return $this->container['dba_name'];
    }

    /**
     * Sets dba_name
     *
     * @param string $dba_name The DBA name for the merchant account.
     *
     * @return $this
     */
    public function setDbaName($dba_name)
    {
        $this->container['dba_name'] = $dba_name;

        return $this;
    }

    /**
     * Gets payments_accepted
     *
     * @return \calderaPayQualpayPlatform\Model\Payment[]
     */
    public function getPaymentsAccepted()
    {
        return $this->container['payments_accepted'];
    }

    /**
     * Sets payments_accepted
     *
     * @param \calderaPayQualpayPlatform\Model\Payment[] $payments_accepted An array of the card types and currency accepted by the merchant account.
     *
     * @return $this
     */
    public function setPaymentsAccepted($payments_accepted)
    {
        $this->container['payments_accepted'] = $payments_accepted;

        return $this;
    }

    /**
     * Gets payment_profiles
     *
     * @return \calderaPayQualpayPlatform\Model\PaymentProfile[]
     */
    public function getPaymentProfiles()
    {
        return $this->container['payment_profiles'];
    }

    /**
     * Sets payment_profiles
     *
     * @param \calderaPayQualpayPlatform\Model\PaymentProfile[] $payment_profiles An array payment profiles available for the merchant account.
     *
     * @return $this
     */
    public function setPaymentProfiles($payment_profiles)
    {
        $this->container['payment_profiles'] = $payment_profiles;

        return $this;
    }

    /**
     * Gets user_login
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->container['user_login'];
    }

    /**
     * Sets user_login
     *
     * @param string $user_login The user login created for the merchant account.  Only returned if a new user was requested during account creation.
     *
     * @return $this
     */
    public function setUserLogin($user_login)
    {
        $this->container['user_login'] = $user_login;

        return $this;
    }

    /**
     * Gets reset_url
     *
     * @return string
     */
    public function getResetUrl()
    {
        return $this->container['reset_url'];
    }

    /**
     * Sets reset_url
     *
     * @param string $reset_url The URL to establish a new password for the created user.  Only returned if a new user was requested during account creation.
     *
     * @return $this
     */
    public function setResetUrl($reset_url)
    {
        $this->container['reset_url'] = $reset_url;

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


