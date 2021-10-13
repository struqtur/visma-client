<?php
/**
 * ODataQueryContext
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
 * ODataQueryContext Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ODataQueryContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ODataQueryContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_query_settings' => '\Struqtur\VismaEAccounting\Model\DefaultQuerySettings',
        'model' => '\Struqtur\VismaEAccounting\Model\IEdmModel',
        'element_type' => '\Struqtur\VismaEAccounting\Model\IEdmType',
        'navigation_source' => '\Struqtur\VismaEAccounting\Model\IEdmNavigationSource',
        'element_clr_type' => 'string',
        'path' => '\Struqtur\VismaEAccounting\Model\ODataPath',
        'request_container' => '\Struqtur\VismaEAccounting\Model\IServiceProvider'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_query_settings' => null,
        'model' => null,
        'element_type' => null,
        'navigation_source' => null,
        'element_clr_type' => null,
        'path' => null,
        'request_container' => null
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
        'default_query_settings' => 'DefaultQuerySettings',
        'model' => 'Model',
        'element_type' => 'ElementType',
        'navigation_source' => 'NavigationSource',
        'element_clr_type' => 'ElementClrType',
        'path' => 'Path',
        'request_container' => 'RequestContainer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_query_settings' => 'setDefaultQuerySettings',
        'model' => 'setModel',
        'element_type' => 'setElementType',
        'navigation_source' => 'setNavigationSource',
        'element_clr_type' => 'setElementClrType',
        'path' => 'setPath',
        'request_container' => 'setRequestContainer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_query_settings' => 'getDefaultQuerySettings',
        'model' => 'getModel',
        'element_type' => 'getElementType',
        'navigation_source' => 'getNavigationSource',
        'element_clr_type' => 'getElementClrType',
        'path' => 'getPath',
        'request_container' => 'getRequestContainer'
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
        $this->container['default_query_settings'] = isset($data['default_query_settings']) ? $data['default_query_settings'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['element_type'] = isset($data['element_type']) ? $data['element_type'] : null;
        $this->container['navigation_source'] = isset($data['navigation_source']) ? $data['navigation_source'] : null;
        $this->container['element_clr_type'] = isset($data['element_clr_type']) ? $data['element_clr_type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['request_container'] = isset($data['request_container']) ? $data['request_container'] : null;
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
     * Gets default_query_settings
     *
     * @return \Struqtur\VismaEAccounting\Model\DefaultQuerySettings
     */
    public function getDefaultQuerySettings()
    {
        return $this->container['default_query_settings'];
    }

    /**
     * Sets default_query_settings
     *
     * @param \Struqtur\VismaEAccounting\Model\DefaultQuerySettings $default_query_settings default_query_settings
     *
     * @return $this
     */
    public function setDefaultQuerySettings($default_query_settings)
    {
        $this->container['default_query_settings'] = $default_query_settings;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmModel $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets element_type
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmType
     */
    public function getElementType()
    {
        return $this->container['element_type'];
    }

    /**
     * Sets element_type
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmType $element_type element_type
     *
     * @return $this
     */
    public function setElementType($element_type)
    {
        $this->container['element_type'] = $element_type;

        return $this;
    }

    /**
     * Gets navigation_source
     *
     * @return \Struqtur\VismaEAccounting\Model\IEdmNavigationSource
     */
    public function getNavigationSource()
    {
        return $this->container['navigation_source'];
    }

    /**
     * Sets navigation_source
     *
     * @param \Struqtur\VismaEAccounting\Model\IEdmNavigationSource $navigation_source navigation_source
     *
     * @return $this
     */
    public function setNavigationSource($navigation_source)
    {
        $this->container['navigation_source'] = $navigation_source;

        return $this;
    }

    /**
     * Gets element_clr_type
     *
     * @return string
     */
    public function getElementClrType()
    {
        return $this->container['element_clr_type'];
    }

    /**
     * Sets element_clr_type
     *
     * @param string $element_clr_type element_clr_type
     *
     * @return $this
     */
    public function setElementClrType($element_clr_type)
    {
        $this->container['element_clr_type'] = $element_clr_type;

        return $this;
    }

    /**
     * Gets path
     *
     * @return \Struqtur\VismaEAccounting\Model\ODataPath
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param \Struqtur\VismaEAccounting\Model\ODataPath $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets request_container
     *
     * @return \Struqtur\VismaEAccounting\Model\IServiceProvider
     */
    public function getRequestContainer()
    {
        return $this->container['request_container'];
    }

    /**
     * Sets request_container
     *
     * @param \Struqtur\VismaEAccounting\Model\IServiceProvider $request_container request_container
     *
     * @return $this
     */
    public function setRequestContainer($request_container)
    {
        $this->container['request_container'] = $request_container;

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


