<?php
/**
 * TransactionReport
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
 * TransactionReport Class Doc Comment
 *
 * @category Class
 * @package  calderaPayQualpayPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rec_id' => 'int',
        'merchant_id' => 'int',
        'batch_date' => 'string',
        'dba_name' => 'string',
        'merch_city_ph' => 'string',
        'merch_state' => 'string',
        'merch_zip' => 'string',
        'merch_country' => 'string',
        'batch_number' => 'int',
        'batch_id' => 'int',
        'card_number' => 'string',
        'card_type' => 'string',
        'auth_date' => 'string',
        'tran_date' => 'string',
        'settle_date' => 'string',
        'amt_auth' => 'string',
        'amt_tran' => 'string',
        'tran_currency' => 'string',
        'reference_number' => 'string',
        'purchase_id' => 'string',
        'auth_code' => 'string',
        'moto_ecomm_ind' => 'string',
        'pos_entry_mode' => 'string',
        'amt_funded' => 'string',
        'funded_currency' => 'string',
        'pg_id' => 'string',
        'merch_ref_num' => 'string',
        'acq_reference_number' => 'string',
        'auth_rrn' => 'string',
        'auth_tran_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rec_id' => 'int64',
        'merchant_id' => 'int64',
        'batch_date' => null,
        'dba_name' => null,
        'merch_city_ph' => null,
        'merch_state' => null,
        'merch_zip' => null,
        'merch_country' => null,
        'batch_number' => 'int64',
        'batch_id' => 'int64',
        'card_number' => null,
        'card_type' => null,
        'auth_date' => null,
        'tran_date' => null,
        'settle_date' => null,
        'amt_auth' => null,
        'amt_tran' => null,
        'tran_currency' => null,
        'reference_number' => null,
        'purchase_id' => null,
        'auth_code' => null,
        'moto_ecomm_ind' => null,
        'pos_entry_mode' => null,
        'amt_funded' => null,
        'funded_currency' => null,
        'pg_id' => null,
        'merch_ref_num' => null,
        'acq_reference_number' => null,
        'auth_rrn' => null,
        'auth_tran_id' => null
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
        'batch_date' => 'batch_date',
        'dba_name' => 'dba_name',
        'merch_city_ph' => 'merch_city_ph',
        'merch_state' => 'merch_state',
        'merch_zip' => 'merch_zip',
        'merch_country' => 'merch_country',
        'batch_number' => 'batch_number',
        'batch_id' => 'batch_id',
        'card_number' => 'card_number',
        'card_type' => 'card_type',
        'auth_date' => 'auth_date',
        'tran_date' => 'tran_date',
        'settle_date' => 'settle_date',
        'amt_auth' => 'amt_auth',
        'amt_tran' => 'amt_tran',
        'tran_currency' => 'tran_currency',
        'reference_number' => 'reference_number',
        'purchase_id' => 'purchase_id',
        'auth_code' => 'auth_code',
        'moto_ecomm_ind' => 'moto_ecomm_ind',
        'pos_entry_mode' => 'pos_entry_mode',
        'amt_funded' => 'amt_funded',
        'funded_currency' => 'funded_currency',
        'pg_id' => 'pg_id',
        'merch_ref_num' => 'merch_ref_num',
        'acq_reference_number' => 'acq_reference_number',
        'auth_rrn' => 'auth_rrn',
        'auth_tran_id' => 'auth_tran_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rec_id' => 'setRecId',
        'merchant_id' => 'setMerchantId',
        'batch_date' => 'setBatchDate',
        'dba_name' => 'setDbaName',
        'merch_city_ph' => 'setMerchCityPh',
        'merch_state' => 'setMerchState',
        'merch_zip' => 'setMerchZip',
        'merch_country' => 'setMerchCountry',
        'batch_number' => 'setBatchNumber',
        'batch_id' => 'setBatchId',
        'card_number' => 'setCardNumber',
        'card_type' => 'setCardType',
        'auth_date' => 'setAuthDate',
        'tran_date' => 'setTranDate',
        'settle_date' => 'setSettleDate',
        'amt_auth' => 'setAmtAuth',
        'amt_tran' => 'setAmtTran',
        'tran_currency' => 'setTranCurrency',
        'reference_number' => 'setReferenceNumber',
        'purchase_id' => 'setPurchaseId',
        'auth_code' => 'setAuthCode',
        'moto_ecomm_ind' => 'setMotoEcommInd',
        'pos_entry_mode' => 'setPosEntryMode',
        'amt_funded' => 'setAmtFunded',
        'funded_currency' => 'setFundedCurrency',
        'pg_id' => 'setPgId',
        'merch_ref_num' => 'setMerchRefNum',
        'acq_reference_number' => 'setAcqReferenceNumber',
        'auth_rrn' => 'setAuthRrn',
        'auth_tran_id' => 'setAuthTranId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rec_id' => 'getRecId',
        'merchant_id' => 'getMerchantId',
        'batch_date' => 'getBatchDate',
        'dba_name' => 'getDbaName',
        'merch_city_ph' => 'getMerchCityPh',
        'merch_state' => 'getMerchState',
        'merch_zip' => 'getMerchZip',
        'merch_country' => 'getMerchCountry',
        'batch_number' => 'getBatchNumber',
        'batch_id' => 'getBatchId',
        'card_number' => 'getCardNumber',
        'card_type' => 'getCardType',
        'auth_date' => 'getAuthDate',
        'tran_date' => 'getTranDate',
        'settle_date' => 'getSettleDate',
        'amt_auth' => 'getAmtAuth',
        'amt_tran' => 'getAmtTran',
        'tran_currency' => 'getTranCurrency',
        'reference_number' => 'getReferenceNumber',
        'purchase_id' => 'getPurchaseId',
        'auth_code' => 'getAuthCode',
        'moto_ecomm_ind' => 'getMotoEcommInd',
        'pos_entry_mode' => 'getPosEntryMode',
        'amt_funded' => 'getAmtFunded',
        'funded_currency' => 'getFundedCurrency',
        'pg_id' => 'getPgId',
        'merch_ref_num' => 'getMerchRefNum',
        'acq_reference_number' => 'getAcqReferenceNumber',
        'auth_rrn' => 'getAuthRrn',
        'auth_tran_id' => 'getAuthTranId'
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

    const CARD_TYPE_VS = 'VS';
    const CARD_TYPE_MC = 'MC';
    const CARD_TYPE_DS = 'DS';
    const CARD_TYPE_AM = 'AM';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_VS,
            self::CARD_TYPE_MC,
            self::CARD_TYPE_DS,
            self::CARD_TYPE_AM,
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
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['batch_date'] = isset($data['batch_date']) ? $data['batch_date'] : null;
        $this->container['dba_name'] = isset($data['dba_name']) ? $data['dba_name'] : null;
        $this->container['merch_city_ph'] = isset($data['merch_city_ph']) ? $data['merch_city_ph'] : null;
        $this->container['merch_state'] = isset($data['merch_state']) ? $data['merch_state'] : null;
        $this->container['merch_zip'] = isset($data['merch_zip']) ? $data['merch_zip'] : null;
        $this->container['merch_country'] = isset($data['merch_country']) ? $data['merch_country'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['auth_date'] = isset($data['auth_date']) ? $data['auth_date'] : null;
        $this->container['tran_date'] = isset($data['tran_date']) ? $data['tran_date'] : null;
        $this->container['settle_date'] = isset($data['settle_date']) ? $data['settle_date'] : null;
        $this->container['amt_auth'] = isset($data['amt_auth']) ? $data['amt_auth'] : null;
        $this->container['amt_tran'] = isset($data['amt_tran']) ? $data['amt_tran'] : null;
        $this->container['tran_currency'] = isset($data['tran_currency']) ? $data['tran_currency'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['purchase_id'] = isset($data['purchase_id']) ? $data['purchase_id'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['moto_ecomm_ind'] = isset($data['moto_ecomm_ind']) ? $data['moto_ecomm_ind'] : null;
        $this->container['pos_entry_mode'] = isset($data['pos_entry_mode']) ? $data['pos_entry_mode'] : null;
        $this->container['amt_funded'] = isset($data['amt_funded']) ? $data['amt_funded'] : null;
        $this->container['funded_currency'] = isset($data['funded_currency']) ? $data['funded_currency'] : null;
        $this->container['pg_id'] = isset($data['pg_id']) ? $data['pg_id'] : null;
        $this->container['merch_ref_num'] = isset($data['merch_ref_num']) ? $data['merch_ref_num'] : null;
        $this->container['acq_reference_number'] = isset($data['acq_reference_number']) ? $data['acq_reference_number'] : null;
        $this->container['auth_rrn'] = isset($data['auth_rrn']) ? $data['auth_rrn'] : null;
        $this->container['auth_tran_id'] = isset($data['auth_tran_id']) ? $data['auth_tran_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
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

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!in_array($this->container['card_type'], $allowedValues)) {
            return false;
        }
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
     * @param int $rec_id Unique ID assigned by Qualpay to this deposit.
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
     * @param int $merchant_id Unique ID assigned by Qualpay to a Merchant.
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets batch_date
     *
     * @return string
     */
    public function getBatchDate()
    {
        return $this->container['batch_date'];
    }

    /**
     * Sets batch_date
     *
     * @param string $batch_date The date the batch was settled to Qualpay.
     *
     * @return $this
     */
    public function setBatchDate($batch_date)
    {
        $this->container['batch_date'] = $batch_date;

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
     * @param string $dba_name The doing business as name of the merchant.
     *
     * @return $this
     */
    public function setDbaName($dba_name)
    {
        $this->container['dba_name'] = $dba_name;

        return $this;
    }

    /**
     * Gets merch_city_ph
     *
     * @return string
     */
    public function getMerchCityPh()
    {
        return $this->container['merch_city_ph'];
    }

    /**
     * Sets merch_city_ph
     *
     * @param string $merch_city_ph Sent to the card issuer; either the merchant's city, or phone number.
     *
     * @return $this
     */
    public function setMerchCityPh($merch_city_ph)
    {
        $this->container['merch_city_ph'] = $merch_city_ph;

        return $this;
    }

    /**
     * Gets merch_state
     *
     * @return string
     */
    public function getMerchState()
    {
        return $this->container['merch_state'];
    }

    /**
     * Sets merch_state
     *
     * @param string $merch_state Sent to the card issuer; the merchant's state.
     *
     * @return $this
     */
    public function setMerchState($merch_state)
    {
        $this->container['merch_state'] = $merch_state;

        return $this;
    }

    /**
     * Gets merch_zip
     *
     * @return string
     */
    public function getMerchZip()
    {
        return $this->container['merch_zip'];
    }

    /**
     * Sets merch_zip
     *
     * @param string $merch_zip Sent to the card issuer; the merchant's ZIP code.
     *
     * @return $this
     */
    public function setMerchZip($merch_zip)
    {
        $this->container['merch_zip'] = $merch_zip;

        return $this;
    }

    /**
     * Gets merch_country
     *
     * @return string
     */
    public function getMerchCountry()
    {
        return $this->container['merch_country'];
    }

    /**
     * Sets merch_country
     *
     * @param string $merch_country Sent to the card issuer; the merchant's country code.
     *
     * @return $this
     */
    public function setMerchCountry($merch_country)
    {
        $this->container['merch_country'] = $merch_country;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return int
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param int $batch_number A non-unique ID assigned by the merchant's terminal, POS device, or gateway for this batch, in the range of 1 - 999.
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param int $batch_id Unique ID assigned by Qualpay to this batch.
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

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
     * @param string $card_number The truncated card number of the transaction.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type The card brand of this transaction.
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets auth_date
     *
     * @return string
     */
    public function getAuthDate()
    {
        return $this->container['auth_date'];
    }

    /**
     * Sets auth_date
     *
     * @param string $auth_date The date the transaction was authorized by the merchant.
     *
     * @return $this
     */
    public function setAuthDate($auth_date)
    {
        $this->container['auth_date'] = $auth_date;

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
     * @param string $tran_date The date the transaction was captured by the merchant.
     *
     * @return $this
     */
    public function setTranDate($tran_date)
    {
        $this->container['tran_date'] = $tran_date;

        return $this;
    }

    /**
     * Gets settle_date
     *
     * @return string
     */
    public function getSettleDate()
    {
        return $this->container['settle_date'];
    }

    /**
     * Sets settle_date
     *
     * @param string $settle_date The date Qualpay settled the transaction with the issuer.
     *
     * @return $this
     */
    public function setSettleDate($settle_date)
    {
        $this->container['settle_date'] = $settle_date;

        return $this;
    }

    /**
     * Gets amt_auth
     *
     * @return string
     */
    public function getAmtAuth()
    {
        return $this->container['amt_auth'];
    }

    /**
     * Sets amt_auth
     *
     * @param string $amt_auth The amount of the original authorization.
     *
     * @return $this
     */
    public function setAmtAuth($amt_auth)
    {
        $this->container['amt_auth'] = $amt_auth;

        return $this;
    }

    /**
     * Gets amt_tran
     *
     * @return string
     */
    public function getAmtTran()
    {
        return $this->container['amt_tran'];
    }

    /**
     * Sets amt_tran
     *
     * @param string $amt_tran The amount of the settled transaction.
     *
     * @return $this
     */
    public function setAmtTran($amt_tran)
    {
        $this->container['amt_tran'] = $amt_tran;

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
     * @param string $tran_currency The ISO 4217 numeric currency code of the dispute.
     *
     * @return $this
     */
    public function setTranCurrency($tran_currency)
    {
        $this->container['tran_currency'] = $tran_currency;

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
     * Gets purchase_id
     *
     * @return string
     */
    public function getPurchaseId()
    {
        return $this->container['purchase_id'];
    }

    /**
     * Sets purchase_id
     *
     * @param string $purchase_id A merchant supplied tracking number, generally an invoice or purchase number. This number may be visible to the cardholder, depending on card issuer.
     *
     * @return $this
     */
    public function setPurchaseId($purchase_id)
    {
        $this->container['purchase_id'] = $purchase_id;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code The authorization code provided by the card issuer when the card was approved.
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets moto_ecomm_ind
     *
     * @return string
     */
    public function getMotoEcommInd()
    {
        return $this->container['moto_ecomm_ind'];
    }

    /**
     * Sets moto_ecomm_ind
     *
     * @param string $moto_ecomm_ind The transaction ECI (e-commerce indicator), an indicatior of how the card was processed.
     *
     * @return $this
     */
    public function setMotoEcommInd($moto_ecomm_ind)
    {
        $this->container['moto_ecomm_ind'] = $moto_ecomm_ind;

        return $this;
    }

    /**
     * Gets pos_entry_mode
     *
     * @return string
     */
    public function getPosEntryMode()
    {
        return $this->container['pos_entry_mode'];
    }

    /**
     * Sets pos_entry_mode
     *
     * @param string $pos_entry_mode Indicates the way a card number was entered. For all codes, please see <a href=\"/developer/api/reference#pos_entry_mode\" target=\"_blank\">POS Entry Modes</a>.
     *
     * @return $this
     */
    public function setPosEntryMode($pos_entry_mode)
    {
        $this->container['pos_entry_mode'] = $pos_entry_mode;

        return $this;
    }

    /**
     * Gets amt_funded
     *
     * @return string
     */
    public function getAmtFunded()
    {
        return $this->container['amt_funded'];
    }

    /**
     * Sets amt_funded
     *
     * @param string $amt_funded The amount of this transaction funded to the merchant (in the funded currency).
     *
     * @return $this
     */
    public function setAmtFunded($amt_funded)
    {
        $this->container['amt_funded'] = $amt_funded;

        return $this;
    }

    /**
     * Gets funded_currency
     *
     * @return string
     */
    public function getFundedCurrency()
    {
        return $this->container['funded_currency'];
    }

    /**
     * Sets funded_currency
     *
     * @param string $funded_currency The ISO 4217 numeric currency code of the transaction.
     *
     * @return $this
     */
    public function setFundedCurrency($funded_currency)
    {
        $this->container['funded_currency'] = $funded_currency;

        return $this;
    }

    /**
     * Gets pg_id
     *
     * @return string
     */
    public function getPgId()
    {
        return $this->container['pg_id'];
    }

    /**
     * Sets pg_id
     *
     * @param string $pg_id 32-byte unique identifier generated by the payment gateway, returned in all valid responses. Applicable only to Qualpay Payment Gateway transactions. It provides a reference to the transaction and is required for some post-auth operations (e.g. capture, refund, or void).
     *
     * @return $this
     */
    public function setPgId($pg_id)
    {
        $this->container['pg_id'] = $pg_id;

        return $this;
    }

    /**
     * Gets merch_ref_num
     *
     * @return string
     */
    public function getMerchRefNum()
    {
        return $this->container['merch_ref_num'];
    }

    /**
     * Sets merch_ref_num
     *
     * @param string $merch_ref_num Merchant provided reference value that will be stored with the transaction data and included with transaction data in reports within Qualpay Manager. This value will also be attached to any lifecycle transactions (e.g. retrieval requests and chargebacks) that may occur.
     *
     * @return $this
     */
    public function setMerchRefNum($merch_ref_num)
    {
        $this->container['merch_ref_num'] = $merch_ref_num;

        return $this;
    }

    /**
     * Gets acq_reference_number
     *
     * @return string
     */
    public function getAcqReferenceNumber()
    {
        return $this->container['acq_reference_number'];
    }

    /**
     * Sets acq_reference_number
     *
     * @param string $acq_reference_number Acquirer reference number is an 11-digit number generated by the product initiating the transaction. It is a unique number that both the acquirer and the issuer can use to identify a transaction. For chargeback adjustments, the acquirer reference number is used as the deposit reference number.
     *
     * @return $this
     */
    public function setAcqReferenceNumber($acq_reference_number)
    {
        $this->container['acq_reference_number'] = $acq_reference_number;

        return $this;
    }

    /**
     * Gets auth_rrn
     *
     * @return string
     */
    public function getAuthRrn()
    {
        return $this->container['auth_rrn'];
    }

    /**
     * Sets auth_rrn
     *
     * @param string $auth_rrn The Authorization Retrieval Reference Number (RRN) is a unique identifier assigned by an acquirer to an authorization.
     *
     * @return $this
     */
    public function setAuthRrn($auth_rrn)
    {
        $this->container['auth_rrn'] = $auth_rrn;

        return $this;
    }

    /**
     * Gets auth_tran_id
     *
     * @return string
     */
    public function getAuthTranId()
    {
        return $this->container['auth_tran_id'];
    }

    /**
     * Sets auth_tran_id
     *
     * @param string $auth_tran_id The Authorization transaction identifier is a unique identifier returned by the issuing bank for an electronically authorized transaction.
     *
     * @return $this
     */
    public function setAuthTranId($auth_tran_id)
    {
        $this->container['auth_tran_id'] = $auth_tran_id;

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


