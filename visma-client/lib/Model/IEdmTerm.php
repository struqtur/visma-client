<?php
/**
 * IEdmTerm
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
 * IEdmTerm Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IEdmTerm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IEdmTerm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => '\Struqtur\VismaEAccounting\Model\IEdmTypeReference',
        'applies_to' => 'string',
        'default_value' => 'string',
        'schema_element_kind' => 'int',
        'namespace' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'applies_to' => null,
        'default_value' => null,
        'schema_element_kind' => 'int32',
        'namespace' => null,
        'name' => null
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
        'type' => 'Type',
        'applies_to' => 'AppliesTo',
        'default_value' => 'DefaultValue',
        'schema_element_kind' => 'SchemaElementKind',
        'namespace' => 'Namespace',
        'name' => 'Name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'applies_to' => 'setAppliesTo',
        'default_value' => 'setDefaultValue',
        'schema_element_kind' => 'setSchemaElementKind',
        'namespace' => 'setNamespace',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'applies_to' => 'getAppliesTo',
        'default_value' => 'getDefaultValue',
        'schema_element_kind' => 'getSchemaElementKind',
        'namespace' => 'getNamespace',
        'name' => 'getName'
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

    const SCHEMA_ELEMENT_KIND_0 = 0;
    const SCHEMA_ELEMENT_KIND_1 = 1;
    const SCHEMA_ELEMENT_KIND_2 = 2;
    const SCHEMA_ELEMENT_KIND_3 = 3;
    const SCHEMA_ELEMENT_KIND_4 = 4;
    const SCHEMA_ELEMENT_KIND_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemaElementKindAllowableValues()
    {
        return [
            self::SCHEMA_ELEMENT_KIND_0,
            self::SCHEMA_ELEMENT_KIND_1,
            self::SCHEMA_ELEMENT_KIND_2,
            self::SCHEMA_ELEMENT_KIND_3,
            self::SCHEMA_ELEMENT_KIND_4,
            self::SCHEMA_ELEMENT_KIND_5,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['applies_to'] = isset($data['applies_to']) ? $data['applies_to'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['schema_element_kind'] = isset($data['schema_element_kind']) ? $data['schema_element_kind'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSchemaElementKindAllowableValues();
        if (!is_null($this->container['schema_element_kind']) && !in_array($this->container['schema_element_kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'schema_element_kind', must be one of '%s'",
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
     * Gets type
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmTypeReference
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmTypeReference $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets applies_to
     *
     * @return string
     */
    public function getAppliesTo()
    {
        return $this->container['applies_to'];
    }

    /**
     * Sets applies_to
     *
     * @param string $applies_to applies_to
     *
     * @return $this
     */
    public function setAppliesTo($applies_to)
    {
        $this->container['applies_to'] = $applies_to;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets schema_element_kind
     *
     * @return int
     */
    public function getSchemaElementKind()
    {
        return $this->container['schema_element_kind'];
    }

    /**
     * Sets schema_element_kind
     *
     * @param int $schema_element_kind schema_element_kind
     *
     * @return $this
     */
    public function setSchemaElementKind($schema_element_kind)
    {
        $allowedValues = $this->getSchemaElementKindAllowableValues();
        if (!is_null($schema_element_kind) && !in_array($schema_element_kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'schema_element_kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schema_element_kind'] = $schema_element_kind;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

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


