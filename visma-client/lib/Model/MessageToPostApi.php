<?php
/**
 * MessageToPostApi
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
 * MessageToPostApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageToPostApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageToPostApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'subject' => 'string',
        'document_type' => 'int',
        'document_id' => 'string',
        'message_receivers' => '\Struqtur\VismaEAccounting\Model\MessageReceiverApi[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'subject' => null,
        'document_type' => 'int32',
        'document_id' => 'uuid',
        'message_receivers' => null
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
        'message' => 'Message',
        'subject' => 'Subject',
        'document_type' => 'DocumentType',
        'document_id' => 'DocumentId',
        'message_receivers' => 'MessageReceivers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'subject' => 'setSubject',
        'document_type' => 'setDocumentType',
        'document_id' => 'setDocumentId',
        'message_receivers' => 'setMessageReceivers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'subject' => 'getSubject',
        'document_type' => 'getDocumentType',
        'document_id' => 'getDocumentId',
        'message_receivers' => 'getMessageReceivers'
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

    const DOCUMENT_TYPE_0 = 0;
    const DOCUMENT_TYPE_1 = 1;
    const DOCUMENT_TYPE_2 = 2;
    const DOCUMENT_TYPE_3 = 3;
    const DOCUMENT_TYPE_4 = 4;
    const DOCUMENT_TYPE_5 = 5;
    const DOCUMENT_TYPE_6 = 6;
    const DOCUMENT_TYPE_7 = 7;
    const DOCUMENT_TYPE_8 = 8;
    const DOCUMENT_TYPE_9 = 9;
    const DOCUMENT_TYPE_10 = 10;
    const DOCUMENT_TYPE_11 = 11;
    const DOCUMENT_TYPE_12 = 12;
    const DOCUMENT_TYPE_13 = 13;
    const DOCUMENT_TYPE_14 = 14;
    const DOCUMENT_TYPE_15 = 15;
    const DOCUMENT_TYPE_16 = 16;
    const DOCUMENT_TYPE_17 = 17;
    const DOCUMENT_TYPE_18 = 18;
    const DOCUMENT_TYPE_19 = 19;
    const DOCUMENT_TYPE_20 = 20;
    const DOCUMENT_TYPE_21 = 21;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_0,
            self::DOCUMENT_TYPE_1,
            self::DOCUMENT_TYPE_2,
            self::DOCUMENT_TYPE_3,
            self::DOCUMENT_TYPE_4,
            self::DOCUMENT_TYPE_5,
            self::DOCUMENT_TYPE_6,
            self::DOCUMENT_TYPE_7,
            self::DOCUMENT_TYPE_8,
            self::DOCUMENT_TYPE_9,
            self::DOCUMENT_TYPE_10,
            self::DOCUMENT_TYPE_11,
            self::DOCUMENT_TYPE_12,
            self::DOCUMENT_TYPE_13,
            self::DOCUMENT_TYPE_14,
            self::DOCUMENT_TYPE_15,
            self::DOCUMENT_TYPE_16,
            self::DOCUMENT_TYPE_17,
            self::DOCUMENT_TYPE_18,
            self::DOCUMENT_TYPE_19,
            self::DOCUMENT_TYPE_20,
            self::DOCUMENT_TYPE_21,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['message_receivers'] = isset($data['message_receivers']) ? $data['message_receivers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ((mb_strlen($this->container['message']) > 256)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['message']) < 0)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ((mb_strlen($this->container['subject']) > 40)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (($this->container['document_type'] > 21)) {
            $invalidProperties[] = "invalid value for 'document_type', must be smaller than or equal to 21.";
        }

        if (($this->container['document_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'document_type', must be bigger than or equal to 0.";
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        if ((mb_strlen($message) > 256)) {
            throw new \InvalidArgumentException('invalid length for $message when calling MessageToPostApi., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($message) < 0)) {
            throw new \InvalidArgumentException('invalid length for $message when calling MessageToPostApi., must be bigger than or equal to 0.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        if ((mb_strlen($subject) > 40)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling MessageToPostApi., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling MessageToPostApi., must be bigger than or equal to 0.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param int $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (($document_type > 21)) {
            throw new \InvalidArgumentException('invalid value for $document_type when calling MessageToPostApi., must be smaller than or equal to 21.');
        }
        if (($document_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $document_type when calling MessageToPostApi., must be bigger than or equal to 0.');
        }

        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets message_receivers
     *
     * @return \Struqtur\VismaEAccounting\Model\MessageReceiverApi[]
     */
    public function getMessageReceivers()
    {
        return $this->container['message_receivers'];
    }

    /**
     * Sets message_receivers
     *
     * @param \Struqtur\VismaEAccounting\Model\MessageReceiverApi[] $message_receivers message_receivers
     *
     * @return $this
     */
    public function setMessageReceivers($message_receivers)
    {
        $this->container['message_receivers'] = $message_receivers;

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


