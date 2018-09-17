<?php
/**
 * Customer
 *
 * PHP version 5
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
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

namespace calderaPayQualpayPlatform\Model;

use \ArrayAccess;
use \calderaPayQualpayPlatform\ObjectSerializer;

/**
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_addr1' => 'string',
        'billing_addr2' => 'string',
        'billing_city' => 'string',
        'billing_country' => 'string',
        'billing_country_code' => 'string',
        'billing_state' => 'string',
        'billing_zip' => 'string',
        'billing_zip4' => 'string',
        'customer_email' => 'string',
        'customer_firm_name' => 'string',
        'customer_first_name' => 'string',
        'customer_last_name' => 'string',
        'customer_phone' => 'string',
        'shipping_addresses' => '\calderaPayQualpayPlatform\Model\ShippingAddress[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_addr1' => null,
        'billing_addr2' => null,
        'billing_city' => null,
        'billing_country' => null,
        'billing_country_code' => null,
        'billing_state' => null,
        'billing_zip' => null,
        'billing_zip4' => null,
        'customer_email' => null,
        'customer_firm_name' => null,
        'customer_first_name' => null,
        'customer_last_name' => null,
        'customer_phone' => null,
        'shipping_addresses' => null
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
        'billing_addr1' => 'billing_addr1',
        'billing_addr2' => 'billing_addr2',
        'billing_city' => 'billing_city',
        'billing_country' => 'billing_country',
        'billing_country_code' => 'billing_country_code',
        'billing_state' => 'billing_state',
        'billing_zip' => 'billing_zip',
        'billing_zip4' => 'billing_zip4',
        'customer_email' => 'customer_email',
        'customer_firm_name' => 'customer_firm_name',
        'customer_first_name' => 'customer_first_name',
        'customer_last_name' => 'customer_last_name',
        'customer_phone' => 'customer_phone',
        'shipping_addresses' => 'shipping_addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_addr1' => 'setBillingAddr1',
        'billing_addr2' => 'setBillingAddr2',
        'billing_city' => 'setBillingCity',
        'billing_country' => 'setBillingCountry',
        'billing_country_code' => 'setBillingCountryCode',
        'billing_state' => 'setBillingState',
        'billing_zip' => 'setBillingZip',
        'billing_zip4' => 'setBillingZip4',
        'customer_email' => 'setCustomerEmail',
        'customer_firm_name' => 'setCustomerFirmName',
        'customer_first_name' => 'setCustomerFirstName',
        'customer_last_name' => 'setCustomerLastName',
        'customer_phone' => 'setCustomerPhone',
        'shipping_addresses' => 'setShippingAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_addr1' => 'getBillingAddr1',
        'billing_addr2' => 'getBillingAddr2',
        'billing_city' => 'getBillingCity',
        'billing_country' => 'getBillingCountry',
        'billing_country_code' => 'getBillingCountryCode',
        'billing_state' => 'getBillingState',
        'billing_zip' => 'getBillingZip',
        'billing_zip4' => 'getBillingZip4',
        'customer_email' => 'getCustomerEmail',
        'customer_firm_name' => 'getCustomerFirmName',
        'customer_first_name' => 'getCustomerFirstName',
        'customer_last_name' => 'getCustomerLastName',
        'customer_phone' => 'getCustomerPhone',
        'shipping_addresses' => 'getShippingAddresses'
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
        $this->container['billing_addr1'] = isset($data['billing_addr1']) ? $data['billing_addr1'] : null;
        $this->container['billing_addr2'] = isset($data['billing_addr2']) ? $data['billing_addr2'] : null;
        $this->container['billing_city'] = isset($data['billing_city']) ? $data['billing_city'] : null;
        $this->container['billing_country'] = isset($data['billing_country']) ? $data['billing_country'] : null;
        $this->container['billing_country_code'] = isset($data['billing_country_code']) ? $data['billing_country_code'] : null;
        $this->container['billing_state'] = isset($data['billing_state']) ? $data['billing_state'] : null;
        $this->container['billing_zip'] = isset($data['billing_zip']) ? $data['billing_zip'] : null;
        $this->container['billing_zip4'] = isset($data['billing_zip4']) ? $data['billing_zip4'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['customer_firm_name'] = isset($data['customer_firm_name']) ? $data['customer_firm_name'] : null;
        $this->container['customer_first_name'] = isset($data['customer_first_name']) ? $data['customer_first_name'] : null;
        $this->container['customer_last_name'] = isset($data['customer_last_name']) ? $data['customer_last_name'] : null;
        $this->container['customer_phone'] = isset($data['customer_phone']) ? $data['customer_phone'] : null;
        $this->container['shipping_addresses'] = isset($data['shipping_addresses']) ? $data['shipping_addresses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer_first_name'] === null) {
            $invalidProperties[] = "'customer_first_name' can't be null";
        }
        if ($this->container['customer_last_name'] === null) {
            $invalidProperties[] = "'customer_last_name' can't be null";
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

        if ($this->container['customer_first_name'] === null) {
            return false;
        }
        if ($this->container['customer_last_name'] === null) {
            return false;
        }
        return true;
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
     * @param string $billing_addr1 <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing address street.
     *
     * @return $this
     */
    public function setBillingAddr1($billing_addr1)
    {
        $this->container['billing_addr1'] = $billing_addr1;

        return $this;
    }

    /**
     * Gets billing_addr2
     *
     * @return string
     */
    public function getBillingAddr2()
    {
        return $this->container['billing_addr2'];
    }

    /**
     * Sets billing_addr2
     *
     * @param string $billing_addr2 <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing address, line 2.
     *
     * @return $this
     */
    public function setBillingAddr2($billing_addr2)
    {
        $this->container['billing_addr2'] = $billing_addr2;

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
     * @param string $billing_city <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing city.
     *
     * @return $this
     */
    public function setBillingCity($billing_city)
    {
        $this->container['billing_city'] = $billing_city;

        return $this;
    }

    /**
     * Gets billing_country
     *
     * @return string
     */
    public function getBillingCountry()
    {
        return $this->container['billing_country'];
    }

    /**
     * Sets billing_country
     *
     * @param string $billing_country <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing country.
     *
     * @return $this
     */
    public function setBillingCountry($billing_country)
    {
        $this->container['billing_country'] = $billing_country;

        return $this;
    }

    /**
     * Gets billing_country_code
     *
     * @return string
     */
    public function getBillingCountryCode()
    {
        return $this->container['billing_country_code'];
    }

    /**
     * Sets billing_country_code
     *
     * @param string $billing_country_code <strong>Format: </strong>Fixed length, 3 N<br><strong>Description: </strong>ISO numeric country code for the billing address. Refer to <a href=\"/developer/api/reference#country-codes\"target=\"_blank\">Country Codes</a> for a list of country codes.
     *
     * @return $this
     */
    public function setBillingCountryCode($billing_country_code)
    {
        $this->container['billing_country_code'] = $billing_country_code;

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
     * @param string $billing_state <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing state (abbreviated).
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
     * @param string $billing_zip <strong>Format: </strong>Variable length<br><strong>Description: </strong>Customer billing zip code.
     *
     * @return $this
     */
    public function setBillingZip($billing_zip)
    {
        $this->container['billing_zip'] = $billing_zip;

        return $this;
    }

    /**
     * Gets billing_zip4
     *
     * @return string
     */
    public function getBillingZip4()
    {
        return $this->container['billing_zip4'];
    }

    /**
     * Sets billing_zip4
     *
     * @param string $billing_zip4 <strong>Format: </strong>Fixed length, 4 N<br><strong>Description: </strong>Customer billing zip+4 code if applicable.
     *
     * @return $this
     */
    public function setBillingZip4($billing_zip4)
    {
        $this->container['billing_zip4'] = $billing_zip4;

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
     * @param string $customer_email <strong>Format: </strong>Variable length, up to 64 AN<br><strong>Description: </strong>Customer e-mail address.
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets customer_firm_name
     *
     * @return string
     */
    public function getCustomerFirmName()
    {
        return $this->container['customer_firm_name'];
    }

    /**
     * Sets customer_firm_name
     *
     * @param string $customer_firm_name <strong>Format: </strong>Variable length, up to 64 AN<br><strong>Description: </strong>Customer Business name if applicable.
     *
     * @return $this
     */
    public function setCustomerFirmName($customer_firm_name)
    {
        $this->container['customer_firm_name'] = $customer_firm_name;

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
     * @param string $customer_first_name <strong>Format: </strong>Variable length, up to 32 AN<br><strong>Description: </strong>Customer first name.
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
     * @param string $customer_last_name <strong>Format: </strong>Variable length, up to 32 AN<br><strong>Description: </strong>Customer last name.
     *
     * @return $this
     */
    public function setCustomerLastName($customer_last_name)
    {
        $this->container['customer_last_name'] = $customer_last_name;

        return $this;
    }

    /**
     * Gets customer_phone
     *
     * @return string
     */
    public function getCustomerPhone()
    {
        return $this->container['customer_phone'];
    }

    /**
     * Sets customer_phone
     *
     * @param string $customer_phone <strong>Format: </strong>Variable length, up to 16 N<br><strong>Description: </strong>Customer phone number.
     *
     * @return $this
     */
    public function setCustomerPhone($customer_phone)
    {
        $this->container['customer_phone'] = $customer_phone;

        return $this;
    }

    /**
     * Gets shipping_addresses
     *
     * @return \calderaPayQualpayPlatform\Model\ShippingAddress[]
     */
    public function getShippingAddresses()
    {
        return $this->container['shipping_addresses'];
    }

    /**
     * Sets shipping_addresses
     *
     * @param \calderaPayQualpayPlatform\Model\ShippingAddress[] $shipping_addresses List of shipping addresses for customer.
     *
     * @return $this
     */
    public function setShippingAddresses($shipping_addresses)
    {
        $this->container['shipping_addresses'] = $shipping_addresses;

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

