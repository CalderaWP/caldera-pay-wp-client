<?php
/**
 * UpdatedDisputeResponse
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
 * UpdatedDisputeResponse Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdatedDisputeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdatedDisputeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'int',
        'message' => 'string',
        'total_pages' => 'int',
        'total_records' => 'int',
        'data' => '\calderaPayQualpayPlatform\Model\DisputeData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => 'int32',
        'message' => null,
        'total_pages' => 'int32',
        'total_records' => 'int32',
        'data' => null
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
        'code' => 'code',
        'message' => 'message',
        'total_pages' => 'totalPages',
        'total_records' => 'totalRecords',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'total_pages' => 'setTotalPages',
        'total_records' => 'setTotalRecords',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'total_pages' => 'getTotalPages',
        'total_records' => 'getTotalRecords',
        'data' => 'getData'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['total_records'] = isset($data['total_records']) ? $data['total_records'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['total_pages'] === null) {
            $invalidProperties[] = "'total_pages' can't be null";
        }
        if ($this->container['total_records'] === null) {
            $invalidProperties[] = "'total_records' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['total_pages'] === null) {
            return false;
        }
        if ($this->container['total_records'] === null) {
            return false;
        }
        if ($this->container['data'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code Response code from API. 0 indicates success. Refer to <a href=\"/developer/api/reference#api-response-codes\"target=\"_blank\">Platform API Response Codes</a> for entire list of return codes.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A short description of the API response code.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages Total Number of pages.
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets total_records
     *
     * @return int
     */
    public function getTotalRecords()
    {
        return $this->container['total_records'];
    }

    /**
     * Sets total_records
     *
     * @param int $total_records Total number of records.
     *
     * @return $this
     */
    public function setTotalRecords($total_records)
    {
        $this->container['total_records'] = $total_records;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \calderaPayQualpayPlatform\Model\DisputeData[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \calderaPayQualpayPlatform\Model\DisputeData[] $data An array of the resource object.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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


