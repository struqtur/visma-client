<?php
/**
 * CustomerInvoiceDraftValidationRowApi
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
 * CustomerInvoiceDraftValidationRowApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceDraftValidationRowApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerInvoiceDraftValidationRowApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_number' => 'int',
        'total_amount_no_vat_invoice_currency' => 'double',
        'total_amount_inc_vat_invoice_currency' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_number' => 'int32',
        'total_amount_no_vat_invoice_currency' => 'double',
        'total_amount_inc_vat_invoice_currency' => 'double'
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
        'line_number' => 'LineNumber',
        'total_amount_no_vat_invoice_currency' => 'TotalAmountNoVatInvoiceCurrency',
        'total_amount_inc_vat_invoice_currency' => 'TotalAmountIncVatInvoiceCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_number' => 'setLineNumber',
        'total_amount_no_vat_invoice_currency' => 'setTotalAmountNoVatInvoiceCurrency',
        'total_amount_inc_vat_invoice_currency' => 'setTotalAmountIncVatInvoiceCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_number' => 'getLineNumber',
        'total_amount_no_vat_invoice_currency' => 'getTotalAmountNoVatInvoiceCurrency',
        'total_amount_inc_vat_invoice_currency' => 'getTotalAmountIncVatInvoiceCurrency'
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
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['total_amount_no_vat_invoice_currency'] = isset($data['total_amount_no_vat_invoice_currency']) ? $data['total_amount_no_vat_invoice_currency'] : null;
        $this->container['total_amount_inc_vat_invoice_currency'] = isset($data['total_amount_inc_vat_invoice_currency']) ? $data['total_amount_inc_vat_invoice_currency'] : null;
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
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number Line number from the customer invoice draft
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets total_amount_no_vat_invoice_currency
     *
     * @return double
     */
    public function getTotalAmountNoVatInvoiceCurrency()
    {
        return $this->container['total_amount_no_vat_invoice_currency'];
    }

    /**
     * Sets total_amount_no_vat_invoice_currency
     *
     * @param double $total_amount_no_vat_invoice_currency Total amount without VAT ((Quantity * Unit price) - Discount)
     *
     * @return $this
     */
    public function setTotalAmountNoVatInvoiceCurrency($total_amount_no_vat_invoice_currency)
    {
        $this->container['total_amount_no_vat_invoice_currency'] = $total_amount_no_vat_invoice_currency;

        return $this;
    }

    /**
     * Gets total_amount_inc_vat_invoice_currency
     *
     * @return double
     */
    public function getTotalAmountIncVatInvoiceCurrency()
    {
        return $this->container['total_amount_inc_vat_invoice_currency'];
    }

    /**
     * Sets total_amount_inc_vat_invoice_currency
     *
     * @param double $total_amount_inc_vat_invoice_currency Total amount with VAT ((Quantity * Unit price) - Discount)
     *
     * @return $this
     */
    public function setTotalAmountIncVatInvoiceCurrency($total_amount_inc_vat_invoice_currency)
    {
        $this->container['total_amount_inc_vat_invoice_currency'] = $total_amount_inc_vat_invoice_currency;

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


