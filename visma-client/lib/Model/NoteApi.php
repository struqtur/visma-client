<?php
/**
 * NoteApi
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
 * NoteApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'user_id' => 'string',
        'attached_to' => 'string',
        'text' => 'string',
        'subject' => 'string',
        'document_type' => 'int',
        'created_utc' => '\DateTime',
        'modified_utc' => '\DateTime',
        'is_done' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'user_id' => 'uuid',
        'attached_to' => 'uuid',
        'text' => null,
        'subject' => null,
        'document_type' => 'int32',
        'created_utc' => 'date-time',
        'modified_utc' => 'date-time',
        'is_done' => null
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
        'user_id' => 'UserId',
        'attached_to' => 'AttachedTo',
        'text' => 'Text',
        'subject' => 'Subject',
        'document_type' => 'DocumentType',
        'created_utc' => 'CreatedUtc',
        'modified_utc' => 'ModifiedUtc',
        'is_done' => 'IsDone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'attached_to' => 'setAttachedTo',
        'text' => 'setText',
        'subject' => 'setSubject',
        'document_type' => 'setDocumentType',
        'created_utc' => 'setCreatedUtc',
        'modified_utc' => 'setModifiedUtc',
        'is_done' => 'setIsDone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'attached_to' => 'getAttachedTo',
        'text' => 'getText',
        'subject' => 'getSubject',
        'document_type' => 'getDocumentType',
        'created_utc' => 'getCreatedUtc',
        'modified_utc' => 'getModifiedUtc',
        'is_done' => 'getIsDone'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['attached_to'] = isset($data['attached_to']) ? $data['attached_to'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['is_done'] = isset($data['is_done']) ? $data['is_done'] : null;
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

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 40)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['document_type']) && ($this->container['document_type'] > 18)) {
            $invalidProperties[] = "invalid value for 'document_type', must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['document_type']) && ($this->container['document_type'] < 0)) {
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets attached_to
     *
     * @return string
     */
    public function getAttachedTo()
    {
        return $this->container['attached_to'];
    }

    /**
     * Sets attached_to
     *
     * @param string $attached_to The document Id to which the note can be attached
     *
     * @return $this
     */
    public function setAttachedTo($attached_to)
    {
        $this->container['attached_to'] = $attached_to;

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
            throw new \InvalidArgumentException('invalid length for $text when calling NoteApi., must be smaller than or equal to 256.');
        }
        if (!is_null($text) && (mb_strlen($text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text when calling NoteApi., must be bigger than or equal to 0.');
        }

        $this->container['text'] = $text;

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
        if (!is_null($subject) && (mb_strlen($subject) > 40)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling NoteApi., must be smaller than or equal to 40.');
        }
        if (!is_null($subject) && (mb_strlen($subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling NoteApi., must be bigger than or equal to 0.');
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
     * @param int $document_type The document type to which the note is attached   None = 0, CustomerInvoice = 1, CustomerInvoiceDraft = 2, SupplierInvoice = 3, Voucher = 4, Quotation = 5, Order = 6, SupplierInvoiceDraft = 7, WebshopOrder = 8, Customer = 9, Receipt = 10, Article = 11, VatReport = 12, Supplier = 13, Inventory = 14, Employee = 15, Payslip = 16, Image = 17, Reconciliation = 18
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($document_type) && ($document_type > 18)) {
            throw new \InvalidArgumentException('invalid value for $document_type when calling NoteApi., must be smaller than or equal to 18.');
        }
        if (!is_null($document_type) && ($document_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $document_type when calling NoteApi., must be bigger than or equal to 0.');
        }

        $this->container['document_type'] = $document_type;

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
     * Gets is_done
     *
     * @return bool
     */
    public function getIsDone()
    {
        return $this->container['is_done'];
    }

    /**
     * Sets is_done
     *
     * @param bool $is_done is_done
     *
     * @return $this
     */
    public function setIsDone($is_done)
    {
        $this->container['is_done'] = $is_done;

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


