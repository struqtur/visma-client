<?php
/**
 * VoucherDraftRowApi
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
 * VoucherDraftRowApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherDraftRowApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherDraftRowApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_number' => 'int',
        'debit_amount' => 'double',
        'credit_amount' => 'double',
        'vat_code_id' => 'string',
        'cost_center_item_id1' => 'string',
        'cost_center_item_id2' => 'string',
        'cost_center_item_id3' => 'string',
        'transaction_text' => 'string',
        'project_id' => 'string',
        'quantity' => 'double',
        'weight' => 'double',
        'delivery_date' => '\DateTime',
        'harvest_year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_number' => 'int64',
        'debit_amount' => 'double',
        'credit_amount' => 'double',
        'vat_code_id' => 'uuid',
        'cost_center_item_id1' => 'uuid',
        'cost_center_item_id2' => 'uuid',
        'cost_center_item_id3' => 'uuid',
        'transaction_text' => null,
        'project_id' => 'uuid',
        'quantity' => 'double',
        'weight' => 'double',
        'delivery_date' => 'date-time',
        'harvest_year' => 'int32'
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
        'account_number' => 'AccountNumber',
        'debit_amount' => 'DebitAmount',
        'credit_amount' => 'CreditAmount',
        'vat_code_id' => 'VatCodeId',
        'cost_center_item_id1' => 'CostCenterItemId1',
        'cost_center_item_id2' => 'CostCenterItemId2',
        'cost_center_item_id3' => 'CostCenterItemId3',
        'transaction_text' => 'TransactionText',
        'project_id' => 'ProjectId',
        'quantity' => 'Quantity',
        'weight' => 'Weight',
        'delivery_date' => 'DeliveryDate',
        'harvest_year' => 'HarvestYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'debit_amount' => 'setDebitAmount',
        'credit_amount' => 'setCreditAmount',
        'vat_code_id' => 'setVatCodeId',
        'cost_center_item_id1' => 'setCostCenterItemId1',
        'cost_center_item_id2' => 'setCostCenterItemId2',
        'cost_center_item_id3' => 'setCostCenterItemId3',
        'transaction_text' => 'setTransactionText',
        'project_id' => 'setProjectId',
        'quantity' => 'setQuantity',
        'weight' => 'setWeight',
        'delivery_date' => 'setDeliveryDate',
        'harvest_year' => 'setHarvestYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'debit_amount' => 'getDebitAmount',
        'credit_amount' => 'getCreditAmount',
        'vat_code_id' => 'getVatCodeId',
        'cost_center_item_id1' => 'getCostCenterItemId1',
        'cost_center_item_id2' => 'getCostCenterItemId2',
        'cost_center_item_id3' => 'getCostCenterItemId3',
        'transaction_text' => 'getTransactionText',
        'project_id' => 'getProjectId',
        'quantity' => 'getQuantity',
        'weight' => 'getWeight',
        'delivery_date' => 'getDeliveryDate',
        'harvest_year' => 'getHarvestYear'
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['debit_amount'] = isset($data['debit_amount']) ? $data['debit_amount'] : null;
        $this->container['credit_amount'] = isset($data['credit_amount']) ? $data['credit_amount'] : null;
        $this->container['vat_code_id'] = isset($data['vat_code_id']) ? $data['vat_code_id'] : null;
        $this->container['cost_center_item_id1'] = isset($data['cost_center_item_id1']) ? $data['cost_center_item_id1'] : null;
        $this->container['cost_center_item_id2'] = isset($data['cost_center_item_id2']) ? $data['cost_center_item_id2'] : null;
        $this->container['cost_center_item_id3'] = isset($data['cost_center_item_id3']) ? $data['cost_center_item_id3'] : null;
        $this->container['transaction_text'] = isset($data['transaction_text']) ? $data['transaction_text'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['harvest_year'] = isset($data['harvest_year']) ? $data['harvest_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if (($this->container['account_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_number', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['debit_amount']) && ($this->container['debit_amount'] > 1000000000)) {
            $invalidProperties[] = "invalid value for 'debit_amount', must be smaller than or equal to 1000000000.";
        }

        if (!is_null($this->container['debit_amount']) && ($this->container['debit_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'debit_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['credit_amount']) && ($this->container['credit_amount'] > 1000000000)) {
            $invalidProperties[] = "invalid value for 'credit_amount', must be smaller than or equal to 1000000000.";
        }

        if (!is_null($this->container['credit_amount']) && ($this->container['credit_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'credit_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['transaction_text']) && (mb_strlen($this->container['transaction_text']) > 50)) {
            $invalidProperties[] = "invalid value for 'transaction_text', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['transaction_text']) && (mb_strlen($this->container['transaction_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'transaction_text', the character length must be bigger than or equal to 0.";
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
     * Gets account_number
     *
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param int $account_number account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        if (($account_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_number when calling VoucherDraftRowApi., must be bigger than or equal to 1.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets debit_amount
     *
     * @return double
     */
    public function getDebitAmount()
    {
        return $this->container['debit_amount'];
    }

    /**
     * Sets debit_amount
     *
     * @param double $debit_amount Format: Max 2 decimals
     *
     * @return $this
     */
    public function setDebitAmount($debit_amount)
    {

        if (!is_null($debit_amount) && ($debit_amount > 1000000000)) {
            throw new \InvalidArgumentException('invalid value for $debit_amount when calling VoucherDraftRowApi., must be smaller than or equal to 1000000000.');
        }
        if (!is_null($debit_amount) && ($debit_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $debit_amount when calling VoucherDraftRowApi., must be bigger than or equal to 0.');
        }

        $this->container['debit_amount'] = $debit_amount;

        return $this;
    }

    /**
     * Gets credit_amount
     *
     * @return double
     */
    public function getCreditAmount()
    {
        return $this->container['credit_amount'];
    }

    /**
     * Sets credit_amount
     *
     * @param double $credit_amount Format: Max 2 decimals
     *
     * @return $this
     */
    public function setCreditAmount($credit_amount)
    {

        if (!is_null($credit_amount) && ($credit_amount > 1000000000)) {
            throw new \InvalidArgumentException('invalid value for $credit_amount when calling VoucherDraftRowApi., must be smaller than or equal to 1000000000.');
        }
        if (!is_null($credit_amount) && ($credit_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $credit_amount when calling VoucherDraftRowApi., must be bigger than or equal to 0.');
        }

        $this->container['credit_amount'] = $credit_amount;

        return $this;
    }

    /**
     * Gets vat_code_id
     *
     * @return string
     */
    public function getVatCodeId()
    {
        return $this->container['vat_code_id'];
    }

    /**
     * Sets vat_code_id
     *
     * @param string $vat_code_id Purpose: Returns vat code id. If is set, is used to calculate the correspondent vat amount.
     *
     * @return $this
     */
    public function setVatCodeId($vat_code_id)
    {
        $this->container['vat_code_id'] = $vat_code_id;

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
     * Gets transaction_text
     *
     * @return string
     */
    public function getTransactionText()
    {
        return $this->container['transaction_text'];
    }

    /**
     * Sets transaction_text
     *
     * @param string $transaction_text Max length: 50 characters
     *
     * @return $this
     */
    public function setTransactionText($transaction_text)
    {
        if (!is_null($transaction_text) && (mb_strlen($transaction_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $transaction_text when calling VoucherDraftRowApi., must be smaller than or equal to 50.');
        }
        if (!is_null($transaction_text) && (mb_strlen($transaction_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $transaction_text when calling VoucherDraftRowApi., must be bigger than or equal to 0.');
        }

        $this->container['transaction_text'] = $transaction_text;

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
     * @param double $quantity Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime $delivery_date Format: YYYY-MM-DD  Purpose: This feature is for dutch companies only which enabled agriculture support
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets harvest_year
     *
     * @return int
     */
    public function getHarvestYear()
    {
        return $this->container['harvest_year'];
    }

    /**
     * Sets harvest_year
     *
     * @param int $harvest_year Purpose: This feature is for dutch companies only which enabled agriculture support
     *
     * @return $this
     */
    public function setHarvestYear($harvest_year)
    {
        $this->container['harvest_year'] = $harvest_year;

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


