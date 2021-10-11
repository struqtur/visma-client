<?php
/**
 * CompanyRotRutSettingsApi
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
 * CompanyRotRutSettingsApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyRotRutSettingsApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanyRotRutSettingsApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rut_max_amount_for_pers_below65_year' => 'double',
        'rut_max_amount_for_pers_over65_year' => 'double',
        'rut_reduced_invoicing_percent' => 'double',
        'rot_reduced_invoicing_max_amount' => 'double',
        'rot_reduced_invoicing_percent' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rut_max_amount_for_pers_below65_year' => 'double',
        'rut_max_amount_for_pers_over65_year' => 'double',
        'rut_reduced_invoicing_percent' => 'double',
        'rot_reduced_invoicing_max_amount' => 'double',
        'rot_reduced_invoicing_percent' => 'double'
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
        'rut_max_amount_for_pers_below65_year' => 'RutMaxAmountForPersBelow65Year',
        'rut_max_amount_for_pers_over65_year' => 'RutMaxAmountForPersOver65Year',
        'rut_reduced_invoicing_percent' => 'RutReducedInvoicingPercent',
        'rot_reduced_invoicing_max_amount' => 'RotReducedInvoicingMaxAmount',
        'rot_reduced_invoicing_percent' => 'RotReducedInvoicingPercent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rut_max_amount_for_pers_below65_year' => 'setRutMaxAmountForPersBelow65Year',
        'rut_max_amount_for_pers_over65_year' => 'setRutMaxAmountForPersOver65Year',
        'rut_reduced_invoicing_percent' => 'setRutReducedInvoicingPercent',
        'rot_reduced_invoicing_max_amount' => 'setRotReducedInvoicingMaxAmount',
        'rot_reduced_invoicing_percent' => 'setRotReducedInvoicingPercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rut_max_amount_for_pers_below65_year' => 'getRutMaxAmountForPersBelow65Year',
        'rut_max_amount_for_pers_over65_year' => 'getRutMaxAmountForPersOver65Year',
        'rut_reduced_invoicing_percent' => 'getRutReducedInvoicingPercent',
        'rot_reduced_invoicing_max_amount' => 'getRotReducedInvoicingMaxAmount',
        'rot_reduced_invoicing_percent' => 'getRotReducedInvoicingPercent'
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
        $this->container['rut_max_amount_for_pers_below65_year'] = isset($data['rut_max_amount_for_pers_below65_year']) ? $data['rut_max_amount_for_pers_below65_year'] : null;
        $this->container['rut_max_amount_for_pers_over65_year'] = isset($data['rut_max_amount_for_pers_over65_year']) ? $data['rut_max_amount_for_pers_over65_year'] : null;
        $this->container['rut_reduced_invoicing_percent'] = isset($data['rut_reduced_invoicing_percent']) ? $data['rut_reduced_invoicing_percent'] : null;
        $this->container['rot_reduced_invoicing_max_amount'] = isset($data['rot_reduced_invoicing_max_amount']) ? $data['rot_reduced_invoicing_max_amount'] : null;
        $this->container['rot_reduced_invoicing_percent'] = isset($data['rot_reduced_invoicing_percent']) ? $data['rot_reduced_invoicing_percent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['rut_max_amount_for_pers_below65_year']) && ($this->container['rut_max_amount_for_pers_below65_year'] > 999999)) {
            $invalidProperties[] = "invalid value for 'rut_max_amount_for_pers_below65_year', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['rut_max_amount_for_pers_below65_year']) && ($this->container['rut_max_amount_for_pers_below65_year'] < 0)) {
            $invalidProperties[] = "invalid value for 'rut_max_amount_for_pers_below65_year', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rut_max_amount_for_pers_over65_year']) && ($this->container['rut_max_amount_for_pers_over65_year'] > 999999)) {
            $invalidProperties[] = "invalid value for 'rut_max_amount_for_pers_over65_year', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['rut_max_amount_for_pers_over65_year']) && ($this->container['rut_max_amount_for_pers_over65_year'] < 0)) {
            $invalidProperties[] = "invalid value for 'rut_max_amount_for_pers_over65_year', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rut_reduced_invoicing_percent']) && ($this->container['rut_reduced_invoicing_percent'] > 1)) {
            $invalidProperties[] = "invalid value for 'rut_reduced_invoicing_percent', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['rut_reduced_invoicing_percent']) && ($this->container['rut_reduced_invoicing_percent'] < 0)) {
            $invalidProperties[] = "invalid value for 'rut_reduced_invoicing_percent', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rot_reduced_invoicing_max_amount']) && ($this->container['rot_reduced_invoicing_max_amount'] > 999999)) {
            $invalidProperties[] = "invalid value for 'rot_reduced_invoicing_max_amount', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['rot_reduced_invoicing_max_amount']) && ($this->container['rot_reduced_invoicing_max_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'rot_reduced_invoicing_max_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rot_reduced_invoicing_percent']) && ($this->container['rot_reduced_invoicing_percent'] > 1)) {
            $invalidProperties[] = "invalid value for 'rot_reduced_invoicing_percent', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['rot_reduced_invoicing_percent']) && ($this->container['rot_reduced_invoicing_percent'] < 0)) {
            $invalidProperties[] = "invalid value for 'rot_reduced_invoicing_percent', must be bigger than or equal to 0.";
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
     * Gets rut_max_amount_for_pers_below65_year
     *
     * @return double
     */
    public function getRutMaxAmountForPersBelow65Year()
    {
        return $this->container['rut_max_amount_for_pers_below65_year'];
    }

    /**
     * Sets rut_max_amount_for_pers_below65_year
     *
     * @param double $rut_max_amount_for_pers_below65_year rut_max_amount_for_pers_below65_year
     *
     * @return $this
     */
    public function setRutMaxAmountForPersBelow65Year($rut_max_amount_for_pers_below65_year)
    {

        if (!is_null($rut_max_amount_for_pers_below65_year) && ($rut_max_amount_for_pers_below65_year > 999999)) {
            throw new \InvalidArgumentException('invalid value for $rut_max_amount_for_pers_below65_year when calling CompanyRotRutSettingsApi., must be smaller than or equal to 999999.');
        }
        if (!is_null($rut_max_amount_for_pers_below65_year) && ($rut_max_amount_for_pers_below65_year < 0)) {
            throw new \InvalidArgumentException('invalid value for $rut_max_amount_for_pers_below65_year when calling CompanyRotRutSettingsApi., must be bigger than or equal to 0.');
        }

        $this->container['rut_max_amount_for_pers_below65_year'] = $rut_max_amount_for_pers_below65_year;

        return $this;
    }

    /**
     * Gets rut_max_amount_for_pers_over65_year
     *
     * @return double
     */
    public function getRutMaxAmountForPersOver65Year()
    {
        return $this->container['rut_max_amount_for_pers_over65_year'];
    }

    /**
     * Sets rut_max_amount_for_pers_over65_year
     *
     * @param double $rut_max_amount_for_pers_over65_year rut_max_amount_for_pers_over65_year
     *
     * @return $this
     */
    public function setRutMaxAmountForPersOver65Year($rut_max_amount_for_pers_over65_year)
    {

        if (!is_null($rut_max_amount_for_pers_over65_year) && ($rut_max_amount_for_pers_over65_year > 999999)) {
            throw new \InvalidArgumentException('invalid value for $rut_max_amount_for_pers_over65_year when calling CompanyRotRutSettingsApi., must be smaller than or equal to 999999.');
        }
        if (!is_null($rut_max_amount_for_pers_over65_year) && ($rut_max_amount_for_pers_over65_year < 0)) {
            throw new \InvalidArgumentException('invalid value for $rut_max_amount_for_pers_over65_year when calling CompanyRotRutSettingsApi., must be bigger than or equal to 0.');
        }

        $this->container['rut_max_amount_for_pers_over65_year'] = $rut_max_amount_for_pers_over65_year;

        return $this;
    }

    /**
     * Gets rut_reduced_invoicing_percent
     *
     * @return double
     */
    public function getRutReducedInvoicingPercent()
    {
        return $this->container['rut_reduced_invoicing_percent'];
    }

    /**
     * Sets rut_reduced_invoicing_percent
     *
     * @param double $rut_reduced_invoicing_percent rut_reduced_invoicing_percent
     *
     * @return $this
     */
    public function setRutReducedInvoicingPercent($rut_reduced_invoicing_percent)
    {

        if (!is_null($rut_reduced_invoicing_percent) && ($rut_reduced_invoicing_percent > 1)) {
            throw new \InvalidArgumentException('invalid value for $rut_reduced_invoicing_percent when calling CompanyRotRutSettingsApi., must be smaller than or equal to 1.');
        }
        if (!is_null($rut_reduced_invoicing_percent) && ($rut_reduced_invoicing_percent < 0)) {
            throw new \InvalidArgumentException('invalid value for $rut_reduced_invoicing_percent when calling CompanyRotRutSettingsApi., must be bigger than or equal to 0.');
        }

        $this->container['rut_reduced_invoicing_percent'] = $rut_reduced_invoicing_percent;

        return $this;
    }

    /**
     * Gets rot_reduced_invoicing_max_amount
     *
     * @return double
     */
    public function getRotReducedInvoicingMaxAmount()
    {
        return $this->container['rot_reduced_invoicing_max_amount'];
    }

    /**
     * Sets rot_reduced_invoicing_max_amount
     *
     * @param double $rot_reduced_invoicing_max_amount rot_reduced_invoicing_max_amount
     *
     * @return $this
     */
    public function setRotReducedInvoicingMaxAmount($rot_reduced_invoicing_max_amount)
    {

        if (!is_null($rot_reduced_invoicing_max_amount) && ($rot_reduced_invoicing_max_amount > 999999)) {
            throw new \InvalidArgumentException('invalid value for $rot_reduced_invoicing_max_amount when calling CompanyRotRutSettingsApi., must be smaller than or equal to 999999.');
        }
        if (!is_null($rot_reduced_invoicing_max_amount) && ($rot_reduced_invoicing_max_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $rot_reduced_invoicing_max_amount when calling CompanyRotRutSettingsApi., must be bigger than or equal to 0.');
        }

        $this->container['rot_reduced_invoicing_max_amount'] = $rot_reduced_invoicing_max_amount;

        return $this;
    }

    /**
     * Gets rot_reduced_invoicing_percent
     *
     * @return double
     */
    public function getRotReducedInvoicingPercent()
    {
        return $this->container['rot_reduced_invoicing_percent'];
    }

    /**
     * Sets rot_reduced_invoicing_percent
     *
     * @param double $rot_reduced_invoicing_percent rot_reduced_invoicing_percent
     *
     * @return $this
     */
    public function setRotReducedInvoicingPercent($rot_reduced_invoicing_percent)
    {

        if (!is_null($rot_reduced_invoicing_percent) && ($rot_reduced_invoicing_percent > 1)) {
            throw new \InvalidArgumentException('invalid value for $rot_reduced_invoicing_percent when calling CompanyRotRutSettingsApi., must be smaller than or equal to 1.');
        }
        if (!is_null($rot_reduced_invoicing_percent) && ($rot_reduced_invoicing_percent < 0)) {
            throw new \InvalidArgumentException('invalid value for $rot_reduced_invoicing_percent when calling CompanyRotRutSettingsApi., must be bigger than or equal to 0.');
        }

        $this->container['rot_reduced_invoicing_percent'] = $rot_reduced_invoicing_percent;

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


