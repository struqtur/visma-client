<?php
/**
 * VoucherApi
 *
 * PHP version 5
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visma eAccounting API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.41
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Struqtur\VismaEAccounting\Model;

use \ArrayAccess;
use \Struqtur\VismaEAccounting\ObjectSerializer;

/**
 * VoucherApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'voucher_date' => '\DateTime',
        'voucher_text' => 'string',
        'rows' => '\Struqtur\VismaEAccounting\Model\VoucherRowApi[]',
        'number_and_number_series' => 'string',
        'number_series' => 'string',
        'attachments' => '\Struqtur\VismaEAccounting\Model\AttachmentLinkApi',
        'modified_utc' => '\DateTime',
        'voucher_type' => 'int',
        'source_id' => 'string',
        'created_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'voucher_date' => 'date-time',
        'voucher_text' => null,
        'rows' => null,
        'number_and_number_series' => null,
        'number_series' => null,
        'attachments' => null,
        'modified_utc' => 'date-time',
        'voucher_type' => 'int32',
        'source_id' => 'uuid',
        'created_utc' => 'date-time'
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
        'id' => 'Id',
        'voucher_date' => 'VoucherDate',
        'voucher_text' => 'VoucherText',
        'rows' => 'Rows',
        'number_and_number_series' => 'NumberAndNumberSeries',
        'number_series' => 'NumberSeries',
        'attachments' => 'Attachments',
        'modified_utc' => 'ModifiedUtc',
        'voucher_type' => 'VoucherType',
        'source_id' => 'SourceId',
        'created_utc' => 'CreatedUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'voucher_date' => 'setVoucherDate',
        'voucher_text' => 'setVoucherText',
        'rows' => 'setRows',
        'number_and_number_series' => 'setNumberAndNumberSeries',
        'number_series' => 'setNumberSeries',
        'attachments' => 'setAttachments',
        'modified_utc' => 'setModifiedUtc',
        'voucher_type' => 'setVoucherType',
        'source_id' => 'setSourceId',
        'created_utc' => 'setCreatedUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'voucher_date' => 'getVoucherDate',
        'voucher_text' => 'getVoucherText',
        'rows' => 'getRows',
        'number_and_number_series' => 'getNumberAndNumberSeries',
        'number_series' => 'getNumberSeries',
        'attachments' => 'getAttachments',
        'modified_utc' => 'getModifiedUtc',
        'voucher_type' => 'getVoucherType',
        'source_id' => 'getSourceId',
        'created_utc' => 'getCreatedUtc'
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

    const VOUCHER_TYPE_2 = 2;
    const VOUCHER_TYPE_5 = 5;
    const VOUCHER_TYPE_6 = 6;
    const VOUCHER_TYPE_7 = 7;
    const VOUCHER_TYPE_8 = 8;
    const VOUCHER_TYPE_9 = 9;
    const VOUCHER_TYPE_10 = 10;
    const VOUCHER_TYPE_11 = 11;
    const VOUCHER_TYPE_12 = 12;
    const VOUCHER_TYPE_13 = 13;
    const VOUCHER_TYPE_14 = 14;
    const VOUCHER_TYPE_15 = 15;
    const VOUCHER_TYPE_16 = 16;
    const VOUCHER_TYPE_17 = 17;
    const VOUCHER_TYPE_18 = 18;
    const VOUCHER_TYPE_19 = 19;
    const VOUCHER_TYPE_20 = 20;
    const VOUCHER_TYPE_21 = 21;
    const VOUCHER_TYPE_22 = 22;
    const VOUCHER_TYPE_23 = 23;
    const VOUCHER_TYPE_24 = 24;
    const VOUCHER_TYPE_25 = 25;
    const VOUCHER_TYPE_26 = 26;
    const VOUCHER_TYPE_27 = 27;
    const VOUCHER_TYPE_28 = 28;
    const VOUCHER_TYPE_29 = 29;
    const VOUCHER_TYPE_30 = 30;
    const VOUCHER_TYPE_31 = 31;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherTypeAllowableValues()
    {
        return [
            self::VOUCHER_TYPE_2,
            self::VOUCHER_TYPE_5,
            self::VOUCHER_TYPE_6,
            self::VOUCHER_TYPE_7,
            self::VOUCHER_TYPE_8,
            self::VOUCHER_TYPE_9,
            self::VOUCHER_TYPE_10,
            self::VOUCHER_TYPE_11,
            self::VOUCHER_TYPE_12,
            self::VOUCHER_TYPE_13,
            self::VOUCHER_TYPE_14,
            self::VOUCHER_TYPE_15,
            self::VOUCHER_TYPE_16,
            self::VOUCHER_TYPE_17,
            self::VOUCHER_TYPE_18,
            self::VOUCHER_TYPE_19,
            self::VOUCHER_TYPE_20,
            self::VOUCHER_TYPE_21,
            self::VOUCHER_TYPE_22,
            self::VOUCHER_TYPE_23,
            self::VOUCHER_TYPE_24,
            self::VOUCHER_TYPE_25,
            self::VOUCHER_TYPE_26,
            self::VOUCHER_TYPE_27,
            self::VOUCHER_TYPE_28,
            self::VOUCHER_TYPE_29,
            self::VOUCHER_TYPE_30,
            self::VOUCHER_TYPE_31,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['voucher_date'] = isset($data['voucher_date']) ? $data['voucher_date'] : null;
        $this->container['voucher_text'] = isset($data['voucher_text']) ? $data['voucher_text'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['number_and_number_series'] = isset($data['number_and_number_series']) ? $data['number_and_number_series'] : null;
        $this->container['number_series'] = isset($data['number_series']) ? $data['number_series'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['voucher_type'] = isset($data['voucher_type']) ? $data['voucher_type'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['voucher_date'] === null) {
            $invalidProperties[] = "'voucher_date' can't be null";
        }
        if ($this->container['voucher_text'] === null) {
            $invalidProperties[] = "'voucher_text' can't be null";
        }
        if ((mb_strlen($this->container['voucher_text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'voucher_text', the character length must be smaller than or equal to 1000.";
        }

        if ((mb_strlen($this->container['voucher_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'voucher_text', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
        }
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($this->container['voucher_type']) && !in_array($this->container['voucher_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voucher_type', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Purpose: Unique Id provided by eAccounting
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets voucher_date
     *
     * @return \DateTime
     */
    public function getVoucherDate()
    {
        return $this->container['voucher_date'];
    }

    /**
     * Sets voucher_date
     *
     * @param \DateTime $voucher_date Format: yyyy-mm-dd
     *
     * @return $this
     */
    public function setVoucherDate($voucher_date)
    {
        $this->container['voucher_date'] = $voucher_date;

        return $this;
    }

    /**
     * Gets voucher_text
     *
     * @return string
     */
    public function getVoucherText()
    {
        return $this->container['voucher_text'];
    }

    /**
     * Sets voucher_text
     *
     * @param string $voucher_text Max length: 1000 characters
     *
     * @return $this
     */
    public function setVoucherText($voucher_text)
    {
        if ((mb_strlen($voucher_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $voucher_text when calling VoucherApi., must be smaller than or equal to 1000.');
        }
        if ((mb_strlen($voucher_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $voucher_text when calling VoucherApi., must be bigger than or equal to 0.');
        }

        $this->container['voucher_text'] = $voucher_text;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Struqtur\VismaEAccounting\Model\VoucherRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Struqtur\VismaEAccounting\Model\VoucherRowApi[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets number_and_number_series
     *
     * @return string
     */
    public function getNumberAndNumberSeries()
    {
        return $this->container['number_and_number_series'];
    }

    /**
     * Sets number_and_number_series
     *
     * @param string $number_and_number_series Purpose: Returns the voucher number.
     *
     * @return $this
     */
    public function setNumberAndNumberSeries($number_and_number_series)
    {
        $this->container['number_and_number_series'] = $number_and_number_series;

        return $this;
    }

    /**
     * Gets number_series
     *
     * @return string
     */
    public function getNumberSeries()
    {
        return $this->container['number_series'];
    }

    /**
     * Sets number_series
     *
     * @param string $number_series Purpose: Returns the number series. Use parameter useDefaultVoucherSeries with false value to set Series.
     *
     * @return $this
     */
    public function setNumberSeries($number_series)
    {
        $this->container['number_series'] = $number_series;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Struqtur\VismaEAccounting\Model\AttachmentLinkApi
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Struqtur\VismaEAccounting\Model\AttachmentLinkApi $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets modified_utc
     *
     * @return \DateTime
     */
    public function getModifiedUtc()
    {
        return $this->container['modified_utc'];
    }

    /**
     * Sets modified_utc
     *
     * @param \DateTime $modified_utc modified_utc
     *
     * @return $this
     */
    public function setModifiedUtc($modified_utc)
    {
        $this->container['modified_utc'] = $modified_utc;

        return $this;
    }

    /**
     * Gets voucher_type
     *
     * @return int
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param int $voucher_type 2 = ManualVoucher, 5 = BankAccountTransferDeposit, 6 = BankAccountTransferWithDrawal,   7 = PurchaseReceipt, 8 = VatReport, 9 = SieImport, 10 = BankTransactionDeposit, 11 = BankTransactionWithdrawal,  12 = SupplierInvoiceDebit, 13 = SupplierInvoiceCredit, 14 = CustomerInvoiceDebit, 15 = CustomerInvoiceCredit,  16 = ClaimOnCardAcquirer, 17 = TaxReturn, 18 = AllocationPeriod, 19 = AllocationPeriodCorrection,   20 = InventoryEvent, 21 = EmployerReport, 22 = Payslip, 23 = CustomerQuickInvoiceDebit,  24 = CustomerQuickInvoiceCredit, 25 = SupplierQuickInvoiceDebit, 26 = SupplierQuickInvoiceCredit,   27 = IZettleVoucher
     *
     * @return $this
     */
    public function setVoucherType($voucher_type)
    {
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($voucher_type) && !in_array($voucher_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voucher_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id source_id
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets created_utc
     *
     * @return \DateTime
     */
    public function getCreatedUtc()
    {
        return $this->container['created_utc'];
    }

    /**
     * Sets created_utc
     *
     * @param \DateTime $created_utc created_utc
     *
     * @return $this
     */
    public function setCreatedUtc($created_utc)
    {
        $this->container['created_utc'] = $created_utc;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


