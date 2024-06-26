<?php
/**
 * InventoryItemApi
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
 * InventoryItemApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryItemApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryItemApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'number' => 'int',
        'name' => 'string',
        'purchase_price' => 'double',
        'purchase_date' => '\DateTime',
        'inventory_item_status' => 'int',
        'depreciate' => 'bool',
        'life_span_in_months' => 'int',
        'depreciation_start_type' => 'int',
        'first_depreciation_date' => '\DateTime',
        'latest_depreciation_date' => '\DateTime',
        'residual_value' => 'double',
        'current_value' => 'double',
        'cost_center_item_id1' => 'string',
        'cost_center_item_id2' => 'string',
        'cost_center_item_id3' => 'string',
        'project_id' => 'string',
        'inventory_accounting_template' => '\Struqtur\VismaEAccounting\Model\InventoryAccountingTemplateApi',
        'events' => '\Struqtur\VismaEAccounting\Model\InventoryEventApi[]',
        'opening_depreciations' => '\Struqtur\VismaEAccounting\Model\InventoryAccumulatedDepreciationApi[]',
        'has_upcoming_depreciations' => 'bool',
        'created_utc' => '\DateTime',
        'modified_utc' => '\DateTime',
        'depreciation_basis' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'number' => 'int32',
        'name' => null,
        'purchase_price' => 'double',
        'purchase_date' => 'date-time',
        'inventory_item_status' => 'int32',
        'depreciate' => null,
        'life_span_in_months' => 'int32',
        'depreciation_start_type' => 'int32',
        'first_depreciation_date' => 'date-time',
        'latest_depreciation_date' => 'date-time',
        'residual_value' => 'double',
        'current_value' => 'double',
        'cost_center_item_id1' => 'uuid',
        'cost_center_item_id2' => 'uuid',
        'cost_center_item_id3' => 'uuid',
        'project_id' => 'uuid',
        'inventory_accounting_template' => null,
        'events' => null,
        'opening_depreciations' => null,
        'has_upcoming_depreciations' => null,
        'created_utc' => 'date-time',
        'modified_utc' => 'date-time',
        'depreciation_basis' => 'double'
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
        'number' => 'Number',
        'name' => 'Name',
        'purchase_price' => 'PurchasePrice',
        'purchase_date' => 'PurchaseDate',
        'inventory_item_status' => 'InventoryItemStatus',
        'depreciate' => 'Depreciate',
        'life_span_in_months' => 'LifeSpanInMonths',
        'depreciation_start_type' => 'DepreciationStartType',
        'first_depreciation_date' => 'FirstDepreciationDate',
        'latest_depreciation_date' => 'LatestDepreciationDate',
        'residual_value' => 'ResidualValue',
        'current_value' => 'CurrentValue',
        'cost_center_item_id1' => 'CostCenterItemId1',
        'cost_center_item_id2' => 'CostCenterItemId2',
        'cost_center_item_id3' => 'CostCenterItemId3',
        'project_id' => 'ProjectId',
        'inventory_accounting_template' => 'InventoryAccountingTemplate',
        'events' => 'Events',
        'opening_depreciations' => 'OpeningDepreciations',
        'has_upcoming_depreciations' => 'HasUpcomingDepreciations',
        'created_utc' => 'CreatedUtc',
        'modified_utc' => 'ModifiedUtc',
        'depreciation_basis' => 'DepreciationBasis'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'name' => 'setName',
        'purchase_price' => 'setPurchasePrice',
        'purchase_date' => 'setPurchaseDate',
        'inventory_item_status' => 'setInventoryItemStatus',
        'depreciate' => 'setDepreciate',
        'life_span_in_months' => 'setLifeSpanInMonths',
        'depreciation_start_type' => 'setDepreciationStartType',
        'first_depreciation_date' => 'setFirstDepreciationDate',
        'latest_depreciation_date' => 'setLatestDepreciationDate',
        'residual_value' => 'setResidualValue',
        'current_value' => 'setCurrentValue',
        'cost_center_item_id1' => 'setCostCenterItemId1',
        'cost_center_item_id2' => 'setCostCenterItemId2',
        'cost_center_item_id3' => 'setCostCenterItemId3',
        'project_id' => 'setProjectId',
        'inventory_accounting_template' => 'setInventoryAccountingTemplate',
        'events' => 'setEvents',
        'opening_depreciations' => 'setOpeningDepreciations',
        'has_upcoming_depreciations' => 'setHasUpcomingDepreciations',
        'created_utc' => 'setCreatedUtc',
        'modified_utc' => 'setModifiedUtc',
        'depreciation_basis' => 'setDepreciationBasis'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'name' => 'getName',
        'purchase_price' => 'getPurchasePrice',
        'purchase_date' => 'getPurchaseDate',
        'inventory_item_status' => 'getInventoryItemStatus',
        'depreciate' => 'getDepreciate',
        'life_span_in_months' => 'getLifeSpanInMonths',
        'depreciation_start_type' => 'getDepreciationStartType',
        'first_depreciation_date' => 'getFirstDepreciationDate',
        'latest_depreciation_date' => 'getLatestDepreciationDate',
        'residual_value' => 'getResidualValue',
        'current_value' => 'getCurrentValue',
        'cost_center_item_id1' => 'getCostCenterItemId1',
        'cost_center_item_id2' => 'getCostCenterItemId2',
        'cost_center_item_id3' => 'getCostCenterItemId3',
        'project_id' => 'getProjectId',
        'inventory_accounting_template' => 'getInventoryAccountingTemplate',
        'events' => 'getEvents',
        'opening_depreciations' => 'getOpeningDepreciations',
        'has_upcoming_depreciations' => 'getHasUpcomingDepreciations',
        'created_utc' => 'getCreatedUtc',
        'modified_utc' => 'getModifiedUtc',
        'depreciation_basis' => 'getDepreciationBasis'
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

    const INVENTORY_ITEM_STATUS_1 = 1;
    const INVENTORY_ITEM_STATUS_2 = 2;
    const INVENTORY_ITEM_STATUS_3 = 3;
    const INVENTORY_ITEM_STATUS_4 = 4;
    const DEPRECIATION_START_TYPE_1 = 1;
    const DEPRECIATION_START_TYPE_2 = 2;
    const DEPRECIATION_START_TYPE_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryItemStatusAllowableValues()
    {
        return [
            self::INVENTORY_ITEM_STATUS_1,
            self::INVENTORY_ITEM_STATUS_2,
            self::INVENTORY_ITEM_STATUS_3,
            self::INVENTORY_ITEM_STATUS_4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepreciationStartTypeAllowableValues()
    {
        return [
            self::DEPRECIATION_START_TYPE_1,
            self::DEPRECIATION_START_TYPE_2,
            self::DEPRECIATION_START_TYPE_3,
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['purchase_price'] = isset($data['purchase_price']) ? $data['purchase_price'] : null;
        $this->container['purchase_date'] = isset($data['purchase_date']) ? $data['purchase_date'] : null;
        $this->container['inventory_item_status'] = isset($data['inventory_item_status']) ? $data['inventory_item_status'] : null;
        $this->container['depreciate'] = isset($data['depreciate']) ? $data['depreciate'] : null;
        $this->container['life_span_in_months'] = isset($data['life_span_in_months']) ? $data['life_span_in_months'] : null;
        $this->container['depreciation_start_type'] = isset($data['depreciation_start_type']) ? $data['depreciation_start_type'] : null;
        $this->container['first_depreciation_date'] = isset($data['first_depreciation_date']) ? $data['first_depreciation_date'] : null;
        $this->container['latest_depreciation_date'] = isset($data['latest_depreciation_date']) ? $data['latest_depreciation_date'] : null;
        $this->container['residual_value'] = isset($data['residual_value']) ? $data['residual_value'] : null;
        $this->container['current_value'] = isset($data['current_value']) ? $data['current_value'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['inventory_accounting_template'] = isset($data['inventory_accounting_template']) ? $data['inventory_accounting_template'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['opening_depreciations'] = isset($data['opening_depreciations']) ? $data['opening_depreciations'] : null;
        $this->container['has_upcoming_depreciations'] = isset($data['has_upcoming_depreciations']) ? $data['has_upcoming_depreciations'] : null;
        $this->container['created_utc'] = isset($data['created_utc']) ? $data['created_utc'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
        $this->container['depreciation_basis'] = isset($data['depreciation_basis']) ? $data['depreciation_basis'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInventoryItemStatusAllowableValues();
        if (!is_null($this->container['inventory_item_status']) && !in_array($this->container['inventory_item_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inventory_item_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDepreciationStartTypeAllowableValues();
        if (!is_null($this->container['depreciation_start_type']) && !in_array($this->container['depreciation_start_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'depreciation_start_type', must be one of '%s'",
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
     * @param string $id Purpose: Unique Id provided by eAccounting
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * Gets purchase_price
     *
     * @return double
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param double $purchase_price purchase_price
     *
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets purchase_date
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date
     *
     * @param \DateTime $purchase_date purchase_date
     *
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets inventory_item_status
     *
     * @return int
     */
    public function getInventoryItemStatus()
    {
        return $this->container['inventory_item_status'];
    }

    /**
     * Sets inventory_item_status
     *
     * @param int $inventory_item_status Inactive = 1, Active = 2, Sold = 3, Dispose = 4
     *
     * @return $this
     */
    public function setInventoryItemStatus($inventory_item_status)
    {
        $allowedValues = $this->getInventoryItemStatusAllowableValues();
        if (!is_null($inventory_item_status) && !in_array($inventory_item_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inventory_item_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_item_status'] = $inventory_item_status;

        return $this;
    }

    /**
     * Gets depreciate
     *
     * @return bool
     */
    public function getDepreciate()
    {
        return $this->container['depreciate'];
    }

    /**
     * Sets depreciate
     *
     * @param bool $depreciate depreciate
     *
     * @return $this
     */
    public function setDepreciate($depreciate)
    {
        $this->container['depreciate'] = $depreciate;

        return $this;
    }

    /**
     * Gets life_span_in_months
     *
     * @return int
     */
    public function getLifeSpanInMonths()
    {
        return $this->container['life_span_in_months'];
    }

    /**
     * Sets life_span_in_months
     *
     * @param int $life_span_in_months life_span_in_months
     *
     * @return $this
     */
    public function setLifeSpanInMonths($life_span_in_months)
    {
        $this->container['life_span_in_months'] = $life_span_in_months;

        return $this;
    }

    /**
     * Gets depreciation_start_type
     *
     * @return int
     */
    public function getDepreciationStartType()
    {
        return $this->container['depreciation_start_type'];
    }

    /**
     * Sets depreciation_start_type
     *
     * @param int $depreciation_start_type PurchaseMonth = 1, MonthAfterPurchaseMonth = 2, FirstMonthOfPurchaseYear = 3
     *
     * @return $this
     */
    public function setDepreciationStartType($depreciation_start_type)
    {
        $allowedValues = $this->getDepreciationStartTypeAllowableValues();
        if (!is_null($depreciation_start_type) && !in_array($depreciation_start_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'depreciation_start_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['depreciation_start_type'] = $depreciation_start_type;

        return $this;
    }

    /**
     * Gets first_depreciation_date
     *
     * @return \DateTime
     */
    public function getFirstDepreciationDate()
    {
        return $this->container['first_depreciation_date'];
    }

    /**
     * Sets first_depreciation_date
     *
     * @param \DateTime $first_depreciation_date first_depreciation_date
     *
     * @return $this
     */
    public function setFirstDepreciationDate($first_depreciation_date)
    {
        $this->container['first_depreciation_date'] = $first_depreciation_date;

        return $this;
    }

    /**
     * Gets latest_depreciation_date
     *
     * @return \DateTime
     */
    public function getLatestDepreciationDate()
    {
        return $this->container['latest_depreciation_date'];
    }

    /**
     * Sets latest_depreciation_date
     *
     * @param \DateTime $latest_depreciation_date latest_depreciation_date
     *
     * @return $this
     */
    public function setLatestDepreciationDate($latest_depreciation_date)
    {
        $this->container['latest_depreciation_date'] = $latest_depreciation_date;

        return $this;
    }

    /**
     * Gets residual_value
     *
     * @return double
     */
    public function getResidualValue()
    {
        return $this->container['residual_value'];
    }

    /**
     * Sets residual_value
     *
     * @param double $residual_value residual_value
     *
     * @return $this
     */
    public function setResidualValue($residual_value)
    {
        $this->container['residual_value'] = $residual_value;

        return $this;
    }

    /**
     * Gets current_value
     *
     * @return double
     */
    public function getCurrentValue()
    {
        return $this->container['current_value'];
    }

    /**
     * Sets current_value
     *
     * @param double $current_value current_value
     *
     * @return $this
     */
    public function setCurrentValue($current_value)
    {
        $this->container['current_value'] = $current_value;

        return $this;
    }

    /**
     * Gets cost_center_item_id1
     *
     * @return string
     */
    public function getCostCenterItemId1()
    {
        return $this->container['cost_center_item_id1'];
    }

    /**
     * Sets cost_center_item_id1
     *
     * @param string $cost_center_item_id1 cost_center_item_id1
     *
     * @return $this
     */
    public function setCostCenterItemId1($cost_center_item_id1)
    {
        $this->container['cost_center_item_id1'] = $cost_center_item_id1;

        return $this;
    }

    /**
     * Gets cost_center_item_id2
     *
     * @return string
     */
    public function getCostCenterItemId2()
    {
        return $this->container['cost_center_item_id2'];
    }

    /**
     * Sets cost_center_item_id2
     *
     * @param string $cost_center_item_id2 cost_center_item_id2
     *
     * @return $this
     */
    public function setCostCenterItemId2($cost_center_item_id2)
    {
        $this->container['cost_center_item_id2'] = $cost_center_item_id2;

        return $this;
    }

    /**
     * Gets cost_center_item_id3
     *
     * @return string
     */
    public function getCostCenterItemId3()
    {
        return $this->container['cost_center_item_id3'];
    }

    /**
     * Sets cost_center_item_id3
     *
     * @param string $cost_center_item_id3 cost_center_item_id3
     *
     * @return $this
     */
    public function setCostCenterItemId3($cost_center_item_id3)
    {
        $this->container['cost_center_item_id3'] = $cost_center_item_id3;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets inventory_accounting_template
     *
     * @return \Struqtur\VismaEAccounting\Model\InventoryAccountingTemplateApi
     */
    public function getInventoryAccountingTemplate()
    {
        return $this->container['inventory_accounting_template'];
    }

    /**
     * Sets inventory_accounting_template
     *
     * @param \Struqtur\VismaEAccounting\Model\InventoryAccountingTemplateApi $inventory_accounting_template inventory_accounting_template
     *
     * @return $this
     */
    public function setInventoryAccountingTemplate($inventory_accounting_template)
    {
        $this->container['inventory_accounting_template'] = $inventory_accounting_template;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Struqtur\VismaEAccounting\Model\InventoryEventApi[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Struqtur\VismaEAccounting\Model\InventoryEventApi[] $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets opening_depreciations
     *
     * @return \Struqtur\VismaEAccounting\Model\InventoryAccumulatedDepreciationApi[]
     */
    public function getOpeningDepreciations()
    {
        return $this->container['opening_depreciations'];
    }

    /**
     * Sets opening_depreciations
     *
     * @param \Struqtur\VismaEAccounting\Model\InventoryAccumulatedDepreciationApi[] $opening_depreciations opening_depreciations
     *
     * @return $this
     */
    public function setOpeningDepreciations($opening_depreciations)
    {
        $this->container['opening_depreciations'] = $opening_depreciations;

        return $this;
    }

    /**
     * Gets has_upcoming_depreciations
     *
     * @return bool
     */
    public function getHasUpcomingDepreciations()
    {
        return $this->container['has_upcoming_depreciations'];
    }

    /**
     * Sets has_upcoming_depreciations
     *
     * @param bool $has_upcoming_depreciations has_upcoming_depreciations
     *
     * @return $this
     */
    public function setHasUpcomingDepreciations($has_upcoming_depreciations)
    {
        $this->container['has_upcoming_depreciations'] = $has_upcoming_depreciations;

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
     * Gets depreciation_basis
     *
     * @return double
     */
    public function getDepreciationBasis()
    {
        return $this->container['depreciation_basis'];
    }

    /**
     * Sets depreciation_basis
     *
     * @param double $depreciation_basis depreciation_basis
     *
     * @return $this
     */
    public function setDepreciationBasis($depreciation_basis)
    {
        $this->container['depreciation_basis'] = $depreciation_basis;

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


