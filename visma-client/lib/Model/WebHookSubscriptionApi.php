<?php
/**
 * WebHookSubscriptionApi
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
 * WebHookSubscriptionApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebHookSubscriptionApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebHookSubscriptionApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'web_hook_id' => 'string',
        'subscription_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'web_hook_id' => 'uuid',
        'subscription_type' => 'int32'
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
        'web_hook_id' => 'WebHookId',
        'subscription_type' => 'SubscriptionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'web_hook_id' => 'setWebHookId',
        'subscription_type' => 'setSubscriptionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'web_hook_id' => 'getWebHookId',
        'subscription_type' => 'getSubscriptionType'
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

    const SUBSCRIPTION_TYPE_0 = 0;
    const SUBSCRIPTION_TYPE_1 = 1;
    const SUBSCRIPTION_TYPE_2 = 2;
    const SUBSCRIPTION_TYPE_3 = 3;
    const SUBSCRIPTION_TYPE_4 = 4;
    const SUBSCRIPTION_TYPE_5 = 5;
    const SUBSCRIPTION_TYPE_6 = 6;
    const SUBSCRIPTION_TYPE_7 = 7;
    const SUBSCRIPTION_TYPE_8 = 8;
    const SUBSCRIPTION_TYPE_9 = 9;
    const SUBSCRIPTION_TYPE_10 = 10;
    const SUBSCRIPTION_TYPE_11 = 11;
    const SUBSCRIPTION_TYPE_12 = 12;
    const SUBSCRIPTION_TYPE_13 = 13;
    const SUBSCRIPTION_TYPE_14 = 14;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionTypeAllowableValues()
    {
        return [
            self::SUBSCRIPTION_TYPE_0,
            self::SUBSCRIPTION_TYPE_1,
            self::SUBSCRIPTION_TYPE_2,
            self::SUBSCRIPTION_TYPE_3,
            self::SUBSCRIPTION_TYPE_4,
            self::SUBSCRIPTION_TYPE_5,
            self::SUBSCRIPTION_TYPE_6,
            self::SUBSCRIPTION_TYPE_7,
            self::SUBSCRIPTION_TYPE_8,
            self::SUBSCRIPTION_TYPE_9,
            self::SUBSCRIPTION_TYPE_10,
            self::SUBSCRIPTION_TYPE_11,
            self::SUBSCRIPTION_TYPE_12,
            self::SUBSCRIPTION_TYPE_13,
            self::SUBSCRIPTION_TYPE_14,
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
        $this->container['web_hook_id'] = isset($data['web_hook_id']) ? $data['web_hook_id'] : null;
        $this->container['subscription_type'] = isset($data['subscription_type']) ? $data['subscription_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!is_null($this->container['subscription_type']) && !in_array($this->container['subscription_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscription_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['subscription_type']) && ($this->container['subscription_type'] > 14)) {
            $invalidProperties[] = "invalid value for 'subscription_type', must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['subscription_type']) && ($this->container['subscription_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'subscription_type', must be bigger than or equal to 0.";
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
     * Gets web_hook_id
     *
     * @return string
     */
    public function getWebHookId()
    {
        return $this->container['web_hook_id'];
    }

    /**
     * Sets web_hook_id
     *
     * @param string $web_hook_id web_hook_id
     *
     * @return $this
     */
    public function setWebHookId($web_hook_id)
    {
        $this->container['web_hook_id'] = $web_hook_id;

        return $this;
    }

    /**
     * Gets subscription_type
     *
     * @return int
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     *
     * @param int $subscription_type The document type to which the note is attached   None = 0, Article = 1, Customer = 2, CustomerInvoice = 3, CustomerInvoiceDraft = 4, Order = 5, Supplier = 6, SupplierInvoice = 7, SupplierInvoiceDraft = 8, Quote = 9, Voucher = 10, Account = 11, FiscalYear = 12, CostCenter = 13, CostCenterItem = 14
     *
     * @return $this
     */
    public function setSubscriptionType($subscription_type)
    {
        $allowedValues = $this->getSubscriptionTypeAllowableValues();
        if (!is_null($subscription_type) && !in_array($subscription_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subscription_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($subscription_type) && ($subscription_type > 14)) {
            throw new \InvalidArgumentException('invalid value for $subscription_type when calling WebHookSubscriptionApi., must be smaller than or equal to 14.');
        }
        if (!is_null($subscription_type) && ($subscription_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $subscription_type when calling WebHookSubscriptionApi., must be bigger than or equal to 0.');
        }

        $this->container['subscription_type'] = $subscription_type;

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


