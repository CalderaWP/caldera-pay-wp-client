<?php
/**
 * PGApiVoidRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  calderaPayQualpayPaymentGateway
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Qualpay Payment Gateway API
 *
 * This document describes the Qualpay Payment Gateway API.
 *
 * OpenAPI spec version: 1.7
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace calderaPayQualpayPaymentGateway\Model;

use \ArrayAccess;
use \calderaPayQualpayPaymentGateway\ObjectSerializer;

/**
 * PGApiVoidRequest Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPaymentGateway
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PGApiVoidRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PGApiVoidRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'int',
        'developer_id' => 'string',
        'echo_fields' => 'string',
        'loc_id' => 'string',
        'profile_id' => 'string',
        'report_data' => 'string',
        'retry_id' => 'int',
        'session_id' => 'string',
        'user_id' => 'int',
        'vendor_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_id' => 'int64',
        'developer_id' => null,
        'echo_fields' => null,
        'loc_id' => null,
        'profile_id' => null,
        'report_data' => null,
        'retry_id' => 'int64',
        'session_id' => null,
        'user_id' => 'int64',
        'vendor_id' => 'int64'
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
        'merchant_id' => 'merchant_id',
        'developer_id' => 'developer_id',
        'echo_fields' => 'echo_fields',
        'loc_id' => 'loc_id',
        'profile_id' => 'profile_id',
        'report_data' => 'report_data',
        'retry_id' => 'retry_id',
        'session_id' => 'session_id',
        'user_id' => 'user_id',
        'vendor_id' => 'vendor_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'developer_id' => 'setDeveloperId',
        'echo_fields' => 'setEchoFields',
        'loc_id' => 'setLocId',
        'profile_id' => 'setProfileId',
        'report_data' => 'setReportData',
        'retry_id' => 'setRetryId',
        'session_id' => 'setSessionId',
        'user_id' => 'setUserId',
        'vendor_id' => 'setVendorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'developer_id' => 'getDeveloperId',
        'echo_fields' => 'getEchoFields',
        'loc_id' => 'getLocId',
        'profile_id' => 'getProfileId',
        'report_data' => 'getReportData',
        'retry_id' => 'getRetryId',
        'session_id' => 'getSessionId',
        'user_id' => 'getUserId',
        'vendor_id' => 'getVendorId'
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
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['developer_id'] = isset($data['developer_id']) ? $data['developer_id'] : null;
        $this->container['echo_fields'] = isset($data['echo_fields']) ? $data['echo_fields'] : null;
        $this->container['loc_id'] = isset($data['loc_id']) ? $data['loc_id'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['report_data'] = isset($data['report_data']) ? $data['report_data'] : null;
        $this->container['retry_id'] = isset($data['retry_id']) ? $data['retry_id'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
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

        if ($this->container['merchant_id'] === null) {
            return false;
        }
        return true;
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
     * @param int $merchant_id <strong>Format: </strong>Variable length, up to 12 N<br><strong>Description: </strong>Unique identifier on the Qualpay system.
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets developer_id
     *
     * @return string
     */
    public function getDeveloperId()
    {
        return $this->container['developer_id'];
    }

    /**
     * Sets developer_id
     *
     * @param string $developer_id <strong>Format: </strong>Variable length, up to 16 AN<br><strong>Description: </strong>Used to indicate which company developed the integration to the Qualpay Payment Gateway. This may also be used to provide the payment solution name that is connected to the Qualpay Payment Gateway.
     *
     * @return $this
     */
    public function setDeveloperId($developer_id)
    {
        $this->container['developer_id'] = $developer_id;

        return $this;
    }

    /**
     * Gets echo_fields
     *
     * @return string
     */
    public function getEchoFields()
    {
        return $this->container['echo_fields'];
    }

    /**
     * Sets echo_fields
     *
     * @param string $echo_fields <strong>Format: </strong>Variable length<br><strong>Description: </strong>This field contains a JSON array of field data that will be echoed back in the response message.
     *
     * @return $this
     */
    public function setEchoFields($echo_fields)
    {
        $this->container['echo_fields'] = $echo_fields;

        return $this;
    }

    /**
     * Gets loc_id
     *
     * @return string
     */
    public function getLocId()
    {
        return $this->container['loc_id'];
    }

    /**
     * Sets loc_id
     *
     * @param string $loc_id <strong>Format: </strong>Variable length, up to 4 N<br><strong>Description: </strong>When a merchant has more than one location using the same currency, this value is used to specify the specific location for this request.
     *
     * @return $this
     */
    public function setLocId($loc_id)
    {
        $this->container['loc_id'] = $loc_id;

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
     * @param string $profile_id <strong>Format: </strong>Fixed length, 20 N<br><strong>Description: </strong>Explicitly identifies which Payment Gateway profile should be used for the request.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets report_data
     *
     * @return string
     */
    public function getReportData()
    {
        return $this->container['report_data'];
    }

    /**
     * Sets report_data
     *
     * @param string $report_data <strong>Format: </strong>Variable length<br><strong>Description: </strong>This field contains a JSON array of field data that will be included with the transaction data reported in Qualpay Manager.
     *
     * @return $this
     */
    public function setReportData($report_data)
    {
        $this->container['report_data'] = $report_data;

        return $this;
    }

    /**
     * Gets retry_id
     *
     * @return int
     */
    public function getRetryId()
    {
        return $this->container['retry_id'];
    }

    /**
     * Sets retry_id
     *
     * @param int $retry_id <strong>Format: </strong>Variable length, up to 15 N<br><strong>Description: </strong>This field contains a merchant generated number used to identify the request. This value must be unique within the last 24 hours. When present, the payment gateway will use the retry_attempt to determine whether the message is new or a retry of a previous message.
     *
     * @return $this
     */
    public function setRetryId($retry_id)
    {
        $this->container['retry_id'] = $retry_id;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id INTERNAL USE ONLY.
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id INTERNAL USE ONLY.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param int $vendor_id <strong>Format: </strong>Variable length, up to 12 N<br><strong>Description: </strong>Identifies the vendor to which this void request applies.
     *
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

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


