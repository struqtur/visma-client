<?php
/**
 * VoucherDraftApi
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
 * VoucherDraftApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherDraftApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherDraftApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'voucher_date' => '\DateTime',
        'voucher_text' => 'string',
        'number_series' => 'string',
        'created_utc' => '\DateTime',
        'modified_utc' => '\DateTime',
        'rows' => '\Struqtur\VismaEAccounting\Model\VoucherDraftRowApi[]'
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
        'number_series' => null,
        'created_utc' => 'date-time',
        'modified_utc' => 'date-time',
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
        'id' => 'Id',
        'voucher_date' => 'VoucherDate',
        'voucher_text' => 'VoucherText',
        'number_series' => 'NumberSeries',
        'created_utc' => 'CreatedUtc',
        'modified_utc' => 'ModifiedUtc',
        'rows' => 'Rows'
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
        'number_series' => 'setNumberSeries',
        'created_utc' => 'setCreatedUtc',
        'modified_utc' => 'setModifiedUtc',
        'rows' => 'setRows'
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
        'number_series' => 'getNumberSeries',
        'created_utc' => 'getCreatedUtc',
        'modified_utc' => 'getModifiedUtc',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['voucher_date'] = isset($data['voucher_date']) ? $data['voucher_date'] : null;
        $this->container['voucher_text'] = isset($data['voucher_text']) ? $data['voucher_text'] : null;
        $this->container['number_series'] = isset($data['number_series']) ? $data['number_series'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
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

        if ($this->container['voucher_date'] === null) {
            $invalidProperties[] = "'voucher_date' can't be null";
        }
        if (!is_null($this->container['voucher_text']) && (mb_strlen($this->container['voucher_text']) > 1000)) {
            $invalidProperties[] = "invalid value for 'voucher_text', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['voucher_text']) && (mb_strlen($this->container['voucher_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'voucher_text', the character length must be bigger than or equal to 0.";
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
     * @param string $voucher_text Description. Max length: 1000 characters
     *
     * @return $this
     */
    public function setVoucherText($voucher_text)
    {
        if (!is_null($voucher_text) && (mb_strlen($voucher_text) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $voucher_text when calling VoucherDraftApi., must be smaller than or equal to 1000.');
        }
        if (!is_null($voucher_text) && (mb_strlen($voucher_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $voucher_text when calling VoucherDraftApi., must be bigger than or equal to 0.');
        }

        $this->container['voucher_text'] = $voucher_text;

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
     * @param string $number_series Purpose: Returns the number series. If not set, will be used the default number series.
     *
     * @return $this
     */
    public function setNumberSeries($number_series)
    {
        $this->container['number_series'] = $number_series;

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
     * Gets rows
     *
     * @return \Struqtur\VismaEAccounting\Model\VoucherDraftRowApi[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Struqtur\VismaEAccounting\Model\VoucherDraftRowApi[] $rows rows
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


