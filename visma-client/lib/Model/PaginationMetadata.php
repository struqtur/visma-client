<?php
/**
 * PaginationMetadata
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
 * Swagger Codegen version: 2.4.19
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
 * PaginationMetadata Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaginationMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaginationMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_page' => 'int',
        'page_size' => 'int',
        'total_number_of_pages' => 'int',
        'total_number_of_results' => 'int',
        'server_time_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_page' => 'int32',
        'page_size' => 'int32',
        'total_number_of_pages' => 'int32',
        'total_number_of_results' => 'int32',
        'server_time_utc' => 'date-time'
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
        'current_page' => 'CurrentPage',
        'page_size' => 'PageSize',
        'total_number_of_pages' => 'TotalNumberOfPages',
        'total_number_of_results' => 'TotalNumberOfResults',
        'server_time_utc' => 'ServerTimeUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'page_size' => 'setPageSize',
        'total_number_of_pages' => 'setTotalNumberOfPages',
        'total_number_of_results' => 'setTotalNumberOfResults',
        'server_time_utc' => 'setServerTimeUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'page_size' => 'getPageSize',
        'total_number_of_pages' => 'getTotalNumberOfPages',
        'total_number_of_results' => 'getTotalNumberOfResults',
        'server_time_utc' => 'getServerTimeUtc'
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
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['total_number_of_pages'] = isset($data['total_number_of_pages']) ? $data['total_number_of_pages'] : null;
        $this->container['total_number_of_results'] = isset($data['total_number_of_results']) ? $data['total_number_of_results'] : null;
        $this->container['server_time_utc'] = isset($data['server_time_utc']) ? $data['server_time_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['current_page'] === null) {
            $invalidProperties[] = "'current_page' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['total_number_of_pages'] === null) {
            $invalidProperties[] = "'total_number_of_pages' can't be null";
        }
        if ($this->container['total_number_of_results'] === null) {
            $invalidProperties[] = "'total_number_of_results' can't be null";
        }
        if ($this->container['server_time_utc'] === null) {
            $invalidProperties[] = "'server_time_utc' can't be null";
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
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page current_page
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets total_number_of_pages
     *
     * @return int
     */
    public function getTotalNumberOfPages()
    {
        return $this->container['total_number_of_pages'];
    }

    /**
     * Sets total_number_of_pages
     *
     * @param int $total_number_of_pages total_number_of_pages
     *
     * @return $this
     */
    public function setTotalNumberOfPages($total_number_of_pages)
    {
        $this->container['total_number_of_pages'] = $total_number_of_pages;

        return $this;
    }

    /**
     * Gets total_number_of_results
     *
     * @return int
     */
    public function getTotalNumberOfResults()
    {
        return $this->container['total_number_of_results'];
    }

    /**
     * Sets total_number_of_results
     *
     * @param int $total_number_of_results total_number_of_results
     *
     * @return $this
     */
    public function setTotalNumberOfResults($total_number_of_results)
    {
        $this->container['total_number_of_results'] = $total_number_of_results;

        return $this;
    }

    /**
     * Gets server_time_utc
     *
     * @return \DateTime
     */
    public function getServerTimeUtc()
    {
        return $this->container['server_time_utc'];
    }

    /**
     * Sets server_time_utc
     *
     * @param \DateTime $server_time_utc server_time_utc
     *
     * @return $this
     */
    public function setServerTimeUtc($server_time_utc)
    {
        $this->container['server_time_utc'] = $server_time_utc;

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


