<?php
/**
 * InvoicingV2InvoicesGet200Response
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
 * InvoicingV2InvoicesGet200Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoicingV2InvoicesGet200Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'invoicingV2InvoicesGet200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\InvoicingV2InvoicesAllGet200ResponseLinks1',
        'id' => 'string',
        'submitTimeUtc' => 'string',
        'status' => 'string',
        'customerInformation' => '\CyberSource\Model\Invoicingv2invoicesCustomerInformation',
        'invoiceInformation' => '\CyberSource\Model\InvoicingV2InvoicesPost201ResponseInvoiceInformation',
        'orderInformation' => '\CyberSource\Model\InvoicingV2InvoicesPost201ResponseOrderInformation',
        'invoiceHistory' => '\CyberSource\Model\InvoicingV2InvoicesGet200ResponseInvoiceHistory[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'submitTimeUtc' => null,
        'status' => null,
        'customerInformation' => null,
        'invoiceInformation' => null,
        'orderInformation' => null,
        'invoiceHistory' => null
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
        'links' => '_links',
        'id' => 'id',
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'customerInformation' => 'customerInformation',
        'invoiceInformation' => 'invoiceInformation',
        'orderInformation' => 'orderInformation',
        'invoiceHistory' => 'invoiceHistory'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'customerInformation' => 'setCustomerInformation',
        'invoiceInformation' => 'setInvoiceInformation',
        'orderInformation' => 'setOrderInformation',
        'invoiceHistory' => 'setInvoiceHistory'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'customerInformation' => 'getCustomerInformation',
        'invoiceInformation' => 'getInvoiceInformation',
        'orderInformation' => 'getOrderInformation',
        'invoiceHistory' => 'getInvoiceHistory'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['customerInformation'] = isset($data['customerInformation']) ? $data['customerInformation'] : null;
        $this->container['invoiceInformation'] = isset($data['invoiceInformation']) ? $data['invoiceInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['invoiceHistory'] = isset($data['invoiceHistory']) ? $data['invoiceHistory'] : null;
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
     * Gets links
     * @return \CyberSource\Model\InvoicingV2InvoicesAllGet200ResponseLinks1
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\InvoicingV2InvoicesAllGet200ResponseLinks1 $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id An unique identification number to identify the submitted request. It is also appended to the endpoint of the resource.  On incremental authorizations, this value with be the same as the identification number returned in the original authorization response.  #### PIN debit Returned for all PIN debit services.
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. Format: `YYYY-MM-DDThh:mm:ssZ` **Example** `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The `T` separates the date and the time. The `Z` indicates UTC.  Returned by authorization service.  #### PIN debit Time when the PIN debit credit, PIN debit purchase or PIN debit reversal was requested.  Returned by PIN debit credit, PIN debit purchase or PIN debit reversal.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the invoice.  Possible values: - DRAFT - CREATED - SENT - PARTIAL - PAID - CANCELED
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets customerInformation
     * @return \CyberSource\Model\Invoicingv2invoicesCustomerInformation
     */
    public function getCustomerInformation()
    {
        return $this->container['customerInformation'];
    }

    /**
     * Sets customerInformation
     * @param \CyberSource\Model\Invoicingv2invoicesCustomerInformation $customerInformation
     * @return $this
     */
    public function setCustomerInformation($customerInformation)
    {
        $this->container['customerInformation'] = $customerInformation;

        return $this;
    }

    /**
     * Gets invoiceInformation
     * @return \CyberSource\Model\InvoicingV2InvoicesPost201ResponseInvoiceInformation
     */
    public function getInvoiceInformation()
    {
        return $this->container['invoiceInformation'];
    }

    /**
     * Sets invoiceInformation
     * @param \CyberSource\Model\InvoicingV2InvoicesPost201ResponseInvoiceInformation $invoiceInformation
     * @return $this
     */
    public function setInvoiceInformation($invoiceInformation)
    {
        $this->container['invoiceInformation'] = $invoiceInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\InvoicingV2InvoicesPost201ResponseOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\InvoicingV2InvoicesPost201ResponseOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets invoiceHistory
     * @return \CyberSource\Model\InvoicingV2InvoicesGet200ResponseInvoiceHistory[]
     */
    public function getInvoiceHistory()
    {
        return $this->container['invoiceHistory'];
    }

    /**
     * Sets invoiceHistory
     * @param \CyberSource\Model\InvoicingV2InvoicesGet200ResponseInvoiceHistory[] $invoiceHistory
     * @return $this
     */
    public function setInvoiceHistory($invoiceHistory)
    {
        $this->container['invoiceHistory'] = $invoiceHistory;

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


