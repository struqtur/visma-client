<?php
/**
 * OrderRowApi
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
 * OrderRowApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRowApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRowApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'line_number' => 'int',
        'delivered_quantity' => 'double',
        'article_id' => 'string',
        'is_service_article' => 'bool',
        'unit_id' => 'string',
        'article_number' => 'string',
        'is_text_row' => 'bool',
        'text' => 'string',
        'unit_price' => 'double',
        'amount' => 'double',
        'discount_percentage' => 'double',
        'quantity' => 'double',
        'work_cost_type' => 'int',
        'is_work_cost' => 'bool',
        'work_hours' => 'double',
        'material_costs' => 'double',
        'eligible_for_reverse_charge_on_vat' => 'bool',
        'cost_center_item_id1' => 'string',
        'cost_center_item_id2' => 'string',
        'cost_center_item_id3' => 'string',
        'project_id' => 'string',
        'green_technology_type' => 'int',
        'contribution_margin' => '\Struqtur\VismaEAccounting\Model\ContributionMarginApi'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'line_number' => 'int32',
        'delivered_quantity' => 'double',
        'article_id' => 'uuid',
        'is_service_article' => null,
        'unit_id' => 'uuid',
        'article_number' => null,
        'is_text_row' => null,
        'text' => null,
        'unit_price' => 'double',
        'amount' => 'double',
        'discount_percentage' => 'double',
        'quantity' => 'double',
        'work_cost_type' => 'int32',
        'is_work_cost' => null,
        'work_hours' => 'double',
        'material_costs' => 'double',
        'eligible_for_reverse_charge_on_vat' => null,
        'cost_center_item_id1' => 'uuid',
        'cost_center_item_id2' => 'uuid',
        'cost_center_item_id3' => 'uuid',
        'project_id' => 'uuid',
        'green_technology_type' => 'int32',
        'contribution_margin' => null
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
        'line_number' => 'LineNumber',
        'delivered_quantity' => 'DeliveredQuantity',
        'article_id' => 'ArticleId',
        'is_service_article' => 'IsServiceArticle',
        'unit_id' => 'UnitId',
        'article_number' => 'ArticleNumber',
        'is_text_row' => 'IsTextRow',
        'text' => 'Text',
        'unit_price' => 'UnitPrice',
        'amount' => 'Amount',
        'discount_percentage' => 'DiscountPercentage',
        'quantity' => 'Quantity',
        'work_cost_type' => 'WorkCostType',
        'is_work_cost' => 'IsWorkCost',
        'work_hours' => 'WorkHours',
        'material_costs' => 'MaterialCosts',
        'eligible_for_reverse_charge_on_vat' => 'EligibleForReverseChargeOnVat',
        'cost_center_item_id1' => 'CostCenterItemId1',
        'cost_center_item_id2' => 'CostCenterItemId2',
        'cost_center_item_id3' => 'CostCenterItemId3',
        'project_id' => 'ProjectId',
        'green_technology_type' => 'GreenTechnologyType',
        'contribution_margin' => 'ContributionMargin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'line_number' => 'setLineNumber',
        'delivered_quantity' => 'setDeliveredQuantity',
        'article_id' => 'setArticleId',
        'is_service_article' => 'setIsServiceArticle',
        'unit_id' => 'setUnitId',
        'article_number' => 'setArticleNumber',
        'is_text_row' => 'setIsTextRow',
        'text' => 'setText',
        'unit_price' => 'setUnitPrice',
        'amount' => 'setAmount',
        'discount_percentage' => 'setDiscountPercentage',
        'quantity' => 'setQuantity',
        'work_cost_type' => 'setWorkCostType',
        'is_work_cost' => 'setIsWorkCost',
        'work_hours' => 'setWorkHours',
        'material_costs' => 'setMaterialCosts',
        'eligible_for_reverse_charge_on_vat' => 'setEligibleForReverseChargeOnVat',
        'cost_center_item_id1' => 'setCostCenterItemId1',
        'cost_center_item_id2' => 'setCostCenterItemId2',
        'cost_center_item_id3' => 'setCostCenterItemId3',
        'project_id' => 'setProjectId',
        'green_technology_type' => 'setGreenTechnologyType',
        'contribution_margin' => 'setContributionMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'line_number' => 'getLineNumber',
        'delivered_quantity' => 'getDeliveredQuantity',
        'article_id' => 'getArticleId',
        'is_service_article' => 'getIsServiceArticle',
        'unit_id' => 'getUnitId',
        'article_number' => 'getArticleNumber',
        'is_text_row' => 'getIsTextRow',
        'text' => 'getText',
        'unit_price' => 'getUnitPrice',
        'amount' => 'getAmount',
        'discount_percentage' => 'getDiscountPercentage',
        'quantity' => 'getQuantity',
        'work_cost_type' => 'getWorkCostType',
        'is_work_cost' => 'getIsWorkCost',
        'work_hours' => 'getWorkHours',
        'material_costs' => 'getMaterialCosts',
        'eligible_for_reverse_charge_on_vat' => 'getEligibleForReverseChargeOnVat',
        'cost_center_item_id1' => 'getCostCenterItemId1',
        'cost_center_item_id2' => 'getCostCenterItemId2',
        'cost_center_item_id3' => 'getCostCenterItemId3',
        'project_id' => 'getProjectId',
        'green_technology_type' => 'getGreenTechnologyType',
        'contribution_margin' => 'getContributionMargin'
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
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['delivered_quantity'] = isset($data['delivered_quantity']) ? $data['delivered_quantity'] : null;
        $this->container['article_id'] = isset($data['article_id']) ? $data['article_id'] : null;
        $this->container['is_service_article'] = isset($data['is_service_article']) ? $data['is_service_article'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['is_text_row'] = isset($data['is_text_row']) ? $data['is_text_row'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['work_cost_type'] = isset($data['work_cost_type']) ? $data['work_cost_type'] : null;
        $this->container['is_work_cost'] = isset($data['is_work_cost']) ? $data['is_work_cost'] : null;
        $this->container['work_hours'] = isset($data['work_hours']) ? $data['work_hours'] : null;
        $this->container['material_costs'] = isset($data['material_costs']) ? $data['material_costs'] : null;
        $this->container['eligible_for_reverse_charge_on_vat'] = isset($data['eligible_for_reverse_charge_on_vat']) ? $data['eligible_for_reverse_charge_on_vat'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['green_technology_type'] = isset($data['green_technology_type']) ? $data['green_technology_type'] : null;
        $this->container['contribution_margin'] = isset($data['contribution_margin']) ? $data['contribution_margin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['line_number'] === null) {
            $invalidProperties[] = "'line_number' can't be null";
        }
        if (($this->container['line_number'] > 1000)) {
            $invalidProperties[] = "invalid value for 'line_number', must be smaller than or equal to 1000.";
        }

        if (($this->container['line_number'] < 0)) {
            $invalidProperties[] = "invalid value for 'line_number', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['article_number']) && (mb_strlen($this->container['article_number']) > 40)) {
            $invalidProperties[] = "invalid value for 'article_number', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['article_number']) && (mb_strlen($this->container['article_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'article_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['is_text_row'] === null) {
            $invalidProperties[] = "'is_text_row' can't be null";
        }
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

        if ($this->container['is_work_cost'] === null) {
            $invalidProperties[] = "'is_work_cost' can't be null";
        }
        if ($this->container['eligible_for_reverse_charge_on_vat'] === null) {
            $invalidProperties[] = "'eligible_for_reverse_charge_on_vat' can't be null";
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
     * @param string $id Unique Id provided by eAccounting for every row
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

        if (($line_number > 1000)) {
            throw new \InvalidArgumentException('invalid value for $line_number when calling OrderRowApi., must be smaller than or equal to 1000.');
        }
        if (($line_number < 0)) {
            throw new \InvalidArgumentException('invalid value for $line_number when calling OrderRowApi., must be bigger than or equal to 0.');
        }

        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets delivered_quantity
     *
     * @return double
     */
    public function getDeliveredQuantity()
    {
        return $this->container['delivered_quantity'];
    }

    /**
     * Sets delivered_quantity
     *
     * @param double $delivered_quantity Format: 2 decimals
     *
     * @return $this
     */
    public function setDeliveredQuantity($delivered_quantity)
    {
        $this->container['delivered_quantity'] = $delivered_quantity;

        return $this;
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
     * @param string $article_id Can be null if the row is a text row
     *
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->container['article_id'] = $article_id;

        return $this;
    }

    /**
     * Gets is_service_article
     *
     * @return bool
     */
    public function getIsServiceArticle()
    {
        return $this->container['is_service_article'];
    }

    /**
     * Sets is_service_article
     *
     * @param bool $is_service_article IsServiceArticle = FALSE if the sales category for the article is of the type Goods  IsServiceArticle = TRUE if the sales category for the article is of the type Service.
     *
     * @return $this
     */
    public function setIsServiceArticle($is_service_article)
    {
        $this->container['is_service_article'] = $is_service_article;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string $unit_id Source: Get from /v2/units/{id}
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

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
     * @param string $article_number Max length: 40 characters
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        if (!is_null($article_number) && (mb_strlen($article_number) > 40)) {
            throw new \InvalidArgumentException('invalid length for $article_number when calling OrderRowApi., must be smaller than or equal to 40.');
        }
        if (!is_null($article_number) && (mb_strlen($article_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $article_number when calling OrderRowApi., must be bigger than or equal to 0.');
        }

        $this->container['article_number'] = $article_number;

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
     * @param string $text Max length: 2000 characters  Default: For non text rows, default value will be the article's name
     *
     * @return $this
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $text when calling OrderRowApi., must be smaller than or equal to 2000.');
        }
        if (!is_null($text) && (mb_strlen($text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text when calling OrderRowApi., must be bigger than or equal to 0.');
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Returns a total amount of row. Format: 2 decimals
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
            throw new \InvalidArgumentException('invalid value for $discount_percentage when calling OrderRowApi., must be smaller than or equal to 1.');
        }
        if (!is_null($discount_percentage) && ($discount_percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $discount_percentage when calling OrderRowApi., must be bigger than or equal to 0.');
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
     * @param int $work_cost_type None = 0, RotConstructionWork = 1, RotElectricalWork = 2, RotGlassSheetMetalWork = 3, RotGroundWork = 4, RotBrickWork = 5, RotPaintDecorateWork = 6, RotPlumbWork = 7  RutCleanJobWork = 9, RutCareClothTextile = 10, RutCook = 11, RutSnowRemove = 12, RutGarden = 13, RutBabySitt = 14, RutOtherCare = 15, RutHouseWorkHelp = 17  RutRemovalServices = 18, RutITServices = 19, RotHeatPump = 20, RotHeatPump2 = 21, RutHomeAppliances = 22
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
     * @param double $work_hours Only used for ROT/RUT.
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
     * @param double $material_costs Only used for ROT/RUT.
     *
     * @return $this
     */
    public function setMaterialCosts($material_costs)
    {
        $this->container['material_costs'] = $material_costs;

        return $this;
    }

    /**
     * Gets eligible_for_reverse_charge_on_vat
     *
     * @return bool
     */
    public function getEligibleForReverseChargeOnVat()
    {
        return $this->container['eligible_for_reverse_charge_on_vat'];
    }

    /**
     * Sets eligible_for_reverse_charge_on_vat
     *
     * @param bool $eligible_for_reverse_charge_on_vat eligible_for_reverse_charge_on_vat
     *
     * @return $this
     */
    public function setEligibleForReverseChargeOnVat($eligible_for_reverse_charge_on_vat)
    {
        $this->container['eligible_for_reverse_charge_on_vat'] = $eligible_for_reverse_charge_on_vat;

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
     * @param int $green_technology_type Type of green technology on the order row, can be:   None = 0,  SolarCellInstallation = 1,  ElectricEnergyStorageInstallation = 2,  ElectricVehicleChargingPointInstallation = 3,  Default value is 0.
     *
     * @return $this
     */
    public function setGreenTechnologyType($green_technology_type)
    {

        if (!is_null($green_technology_type) && ($green_technology_type > 3)) {
            throw new \InvalidArgumentException('invalid value for $green_technology_type when calling OrderRowApi., must be smaller than or equal to 3.');
        }
        if (!is_null($green_technology_type) && ($green_technology_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $green_technology_type when calling OrderRowApi., must be bigger than or equal to 0.');
        }

        $this->container['green_technology_type'] = $green_technology_type;

        return $this;
    }

    /**
     * Gets contribution_margin
     *
     * @return \Struqtur\VismaEAccounting\Model\ContributionMarginApi
     */
    public function getContributionMargin()
    {
        return $this->container['contribution_margin'];
    }

    /**
     * Sets contribution_margin
     *
     * @param \Struqtur\VismaEAccounting\Model\ContributionMarginApi $contribution_margin Contribution margin variables
     *
     * @return $this
     */
    public function setContributionMargin($contribution_margin)
    {
        $this->container['contribution_margin'] = $contribution_margin;

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


