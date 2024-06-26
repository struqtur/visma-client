<?php
/**
 * PartnerResourceLinkApi
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
 * PartnerResourceLinkApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PartnerResourceLinkApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PartnerResourceLinkApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'resource_id' => 'string',
        'resource_type' => 'int',
        'href' => 'string',
        'partner_company_name' => 'string',
        'partner_system_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'resource_id' => 'uuid',
        'resource_type' => 'int32',
        'href' => null,
        'partner_company_name' => null,
        'partner_system_name' => null
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
        'resource_id' => 'ResourceId',
        'resource_type' => 'ResourceType',
        'href' => 'Href',
        'partner_company_name' => 'PartnerCompanyName',
        'partner_system_name' => 'PartnerSystemName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'resource_id' => 'setResourceId',
        'resource_type' => 'setResourceType',
        'href' => 'setHref',
        'partner_company_name' => 'setPartnerCompanyName',
        'partner_system_name' => 'setPartnerSystemName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'resource_id' => 'getResourceId',
        'resource_type' => 'getResourceType',
        'href' => 'getHref',
        'partner_company_name' => 'getPartnerCompanyName',
        'partner_system_name' => 'getPartnerSystemName'
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

    const RESOURCE_TYPE_0 = 0;
    const RESOURCE_TYPE_1 = 1;
    const RESOURCE_TYPE_2 = 2;
    const RESOURCE_TYPE_3 = 3;
    const RESOURCE_TYPE_4 = 4;
    const RESOURCE_TYPE_5 = 5;
    const RESOURCE_TYPE_6 = 6;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_0,
            self::RESOURCE_TYPE_1,
            self::RESOURCE_TYPE_2,
            self::RESOURCE_TYPE_3,
            self::RESOURCE_TYPE_4,
            self::RESOURCE_TYPE_5,
            self::RESOURCE_TYPE_6,
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
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['resource_type'] = isset($data['resource_type']) ? $data['resource_type'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['partner_company_name'] = isset($data['partner_company_name']) ? $data['partner_company_name'] : null;
        $this->container['partner_system_name'] = isset($data['partner_system_name']) ? $data['partner_system_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['resource_id'] === null) {
            $invalidProperties[] = "'resource_id' can't be null";
        }
        if ($this->container['resource_type'] === null) {
            $invalidProperties[] = "'resource_type' can't be null";
        }
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resource_type']) && !in_array($this->container['resource_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resource_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
        }
        if ((mb_strlen($this->container['href']) > 256)) {
            $invalidProperties[] = "invalid value for 'href', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['href']) < 0)) {
            $invalidProperties[] = "invalid value for 'href', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['partner_company_name'] === null) {
            $invalidProperties[] = "'partner_company_name' can't be null";
        }
        if ((mb_strlen($this->container['partner_company_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'partner_company_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['partner_company_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'partner_company_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['partner_system_name'] === null) {
            $invalidProperties[] = "'partner_system_name' can't be null";
        }
        if ((mb_strlen($this->container['partner_system_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'partner_system_name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['partner_system_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'partner_system_name', the character length must be bigger than or equal to 0.";
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
     * @param string $id Purpose: Id provided by eAccounting
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string $resource_id Purpose: Link to the resource in eAccounting
     *
     * @return $this
     */
    public function setResourceId($resource_id)
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets resource_type
     *
     * @return int
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param int $resource_type 0 = Article, 1 = Customer, 2 = Supplier, 3 = CustomerInvoice, 4 = SupplierInvoice,  5 = CustomerInvoiceDraft, 6 = SupplierInvoiceDraft
     *
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!in_array($resource_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resource_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href Link to the third party solution page
     *
     * @return $this
     */
    public function setHref($href)
    {
        if ((mb_strlen($href) > 256)) {
            throw new \InvalidArgumentException('invalid length for $href when calling PartnerResourceLinkApi., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($href) < 0)) {
            throw new \InvalidArgumentException('invalid length for $href when calling PartnerResourceLinkApi., must be bigger than or equal to 0.');
        }

        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets partner_company_name
     *
     * @return string
     */
    public function getPartnerCompanyName()
    {
        return $this->container['partner_company_name'];
    }

    /**
     * Sets partner_company_name
     *
     * @param string $partner_company_name partner_company_name
     *
     * @return $this
     */
    public function setPartnerCompanyName($partner_company_name)
    {
        if ((mb_strlen($partner_company_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $partner_company_name when calling PartnerResourceLinkApi., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($partner_company_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $partner_company_name when calling PartnerResourceLinkApi., must be bigger than or equal to 0.');
        }

        $this->container['partner_company_name'] = $partner_company_name;

        return $this;
    }

    /**
     * Gets partner_system_name
     *
     * @return string
     */
    public function getPartnerSystemName()
    {
        return $this->container['partner_system_name'];
    }

    /**
     * Sets partner_system_name
     *
     * @param string $partner_system_name partner_system_name
     *
     * @return $this
     */
    public function setPartnerSystemName($partner_system_name)
    {
        if ((mb_strlen($partner_system_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $partner_system_name when calling PartnerResourceLinkApi., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($partner_system_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $partner_system_name when calling PartnerResourceLinkApi., must be bigger than or equal to 0.');
        }

        $this->container['partner_system_name'] = $partner_system_name;

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


