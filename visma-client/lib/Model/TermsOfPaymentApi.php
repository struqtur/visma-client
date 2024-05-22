<?php
/**
 * TermsOfPaymentApi
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
 * TermsOfPaymentApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermsOfPaymentApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TermsOfPaymentApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'name_english' => 'string',
        'number_of_days' => 'int',
        'terms_of_payment_type_id' => 'int',
        'terms_of_payment_type_text' => 'string',
        'available_for_sales' => 'bool',
        'available_for_purchase' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'name' => null,
        'name_english' => null,
        'number_of_days' => 'int32',
        'terms_of_payment_type_id' => 'int32',
        'terms_of_payment_type_text' => null,
        'available_for_sales' => null,
        'available_for_purchase' => null
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
        'name' => 'Name',
        'name_english' => 'NameEnglish',
        'number_of_days' => 'NumberOfDays',
        'terms_of_payment_type_id' => 'TermsOfPaymentTypeId',
        'terms_of_payment_type_text' => 'TermsOfPaymentTypeText',
        'available_for_sales' => 'AvailableForSales',
        'available_for_purchase' => 'AvailableForPurchase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'name_english' => 'setNameEnglish',
        'number_of_days' => 'setNumberOfDays',
        'terms_of_payment_type_id' => 'setTermsOfPaymentTypeId',
        'terms_of_payment_type_text' => 'setTermsOfPaymentTypeText',
        'available_for_sales' => 'setAvailableForSales',
        'available_for_purchase' => 'setAvailableForPurchase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'name_english' => 'getNameEnglish',
        'number_of_days' => 'getNumberOfDays',
        'terms_of_payment_type_id' => 'getTermsOfPaymentTypeId',
        'terms_of_payment_type_text' => 'getTermsOfPaymentTypeText',
        'available_for_sales' => 'getAvailableForSales',
        'available_for_purchase' => 'getAvailableForPurchase'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_english'] = isset($data['name_english']) ? $data['name_english'] : null;
        $this->container['number_of_days'] = isset($data['number_of_days']) ? $data['number_of_days'] : null;
        $this->container['terms_of_payment_type_id'] = isset($data['terms_of_payment_type_id']) ? $data['terms_of_payment_type_id'] : null;
        $this->container['terms_of_payment_type_text'] = isset($data['terms_of_payment_type_text']) ? $data['terms_of_payment_type_text'] : null;
        $this->container['available_for_sales'] = isset($data['available_for_sales']) ? $data['available_for_sales'] : null;
        $this->container['available_for_purchase'] = isset($data['available_for_purchase']) ? $data['available_for_purchase'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_english
     *
     * @return string
     */
    public function getNameEnglish()
    {
        return $this->container['name_english'];
    }

    /**
     * Sets name_english
     *
     * @param string $name_english name_english
     *
     * @return $this
     */
    public function setNameEnglish($name_english)
    {
        $this->container['name_english'] = $name_english;

        return $this;
    }

    /**
     * Gets number_of_days
     *
     * @return int
     */
    public function getNumberOfDays()
    {
        return $this->container['number_of_days'];
    }

    /**
     * Sets number_of_days
     *
     * @param int $number_of_days number_of_days
     *
     * @return $this
     */
    public function setNumberOfDays($number_of_days)
    {
        $this->container['number_of_days'] = $number_of_days;

        return $this;
    }

    /**
     * Gets terms_of_payment_type_id
     *
     * @return int
     */
    public function getTermsOfPaymentTypeId()
    {
        return $this->container['terms_of_payment_type_id'];
    }

    /**
     * Sets terms_of_payment_type_id
     *
     * @param int $terms_of_payment_type_id 0 = Normal, 1 = CurrentMonth, 2 = Cash, 3 = CardPayment, 4 = DigitalWallet, 5 = PaymentServiceProvider
     *
     * @return $this
     */
    public function setTermsOfPaymentTypeId($terms_of_payment_type_id)
    {
        $this->container['terms_of_payment_type_id'] = $terms_of_payment_type_id;

        return $this;
    }

    /**
     * Gets terms_of_payment_type_text
     *
     * @return string
     */
    public function getTermsOfPaymentTypeText()
    {
        return $this->container['terms_of_payment_type_text'];
    }

    /**
     * Sets terms_of_payment_type_text
     *
     * @param string $terms_of_payment_type_text terms_of_payment_type_text
     *
     * @return $this
     */
    public function setTermsOfPaymentTypeText($terms_of_payment_type_text)
    {
        $this->container['terms_of_payment_type_text'] = $terms_of_payment_type_text;

        return $this;
    }

    /**
     * Gets available_for_sales
     *
     * @return bool
     */
    public function getAvailableForSales()
    {
        return $this->container['available_for_sales'];
    }

    /**
     * Sets available_for_sales
     *
     * @param bool $available_for_sales available_for_sales
     *
     * @return $this
     */
    public function setAvailableForSales($available_for_sales)
    {
        $this->container['available_for_sales'] = $available_for_sales;

        return $this;
    }

    /**
     * Gets available_for_purchase
     *
     * @return bool
     */
    public function getAvailableForPurchase()
    {
        return $this->container['available_for_purchase'];
    }

    /**
     * Sets available_for_purchase
     *
     * @param bool $available_for_purchase available_for_purchase
     *
     * @return $this
     */
    public function setAvailableForPurchase($available_for_purchase)
    {
        $this->container['available_for_purchase'] = $available_for_purchase;

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


