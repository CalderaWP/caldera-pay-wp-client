<?php
/**
 * CustomerVault
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
 * CustomerVault Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerVault implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerVault';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'string',
        'auto_generate_customer_id' => 'bool',
        'vendor_id' => 'int',
        'rec_id' => 'int',
        'node_id' => 'int',
        'customer_first_name' => 'string',
        'customer_last_name' => 'string',
        'customer_firm_name' => 'string',
        'customer_phone' => 'string',
        'customer_email' => 'string',
        'comments' => 'string',
        'primary_card_number' => 'string',
        'shipping_addresses' => '\calderaPayQualpayPlatform\Model\ShippingAddress[]',
        'billing_cards' => '\calderaPayQualpayPlatform\Model\BillingCard[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_id' => null,
        'auto_generate_customer_id' => null,
        'vendor_id' => 'int64',
        'rec_id' => 'int64',
        'node_id' => 'int64',
        'customer_first_name' => null,
        'customer_last_name' => null,
        'customer_firm_name' => null,
        'customer_phone' => null,
        'customer_email' => null,
        'comments' => null,
        'primary_card_number' => null,
        'shipping_addresses' => null,
        'billing_cards' => null
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
        'customer_id' => 'customer_id',
        'auto_generate_customer_id' => 'auto_generate_customer_id',
        'vendor_id' => 'vendor_id',
        'rec_id' => 'rec_id',
        'node_id' => 'node_id',
        'customer_first_name' => 'customer_first_name',
        'customer_last_name' => 'customer_last_name',
        'customer_firm_name' => 'customer_firm_name',
        'customer_phone' => 'customer_phone',
        'customer_email' => 'customer_email',
        'comments' => 'comments',
        'primary_card_number' => 'primary_card_number',
        'shipping_addresses' => 'shipping_addresses',
        'billing_cards' => 'billing_cards'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'auto_generate_customer_id' => 'setAutoGenerateCustomerId',
        'vendor_id' => 'setVendorId',
        'rec_id' => 'setRecId',
        'node_id' => 'setNodeId',
        'customer_first_name' => 'setCustomerFirstName',
        'customer_last_name' => 'setCustomerLastName',
        'customer_firm_name' => 'setCustomerFirmName',
        'customer_phone' => 'setCustomerPhone',
        'customer_email' => 'setCustomerEmail',
        'comments' => 'setComments',
        'primary_card_number' => 'setPrimaryCardNumber',
        'shipping_addresses' => 'setShippingAddresses',
        'billing_cards' => 'setBillingCards'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'auto_generate_customer_id' => 'getAutoGenerateCustomerId',
        'vendor_id' => 'getVendorId',
        'rec_id' => 'getRecId',
        'node_id' => 'getNodeId',
        'customer_first_name' => 'getCustomerFirstName',
        'customer_last_name' => 'getCustomerLastName',
        'customer_firm_name' => 'getCustomerFirmName',
        'customer_phone' => 'getCustomerPhone',
        'customer_email' => 'getCustomerEmail',
        'comments' => 'getComments',
        'primary_card_number' => 'getPrimaryCardNumber',
        'shipping_addresses' => 'getShippingAddresses',
        'billing_cards' => 'getBillingCards'
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['auto_generate_customer_id'] = isset($data['auto_generate_customer_id']) ? $data['auto_generate_customer_id'] : null;
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['node_id'] = isset($data['node_id']) ? $data['node_id'] : null;
        $this->container['customer_first_name'] = isset($data['customer_first_name']) ? $data['customer_first_name'] : null;
        $this->container['customer_last_name'] = isset($data['customer_last_name']) ? $data['customer_last_name'] : null;
        $this->container['customer_firm_name'] = isset($data['customer_firm_name']) ? $data['customer_firm_name'] : null;
        $this->container['customer_phone'] = isset($data['customer_phone']) ? $data['customer_phone'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['primary_card_number'] = isset($data['primary_card_number']) ? $data['primary_card_number'] : null;
        $this->container['shipping_addresses'] = isset($data['shipping_addresses']) ? $data['shipping_addresses'] : null;
        $this->container['billing_cards'] = isset($data['billing_cards']) ? $data['billing_cards'] : null;
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
     * @param string $customer_id Unique ID established by merchant to identify a customer. The customer ID can be used to add subscriptions   using the Recurring Billing API or make payments using the Payment Gateway API. Once established, this ID cannot be udpated. This field is case sensitive. Only letters and numbers are allowed in a Customer ID.<br><strong>Maximum Length: </strong>32<br><strong>Conditional Requirement: </strong>Required if auto_generate_customer_id is false
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets auto_generate_customer_id
     *
     * @return bool
     */
    public function getAutoGenerateCustomerId()
    {
        return $this->container['auto_generate_customer_id'];
    }

    /**
     * Sets auto_generate_customer_id
     *
     * @param bool $auto_generate_customer_id Boolean flag that indicates if customer id should be auto generated. Applicable only when adding a customer. When set to true, Qualpay will generate a unique  customer id. The generated customer_id will be returned in the response. Save this id to manage the customer through Vault API. <br><strong>Default: </strong>false
     *
     * @return $this
     */
    public function setAutoGenerateCustomerId($auto_generate_customer_id)
    {
        $this->container['auto_generate_customer_id'] = $auto_generate_customer_id;

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
     * @param int $vendor_id Identifies the vendor to which this request applies. Applicable only if this request is on behalf of another merchant.
     *
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets rec_id
     *
     * @return int
     */
    public function getRecId()
    {
        return $this->container['rec_id'];
    }

    /**
     * Sets rec_id
     *
     * @param int $rec_id Unique Internal ID generated by Qualpay to identify a Vault Customer.
     *
     * @return $this
     */
    public function setRecId($rec_id)
    {
        $this->container['rec_id'] = $rec_id;

        return $this;
    }

    /**
     * Gets node_id
     *
     * @return int
     */
    public function getNodeId()
    {
        return $this->container['node_id'];
    }

    /**
     * Sets node_id
     *
     * @param int $node_id The Node to which the merchant belongs. For Customer record, this refers to the Qualpay supplied Merchant ID.
     *
     * @return $this
     */
    public function setNodeId($node_id)
    {
        $this->container['node_id'] = $node_id;

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
     * @param string $customer_first_name Customer's First Name.<br><strong>Maximum Length: </strong>32
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
     * @param string $customer_last_name Customer's Last Name.<br><strong>Maximum Length: </strong>32
     *
     * @return $this
     */
    public function setCustomerLastName($customer_last_name)
    {
        $this->container['customer_last_name'] = $customer_last_name;

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
     * @param string $customer_firm_name Customer Business name if applicable. <br><strong>Maximum Length: </strong>64
     *
     * @return $this
     */
    public function setCustomerFirmName($customer_firm_name)
    {
        $this->container['customer_firm_name'] = $customer_firm_name;

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
     * @param string $customer_phone Customer's Phone Number.<br><strong>Maximum Length: </strong>16
     *
     * @return $this
     */
    public function setCustomerPhone($customer_phone)
    {
        $this->container['customer_phone'] = $customer_phone;

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
     * @param string $customer_email Customer's Email address. <br><strong>Maximum Length: </strong>64
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Comment
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets primary_card_number
     *
     * @return string
     */
    public function getPrimaryCardNumber()
    {
        return $this->container['primary_card_number'];
    }

    /**
     * Sets primary_card_number
     *
     * @param string $primary_card_number Default Card Number for this customer. This card number is used for subscription payments.
     *
     * @return $this
     */
    public function setPrimaryCardNumber($primary_card_number)
    {
        $this->container['primary_card_number'] = $primary_card_number;

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
     * @param \calderaPayQualpayPlatform\Model\ShippingAddress[] $shipping_addresses Array of shipping addresses. If this field is not an array, it is ignored.
     *
     * @return $this
     */
    public function setShippingAddresses($shipping_addresses)
    {
        $this->container['shipping_addresses'] = $shipping_addresses;

        return $this;
    }

    /**
     * Gets billing_cards
     *
     * @return \calderaPayQualpayPlatform\Model\BillingCard[]
     */
    public function getBillingCards()
    {
        return $this->container['billing_cards'];
    }

    /**
     * Sets billing_cards
     *
     * @param \calderaPayQualpayPlatform\Model\BillingCard[] $billing_cards Array of Billing Cards. If this field is not an array, it is ignored.
     *
     * @return $this
     */
    public function setBillingCards($billing_cards)
    {
        $this->container['billing_cards'] = $billing_cards;

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

