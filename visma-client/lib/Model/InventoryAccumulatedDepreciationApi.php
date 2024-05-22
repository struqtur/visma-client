<?php
/**
 * InventoryAccumulatedDepreciationApi
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
 * InventoryAccumulatedDepreciationApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAccumulatedDepreciationApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryAccumulatedDepreciationApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'fiscal_year_id' => 'string',
        'opening_accumulated_depreciation' => 'double',
        'depreciation_for_the_year' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'fiscal_year_id' => 'uuid',
        'opening_accumulated_depreciation' => 'double',
        'depreciation_for_the_year' => 'double'
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
        'fiscal_year_id' => 'FiscalYearId',
        'opening_accumulated_depreciation' => 'OpeningAccumulatedDepreciation',
        'depreciation_for_the_year' => 'DepreciationForTheYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'fiscal_year_id' => 'setFiscalYearId',
        'opening_accumulated_depreciation' => 'setOpeningAccumulatedDepreciation',
        'depreciation_for_the_year' => 'setDepreciationForTheYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'fiscal_year_id' => 'getFiscalYearId',
        'opening_accumulated_depreciation' => 'getOpeningAccumulatedDepreciation',
        'depreciation_for_the_year' => 'getDepreciationForTheYear'
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
        $this->container['fiscal_year_id'] = isset($data['fiscal_year_id']) ? $data['fiscal_year_id'] : null;
        $this->container['opening_accumulated_depreciation'] = isset($data['opening_accumulated_depreciation']) ? $data['opening_accumulated_depreciation'] : null;
        $this->container['depreciation_for_the_year'] = isset($data['depreciation_for_the_year']) ? $data['depreciation_for_the_year'] : null;
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
     * Gets fiscal_year_id
     *
     * @return string
     */
    public function getFiscalYearId()
    {
        return $this->container['fiscal_year_id'];
    }

    /**
     * Sets fiscal_year_id
     *
     * @param string $fiscal_year_id fiscal_year_id
     *
     * @return $this
     */
    public function setFiscalYearId($fiscal_year_id)
    {
        $this->container['fiscal_year_id'] = $fiscal_year_id;

        return $this;
    }

    /**
     * Gets opening_accumulated_depreciation
     *
     * @return double
     */
    public function getOpeningAccumulatedDepreciation()
    {
        return $this->container['opening_accumulated_depreciation'];
    }

    /**
     * Sets opening_accumulated_depreciation
     *
     * @param double $opening_accumulated_depreciation opening_accumulated_depreciation
     *
     * @return $this
     */
    public function setOpeningAccumulatedDepreciation($opening_accumulated_depreciation)
    {
        $this->container['opening_accumulated_depreciation'] = $opening_accumulated_depreciation;

        return $this;
    }

    /**
     * Gets depreciation_for_the_year
     *
     * @return double
     */
    public function getDepreciationForTheYear()
    {
        return $this->container['depreciation_for_the_year'];
    }

    /**
     * Sets depreciation_for_the_year
     *
     * @param double $depreciation_for_the_year depreciation_for_the_year
     *
     * @return $this
     */
    public function setDepreciationForTheYear($depreciation_for_the_year)
    {
        $this->container['depreciation_for_the_year'] = $depreciation_for_the_year;

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


