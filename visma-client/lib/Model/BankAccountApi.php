<?php
/**
 * BankAccountApi
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
 * BankAccountApi Class Doc Comment
 *
 * @category Class
 * @package  Struqtur\VismaEAccounting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank' => 'string',
        'bank_account_type' => 'int',
        'bank_account_type_description' => 'string',
        'bban' => 'string',
        'iban' => 'string',
        'name' => 'string',
        'id' => 'string',
        'is_active' => 'bool',
        'ledger_account_number' => 'int',
        'has_active_bank_agreement' => 'bool',
        'is_default_cheque_account' => 'bool',
        'currency_code' => 'string',
        'modified_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank' => 'uuid',
        'bank_account_type' => 'int32',
        'bank_account_type_description' => null,
        'bban' => null,
        'iban' => null,
        'name' => null,
        'id' => 'uuid',
        'is_active' => null,
        'ledger_account_number' => 'int64',
        'has_active_bank_agreement' => null,
        'is_default_cheque_account' => null,
        'currency_code' => null,
        'modified_utc' => 'date-time'
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
        'bank' => 'Bank',
        'bank_account_type' => 'BankAccountType',
        'bank_account_type_description' => 'BankAccountTypeDescription',
        'bban' => 'Bban',
        'iban' => 'Iban',
        'name' => 'Name',
        'id' => 'Id',
        'is_active' => 'IsActive',
        'ledger_account_number' => 'LedgerAccountNumber',
        'has_active_bank_agreement' => 'HasActiveBankAgreement',
        'is_default_cheque_account' => 'IsDefaultChequeAccount',
        'currency_code' => 'CurrencyCode',
        'modified_utc' => 'ModifiedUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank' => 'setBank',
        'bank_account_type' => 'setBankAccountType',
        'bank_account_type_description' => 'setBankAccountTypeDescription',
        'bban' => 'setBban',
        'iban' => 'setIban',
        'name' => 'setName',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'ledger_account_number' => 'setLedgerAccountNumber',
        'has_active_bank_agreement' => 'setHasActiveBankAgreement',
        'is_default_cheque_account' => 'setIsDefaultChequeAccount',
        'currency_code' => 'setCurrencyCode',
        'modified_utc' => 'setModifiedUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank' => 'getBank',
        'bank_account_type' => 'getBankAccountType',
        'bank_account_type_description' => 'getBankAccountTypeDescription',
        'bban' => 'getBban',
        'iban' => 'getIban',
        'name' => 'getName',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'ledger_account_number' => 'getLedgerAccountNumber',
        'has_active_bank_agreement' => 'getHasActiveBankAgreement',
        'is_default_cheque_account' => 'getIsDefaultChequeAccount',
        'currency_code' => 'getCurrencyCode',
        'modified_utc' => 'getModifiedUtc'
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

    const BANK_ACCOUNT_TYPE_1 = 1;
    const BANK_ACCOUNT_TYPE_2 = 2;
    const BANK_ACCOUNT_TYPE_3 = 3;
    const BANK_ACCOUNT_TYPE_4 = 4;
    const BANK_ACCOUNT_TYPE_5 = 5;
    const BANK_ACCOUNT_TYPE_6 = 6;
    const BANK_ACCOUNT_TYPE_7 = 7;
    const BANK_ACCOUNT_TYPE_8 = 8;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankAccountTypeAllowableValues()
    {
        return [
            self::BANK_ACCOUNT_TYPE_1,
            self::BANK_ACCOUNT_TYPE_2,
            self::BANK_ACCOUNT_TYPE_3,
            self::BANK_ACCOUNT_TYPE_4,
            self::BANK_ACCOUNT_TYPE_5,
            self::BANK_ACCOUNT_TYPE_6,
            self::BANK_ACCOUNT_TYPE_7,
            self::BANK_ACCOUNT_TYPE_8,
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
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['bank_account_type_description'] = isset($data['bank_account_type_description']) ? $data['bank_account_type_description'] : null;
        $this->container['bban'] = isset($data['bban']) ? $data['bban'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['ledger_account_number'] = isset($data['ledger_account_number']) ? $data['ledger_account_number'] : null;
        $this->container['has_active_bank_agreement'] = isset($data['has_active_bank_agreement']) ? $data['has_active_bank_agreement'] : null;
        $this->container['is_default_cheque_account'] = isset($data['is_default_cheque_account']) ? $data['is_default_cheque_account'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['modified_utc'] = isset($data['modified_utc']) ? $data['modified_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_account_type'] === null) {
            $invalidProperties[] = "'bank_account_type' can't be null";
        }
        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!is_null($this->container['bank_account_type']) && !in_array($this->container['bank_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bank_account_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['bban']) && (mb_strlen($this->container['bban']) > 35)) {
            $invalidProperties[] = "invalid value for 'bban', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['bban']) && (mb_strlen($this->container['bban']) < 0)) {
            $invalidProperties[] = "invalid value for 'bban', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 35)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) < 0)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['ledger_account_number'] === null) {
            $invalidProperties[] = "'ledger_account_number' can't be null";
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
     * Gets bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param string $bank Not required for dutch companies and bank accounts of cash or tax account type. Source: Get from /v2/banks
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets bank_account_type
     *
     * @return int
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param int $bank_account_type 1 = ChequeAccount, 2 = CashAccount, 3 = SavingsAccount, 4 = CurrencyAccount, 5 = DigitalWalletAccount, 6 = CashCreditAccount, 7 = TaxAccount
     *
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!in_array($bank_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bank_account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_account_type'] = $bank_account_type;

        return $this;
    }

    /**
     * Gets bank_account_type_description
     *
     * @return string
     */
    public function getBankAccountTypeDescription()
    {
        return $this->container['bank_account_type_description'];
    }

    /**
     * Sets bank_account_type_description
     *
     * @param string $bank_account_type_description Purpose: Description of Bank Account type
     *
     * @return $this
     */
    public function setBankAccountTypeDescription($bank_account_type_description)
    {
        $this->container['bank_account_type_description'] = $bank_account_type_description;

        return $this;
    }

    /**
     * Gets bban
     *
     * @return string
     */
    public function getBban()
    {
        return $this->container['bban'];
    }

    /**
     * Sets bban
     *
     * @param string $bban Max length: 35 characters. Also known as Bank Account number. Not required for bank accounts of cash or tax account type
     *
     * @return $this
     */
    public function setBban($bban)
    {
        if (!is_null($bban) && (mb_strlen($bban) > 35)) {
            throw new \InvalidArgumentException('invalid length for $bban when calling BankAccountApi., must be smaller than or equal to 35.');
        }
        if (!is_null($bban) && (mb_strlen($bban) < 0)) {
            throw new \InvalidArgumentException('invalid length for $bban when calling BankAccountApi., must be bigger than or equal to 0.');
        }

        $this->container['bban'] = $bban;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban Max length: 35 characters
     *
     * @return $this
     */
    public function setIban($iban)
    {
        if (!is_null($iban) && (mb_strlen($iban) > 35)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling BankAccountApi., must be smaller than or equal to 35.');
        }
        if (!is_null($iban) && (mb_strlen($iban) < 0)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling BankAccountApi., must be bigger than or equal to 0.');
        }

        $this->container['iban'] = $iban;

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
     * @param string $name Max length: 200 characters
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BankAccountApi., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BankAccountApi., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
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
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets ledger_account_number
     *
     * @return int
     */
    public function getLedgerAccountNumber()
    {
        return $this->container['ledger_account_number'];
    }

    /**
     * Sets ledger_account_number
     *
     * @param int $ledger_account_number The general ledger account number
     *
     * @return $this
     */
    public function setLedgerAccountNumber($ledger_account_number)
    {
        $this->container['ledger_account_number'] = $ledger_account_number;

        return $this;
    }

    /**
     * Gets has_active_bank_agreement
     *
     * @return bool
     */
    public function getHasActiveBankAgreement()
    {
        return $this->container['has_active_bank_agreement'];
    }

    /**
     * Sets has_active_bank_agreement
     *
     * @param bool $has_active_bank_agreement has_active_bank_agreement
     *
     * @return $this
     */
    public function setHasActiveBankAgreement($has_active_bank_agreement)
    {
        $this->container['has_active_bank_agreement'] = $has_active_bank_agreement;

        return $this;
    }

    /**
     * Gets is_default_cheque_account
     *
     * @return bool
     */
    public function getIsDefaultChequeAccount()
    {
        return $this->container['is_default_cheque_account'];
    }

    /**
     * Sets is_default_cheque_account
     *
     * @param bool $is_default_cheque_account Purpose: Only used when having several cheque accounts
     *
     * @return $this
     */
    public function setIsDefaultChequeAccount($is_default_cheque_account)
    {
        $this->container['is_default_cheque_account'] = $is_default_cheque_account;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Purpose: Default value: Base currency of the company
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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


