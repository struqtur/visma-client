<?php
/**
 * AllocationPeriodApi
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
 * Swagger Codegen version: 2.4.19
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
 * AllocationPeriodApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllocationPeriodApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AllocationPeriodApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'supplier_invoice_id' => 'string',
        'supplier_invoice_row' => 'int',
        'manual_voucher_id' => 'string',
        'manual_voucher_row' => 'int',
        'allocation_period_source_type' => 'int',
        'status' => 'int',
        'cost_center_item_id1' => 'string',
        'cost_center_item_id2' => 'string',
        'cost_center_item_id3' => 'string',
        'project_id' => 'string',
        'bookkeeping_date' => '\DateTime',
        'created_utc' => '\DateTime',
        'rows' => '\Struqtur\VismaEAccounting\Model\AllocationPeriodRowApi[]',
        'debit_account_number' => 'int',
        'credit_account_number' => 'int',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'supplier_invoice_id' => 'uuid',
        'supplier_invoice_row' => 'int32',
        'manual_voucher_id' => 'uuid',
        'manual_voucher_row' => 'int32',
        'allocation_period_source_type' => 'int32',
        'status' => 'int32',
        'cost_center_item_id1' => 'uuid',
        'cost_center_item_id2' => 'uuid',
        'cost_center_item_id3' => 'uuid',
        'project_id' => 'uuid',
        'bookkeeping_date' => 'date-time',
        'created_utc' => 'date-time',
        'rows' => null,
        'debit_account_number' => 'int64',
        'credit_account_number' => 'int64',
        'amount' => 'double'
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
        'supplier_invoice_id' => 'SupplierInvoiceId',
        'supplier_invoice_row' => 'SupplierInvoiceRow',
        'manual_voucher_id' => 'ManualVoucherId',
        'manual_voucher_row' => 'ManualVoucherRow',
        'allocation_period_source_type' => 'AllocationPeriodSourceType',
        'status' => 'Status',
        'cost_center_item_id1' => 'CostCenterItemId1',
        'cost_center_item_id2' => 'CostCenterItemId2',
        'cost_center_item_id3' => 'CostCenterItemId3',
        'project_id' => 'ProjectId',
        'bookkeeping_date' => 'BookkeepingDate',
        'created_utc' => 'CreatedUtc',
        'rows' => 'Rows',
        'debit_account_number' => 'DebitAccountNumber',
        'credit_account_number' => 'CreditAccountNumber',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'supplier_invoice_id' => 'setSupplierInvoiceId',
        'supplier_invoice_row' => 'setSupplierInvoiceRow',
        'manual_voucher_id' => 'setManualVoucherId',
        'manual_voucher_row' => 'setManualVoucherRow',
        'allocation_period_source_type' => 'setAllocationPeriodSourceType',
        'status' => 'setStatus',
        'cost_center_item_id1' => 'setCostCenterItemId1',
        'cost_center_item_id2' => 'setCostCenterItemId2',
        'cost_center_item_id3' => 'setCostCenterItemId3',
        'project_id' => 'setProjectId',
        'bookkeeping_date' => 'setBookkeepingDate',
        'created_utc' => 'setCreatedUtc',
        'rows' => 'setRows',
        'debit_account_number' => 'setDebitAccountNumber',
        'credit_account_number' => 'setCreditAccountNumber',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'supplier_invoice_id' => 'getSupplierInvoiceId',
        'supplier_invoice_row' => 'getSupplierInvoiceRow',
        'manual_voucher_id' => 'getManualVoucherId',
        'manual_voucher_row' => 'getManualVoucherRow',
        'allocation_period_source_type' => 'getAllocationPeriodSourceType',
        'status' => 'getStatus',
        'cost_center_item_id1' => 'getCostCenterItemId1',
        'cost_center_item_id2' => 'getCostCenterItemId2',
        'cost_center_item_id3' => 'getCostCenterItemId3',
        'project_id' => 'getProjectId',
        'bookkeeping_date' => 'getBookkeepingDate',
        'created_utc' => 'getCreatedUtc',
        'rows' => 'getRows',
        'debit_account_number' => 'getDebitAccountNumber',
        'credit_account_number' => 'getCreditAccountNumber',
        'amount' => 'getAmount'
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

    const ALLOCATION_PERIOD_SOURCE_TYPE_0 = 0;
    const ALLOCATION_PERIOD_SOURCE_TYPE_1 = 1;
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllocationPeriodSourceTypeAllowableValues()
    {
        return [
            self::ALLOCATION_PERIOD_SOURCE_TYPE_0,
            self::ALLOCATION_PERIOD_SOURCE_TYPE_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['supplier_invoice_id'] = isset($data['supplier_invoice_id']) ? $data['supplier_invoice_id'] : null;
        $this->container['supplier_invoice_row'] = isset($data['supplier_invoice_row']) ? $data['supplier_invoice_row'] : null;
        $this->container['manual_voucher_id'] = isset($data['manual_voucher_id']) ? $data['manual_voucher_id'] : null;
        $this->container['manual_voucher_row'] = isset($data['manual_voucher_row']) ? $data['manual_voucher_row'] : null;
        $this->container['allocation_period_source_type'] = isset($data['allocation_period_source_type']) ? $data['allocation_period_source_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['bookkeeping_date'] = isset($data['bookkeeping_date']) ? $data['bookkeeping_date'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['debit_account_number'] = isset($data['debit_account_number']) ? $data['debit_account_number'] : null;
        $this->container['credit_account_number'] = isset($data['credit_account_number']) ? $data['credit_account_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAllocationPeriodSourceTypeAllowableValues();
        if (!is_null($this->container['allocation_period_source_type']) && !in_array($this->container['allocation_period_source_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'allocation_period_source_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets supplier_invoice_id
     *
     * @return string
     */
    public function getSupplierInvoiceId()
    {
        return $this->container['supplier_invoice_id'];
    }

    /**
     * Sets supplier_invoice_id
     *
     * @param string $supplier_invoice_id supplier_invoice_id
     *
     * @return $this
     */
    public function setSupplierInvoiceId($supplier_invoice_id)
    {
        $this->container['supplier_invoice_id'] = $supplier_invoice_id;

        return $this;
    }

    /**
     * Gets supplier_invoice_row
     *
     * @return int
     */
    public function getSupplierInvoiceRow()
    {
        return $this->container['supplier_invoice_row'];
    }

    /**
     * Sets supplier_invoice_row
     *
     * @param int $supplier_invoice_row supplier_invoice_row
     *
     * @return $this
     */
    public function setSupplierInvoiceRow($supplier_invoice_row)
    {
        $this->container['supplier_invoice_row'] = $supplier_invoice_row;

        return $this;
    }

    /**
     * Gets manual_voucher_id
     *
     * @return string
     */
    public function getManualVoucherId()
    {
        return $this->container['manual_voucher_id'];
    }

    /**
     * Sets manual_voucher_id
     *
     * @param string $manual_voucher_id manual_voucher_id
     *
     * @return $this
     */
    public function setManualVoucherId($manual_voucher_id)
    {
        $this->container['manual_voucher_id'] = $manual_voucher_id;

        return $this;
    }

    /**
     * Gets manual_voucher_row
     *
     * @return int
     */
    public function getManualVoucherRow()
    {
        return $this->container['manual_voucher_row'];
    }

    /**
     * Sets manual_voucher_row
     *
     * @param int $manual_voucher_row manual_voucher_row
     *
     * @return $this
     */
    public function setManualVoucherRow($manual_voucher_row)
    {
        $this->container['manual_voucher_row'] = $manual_voucher_row;

        return $this;
    }

    /**
     * Gets allocation_period_source_type
     *
     * @return int
     */
    public function getAllocationPeriodSourceType()
    {
        return $this->container['allocation_period_source_type'];
    }

    /**
     * Sets allocation_period_source_type
     *
     * @param int $allocation_period_source_type 0 = SupplierInvoice, 1 = ManualVoucher
     *
     * @return $this
     */
    public function setAllocationPeriodSourceType($allocation_period_source_type)
    {
        $allowedValues = $this->getAllocationPeriodSourceTypeAllowableValues();
        if (!is_null($allocation_period_source_type) && !in_array($allocation_period_source_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allocation_period_source_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allocation_period_source_type'] = $allocation_period_source_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 0 = Pending, 1 = Revoked, 2 = Booked
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets cost_center_item_id1
     *
     * @return string
     */
    public function getCostCenterItemId1()
    {
        return $this->container['cost_center_item_id1'];
    }

    /**
     * Sets cost_center_item_id1
     *
     * @param string $cost_center_item_id1 cost_center_item_id1
     *
     * @return $this
     */
    public function setCostCenterItemId1($cost_center_item_id1)
    {
        $this->container['cost_center_item_id1'] = $cost_center_item_id1;

        return $this;
    }

    /**
     * Gets cost_center_item_id2
     *
     * @return string
     */
    public function getCostCenterItemId2()
    {
        return $this->container['cost_center_item_id2'];
    }

    /**
     * Sets cost_center_item_id2
     *
     * @param string $cost_center_item_id2 cost_center_item_id2
     *
     * @return $this
     */
    public function setCostCenterItemId2($cost_center_item_id2)
    {
        $this->container['cost_center_item_id2'] = $cost_center_item_id2;

        return $this;
    }

    /**
     * Gets cost_center_item_id3
     *
     * @return string
     */
    public function getCostCenterItemId3()
    {
        return $this->container['cost_center_item_id3'];
    }

    /**
     * Sets cost_center_item_id3
     *
     * @param string $cost_center_item_id3 cost_center_item_id3
     *
     * @return $this
     */
    public function setCostCenterItemId3($cost_center_item_id3)
    {
        $this->container['cost_center_item_id3'] = $cost_center_item_id3;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets bookkeeping_date
     *
     * @return \DateTime
     */
    public function getBookkeepingDate()
    {
        return $this->container['bookkeeping_date'];
    }

    /**
     * Sets bookkeeping_date
     *
     * @param \DateTime $bookkeeping_date bookkeeping_date
     *
     * @return $this
     */
    public function setBookkeepingDate($bookkeeping_date)
    {
        $this->container['bookkeeping_date'] = $bookkeeping_date;

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
     * Gets rows
     *
     * @return \Struqtur\VismaEAccounting\Model\AllocationPeriodRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Struqtur\VismaEAccounting\Model\AllocationPeriodRowApi[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets debit_account_number
     *
     * @return int
     */
    public function getDebitAccountNumber()
    {
        return $this->container['debit_account_number'];
    }

    /**
     * Sets debit_account_number
     *
     * @param int $debit_account_number debit_account_number
     *
     * @return $this
     */
    public function setDebitAccountNumber($debit_account_number)
    {
        $this->container['debit_account_number'] = $debit_account_number;

        return $this;
    }

    /**
     * Gets credit_account_number
     *
     * @return int
     */
    public function getCreditAccountNumber()
    {
        return $this->container['credit_account_number'];
    }

    /**
     * Sets credit_account_number
     *
     * @param int $credit_account_number credit_account_number
     *
     * @return $this
     */
    public function setCreditAccountNumber($credit_account_number)
    {
        $this->container['credit_account_number'] = $credit_account_number;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


