<?php
/**
 * IDocumentReference
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IDocumentReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IDocumentReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IDocumentReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'reference_id' => 'int',
        'reference_document_type' => '\OpenAPI\Client\Model\DocumentTypes',
        'reference_document_serial' => 'string',
        'document_id' => 'int',
        'document_type' => '\OpenAPI\Client\Model\DocumentTypes',
        'document_serial' => 'string',
        'is_delete' => 'bool',
        'type' => '\OpenAPI\Client\Model\DocumentReferenceTypes',
        'document_status' => 'int',
        'document_status_string' => 'string',
        'document_date' => '\DateTime',
        'document_amount' => 'float',
        'document_amount_with_vat' => 'float',
        'ref_document_status' => 'int',
        'ref_document_status_string' => 'string',
        'ref_document_date' => '\DateTime',
        'ref_document_amount' => 'float',
        'ref_document_amount_with_vat' => 'float',
        'partial_payment_total_amount' => 'float',
        'partial_payment_total_percent' => 'float',
        'ref_created_on' => '\DateTime',
        'ref_modified_on' => '\DateTime',
        'ref_is_migrate' => 'bool',
        'is_compile_rule' => 'bool',
        'document_collected' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'company_id' => 'int64',
        'reference_id' => 'int64',
        'reference_document_type' => null,
        'reference_document_serial' => null,
        'document_id' => 'int64',
        'document_type' => null,
        'document_serial' => null,
        'is_delete' => null,
        'type' => null,
        'document_status' => 'int32',
        'document_status_string' => null,
        'document_date' => 'date-time',
        'document_amount' => 'decimal',
        'document_amount_with_vat' => 'decimal',
        'ref_document_status' => 'int32',
        'ref_document_status_string' => null,
        'ref_document_date' => 'date-time',
        'ref_document_amount' => 'decimal',
        'ref_document_amount_with_vat' => 'decimal',
        'partial_payment_total_amount' => 'decimal',
        'partial_payment_total_percent' => 'decimal',
        'ref_created_on' => 'date-time',
        'ref_modified_on' => 'date-time',
        'ref_is_migrate' => null,
        'is_compile_rule' => null,
        'document_collected' => 'decimal'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'company_id' => 'companyId',
        'reference_id' => 'referenceId',
        'reference_document_type' => 'referenceDocumentType',
        'reference_document_serial' => 'referenceDocumentSerial',
        'document_id' => 'documentId',
        'document_type' => 'documentType',
        'document_serial' => 'documentSerial',
        'is_delete' => 'isDelete',
        'type' => 'type',
        'document_status' => 'documentStatus',
        'document_status_string' => 'documentStatusString',
        'document_date' => 'documentDate',
        'document_amount' => 'documentAmount',
        'document_amount_with_vat' => 'documentAmountWithVat',
        'ref_document_status' => 'refDocumentStatus',
        'ref_document_status_string' => 'refDocumentStatusString',
        'ref_document_date' => 'refDocumentDate',
        'ref_document_amount' => 'refDocumentAmount',
        'ref_document_amount_with_vat' => 'refDocumentAmountWithVat',
        'partial_payment_total_amount' => 'partialPaymentTotalAmount',
        'partial_payment_total_percent' => 'partialPaymentTotalPercent',
        'ref_created_on' => 'refCreatedOn',
        'ref_modified_on' => 'refModifiedOn',
        'ref_is_migrate' => 'refIsMigrate',
        'is_compile_rule' => 'isCompileRule',
        'document_collected' => 'documentCollected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'reference_id' => 'setReferenceId',
        'reference_document_type' => 'setReferenceDocumentType',
        'reference_document_serial' => 'setReferenceDocumentSerial',
        'document_id' => 'setDocumentId',
        'document_type' => 'setDocumentType',
        'document_serial' => 'setDocumentSerial',
        'is_delete' => 'setIsDelete',
        'type' => 'setType',
        'document_status' => 'setDocumentStatus',
        'document_status_string' => 'setDocumentStatusString',
        'document_date' => 'setDocumentDate',
        'document_amount' => 'setDocumentAmount',
        'document_amount_with_vat' => 'setDocumentAmountWithVat',
        'ref_document_status' => 'setRefDocumentStatus',
        'ref_document_status_string' => 'setRefDocumentStatusString',
        'ref_document_date' => 'setRefDocumentDate',
        'ref_document_amount' => 'setRefDocumentAmount',
        'ref_document_amount_with_vat' => 'setRefDocumentAmountWithVat',
        'partial_payment_total_amount' => 'setPartialPaymentTotalAmount',
        'partial_payment_total_percent' => 'setPartialPaymentTotalPercent',
        'ref_created_on' => 'setRefCreatedOn',
        'ref_modified_on' => 'setRefModifiedOn',
        'ref_is_migrate' => 'setRefIsMigrate',
        'is_compile_rule' => 'setIsCompileRule',
        'document_collected' => 'setDocumentCollected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'reference_id' => 'getReferenceId',
        'reference_document_type' => 'getReferenceDocumentType',
        'reference_document_serial' => 'getReferenceDocumentSerial',
        'document_id' => 'getDocumentId',
        'document_type' => 'getDocumentType',
        'document_serial' => 'getDocumentSerial',
        'is_delete' => 'getIsDelete',
        'type' => 'getType',
        'document_status' => 'getDocumentStatus',
        'document_status_string' => 'getDocumentStatusString',
        'document_date' => 'getDocumentDate',
        'document_amount' => 'getDocumentAmount',
        'document_amount_with_vat' => 'getDocumentAmountWithVat',
        'ref_document_status' => 'getRefDocumentStatus',
        'ref_document_status_string' => 'getRefDocumentStatusString',
        'ref_document_date' => 'getRefDocumentDate',
        'ref_document_amount' => 'getRefDocumentAmount',
        'ref_document_amount_with_vat' => 'getRefDocumentAmountWithVat',
        'partial_payment_total_amount' => 'getPartialPaymentTotalAmount',
        'partial_payment_total_percent' => 'getPartialPaymentTotalPercent',
        'ref_created_on' => 'getRefCreatedOn',
        'ref_modified_on' => 'getRefModifiedOn',
        'ref_is_migrate' => 'getRefIsMigrate',
        'is_compile_rule' => 'getIsCompileRule',
        'document_collected' => 'getDocumentCollected'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['reference_document_type'] = $data['reference_document_type'] ?? null;
        $this->container['reference_document_serial'] = $data['reference_document_serial'] ?? null;
        $this->container['document_id'] = $data['document_id'] ?? null;
        $this->container['document_type'] = $data['document_type'] ?? null;
        $this->container['document_serial'] = $data['document_serial'] ?? null;
        $this->container['is_delete'] = $data['is_delete'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['document_status'] = $data['document_status'] ?? null;
        $this->container['document_status_string'] = $data['document_status_string'] ?? null;
        $this->container['document_date'] = $data['document_date'] ?? null;
        $this->container['document_amount'] = $data['document_amount'] ?? null;
        $this->container['document_amount_with_vat'] = $data['document_amount_with_vat'] ?? null;
        $this->container['ref_document_status'] = $data['ref_document_status'] ?? null;
        $this->container['ref_document_status_string'] = $data['ref_document_status_string'] ?? null;
        $this->container['ref_document_date'] = $data['ref_document_date'] ?? null;
        $this->container['ref_document_amount'] = $data['ref_document_amount'] ?? null;
        $this->container['ref_document_amount_with_vat'] = $data['ref_document_amount_with_vat'] ?? null;
        $this->container['partial_payment_total_amount'] = $data['partial_payment_total_amount'] ?? null;
        $this->container['partial_payment_total_percent'] = $data['partial_payment_total_percent'] ?? null;
        $this->container['ref_created_on'] = $data['ref_created_on'] ?? null;
        $this->container['ref_modified_on'] = $data['ref_modified_on'] ?? null;
        $this->container['ref_is_migrate'] = $data['ref_is_migrate'] ?? null;
        $this->container['is_compile_rule'] = $data['is_compile_rule'] ?? null;
        $this->container['document_collected'] = $data['document_collected'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param int|null $reference_id reference_id
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets reference_document_type
     *
     * @return \OpenAPI\Client\Model\DocumentTypes|null
     */
    public function getReferenceDocumentType()
    {
        return $this->container['reference_document_type'];
    }

    /**
     * Sets reference_document_type
     *
     * @param \OpenAPI\Client\Model\DocumentTypes|null $reference_document_type reference_document_type
     *
     * @return self
     */
    public function setReferenceDocumentType($reference_document_type)
    {
        $this->container['reference_document_type'] = $reference_document_type;

        return $this;
    }

    /**
     * Gets reference_document_serial
     *
     * @return string|null
     */
    public function getReferenceDocumentSerial()
    {
        return $this->container['reference_document_serial'];
    }

    /**
     * Sets reference_document_serial
     *
     * @param string|null $reference_document_serial reference_document_serial
     *
     * @return self
     */
    public function setReferenceDocumentSerial($reference_document_serial)
    {
        $this->container['reference_document_serial'] = $reference_document_serial;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return int|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int|null $document_id document_id
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \OpenAPI\Client\Model\DocumentTypes|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\Client\Model\DocumentTypes|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_serial
     *
     * @return string|null
     */
    public function getDocumentSerial()
    {
        return $this->container['document_serial'];
    }

    /**
     * Sets document_serial
     *
     * @param string|null $document_serial document_serial
     *
     * @return self
     */
    public function setDocumentSerial($document_serial)
    {
        $this->container['document_serial'] = $document_serial;

        return $this;
    }

    /**
     * Gets is_delete
     *
     * @return bool|null
     */
    public function getIsDelete()
    {
        return $this->container['is_delete'];
    }

    /**
     * Sets is_delete
     *
     * @param bool|null $is_delete is_delete
     *
     * @return self
     */
    public function setIsDelete($is_delete)
    {
        $this->container['is_delete'] = $is_delete;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\DocumentReferenceTypes|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\DocumentReferenceTypes|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets document_status
     *
     * @return int|null
     */
    public function getDocumentStatus()
    {
        return $this->container['document_status'];
    }

    /**
     * Sets document_status
     *
     * @param int|null $document_status document_status
     *
     * @return self
     */
    public function setDocumentStatus($document_status)
    {
        $this->container['document_status'] = $document_status;

        return $this;
    }

    /**
     * Gets document_status_string
     *
     * @return string|null
     */
    public function getDocumentStatusString()
    {
        return $this->container['document_status_string'];
    }

    /**
     * Sets document_status_string
     *
     * @param string|null $document_status_string document_status_string
     *
     * @return self
     */
    public function setDocumentStatusString($document_status_string)
    {
        $this->container['document_status_string'] = $document_status_string;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return \DateTime|null
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime|null $document_date document_date
     *
     * @return self
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets document_amount
     *
     * @return float|null
     */
    public function getDocumentAmount()
    {
        return $this->container['document_amount'];
    }

    /**
     * Sets document_amount
     *
     * @param float|null $document_amount document_amount
     *
     * @return self
     */
    public function setDocumentAmount($document_amount)
    {
        $this->container['document_amount'] = $document_amount;

        return $this;
    }

    /**
     * Gets document_amount_with_vat
     *
     * @return float|null
     */
    public function getDocumentAmountWithVat()
    {
        return $this->container['document_amount_with_vat'];
    }

    /**
     * Sets document_amount_with_vat
     *
     * @param float|null $document_amount_with_vat document_amount_with_vat
     *
     * @return self
     */
    public function setDocumentAmountWithVat($document_amount_with_vat)
    {
        $this->container['document_amount_with_vat'] = $document_amount_with_vat;

        return $this;
    }

    /**
     * Gets ref_document_status
     *
     * @return int|null
     */
    public function getRefDocumentStatus()
    {
        return $this->container['ref_document_status'];
    }

    /**
     * Sets ref_document_status
     *
     * @param int|null $ref_document_status ref_document_status
     *
     * @return self
     */
    public function setRefDocumentStatus($ref_document_status)
    {
        $this->container['ref_document_status'] = $ref_document_status;

        return $this;
    }

    /**
     * Gets ref_document_status_string
     *
     * @return string|null
     */
    public function getRefDocumentStatusString()
    {
        return $this->container['ref_document_status_string'];
    }

    /**
     * Sets ref_document_status_string
     *
     * @param string|null $ref_document_status_string ref_document_status_string
     *
     * @return self
     */
    public function setRefDocumentStatusString($ref_document_status_string)
    {
        $this->container['ref_document_status_string'] = $ref_document_status_string;

        return $this;
    }

    /**
     * Gets ref_document_date
     *
     * @return \DateTime|null
     */
    public function getRefDocumentDate()
    {
        return $this->container['ref_document_date'];
    }

    /**
     * Sets ref_document_date
     *
     * @param \DateTime|null $ref_document_date ref_document_date
     *
     * @return self
     */
    public function setRefDocumentDate($ref_document_date)
    {
        $this->container['ref_document_date'] = $ref_document_date;

        return $this;
    }

    /**
     * Gets ref_document_amount
     *
     * @return float|null
     */
    public function getRefDocumentAmount()
    {
        return $this->container['ref_document_amount'];
    }

    /**
     * Sets ref_document_amount
     *
     * @param float|null $ref_document_amount ref_document_amount
     *
     * @return self
     */
    public function setRefDocumentAmount($ref_document_amount)
    {
        $this->container['ref_document_amount'] = $ref_document_amount;

        return $this;
    }

    /**
     * Gets ref_document_amount_with_vat
     *
     * @return float|null
     */
    public function getRefDocumentAmountWithVat()
    {
        return $this->container['ref_document_amount_with_vat'];
    }

    /**
     * Sets ref_document_amount_with_vat
     *
     * @param float|null $ref_document_amount_with_vat ref_document_amount_with_vat
     *
     * @return self
     */
    public function setRefDocumentAmountWithVat($ref_document_amount_with_vat)
    {
        $this->container['ref_document_amount_with_vat'] = $ref_document_amount_with_vat;

        return $this;
    }

    /**
     * Gets partial_payment_total_amount
     *
     * @return float|null
     */
    public function getPartialPaymentTotalAmount()
    {
        return $this->container['partial_payment_total_amount'];
    }

    /**
     * Sets partial_payment_total_amount
     *
     * @param float|null $partial_payment_total_amount partial_payment_total_amount
     *
     * @return self
     */
    public function setPartialPaymentTotalAmount($partial_payment_total_amount)
    {
        $this->container['partial_payment_total_amount'] = $partial_payment_total_amount;

        return $this;
    }

    /**
     * Gets partial_payment_total_percent
     *
     * @return float|null
     */
    public function getPartialPaymentTotalPercent()
    {
        return $this->container['partial_payment_total_percent'];
    }

    /**
     * Sets partial_payment_total_percent
     *
     * @param float|null $partial_payment_total_percent partial_payment_total_percent
     *
     * @return self
     */
    public function setPartialPaymentTotalPercent($partial_payment_total_percent)
    {
        $this->container['partial_payment_total_percent'] = $partial_payment_total_percent;

        return $this;
    }

    /**
     * Gets ref_created_on
     *
     * @return \DateTime|null
     */
    public function getRefCreatedOn()
    {
        return $this->container['ref_created_on'];
    }

    /**
     * Sets ref_created_on
     *
     * @param \DateTime|null $ref_created_on ref_created_on
     *
     * @return self
     */
    public function setRefCreatedOn($ref_created_on)
    {
        $this->container['ref_created_on'] = $ref_created_on;

        return $this;
    }

    /**
     * Gets ref_modified_on
     *
     * @return \DateTime|null
     */
    public function getRefModifiedOn()
    {
        return $this->container['ref_modified_on'];
    }

    /**
     * Sets ref_modified_on
     *
     * @param \DateTime|null $ref_modified_on ref_modified_on
     *
     * @return self
     */
    public function setRefModifiedOn($ref_modified_on)
    {
        $this->container['ref_modified_on'] = $ref_modified_on;

        return $this;
    }

    /**
     * Gets ref_is_migrate
     *
     * @return bool|null
     */
    public function getRefIsMigrate()
    {
        return $this->container['ref_is_migrate'];
    }

    /**
     * Sets ref_is_migrate
     *
     * @param bool|null $ref_is_migrate ref_is_migrate
     *
     * @return self
     */
    public function setRefIsMigrate($ref_is_migrate)
    {
        $this->container['ref_is_migrate'] = $ref_is_migrate;

        return $this;
    }

    /**
     * Gets is_compile_rule
     *
     * @return bool|null
     */
    public function getIsCompileRule()
    {
        return $this->container['is_compile_rule'];
    }

    /**
     * Sets is_compile_rule
     *
     * @param bool|null $is_compile_rule is_compile_rule
     *
     * @return self
     */
    public function setIsCompileRule($is_compile_rule)
    {
        $this->container['is_compile_rule'] = $is_compile_rule;

        return $this;
    }

    /**
     * Gets document_collected
     *
     * @return float|null
     */
    public function getDocumentCollected()
    {
        return $this->container['document_collected'];
    }

    /**
     * Sets document_collected
     *
     * @param float|null $document_collected document_collected
     *
     * @return self
     */
    public function setDocumentCollected($document_collected)
    {
        $this->container['document_collected'] = $document_collected;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


