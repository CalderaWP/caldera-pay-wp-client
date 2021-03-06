<?php
/**
 * DisputeData
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
 * DisputeData Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisputeData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisputeData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rec_id' => 'int',
        'merchant_id' => 'int',
        'incoming_date' => 'string',
        'amt_tran' => 'double',
        'amt_dispute' => 'double',
        'reason_code' => 'string',
        'reason_desc' => 'string',
        'data_type' => 'string',
        'cbr_workflow' => 'string',
        'status' => 'string',
        'date_status_change' => 'string',
        'card_number' => 'string',
        'tran_date' => 'string',
        'reference_number' => 'string',
        'cb_ref_num' => 'string',
        'vendor_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rec_id' => 'int64',
        'merchant_id' => 'int64',
        'incoming_date' => null,
        'amt_tran' => 'double',
        'amt_dispute' => 'double',
        'reason_code' => null,
        'reason_desc' => null,
        'data_type' => null,
        'cbr_workflow' => null,
        'status' => null,
        'date_status_change' => null,
        'card_number' => null,
        'tran_date' => null,
        'reference_number' => null,
        'cb_ref_num' => null,
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
        'rec_id' => 'rec_id',
        'merchant_id' => 'merchant_id',
        'incoming_date' => 'incoming_date',
        'amt_tran' => 'amt_tran',
        'amt_dispute' => 'amt_dispute',
        'reason_code' => 'reason_code',
        'reason_desc' => 'reason_desc',
        'data_type' => 'data_type',
        'cbr_workflow' => 'cbr_workflow',
        'status' => 'status',
        'date_status_change' => 'date_status_change',
        'card_number' => 'card_number',
        'tran_date' => 'tran_date',
        'reference_number' => 'reference_number',
        'cb_ref_num' => 'cb_ref_num',
        'vendor_id' => 'vendor_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rec_id' => 'setRecId',
        'merchant_id' => 'setMerchantId',
        'incoming_date' => 'setIncomingDate',
        'amt_tran' => 'setAmtTran',
        'amt_dispute' => 'setAmtDispute',
        'reason_code' => 'setReasonCode',
        'reason_desc' => 'setReasonDesc',
        'data_type' => 'setDataType',
        'cbr_workflow' => 'setCbrWorkflow',
        'status' => 'setStatus',
        'date_status_change' => 'setDateStatusChange',
        'card_number' => 'setCardNumber',
        'tran_date' => 'setTranDate',
        'reference_number' => 'setReferenceNumber',
        'cb_ref_num' => 'setCbRefNum',
        'vendor_id' => 'setVendorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rec_id' => 'getRecId',
        'merchant_id' => 'getMerchantId',
        'incoming_date' => 'getIncomingDate',
        'amt_tran' => 'getAmtTran',
        'amt_dispute' => 'getAmtDispute',
        'reason_code' => 'getReasonCode',
        'reason_desc' => 'getReasonDesc',
        'data_type' => 'getDataType',
        'cbr_workflow' => 'getCbrWorkflow',
        'status' => 'getStatus',
        'date_status_change' => 'getDateStatusChange',
        'card_number' => 'getCardNumber',
        'tran_date' => 'getTranDate',
        'reference_number' => 'getReferenceNumber',
        'cb_ref_num' => 'getCbRefNum',
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
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['incoming_date'] = isset($data['incoming_date']) ? $data['incoming_date'] : null;
        $this->container['amt_tran'] = isset($data['amt_tran']) ? $data['amt_tran'] : null;
        $this->container['amt_dispute'] = isset($data['amt_dispute']) ? $data['amt_dispute'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['reason_desc'] = isset($data['reason_desc']) ? $data['reason_desc'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['cbr_workflow'] = isset($data['cbr_workflow']) ? $data['cbr_workflow'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_status_change'] = isset($data['date_status_change']) ? $data['date_status_change'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['tran_date'] = isset($data['tran_date']) ? $data['tran_date'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['cb_ref_num'] = isset($data['cb_ref_num']) ? $data['cb_ref_num'] : null;
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
     * @param int $rec_id Unique ID assigned by Qualpay to dispute.
     *
     * @return $this
     */
    public function setRecId($rec_id)
    {
        $this->container['rec_id'] = $rec_id;

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
     * @param int $merchant_id Unique ID assigned by Qualpay to a merchant.
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets incoming_date
     *
     * @return string
     */
    public function getIncomingDate()
    {
        return $this->container['incoming_date'];
    }

    /**
     * Sets incoming_date
     *
     * @param string $incoming_date The date the dispute was issued.
     *
     * @return $this
     */
    public function setIncomingDate($incoming_date)
    {
        $this->container['incoming_date'] = $incoming_date;

        return $this;
    }

    /**
     * Gets amt_tran
     *
     * @return double
     */
    public function getAmtTran()
    {
        return $this->container['amt_tran'];
    }

    /**
     * Sets amt_tran
     *
     * @param double $amt_tran The amount of the original settled transaction.
     *
     * @return $this
     */
    public function setAmtTran($amt_tran)
    {
        $this->container['amt_tran'] = $amt_tran;

        return $this;
    }

    /**
     * Gets amt_dispute
     *
     * @return double
     */
    public function getAmtDispute()
    {
        return $this->container['amt_dispute'];
    }

    /**
     * Sets amt_dispute
     *
     * @param double $amt_dispute The amount of the dispute; equal to or less than the amt_tran (when in USD).
     *
     * @return $this
     */
    public function setAmtDispute($amt_dispute)
    {
        $this->container['amt_dispute'] = $amt_dispute;

        return $this;
    }

    /**
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code The card association's reason why the dispute was issued.
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets reason_desc
     *
     * @return string
     */
    public function getReasonDesc()
    {
        return $this->container['reason_desc'];
    }

    /**
     * Sets reason_desc
     *
     * @param string $reason_desc The card association's reason code desc why the dispute was issued.
     *
     * @return $this
     */
    public function setReasonDesc($reason_desc)
    {
        $this->container['reason_desc'] = $reason_desc;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type The type of dispute. For all types, please refer to <a href=\"/developer/api/reference#dispute-type\"target=\"_blank\">Dispute Type</a>
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets cbr_workflow
     *
     * @return string
     */
    public function getCbrWorkflow()
    {
        return $this->container['cbr_workflow'];
    }

    /**
     * Sets cbr_workflow
     *
     * @param string $cbr_workflow The type of dispute workflow. For all types, please refer to <a href=\"/developer/api/reference#dispute-workflow\"target=\"_blank\">Dispute Workflow</a>
     *
     * @return $this
     */
    public function setCbrWorkflow($cbr_workflow)
    {
        $this->container['cbr_workflow'] = $cbr_workflow;

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
     * @param string $status Current Dispute Status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_status_change
     *
     * @return string
     */
    public function getDateStatusChange()
    {
        return $this->container['date_status_change'];
    }

    /**
     * Sets date_status_change
     *
     * @param string $date_status_change The date the dispute's status most recently changed.
     *
     * @return $this
     */
    public function setDateStatusChange($date_status_change)
    {
        $this->container['date_status_change'] = $date_status_change;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number The truncated card number of the dispute.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets tran_date
     *
     * @return string
     */
    public function getTranDate()
    {
        return $this->container['tran_date'];
    }

    /**
     * Sets tran_date
     *
     * @param string $tran_date The date of the initial transaction.
     *
     * @return $this
     */
    public function setTranDate($tran_date)
    {
        $this->container['tran_date'] = $tran_date;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number The bank reference number of the deposit.
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets cb_ref_num
     *
     * @return string
     */
    public function getCbRefNum()
    {
        return $this->container['cb_ref_num'];
    }

    /**
     * Sets cb_ref_num
     *
     * @param string $cb_ref_num Issuer provided reference number for this transaction.
     *
     * @return $this
     */
    public function setCbRefNum($cb_ref_num)
    {
        $this->container['cb_ref_num'] = $cb_ref_num;

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
     * @param int $vendor_id Unique Vendor ID assigned by Qualpay to integrator.
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


