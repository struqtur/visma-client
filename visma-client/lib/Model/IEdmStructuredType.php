<?php
/**
 * IEdmStructuredType
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
 * IEdmStructuredType Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IEdmStructuredType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IEdmStructuredType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_abstract' => 'bool',
        'is_open' => 'bool',
        'base_type' => '\Struqtur\VismaEAccounting\Model\IEdmStructuredType',
        'declared_properties' => '\Struqtur\VismaEAccounting\Model\IEdmProperty[]',
        'type_kind' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_abstract' => null,
        'is_open' => null,
        'base_type' => null,
        'declared_properties' => null,
        'type_kind' => 'int32'
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
        'is_abstract' => 'IsAbstract',
        'is_open' => 'IsOpen',
        'base_type' => 'BaseType',
        'declared_properties' => 'DeclaredProperties',
        'type_kind' => 'TypeKind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_abstract' => 'setIsAbstract',
        'is_open' => 'setIsOpen',
        'base_type' => 'setBaseType',
        'declared_properties' => 'setDeclaredProperties',
        'type_kind' => 'setTypeKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_abstract' => 'getIsAbstract',
        'is_open' => 'getIsOpen',
        'base_type' => 'getBaseType',
        'declared_properties' => 'getDeclaredProperties',
        'type_kind' => 'getTypeKind'
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

    const TYPE_KIND_0 = 0;
    const TYPE_KIND_1 = 1;
    const TYPE_KIND_2 = 2;
    const TYPE_KIND_3 = 3;
    const TYPE_KIND_4 = 4;
    const TYPE_KIND_5 = 5;
    const TYPE_KIND_6 = 6;
    const TYPE_KIND_7 = 7;
    const TYPE_KIND_8 = 8;
    const TYPE_KIND_9 = 9;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeKindAllowableValues()
    {
        return [
            self::TYPE_KIND_0,
            self::TYPE_KIND_1,
            self::TYPE_KIND_2,
            self::TYPE_KIND_3,
            self::TYPE_KIND_4,
            self::TYPE_KIND_5,
            self::TYPE_KIND_6,
            self::TYPE_KIND_7,
            self::TYPE_KIND_8,
            self::TYPE_KIND_9,
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
        $this->container['is_abstract'] = isset($data['is_abstract']) ? $data['is_abstract'] : null;
        $this->container['is_open'] = isset($data['is_open']) ? $data['is_open'] : null;
        $this->container['base_type'] = isset($data['base_type']) ? $data['base_type'] : null;
        $this->container['declared_properties'] = isset($data['declared_properties']) ? $data['declared_properties'] : null;
        $this->container['type_kind'] = isset($data['type_kind']) ? $data['type_kind'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeKindAllowableValues();
        if (!is_null($this->container['type_kind']) && !in_array($this->container['type_kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type_kind', must be one of '%s'",
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
     * Gets is_abstract
     *
     * @return bool
     */
    public function getIsAbstract()
    {
        return $this->container['is_abstract'];
    }

    /**
     * Sets is_abstract
     *
     * @param bool $is_abstract is_abstract
     *
     * @return $this
     */
    public function setIsAbstract($is_abstract)
    {
        $this->container['is_abstract'] = $is_abstract;

        return $this;
    }

    /**
     * Gets is_open
     *
     * @return bool
     */
    public function getIsOpen()
    {
        return $this->container['is_open'];
    }

    /**
     * Sets is_open
     *
     * @param bool $is_open is_open
     *
     * @return $this
     */
    public function setIsOpen($is_open)
    {
        $this->container['is_open'] = $is_open;

        return $this;
    }

    /**
     * Gets base_type
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmStructuredType
     */
    public function getBaseType()
    {
        return $this->container['base_type'];
    }

    /**
     * Sets base_type
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmStructuredType $base_type base_type
     *
     * @return $this
     */
    public function setBaseType($base_type)
    {
        $this->container['base_type'] = $base_type;

        return $this;
    }

    /**
     * Gets declared_properties
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmProperty[]
     */
    public function getDeclaredProperties()
    {
        return $this->container['declared_properties'];
    }

    /**
     * Sets declared_properties
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmProperty[] $declared_properties declared_properties
     *
     * @return $this
     */
    public function setDeclaredProperties($declared_properties)
    {
        $this->container['declared_properties'] = $declared_properties;

        return $this;
    }

    /**
     * Gets type_kind
     *
     * @return int
     */
    public function getTypeKind()
    {
        return $this->container['type_kind'];
    }

    /**
     * Sets type_kind
     *
     * @param int $type_kind type_kind
     *
     * @return $this
     */
    public function setTypeKind($type_kind)
    {
        $allowedValues = $this->getTypeKindAllowableValues();
        if (!is_null($type_kind) && !in_array($type_kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_kind'] = $type_kind;

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


