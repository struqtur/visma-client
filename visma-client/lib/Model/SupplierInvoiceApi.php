<?php
/**
 * SupplierInvoiceApi
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
 * SupplierInvoiceApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierInvoiceApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierInvoiceApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'supplier_id' => 'string',
        'bank_account_id' => 'string',
        'invoice_date' => '\DateTime',
        'payment_date' => '\DateTime',
        'due_date' => '\DateTime',
        'invoice_number' => 'string',
        'total_amount' => 'double',
        'vat' => 'double',
        'vat_high' => 'double',
        'vat_medium' => 'double',
        'vat_low' => 'double',
        'is_credit_invoice' => 'bool',
        'currency_code' => 'string',
        'currency_rate' => 'double',
        'ocr_number' => 'string',
        'message' => 'string',
        'created_utc' => '\DateTime',
        'modified_utc' => '\DateTime',
        'plus_giro_number' => 'string',
        'bank_giro_number' => 'string',
        'rows' => '\Struqtur\VismaEAccounting\Model\SupplierInvoiceRowApi[]',
        'supplier_name' => 'string',
        'supplier_number' => 'string',
        'is_quick_invoice' => 'bool',
        'is_domestic' => 'bool',
        'remaining_amount' => 'double',
        'remaining_amount_invoice_currency' => 'double',
        'voucher_number' => 'string',
        'voucher_id' => 'string',
        'created_from_draft_id' => 'string',
        'self_employed_without_fixed_address' => 'bool',
        'allocation_periods' => '\Struqtur\VismaEAccounting\Model\AllocationPeriodApi[]',
        'auto_credit_debit_pairing' => 'bool',
        'attachments' => 'string[]',
        'set_off_amount_invoice_currency' => 'double',
        'status' => 'int',
        'skip_send_to_bank' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'supplier_id' => 'uuid',
        'bank_account_id' => 'uuid',
        'invoice_date' => 'date-time',
        'payment_date' => 'date-time',
        'due_date' => 'date-time',
        'invoice_number' => null,
        'total_amount' => 'double',
        'vat' => 'double',
        'vat_high' => 'double',
        'vat_medium' => 'double',
        'vat_low' => 'double',
        'is_credit_invoice' => null,
        'currency_code' => null,
        'currency_rate' => 'double',
        'ocr_number' => null,
        'message' => null,
        'created_utc' => 'date-time',
        'modified_utc' => 'date-time',
        'plus_giro_number' => null,
        'bank_giro_number' => null,
        'rows' => null,
        'supplier_name' => null,
        'supplier_number' => null,
        'is_quick_invoice' => null,
        'is_domestic' => null,
        'remaining_amount' => 'double',
        'remaining_amount_invoice_currency' => 'double',
        'voucher_number' => null,
        'voucher_id' => 'uuid',
        'created_from_draft_id' => 'uuid',
        'self_employed_without_fixed_address' => null,
        'allocation_periods' => null,
        'auto_credit_debit_pairing' => null,
        'attachments' => 'uuid',
        'set_off_amount_invoice_currency' => 'double',
        'status' => 'int32',
        'skip_send_to_bank' => null
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
        'supplier_id' => 'SupplierId',
        'bank_account_id' => 'BankAccountId',
        'invoice_date' => 'InvoiceDate',
        'payment_date' => 'PaymentDate',
        'due_date' => 'DueDate',
        'invoice_number' => 'InvoiceNumber',
        'total_amount' => 'TotalAmount',
        'vat' => 'Vat',
        'vat_high' => 'VatHigh',
        'vat_medium' => 'VatMedium',
        'vat_low' => 'VatLow',
        'is_credit_invoice' => 'IsCreditInvoice',
        'currency_code' => 'CurrencyCode',
        'currency_rate' => 'CurrencyRate',
        'ocr_number' => 'OcrNumber',
        'message' => 'Message',
        'created_utc' => 'CreatedUtc',
        'modified_utc' => 'ModifiedUtc',
        'plus_giro_number' => 'PlusGiroNumber',
        'bank_giro_number' => 'BankGiroNumber',
        'rows' => 'Rows',
        'supplier_name' => 'SupplierName',
        'supplier_number' => 'SupplierNumber',
        'is_quick_invoice' => 'IsQuickInvoice',
        'is_domestic' => 'IsDomestic',
        'remaining_amount' => 'RemainingAmount',
        'remaining_amount_invoice_currency' => 'RemainingAmountInvoiceCurrency',
        'voucher_number' => 'VoucherNumber',
        'voucher_id' => 'VoucherId',
        'created_from_draft_id' => 'CreatedFromDraftId',
        'self_employed_without_fixed_address' => 'SelfEmployedWithoutFixedAddress',
        'allocation_periods' => 'AllocationPeriods',
        'auto_credit_debit_pairing' => 'AutoCreditDebitPairing',
        'attachments' => 'Attachments',
        'set_off_amount_invoice_currency' => 'SetOffAmountInvoiceCurrency',
        'status' => 'Status',
        'skip_send_to_bank' => 'SkipSendToBank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'supplier_id' => 'setSupplierId',
        'bank_account_id' => 'setBankAccountId',
        'invoice_date' => 'setInvoiceDate',
        'payment_date' => 'setPaymentDate',
        'due_date' => 'setDueDate',
        'invoice_number' => 'setInvoiceNumber',
        'total_amount' => 'setTotalAmount',
        'vat' => 'setVat',
        'vat_high' => 'setVatHigh',
        'vat_medium' => 'setVatMedium',
        'vat_low' => 'setVatLow',
        'is_credit_invoice' => 'setIsCreditInvoice',
        'currency_code' => 'setCurrencyCode',
        'currency_rate' => 'setCurrencyRate',
        'ocr_number' => 'setOcrNumber',
        'message' => 'setMessage',
        'created_utc' => 'setCreatedUtc',
        'modified_utc' => 'setModifiedUtc',
        'plus_giro_number' => 'setPlusGiroNumber',
        'bank_giro_number' => 'setBankGiroNumber',
        'rows' => 'setRows',
        'supplier_name' => 'setSupplierName',
        'supplier_number' => 'setSupplierNumber',
        'is_quick_invoice' => 'setIsQuickInvoice',
        'is_domestic' => 'setIsDomestic',
        'remaining_amount' => 'setRemainingAmount',
        'remaining_amount_invoice_currency' => 'setRemainingAmountInvoiceCurrency',
        'voucher_number' => 'setVoucherNumber',
        'voucher_id' => 'setVoucherId',
        'created_from_draft_id' => 'setCreatedFromDraftId',
        'self_employed_without_fixed_address' => 'setSelfEmployedWithoutFixedAddress',
        'allocation_periods' => 'setAllocationPeriods',
        'auto_credit_debit_pairing' => 'setAutoCreditDebitPairing',
        'attachments' => 'setAttachments',
        'set_off_amount_invoice_currency' => 'setSetOffAmountInvoiceCurrency',
        'status' => 'setStatus',
        'skip_send_to_bank' => 'setSkipSendToBank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'supplier_id' => 'getSupplierId',
        'bank_account_id' => 'getBankAccountId',
        'invoice_date' => 'getInvoiceDate',
        'payment_date' => 'getPaymentDate',
        'due_date' => 'getDueDate',
        'invoice_number' => 'getInvoiceNumber',
        'total_amount' => 'getTotalAmount',
        'vat' => 'getVat',
        'vat_high' => 'getVatHigh',
        'vat_medium' => 'getVatMedium',
        'vat_low' => 'getVatLow',
        'is_credit_invoice' => 'getIsCreditInvoice',
        'currency_code' => 'getCurrencyCode',
        'currency_rate' => 'getCurrencyRate',
        'ocr_number' => 'getOcrNumber',
        'message' => 'getMessage',
        'created_utc' => 'getCreatedUtc',
        'modified_utc' => 'getModifiedUtc',
        'plus_giro_number' => 'getPlusGiroNumber',
        'bank_giro_number' => 'getBankGiroNumber',
        'rows' => 'getRows',
        'supplier_name' => 'getSupplierName',
        'supplier_number' => 'getSupplierNumber',
        'is_quick_invoice' => 'getIsQuickInvoice',
        'is_domestic' => 'getIsDomestic',
        'remaining_amount' => 'getRemainingAmount',
        'remaining_amount_invoice_currency' => 'getRemainingAmountInvoiceCurrency',
        'voucher_number' => 'getVoucherNumber',
        'voucher_id' => 'getVoucherId',
        'created_from_draft_id' => 'getCreatedFromDraftId',
        'self_employed_without_fixed_address' => 'getSelfEmployedWithoutFixedAddress',
        'allocation_periods' => 'getAllocationPeriods',
        'auto_credit_debit_pairing' => 'getAutoCreditDebitPairing',
        'attachments' => 'getAttachments',
        'set_off_amount_invoice_currency' => 'getSetOffAmountInvoiceCurrency',
        'status' => 'getStatus',
        'skip_send_to_bank' => 'getSkipSendToBank'
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

    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    
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
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['vat_high'] = isset($data['vat_high']) ? $data['vat_high'] : null;
        $this->container['vat_medium'] = isset($data['vat_medium']) ? $data['vat_medium'] : null;
        $this->container['vat_low'] = isset($data['vat_low']) ? $data['vat_low'] : null;
        $this->container['is_credit_invoice'] = isset($data['is_credit_invoice']) ? $data['is_credit_invoice'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['ocr_number'] = isset($data['ocr_number']) ? $data['ocr_number'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['plus_giro_number'] = isset($data['plus_giro_number']) ? $data['plus_giro_number'] : null;
        $this->container['bank_giro_number'] = isset($data['bank_giro_number']) ? $data['bank_giro_number'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['supplier_number'] = isset($data['supplier_number']) ? $data['supplier_number'] : null;
        $this->container['is_quick_invoice'] = isset($data['is_quick_invoice']) ? $data['is_quick_invoice'] : null;
        $this->container['is_domestic'] = isset($data['is_domestic']) ? $data['is_domestic'] : null;
        $this->container['remaining_amount'] = isset($data['remaining_amount']) ? $data['remaining_amount'] : null;
        $this->container['remaining_amount_invoice_currency'] = isset($data['remaining_amount_invoice_currency']) ? $data['remaining_amount_invoice_currency'] : null;
        $this->container['voucher_number'] = isset($data['voucher_number']) ? $data['voucher_number'] : null;
        $this->container['voucher_id'] = isset($data['voucher_id']) ? $data['voucher_id'] : null;
        $this->container['created_from_draft_id'] = isset($data['created_from_draft_id']) ? $data['created_from_draft_id'] : null;
        $this->container['self_employed_without_fixed_address'] = isset($data['self_employed_without_fixed_address']) ? $data['self_employed_without_fixed_address'] : null;
        $this->container['allocation_periods'] = isset($data['allocation_periods']) ? $data['allocation_periods'] : null;
        $this->container['auto_credit_debit_pairing'] = isset($data['auto_credit_debit_pairing']) ? $data['auto_credit_debit_pairing'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['set_off_amount_invoice_currency'] = isset($data['set_off_amount_invoice_currency']) ? $data['set_off_amount_invoice_currency'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['skip_send_to_bank'] = isset($data['skip_send_to_bank']) ? $data['skip_send_to_bank'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supplier_id'] === null) {
            $invalidProperties[] = "'supplier_id' can't be null";
        }
        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $id Purpose: This is automatically generated by eAccounting upon creation
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return string
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param string $supplier_id Source: Get from /v2/suppliers.
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets bank_account_id
     *
     * @return string
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param string $bank_account_id bank_account_id
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date Format: YYYY-MM-DD
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date payment_date
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date Format: YYYY-MM-DD. Default: Date based on the supplier's terms of payment
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return double
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param double $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets vat_high
     *
     * @return double
     */
    public function getVatHigh()
    {
        return $this->container['vat_high'];
    }

    /**
     * Sets vat_high
     *
     * @param double $vat_high Only for Norway
     *
     * @return $this
     */
    public function setVatHigh($vat_high)
    {
        $this->container['vat_high'] = $vat_high;

        return $this;
    }

    /**
     * Gets vat_medium
     *
     * @return double
     */
    public function getVatMedium()
    {
        return $this->container['vat_medium'];
    }

    /**
     * Sets vat_medium
     *
     * @param double $vat_medium Only for Norway
     *
     * @return $this
     */
    public function setVatMedium($vat_medium)
    {
        $this->container['vat_medium'] = $vat_medium;

        return $this;
    }

    /**
     * Gets vat_low
     *
     * @return double
     */
    public function getVatLow()
    {
        return $this->container['vat_low'];
    }

    /**
     * Sets vat_low
     *
     * @param double $vat_low Only for Norway
     *
     * @return $this
     */
    public function setVatLow($vat_low)
    {
        $this->container['vat_low'] = $vat_low;

        return $this;
    }

    /**
     * Gets is_credit_invoice
     *
     * @return bool
     */
    public function getIsCreditInvoice()
    {
        return $this->container['is_credit_invoice'];
    }

    /**
     * Sets is_credit_invoice
     *
     * @param bool $is_credit_invoice is_credit_invoice
     *
     * @return $this
     */
    public function setIsCreditInvoice($is_credit_invoice)
    {
        $this->container['is_credit_invoice'] = $is_credit_invoice;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_rate
     *
     * @return double
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param double $currency_rate currency_rate
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets ocr_number
     *
     * @return string
     */
    public function getOcrNumber()
    {
        return $this->container['ocr_number'];
    }

    /**
     * Sets ocr_number
     *
     * @param string $ocr_number ocr_number
     *
     * @return $this
     */
    public function setOcrNumber($ocr_number)
    {
        $this->container['ocr_number'] = $ocr_number;

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
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets plus_giro_number
     *
     * @return string
     */
    public function getPlusGiroNumber()
    {
        return $this->container['plus_giro_number'];
    }

    /**
     * Sets plus_giro_number
     *
     * @param string $plus_giro_number plus_giro_number
     *
     * @return $this
     */
    public function setPlusGiroNumber($plus_giro_number)
    {
        $this->container['plus_giro_number'] = $plus_giro_number;

        return $this;
    }

    /**
     * Gets bank_giro_number
     *
     * @return string
     */
    public function getBankGiroNumber()
    {
        return $this->container['bank_giro_number'];
    }

    /**
     * Sets bank_giro_number
     *
     * @param string $bank_giro_number bank_giro_number
     *
     * @return $this
     */
    public function setBankGiroNumber($bank_giro_number)
    {
        $this->container['bank_giro_number'] = $bank_giro_number;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Struqtur\VismaEAccounting\Model\SupplierInvoiceRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Struqtur\VismaEAccounting\Model\SupplierInvoiceRowApi[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name supplier_name
     *
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets supplier_number
     *
     * @return string
     */
    public function getSupplierNumber()
    {
        return $this->container['supplier_number'];
    }

    /**
     * Sets supplier_number
     *
     * @param string $supplier_number supplier_number
     *
     * @return $this
     */
    public function setSupplierNumber($supplier_number)
    {
        $this->container['supplier_number'] = $supplier_number;

        return $this;
    }

    /**
     * Gets is_quick_invoice
     *
     * @return bool
     */
    public function getIsQuickInvoice()
    {
        return $this->container['is_quick_invoice'];
    }

    /**
     * Sets is_quick_invoice
     *
     * @param bool $is_quick_invoice is_quick_invoice
     *
     * @return $this
     */
    public function setIsQuickInvoice($is_quick_invoice)
    {
        $this->container['is_quick_invoice'] = $is_quick_invoice;

        return $this;
    }

    /**
     * Gets is_domestic
     *
     * @return bool
     */
    public function getIsDomestic()
    {
        return $this->container['is_domestic'];
    }

    /**
     * Sets is_domestic
     *
     * @param bool $is_domestic is_domestic
     *
     * @return $this
     */
    public function setIsDomestic($is_domestic)
    {
        $this->container['is_domestic'] = $is_domestic;

        return $this;
    }

    /**
     * Gets remaining_amount
     *
     * @return double
     */
    public function getRemainingAmount()
    {
        return $this->container['remaining_amount'];
    }

    /**
     * Sets remaining_amount
     *
     * @param double $remaining_amount remaining_amount
     *
     * @return $this
     */
    public function setRemainingAmount($remaining_amount)
    {
        $this->container['remaining_amount'] = $remaining_amount;

        return $this;
    }

    /**
     * Gets remaining_amount_invoice_currency
     *
     * @return double
     */
    public function getRemainingAmountInvoiceCurrency()
    {
        return $this->container['remaining_amount_invoice_currency'];
    }

    /**
     * Sets remaining_amount_invoice_currency
     *
     * @param double $remaining_amount_invoice_currency remaining_amount_invoice_currency
     *
     * @return $this
     */
    public function setRemainingAmountInvoiceCurrency($remaining_amount_invoice_currency)
    {
        $this->container['remaining_amount_invoice_currency'] = $remaining_amount_invoice_currency;

        return $this;
    }

    /**
     * Gets voucher_number
     *
     * @return string
     */
    public function getVoucherNumber()
    {
        return $this->container['voucher_number'];
    }

    /**
     * Sets voucher_number
     *
     * @param string $voucher_number voucher_number
     *
     * @return $this
     */
    public function setVoucherNumber($voucher_number)
    {
        $this->container['voucher_number'] = $voucher_number;

        return $this;
    }

    /**
     * Gets voucher_id
     *
     * @return string
     */
    public function getVoucherId()
    {
        return $this->container['voucher_id'];
    }

    /**
     * Sets voucher_id
     *
     * @param string $voucher_id voucher_id
     *
     * @return $this
     */
    public function setVoucherId($voucher_id)
    {
        $this->container['voucher_id'] = $voucher_id;

        return $this;
    }

    /**
     * Gets created_from_draft_id
     *
     * @return string
     */
    public function getCreatedFromDraftId()
    {
        return $this->container['created_from_draft_id'];
    }

    /**
     * Sets created_from_draft_id
     *
     * @param string $created_from_draft_id created_from_draft_id
     *
     * @return $this
     */
    public function setCreatedFromDraftId($created_from_draft_id)
    {
        $this->container['created_from_draft_id'] = $created_from_draft_id;

        return $this;
    }

    /**
     * Gets self_employed_without_fixed_address
     *
     * @return bool
     */
    public function getSelfEmployedWithoutFixedAddress()
    {
        return $this->container['self_employed_without_fixed_address'];
    }

    /**
     * Sets self_employed_without_fixed_address
     *
     * @param bool $self_employed_without_fixed_address self_employed_without_fixed_address
     *
     * @return $this
     */
    public function setSelfEmployedWithoutFixedAddress($self_employed_without_fixed_address)
    {
        $this->container['self_employed_without_fixed_address'] = $self_employed_without_fixed_address;

        return $this;
    }

    /**
     * Gets allocation_periods
     *
     * @return \Struqtur\VismaEAccounting\Model\AllocationPeriodApi[]
     */
    public function getAllocationPeriods()
    {
        return $this->container['allocation_periods'];
    }

    /**
     * Sets allocation_periods
     *
     * @param \Struqtur\VismaEAccounting\Model\AllocationPeriodApi[] $allocation_periods Purpose: For create use POST /v2/allocationperiods
     *
     * @return $this
     */
    public function setAllocationPeriods($allocation_periods)
    {
        $this->container['allocation_periods'] = $allocation_periods;

        return $this;
    }

    /**
     * Gets auto_credit_debit_pairing
     *
     * @return bool
     */
    public function getAutoCreditDebitPairing()
    {
        return $this->container['auto_credit_debit_pairing'];
    }

    /**
     * Sets auto_credit_debit_pairing
     *
     * @param bool $auto_credit_debit_pairing auto_credit_debit_pairing
     *
     * @return $this
     */
    public function setAutoCreditDebitPairing($auto_credit_debit_pairing)
    {
        $this->container['auto_credit_debit_pairing'] = $auto_credit_debit_pairing;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets set_off_amount_invoice_currency
     *
     * @return double
     */
    public function getSetOffAmountInvoiceCurrency()
    {
        return $this->container['set_off_amount_invoice_currency'];
    }

    /**
     * Sets set_off_amount_invoice_currency
     *
     * @param double $set_off_amount_invoice_currency set_off_amount_invoice_currency
     *
     * @return $this
     */
    public function setSetOffAmountInvoiceCurrency($set_off_amount_invoice_currency)
    {
        $this->container['set_off_amount_invoice_currency'] = $set_off_amount_invoice_currency;

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
     * @param int $status 0 = Draft, 1 = Normal, 2 = Deleted
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
     * Gets skip_send_to_bank
     *
     * @return bool
     */
    public function getSkipSendToBank()
    {
        return $this->container['skip_send_to_bank'];
    }

    /**
     * Sets skip_send_to_bank
     *
     * @param bool $skip_send_to_bank Invoice paid manually, won't be sent to the bank. Requires active bank integration.
     *
     * @return $this
     */
    public function setSkipSendToBank($skip_send_to_bank)
    {
        $this->container['skip_send_to_bank'] = $skip_send_to_bank;

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

