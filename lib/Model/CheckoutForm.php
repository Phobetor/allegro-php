<?php
/**
 * CheckoutForm
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Phobetor\Allegro\Model;

use \ArrayAccess;
use \Phobetor\Allegro\ObjectSerializer;

/**
 * CheckoutForm Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CheckoutForm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'message_to_seller' => 'string',
        'buyer' => '\Phobetor\Allegro\Model\CheckoutFormBuyerReference',
        'payment' => '\Phobetor\Allegro\Model\CheckoutFormPaymentReference',
        'status' => '\Phobetor\Allegro\Model\CheckoutFormStatus',
        'fulfillment' => '\Phobetor\Allegro\Model\CheckoutFormFulfillment',
        'delivery' => '\Phobetor\Allegro\Model\CheckoutFormDeliveryReference',
        'invoice' => '\Phobetor\Allegro\Model\CheckoutFormInvoiceInfo',
        'line_items' => '\Phobetor\Allegro\Model\CheckoutFormLineItem[]',
        'surcharges' => '\Phobetor\Allegro\Model\CheckoutFormPaymentReference[]',
        'discounts' => '\Phobetor\Allegro\Model\CheckoutFormDiscount[]',
        'summary' => '\Phobetor\Allegro\Model\CheckoutFormSummary',
        'updated_at' => 'string',
        'revision' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'message_to_seller' => null,
        'buyer' => null,
        'payment' => null,
        'status' => null,
        'fulfillment' => null,
        'delivery' => null,
        'invoice' => null,
        'line_items' => null,
        'surcharges' => null,
        'discounts' => null,
        'summary' => null,
        'updated_at' => null,
        'revision' => null
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
        'message_to_seller' => 'messageToSeller',
        'buyer' => 'buyer',
        'payment' => 'payment',
        'status' => 'status',
        'fulfillment' => 'fulfillment',
        'delivery' => 'delivery',
        'invoice' => 'invoice',
        'line_items' => 'lineItems',
        'surcharges' => 'surcharges',
        'discounts' => 'discounts',
        'summary' => 'summary',
        'updated_at' => 'updatedAt',
        'revision' => 'revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'message_to_seller' => 'setMessageToSeller',
        'buyer' => 'setBuyer',
        'payment' => 'setPayment',
        'status' => 'setStatus',
        'fulfillment' => 'setFulfillment',
        'delivery' => 'setDelivery',
        'invoice' => 'setInvoice',
        'line_items' => 'setLineItems',
        'surcharges' => 'setSurcharges',
        'discounts' => 'setDiscounts',
        'summary' => 'setSummary',
        'updated_at' => 'setUpdatedAt',
        'revision' => 'setRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'message_to_seller' => 'getMessageToSeller',
        'buyer' => 'getBuyer',
        'payment' => 'getPayment',
        'status' => 'getStatus',
        'fulfillment' => 'getFulfillment',
        'delivery' => 'getDelivery',
        'invoice' => 'getInvoice',
        'line_items' => 'getLineItems',
        'surcharges' => 'getSurcharges',
        'discounts' => 'getDiscounts',
        'summary' => 'getSummary',
        'updated_at' => 'getUpdatedAt',
        'revision' => 'getRevision'
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
        $this->container['message_to_seller'] = $data['message_to_seller'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['payment'] = $data['payment'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fulfillment'] = $data['fulfillment'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['invoice'] = $data['invoice'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['surcharges'] = $data['surcharges'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['revision'] = $data['revision'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ($this->container['surcharges'] === null) {
            $invalidProperties[] = "'surcharges' can't be null";
        }
        if ($this->container['discounts'] === null) {
            $invalidProperties[] = "'discounts' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
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
     * @param string $id Checkout form id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets message_to_seller
     *
     * @return string|null
     */
    public function getMessageToSeller()
    {
        return $this->container['message_to_seller'];
    }

    /**
     * Sets message_to_seller
     *
     * @param string|null $message_to_seller Message from buyer to seller
     *
     * @return self
     */
    public function setMessageToSeller($message_to_seller)
    {
        $this->container['message_to_seller'] = $message_to_seller;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormBuyerReference
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormBuyerReference $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormPaymentReference|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormPaymentReference|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fulfillment
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormFulfillment|null
     */
    public function getFulfillment()
    {
        return $this->container['fulfillment'];
    }

    /**
     * Sets fulfillment
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormFulfillment|null $fulfillment fulfillment
     *
     * @return self
     */
    public function setFulfillment($fulfillment)
    {
        $this->container['fulfillment'] = $fulfillment;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDeliveryReference|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDeliveryReference|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormInvoiceInfo|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormInvoiceInfo|null $invoice invoice
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormLineItem[] $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets surcharges
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormPaymentReference[]
     */
    public function getSurcharges()
    {
        return $this->container['surcharges'];
    }

    /**
     * Sets surcharges
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormPaymentReference[] $surcharges surcharges
     *
     * @return self
     */
    public function setSurcharges($surcharges)
    {
        $this->container['surcharges'] = $surcharges;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDiscount[] $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormSummary $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601).
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string|null $revision Checkout form revision
     *
     * @return self
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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


