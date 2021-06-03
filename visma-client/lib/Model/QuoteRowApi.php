<?php
/**
 * QuoteRowApi
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
 * QuoteRowApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteRowApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuoteRowApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'article_id' => 'string',
        'text' => 'string',
        'unit_price' => 'double',
        'discount_percentage' => 'double',
        'quantity' => 'double',
        'work_cost_type' => 'int',
        'is_work_cost' => 'bool',
        'work_hours' => 'double',
        'material_costs' => 'double',
        'is_vat_free' => 'bool',
        'line_number' => 'int',
        'cost_center_item_id1' => 'string',
        'cost_center_item_id2' => 'string',
        'cost_center_item_id3' => 'string',
        'project_id' => 'string',
        'is_text_row' => 'bool',
        'article_number' => 'string',
        'green_technology_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'article_id' => 'uuid',
        'text' => null,
        'unit_price' => 'double',
        'discount_percentage' => 'double',
        'quantity' => 'double',
        'work_cost_type' => 'int32',
        'is_work_cost' => null,
        'work_hours' => 'double',
        'material_costs' => 'double',
        'is_vat_free' => null,
        'line_number' => 'int32',
        'cost_center_item_id1' => 'uuid',
        'cost_center_item_id2' => 'uuid',
        'cost_center_item_id3' => 'uuid',
        'project_id' => 'uuid',
        'is_text_row' => null,
        'article_number' => null,
        'green_technology_type' => 'int32'
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
        'article_id' => 'ArticleId',
        'text' => 'Text',
        'unit_price' => 'UnitPrice',
        'discount_percentage' => 'DiscountPercentage',
        'quantity' => 'Quantity',
        'work_cost_type' => 'WorkCostType',
        'is_work_cost' => 'IsWorkCost',
        'work_hours' => 'WorkHours',
        'material_costs' => 'MaterialCosts',
        'is_vat_free' => 'IsVatFree',
        'line_number' => 'LineNumber',
        'cost_center_item_id1' => 'CostCenterItemId1',
        'cost_center_item_id2' => 'CostCenterItemId2',
        'cost_center_item_id3' => 'CostCenterItemId3',
        'project_id' => 'ProjectId',
        'is_text_row' => 'IsTextRow',
        'article_number' => 'ArticleNumber',
        'green_technology_type' => 'GreenTechnologyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'article_id' => 'setArticleId',
        'text' => 'setText',
        'unit_price' => 'setUnitPrice',
        'discount_percentage' => 'setDiscountPercentage',
        'quantity' => 'setQuantity',
        'work_cost_type' => 'setWorkCostType',
        'is_work_cost' => 'setIsWorkCost',
        'work_hours' => 'setWorkHours',
        'material_costs' => 'setMaterialCosts',
        'is_vat_free' => 'setIsVatFree',
        'line_number' => 'setLineNumber',
        'cost_center_item_id1' => 'setCostCenterItemId1',
        'cost_center_item_id2' => 'setCostCenterItemId2',
        'cost_center_item_id3' => 'setCostCenterItemId3',
        'project_id' => 'setProjectId',
        'is_text_row' => 'setIsTextRow',
        'article_number' => 'setArticleNumber',
        'green_technology_type' => 'setGreenTechnologyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'article_id' => 'getArticleId',
        'text' => 'getText',
        'unit_price' => 'getUnitPrice',
        'discount_percentage' => 'getDiscountPercentage',
        'quantity' => 'getQuantity',
        'work_cost_type' => 'getWorkCostType',
        'is_work_cost' => 'getIsWorkCost',
        'work_hours' => 'getWorkHours',
        'material_costs' => 'getMaterialCosts',
        'is_vat_free' => 'getIsVatFree',
        'line_number' => 'getLineNumber',
        'cost_center_item_id1' => 'getCostCenterItemId1',
        'cost_center_item_id2' => 'getCostCenterItemId2',
        'cost_center_item_id3' => 'getCostCenterItemId3',
        'project_id' => 'getProjectId',
        'is_text_row' => 'getIsTextRow',
        'article_number' => 'getArticleNumber',
        'green_technology_type' => 'getGreenTechnologyType'
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
        $this->container['article_id'] = isset($data['article_id']) ? $data['article_id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['work_cost_type'] = isset($data['work_cost_type']) ? $data['work_cost_type'] : null;
        $this->container['is_work_cost'] = isset($data['is_work_cost']) ? $data['is_work_cost'] : null;
        $this->container['work_hours'] = isset($data['work_hours']) ? $data['work_hours'] : null;
        $this->container['material_costs'] = isset($data['material_costs']) ? $data['material_costs'] : null;
        $this->container['is_vat_free'] = isset($data['is_vat_free']) ? $data['is_vat_free'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['is_text_row'] = isset($data['is_text_row']) ? $data['is_text_row'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['green_technology_type'] = isset($data['green_technology_type']) ? $data['green_technology_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 2000)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 0)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['discount_percentage']) && ($this->container['discount_percentage'] > 1)) {
            $invalidProperties[] = "invalid value for 'discount_percentage', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['discount_percentage']) && ($this->container['discount_percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'discount_percentage', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['green_technology_type']) && ($this->container['green_technology_type'] > 3)) {
            $invalidProperties[] = "invalid value for 'green_technology_type', must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['green_technology_type']) && ($this->container['green_technology_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'green_technology_type', must be bigger than or equal to 0.";
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
     * Gets article_id
     *
     * @return string
     */
    public function getArticleId()
    {
        return $this->container['article_id'];
    }

    /**
     * Sets article_id
     *
     * @param string $article_id Source: Get from /v2/articles
     *
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->container['article_id'] = $article_id;

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
     * @param string $text Max length: 2000 characters  Default: The selected article's name
     *
     * @return $this
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $text when calling QuoteRowApi., must be smaller than or equal to 2000.');
        }
        if (!is_null($text) && (mb_strlen($text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text when calling QuoteRowApi., must be bigger than or equal to 0.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price Format: 2 decimals
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return double
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param double $discount_percentage Format: 4 decimals
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {

        if (!is_null($discount_percentage) && ($discount_percentage > 1)) {
            throw new \InvalidArgumentException('invalid value for $discount_percentage when calling QuoteRowApi., must be smaller than or equal to 1.');
        }
        if (!is_null($discount_percentage) && ($discount_percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $discount_percentage when calling QuoteRowApi., must be bigger than or equal to 0.');
        }

        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity Format: 4 decimals
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets work_cost_type
     *
     * @return int
     */
    public function getWorkCostType()
    {
        return $this->container['work_cost_type'];
    }

    /**
     * Sets work_cost_type
     *
     * @param int $work_cost_type 0 = None, 1 = RotConstructionWork , 2 = RotElectricalWork , 3 = RotGlassSheetMetalWork , 4 = RotGroundWork , 5 = RotBrickWork , 6 = RotPaintDecorateWork , 7 = RotPlumbWork   9 = RutCleanJobWork , 10 = RutCareClothTextile , 11 = RutCook , 12 = RutSnowRemove , 13 = RutGarden , 14 = RutBabySitt , 15 = RutOtherCare , 17 = RutHouseWorkHelp     18 = RutRemovalServices , 19 = RutITServices , 20 = RotHeatPump , 21 = RotHeatPump2 , 22 = RutHomeAppliances
     *
     * @return $this
     */
    public function setWorkCostType($work_cost_type)
    {
        $this->container['work_cost_type'] = $work_cost_type;

        return $this;
    }

    /**
     * Gets is_work_cost
     *
     * @return bool
     */
    public function getIsWorkCost()
    {
        return $this->container['is_work_cost'];
    }

    /**
     * Sets is_work_cost
     *
     * @param bool $is_work_cost is_work_cost
     *
     * @return $this
     */
    public function setIsWorkCost($is_work_cost)
    {
        $this->container['is_work_cost'] = $is_work_cost;

        return $this;
    }

    /**
     * Gets work_hours
     *
     * @return double
     */
    public function getWorkHours()
    {
        return $this->container['work_hours'];
    }

    /**
     * Sets work_hours
     *
     * @param double $work_hours work_hours
     *
     * @return $this
     */
    public function setWorkHours($work_hours)
    {
        $this->container['work_hours'] = $work_hours;

        return $this;
    }

    /**
     * Gets material_costs
     *
     * @return double
     */
    public function getMaterialCosts()
    {
        return $this->container['material_costs'];
    }

    /**
     * Sets material_costs
     *
     * @param double $material_costs material_costs
     *
     * @return $this
     */
    public function setMaterialCosts($material_costs)
    {
        $this->container['material_costs'] = $material_costs;

        return $this;
    }

    /**
     * Gets is_vat_free
     *
     * @return bool
     */
    public function getIsVatFree()
    {
        return $this->container['is_vat_free'];
    }

    /**
     * Sets is_vat_free
     *
     * @param bool $is_vat_free is_vat_free
     *
     * @return $this
     */
    public function setIsVatFree($is_vat_free)
    {
        $this->container['is_vat_free'] = $is_vat_free;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

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
     * @param string $cost_center_item_id1 Source: Get from /v2/costcenters
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
     * @param string $cost_center_item_id2 Source: Get from /v2/costcenters
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
     * @param string $cost_center_item_id3 Source: Get from /v2/costcenters
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
     * @param string $project_id Source: Get from /v2/projects
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets is_text_row
     *
     * @return bool
     */
    public function getIsTextRow()
    {
        return $this->container['is_text_row'];
    }

    /**
     * Sets is_text_row
     *
     * @param bool $is_text_row is_text_row
     *
     * @return $this
     */
    public function setIsTextRow($is_text_row)
    {
        $this->container['is_text_row'] = $is_text_row;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string $article_number article_number
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets green_technology_type
     *
     * @return int
     */
    public function getGreenTechnologyType()
    {
        return $this->container['green_technology_type'];
    }

    /**
     * Sets green_technology_type
     *
     * @param int $green_technology_type Type of green technology on the quote row, can be :   None = 0,  SolarCellInstallation = 1,  ElectricEnergyStorageInstallation = 2,  ElectricVehicleChargingPointInstallation = 3,  Default value is 0.
     *
     * @return $this
     */
    public function setGreenTechnologyType($green_technology_type)
    {

        if (!is_null($green_technology_type) && ($green_technology_type > 3)) {
            throw new \InvalidArgumentException('invalid value for $green_technology_type when calling QuoteRowApi., must be smaller than or equal to 3.');
        }
        if (!is_null($green_technology_type) && ($green_technology_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $green_technology_type when calling QuoteRowApi., must be bigger than or equal to 0.');
        }

        $this->container['green_technology_type'] = $green_technology_type;

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

