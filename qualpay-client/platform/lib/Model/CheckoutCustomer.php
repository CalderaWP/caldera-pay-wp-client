<?php
/**
 * CheckoutCustomer
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
 * CheckoutCustomer Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutCustomer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_first_name' => 'string',
        'customer_last_name' => 'string',
        'customer_email' => 'string',
        'billing_addr1' => 'string',
        'billing_city' => 'string',
        'billing_state' => 'string',
        'billing_zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_first_name' => null,
        'customer_last_name' => null,
        'customer_email' => null,
        'billing_addr1' => null,
        'billing_city' => null,
        'billing_state' => null,
        'billing_zip' => null
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
        'customer_first_name' => 'customer_first_name',
        'customer_last_name' => 'customer_last_name',
        'customer_email' => 'customer_email',
        'billing_addr1' => 'billing_addr1',
        'billing_city' => 'billing_city',
        'billing_state' => 'billing_state',
        'billing_zip' => 'billing_zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_first_name' => 'setCustomerFirstName',
        'customer_last_name' => 'setCustomerLastName',
        'customer_email' => 'setCustomerEmail',
        'billing_addr1' => 'setBillingAddr1',
        'billing_city' => 'setBillingCity',
        'billing_state' => 'setBillingState',
        'billing_zip' => 'setBillingZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_first_name' => 'getCustomerFirstName',
        'customer_last_name' => 'getCustomerLastName',
        'customer_email' => 'getCustomerEmail',
        'billing_addr1' => 'getBillingAddr1',
        'billing_city' => 'getBillingCity',
        'billing_state' => 'getBillingState',
        'billing_zip' => 'getBillingZip'
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
        $this->container['customer_first_name'] = isset($data['customer_first_name']) ? $data['customer_first_name'] : null;
        $this->container['customer_last_name'] = isset($data['customer_last_name']) ? $data['customer_last_name'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['billing_addr1'] = isset($data['billing_addr1']) ? $data['billing_addr1'] : null;
        $this->container['billing_city'] = isset($data['billing_city']) ? $data['billing_city'] : null;
        $this->container['billing_state'] = isset($data['billing_state']) ? $data['billing_state'] : null;
        $this->container['billing_zip'] = isset($data['billing_zip']) ? $data['billing_zip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['billing_zip'] === null) {
            $invalidProperties[] = "'billing_zip' can't be null";
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

        if ($this->container['billing_zip'] === null) {
            return false;
        }
        return true;
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
     * @param string $customer_first_name First name input by the customer on checkout. Can contain upto 32 characters.
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
     * @param string $customer_last_name Last name input by the customer on checkout. Can contain upto 32 characters.
     *
     * @return $this
     */
    public function setCustomerLastName($customer_last_name)
    {
        $this->container['customer_last_name'] = $customer_last_name;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string $customer_email Email input by the customer on checkout.
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets billing_addr1
     *
     * @return string
     */
    public function getBillingAddr1()
    {
        return $this->container['billing_addr1'];
    }

    /**
     * Sets billing_addr1
     *
     * @param string $billing_addr1 Billing street address input by the customer on checkout. This address will also used for AVS verification if AVS verificaiton is enabled.
     *
     * @return $this
     */
    public function setBillingAddr1($billing_addr1)
    {
        $this->container['billing_addr1'] = $billing_addr1;

        return $this;
    }

    /**
     * Gets billing_city
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->container['billing_city'];
    }

    /**
     * Sets billing_city
     *
     * @param string $billing_city Billing city input by the customer on checkout.
     *
     * @return $this
     */
    public function setBillingCity($billing_city)
    {
        $this->container['billing_city'] = $billing_city;

        return $this;
    }

    /**
     * Gets billing_state
     *
     * @return string
     */
    public function getBillingState()
    {
        return $this->container['billing_state'];
    }

    /**
     * Sets billing_state
     *
     * @param string $billing_state Billing state input by the customer on checkout.
     *
     * @return $this
     */
    public function setBillingState($billing_state)
    {
        $this->container['billing_state'] = $billing_state;

        return $this;
    }

    /**
     * Gets billing_zip
     *
     * @return string
     */
    public function getBillingZip()
    {
        return $this->container['billing_zip'];
    }

    /**
     * Sets billing_zip
     *
     * @param string $billing_zip Billing zip input by the customer on checkout.
     *
     * @return $this
     */
    public function setBillingZip($billing_zip)
    {
        $this->container['billing_zip'] = $billing_zip;

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


