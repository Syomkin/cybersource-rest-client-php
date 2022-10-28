<?php
/**
 * Ptsv2paymentsRecurringPaymentInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2paymentsRecurringPaymentInformation Class Doc Comment
 *
 * @category    Class
 * @description This object contains recurring payment information.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsRecurringPaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_recurringPaymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endDate' => 'string',
        'frequency' => 'int',
        'numberOfPayments' => 'int',
        'originalPurchaseDate' => 'string',
        'sequenceNumber' => 'int',
        'type' => 'string',
        'occurrence' => 'string',
        'validationIndicator' => 'string',
        'amountType' => 'string',
        'maximumAmount' => 'string',
        'referenceNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'endDate' => null,
        'frequency' => null,
        'numberOfPayments' => null,
        'originalPurchaseDate' => null,
        'sequenceNumber' => null,
        'type' => null,
        'occurrence' => null,
        'validationIndicator' => null,
        'amountType' => null,
        'maximumAmount' => null,
        'referenceNumber' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'endDate' => 'endDate',
        'frequency' => 'frequency',
        'numberOfPayments' => 'numberOfPayments',
        'originalPurchaseDate' => 'originalPurchaseDate',
        'sequenceNumber' => 'sequenceNumber',
        'type' => 'type',
        'occurrence' => 'occurrence',
        'validationIndicator' => 'validationIndicator',
        'amountType' => 'amountType',
        'maximumAmount' => 'maximumAmount',
        'referenceNumber' => 'referenceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'endDate' => 'setEndDate',
        'frequency' => 'setFrequency',
        'numberOfPayments' => 'setNumberOfPayments',
        'originalPurchaseDate' => 'setOriginalPurchaseDate',
        'sequenceNumber' => 'setSequenceNumber',
        'type' => 'setType',
        'occurrence' => 'setOccurrence',
        'validationIndicator' => 'setValidationIndicator',
        'amountType' => 'setAmountType',
        'maximumAmount' => 'setMaximumAmount',
        'referenceNumber' => 'setReferenceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'endDate' => 'getEndDate',
        'frequency' => 'getFrequency',
        'numberOfPayments' => 'getNumberOfPayments',
        'originalPurchaseDate' => 'getOriginalPurchaseDate',
        'sequenceNumber' => 'getSequenceNumber',
        'type' => 'getType',
        'occurrence' => 'getOccurrence',
        'validationIndicator' => 'getValidationIndicator',
        'amountType' => 'getAmountType',
        'maximumAmount' => 'getMaximumAmount',
        'referenceNumber' => 'getReferenceNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['numberOfPayments'] = isset($data['numberOfPayments']) ? $data['numberOfPayments'] : null;
        $this->container['originalPurchaseDate'] = isset($data['originalPurchaseDate']) ? $data['originalPurchaseDate'] : null;
        $this->container['sequenceNumber'] = isset($data['sequenceNumber']) ? $data['sequenceNumber'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['occurrence'] = isset($data['occurrence']) ? $data['occurrence'] : null;
        $this->container['validationIndicator'] = isset($data['validationIndicator']) ? $data['validationIndicator'] : null;
        $this->container['amountType'] = isset($data['amountType']) ? $data['amountType'] : null;
        $this->container['maximumAmount'] = isset($data['maximumAmount']) ? $data['maximumAmount'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets endDate
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     * @param string $endDate The date after which no further recurring authorizations should be performed. Format: `YYYY-MM-DD` **Note** This field is required for recurring transactions.
     * @return $this
     */
    public function setEndDate($endDate)
    {

        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets frequency
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     * @param int $frequency Integer value indicating the minimum number of days between recurring authorizations. A frequency of monthly is indicated by the value 28. Multiple of 28 days will be used to indicate months.  Example: 6 months = 168  Example values accepted (31 days): - 31 - 031 - 0031  **Note** This field is required for recurring transactions.
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets numberOfPayments
     * @return int
     */
    public function getNumberOfPayments()
    {
        return $this->container['numberOfPayments'];
    }

    /**
     * Sets numberOfPayments
     * @param int $numberOfPayments Total number of payments for the duration of the recurring subscription.
     * @return $this
     */
    public function setNumberOfPayments($numberOfPayments)
    {
        $this->container['numberOfPayments'] = $numberOfPayments;

        return $this;
    }

    /**
     * Gets originalPurchaseDate
     * @return string
     */
    public function getOriginalPurchaseDate()
    {
        return $this->container['originalPurchaseDate'];
    }

    /**
     * Sets originalPurchaseDate
     * @param string $originalPurchaseDate Date of original purchase. Required for recurring transactions. Format: `YYYY-MM-DDTHH:MM:SSZ` **Note**: If this field is empty, the current date is used.
     * @return $this
     */
    public function setOriginalPurchaseDate($originalPurchaseDate)
    {

        $this->container['originalPurchaseDate'] = $originalPurchaseDate;

        return $this;
    }

    /**
     * Gets sequenceNumber
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequenceNumber'];
    }

    /**
     * Sets sequenceNumber
     * @param int $sequenceNumber This field is mandatory for Cartes Bancaires recurring transactions on Credit Mutuel-CIC.       This field records recurring sequence, e.g. 1st for initial,  2 for subsequent, 3 etc
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->container['sequenceNumber'] = $sequenceNumber;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type This contains the type of recurring payment. Valid Values : 1 - Registration/First transaction 2 - Subsequent transaction 3 - Modification 4 - Cancellation
     * @return $this
     */
    public function setType($type)
    {

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets occurrence
     * @return string
     */
    public function getOccurrence()
    {
        return $this->container['occurrence'];
    }

    /**
     * Sets occurrence
     * @param string $occurrence This value indicates how often a recurring payment occurs. Valid Values : • 01 (Daily) • 02 (Twice weekly) • 03 (Weekly) • 04 (Ten days) • 05 (Fortnightly) • 06 (Monthly) • 07 (Every two months) • 08 (Trimester) • 09 (Quarterly) • 10 (Twice yearly) • 11 (Annually) • 12 (Unscheduled)
     * @return $this
     */
    public function setOccurrence($occurrence)
    {

        $this->container['occurrence'] = $occurrence;

        return $this;
    }

    /**
     * Gets validationIndicator
     * @return string
     */
    public function getValidationIndicator()
    {
        return $this->container['validationIndicator'];
    }

    /**
     * Sets validationIndicator
     * @param string $validationIndicator This tag will contain a value that indicates whether or not the recurring payment transaction has been validated. Valid values : 0- Not validated 1- Validated
     * @return $this
     */
    public function setValidationIndicator($validationIndicator)
    {

        $this->container['validationIndicator'] = $validationIndicator;

        return $this;
    }

    /**
     * Gets amountType
     * @return string
     */
    public function getAmountType()
    {
        return $this->container['amountType'];
    }

    /**
     * Sets amountType
     * @param string $amountType Indicates recurring amount type agreed by the cardholder Valid Values : 1- Fixed amount recurring payment 2- Recurring payment with maximum amount
     * @return $this
     */
    public function setAmountType($amountType)
    {

        $this->container['amountType'] = $amountType;

        return $this;
    }

    /**
     * Gets maximumAmount
     * @return string
     */
    public function getMaximumAmount()
    {
        return $this->container['maximumAmount'];
    }

    /**
     * Sets maximumAmount
     * @param string $maximumAmount This API field will contain the maximum amount agreed to by the cardholder. The currency of this amount will be specified in Field 49—Currency Code,Transaction.
     * @return $this
     */
    public function setMaximumAmount($maximumAmount)
    {

        $this->container['maximumAmount'] = $maximumAmount;

        return $this;
    }

    /**
     * Gets referenceNumber
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     * @param string $referenceNumber This will contain a unique reference number for the recurring payment transaction.
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {

        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


