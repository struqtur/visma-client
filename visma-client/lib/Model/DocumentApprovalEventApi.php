<?php
/**
 * DocumentApprovalEventApi
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
 * DocumentApprovalEventApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentApprovalEventApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentApprovalEventApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_approval_status' => 'int',
        'created_utc' => '\DateTime',
        'created_by_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_approval_status' => 'int32',
        'created_utc' => 'date-time',
        'created_by_user_id' => 'uuid'
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
        'document_approval_status' => 'DocumentApprovalStatus',
        'created_utc' => 'CreatedUtc',
        'created_by_user_id' => 'CreatedByUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_approval_status' => 'setDocumentApprovalStatus',
        'created_utc' => 'setCreatedUtc',
        'created_by_user_id' => 'setCreatedByUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_approval_status' => 'getDocumentApprovalStatus',
        'created_utc' => 'getCreatedUtc',
        'created_by_user_id' => 'getCreatedByUserId'
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

    const DOCUMENT_APPROVAL_STATUS_0 = 0;
    const DOCUMENT_APPROVAL_STATUS_1 = 1;
    const DOCUMENT_APPROVAL_STATUS_2 = 2;
    const DOCUMENT_APPROVAL_STATUS_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentApprovalStatusAllowableValues()
    {
        return [
            self::DOCUMENT_APPROVAL_STATUS_0,
            self::DOCUMENT_APPROVAL_STATUS_1,
            self::DOCUMENT_APPROVAL_STATUS_2,
            self::DOCUMENT_APPROVAL_STATUS_3,
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
        $this->container['document_approval_status'] = isset($data['document_approval_status']) ? $data['document_approval_status'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDocumentApprovalStatusAllowableValues();
        if (!is_null($this->container['document_approval_status']) && !in_array($this->container['document_approval_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_approval_status', must be one of '%s'",
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
     * Gets document_approval_status
     *
     * @return int
     */
    public function getDocumentApprovalStatus()
    {
        return $this->container['document_approval_status'];
    }

    /**
     * Sets document_approval_status
     *
     * @param int $document_approval_status 0 = None, 1 = Approved, 2 = Rejected, 3 = ReadyForApproval
     *
     * @return $this
     */
    public function setDocumentApprovalStatus($document_approval_status)
    {
        $allowedValues = $this->getDocumentApprovalStatusAllowableValues();
        if (!is_null($document_approval_status) && !in_array($document_approval_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_approval_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_approval_status'] = $document_approval_status;

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
     * @param string $created_by_user_id The user id that did the action. Can be null if not undone. Use GET /v2/users
     *
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

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


