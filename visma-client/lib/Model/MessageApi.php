<?php
/**
 * MessageApi
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
 * MessageApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'text' => 'string',
        'modified_utc' => '\DateTime',
        'created_utc' => '\DateTime',
        'created_by_user_id' => 'string',
        'modified_by_user_id' => 'string',
        'message_thread_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'text' => null,
        'modified_utc' => 'date-time',
        'created_utc' => 'date-time',
        'created_by_user_id' => 'uuid',
        'modified_by_user_id' => 'uuid',
        'message_thread_id' => 'uuid'
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
        'text' => 'Text',
        'modified_utc' => 'ModifiedUtc',
        'created_utc' => 'CreatedUtc',
        'created_by_user_id' => 'CreatedByUserId',
        'modified_by_user_id' => 'ModifiedByUserId',
        'message_thread_id' => 'MessageThreadId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'text' => 'setText',
        'modified_utc' => 'setModifiedUtc',
        'created_utc' => 'setCreatedUtc',
        'created_by_user_id' => 'setCreatedByUserId',
        'modified_by_user_id' => 'setModifiedByUserId',
        'message_thread_id' => 'setMessageThreadId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'text' => 'getText',
        'modified_utc' => 'getModifiedUtc',
        'created_utc' => 'getCreatedUtc',
        'created_by_user_id' => 'getCreatedByUserId',
        'modified_by_user_id' => 'getModifiedByUserId',
        'message_thread_id' => 'getMessageThreadId'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['modified_by_user_id'] = isset($data['modified_by_user_id']) ? $data['modified_by_user_id'] : null;
        $this->container['message_thread_id'] = isset($data['message_thread_id']) ? $data['message_thread_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 256)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 0)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 256)) {
            throw new \InvalidArgumentException('invalid length for $text when calling MessageApi., must be smaller than or equal to 256.');
        }
        if (!is_null($text) && (mb_strlen($text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text when calling MessageApi., must be bigger than or equal to 0.');
        }

        $this->container['text'] = $text;

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
     * Gets created_by_user_id
     *
     * @return string
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     *
     * @param string $created_by_user_id created_by_user_id
     *
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets modified_by_user_id
     *
     * @return string
     */
    public function getModifiedByUserId()
    {
        return $this->container['modified_by_user_id'];
    }

    /**
     * Sets modified_by_user_id
     *
     * @param string $modified_by_user_id modified_by_user_id
     *
     * @return $this
     */
    public function setModifiedByUserId($modified_by_user_id)
    {
        $this->container['modified_by_user_id'] = $modified_by_user_id;

        return $this;
    }

    /**
     * Gets message_thread_id
     *
     * @return string
     */
    public function getMessageThreadId()
    {
        return $this->container['message_thread_id'];
    }

    /**
     * Sets message_thread_id
     *
     * @param string $message_thread_id message_thread_id
     *
     * @return $this
     */
    public function setMessageThreadId($message_thread_id)
    {
        $this->container['message_thread_id'] = $message_thread_id;

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


