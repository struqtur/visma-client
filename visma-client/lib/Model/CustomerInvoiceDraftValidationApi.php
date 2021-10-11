<?php
/**
 * CustomerInvoiceDraftValidationApi
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
 * Swagger Codegen version: 2.4.23
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
 * CustomerInvoiceDraftValidationApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceDraftValidationApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerInvoiceDraftValidationApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_amount_invoice_currency' => 'double',
        'total_vat_amount_invoice_currency' => 'double',
        'total_roundings_invoice_currency' => 'double',
        'rows' => '\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationRowApi[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_amount_invoice_currency' => 'double',
        'total_vat_amount_invoice_currency' => 'double',
        'total_roundings_invoice_currency' => 'double',
        'rows' => null
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
        'total_amount_invoice_currency' => 'TotalAmountInvoiceCurrency',
        'total_vat_amount_invoice_currency' => 'TotalVatAmountInvoiceCurrency',
        'total_roundings_invoice_currency' => 'TotalRoundingsInvoiceCurrency',
        'rows' => 'Rows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_amount_invoice_currency' => 'setTotalAmountInvoiceCurrency',
        'total_vat_amount_invoice_currency' => 'setTotalVatAmountInvoiceCurrency',
        'total_roundings_invoice_currency' => 'setTotalRoundingsInvoiceCurrency',
        'rows' => 'setRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_amount_invoice_currency' => 'getTotalAmountInvoiceCurrency',
        'total_vat_amount_invoice_currency' => 'getTotalVatAmountInvoiceCurrency',
        'total_roundings_invoice_currency' => 'getTotalRoundingsInvoiceCurrency',
        'rows' => 'getRows'
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
        $this->container['total_amount_invoice_currency'] = isset($data['total_amount_invoice_currency']) ? $data['total_amount_invoice_currency'] : null;
        $this->container['total_vat_amount_invoice_currency'] = isset($data['total_vat_amount_invoice_currency']) ? $data['total_vat_amount_invoice_currency'] : null;
        $this->container['total_roundings_invoice_currency'] = isset($data['total_roundings_invoice_currency']) ? $data['total_roundings_invoice_currency'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_amount_invoice_currency
     *
     * @return double
     */
    public function getTotalAmountInvoiceCurrency()
    {
        return $this->container['total_amount_invoice_currency'];
    }

    /**
     * Sets total_amount_invoice_currency
     *
     * @param double $total_amount_invoice_currency Invoice total amount. Should be negative when credit invoice
     *
     * @return $this
     */
    public function setTotalAmountInvoiceCurrency($total_amount_invoice_currency)
    {
        $this->container['total_amount_invoice_currency'] = $total_amount_invoice_currency;

        return $this;
    }

    /**
     * Gets total_vat_amount_invoice_currency
     *
     * @return double
     */
    public function getTotalVatAmountInvoiceCurrency()
    {
        return $this->container['total_vat_amount_invoice_currency'];
    }

    /**
     * Sets total_vat_amount_invoice_currency
     *
     * @param double $total_vat_amount_invoice_currency Invoice VAT amount. Should be negative when credit invoice
     *
     * @return $this
     */
    public function setTotalVatAmountInvoiceCurrency($total_vat_amount_invoice_currency)
    {
        $this->container['total_vat_amount_invoice_currency'] = $total_vat_amount_invoice_currency;

        return $this;
    }

    /**
     * Gets total_roundings_invoice_currency
     *
     * @return double
     */
    public function getTotalRoundingsInvoiceCurrency()
    {
        return $this->container['total_roundings_invoice_currency'];
    }

    /**
     * Sets total_roundings_invoice_currency
     *
     * @param double $total_roundings_invoice_currency Invoice Roundings amount. Can be both positive and negative depending on the rounding.
     *
     * @return $this
     */
    public function setTotalRoundingsInvoiceCurrency($total_roundings_invoice_currency)
    {
        $this->container['total_roundings_invoice_currency'] = $total_roundings_invoice_currency;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationRowApi[] $rows A set of invoice rows to validate. We match upon the line number.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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


