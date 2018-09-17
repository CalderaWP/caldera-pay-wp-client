<?php
/**
 * CheckoutPreferences
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
 * CheckoutPreferences Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutPreferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'success_url' => 'string',
        'failure_url' => 'string',
        'notification_url' => 'string',
        'allow_partial_payments' => 'bool',
        'allow_save_card' => 'bool',
        'email_receipt' => 'bool',
        'request_type' => 'string',
        'expire_in_secs' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'success_url' => null,
        'failure_url' => null,
        'notification_url' => null,
        'allow_partial_payments' => null,
        'allow_save_card' => null,
        'email_receipt' => null,
        'request_type' => null,
        'expire_in_secs' => 'int32'
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
        'success_url' => 'success_url',
        'failure_url' => 'failure_url',
        'notification_url' => 'notification_url',
        'allow_partial_payments' => 'allow_partial_payments',
        'allow_save_card' => 'allow_save_card',
        'email_receipt' => 'email_receipt',
        'request_type' => 'request_type',
        'expire_in_secs' => 'expire_in_secs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success_url' => 'setSuccessUrl',
        'failure_url' => 'setFailureUrl',
        'notification_url' => 'setNotificationUrl',
        'allow_partial_payments' => 'setAllowPartialPayments',
        'allow_save_card' => 'setAllowSaveCard',
        'email_receipt' => 'setEmailReceipt',
        'request_type' => 'setRequestType',
        'expire_in_secs' => 'setExpireInSecs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success_url' => 'getSuccessUrl',
        'failure_url' => 'getFailureUrl',
        'notification_url' => 'getNotificationUrl',
        'allow_partial_payments' => 'getAllowPartialPayments',
        'allow_save_card' => 'getAllowSaveCard',
        'email_receipt' => 'getEmailReceipt',
        'request_type' => 'getRequestType',
        'expire_in_secs' => 'getExpireInSecs'
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

    const REQUEST_TYPE_AUTH = 'auth';
    const REQUEST_TYPE_SALE = 'sale';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestTypeAllowableValues()
    {
        return [
            self::REQUEST_TYPE_AUTH,
            self::REQUEST_TYPE_SALE,
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
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        $this->container['failure_url'] = isset($data['failure_url']) ? $data['failure_url'] : null;
        $this->container['notification_url'] = isset($data['notification_url']) ? $data['notification_url'] : null;
        $this->container['allow_partial_payments'] = isset($data['allow_partial_payments']) ? $data['allow_partial_payments'] : null;
        $this->container['allow_save_card'] = isset($data['allow_save_card']) ? $data['allow_save_card'] : null;
        $this->container['email_receipt'] = isset($data['email_receipt']) ? $data['email_receipt'] : null;
        $this->container['request_type'] = isset($data['request_type']) ? $data['request_type'] : null;
        $this->container['expire_in_secs'] = isset($data['expire_in_secs']) ? $data['expire_in_secs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!in_array($this->container['request_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'request_type', must be one of '%s'",
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

        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!in_array($this->container['request_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url A URL to which the customer will be directed after a successful payment. If not defined in the API or within the Checkout Settings, the customer will be directed to the default Qualpay receipt page. Must be formatted as http://www.domain.com/ or https://www.domain.com/.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets failure_url
     *
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->container['failure_url'];
    }

    /**
     * Sets failure_url
     *
     * @param string $failure_url A URL to which the customer will be directed after a failed transaction. If not defined in the API or within the Checkout Settings, the customer will be directed to the  default Qualpay receipt page. Must be formatted as http://www.domain.com/ or https://www.domain.com/.
     *
     * @return $this
     */
    public function setFailureUrl($failure_url)
    {
        $this->container['failure_url'] = $failure_url;

        return $this;
    }

    /**
     * Gets notification_url
     *
     * @return string
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     *
     * @param string $notification_url A merchant provided URL that will be notified whenever a hosted checkout payment is made. Qualpay will send a Post message to the URI.
     *
     * @return $this
     */
    public function setNotificationUrl($notification_url)
    {
        $this->container['notification_url'] = $notification_url;

        return $this;
    }

    /**
     * Gets allow_partial_payments
     *
     * @return bool
     */
    public function getAllowPartialPayments()
    {
        return $this->container['allow_partial_payments'];
    }

    /**
     * Sets allow_partial_payments
     *
     * @param bool $allow_partial_payments If set to true, the customer can make changes to the transaction amount.
     *
     * @return $this
     */
    public function setAllowPartialPayments($allow_partial_payments)
    {
        $this->container['allow_partial_payments'] = $allow_partial_payments;

        return $this;
    }

    /**
     * Gets allow_save_card
     *
     * @return bool
     */
    public function getAllowSaveCard()
    {
        return $this->container['allow_save_card'];
    }

    /**
     * Sets allow_save_card
     *
     * @param bool $allow_save_card Applicable only for checkout associated with a Qualpay customer. If set to true, the checkout page will display the 'Save Card' checkbox that lets the customer decide if the card information can be saved. The customer card information is always updated if this field is set to false.  Default value is false.
     *
     * @return $this
     */
    public function setAllowSaveCard($allow_save_card)
    {
        $this->container['allow_save_card'] = $allow_save_card;

        return $this;
    }

    /**
     * Gets email_receipt
     *
     * @return bool
     */
    public function getEmailReceipt()
    {
        return $this->container['email_receipt'];
    }

    /**
     * Sets email_receipt
     *
     * @param bool $email_receipt If set to true and the customer email address is provided, a receipt is sent to the customer
     *
     * @return $this
     */
    public function setEmailReceipt($email_receipt)
    {
        $this->container['email_receipt'] = $email_receipt;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string $request_type Identifies the type of request when the customer submits the payment data on the checkout page.
     *
     * @return $this
     */
    public function setRequestType($request_type)
    {
        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($request_type) && !in_array($request_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'request_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets expire_in_secs
     *
     * @return int
     */
    public function getExpireInSecs()
    {
        return $this->container['expire_in_secs'];
    }

    /**
     * Sets expire_in_secs
     *
     * @param int $expire_in_secs The time period for which the checkout_link will be valid in seconds. The minimum value for this field is 900 seconds  (5 minutes),  the maximum value is 7776000 (90 days)
     *
     * @return $this
     */
    public function setExpireInSecs($expire_in_secs)
    {
        $this->container['expire_in_secs'] = $expire_in_secs;

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


