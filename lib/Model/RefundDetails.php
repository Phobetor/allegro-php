<?php
/**
 * RefundDetails
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
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
 * RefundDetails Class Doc Comment
 *
 * @category Class
 * @description Detailed information about the refund.
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RefundDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'payment' => '\Phobetor\Allegro\Model\RefundPayment',
        'reason' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime',
        'total_value' => '\Phobetor\Allegro\Model\RefundTotalValue',
        'line_items' => '\Phobetor\Allegro\Model\RefundLineItem[]',
        'delivery' => '\Phobetor\Allegro\Model\InitializeRefundDelivery',
        'overpaid' => '\Phobetor\Allegro\Model\InitializeRefundOverpaid',
        'surcharges' => '\Phobetor\Allegro\Model\PaymentsSurcharge[]',
        'additional_services' => '\Phobetor\Allegro\Model\InitializeRefundAdditionalServices',
        'seller_comment' => 'string'
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
        'payment' => null,
        'reason' => null,
        'status' => null,
        'created_at' => 'date-time',
        'total_value' => null,
        'line_items' => null,
        'delivery' => null,
        'overpaid' => null,
        'surcharges' => null,
        'additional_services' => null,
        'seller_comment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'payment' => false,
		'reason' => false,
		'status' => false,
		'created_at' => false,
		'total_value' => false,
		'line_items' => false,
		'delivery' => false,
		'overpaid' => false,
		'surcharges' => false,
		'additional_services' => false,
		'seller_comment' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'payment' => 'payment',
        'reason' => 'reason',
        'status' => 'status',
        'created_at' => 'createdAt',
        'total_value' => 'totalValue',
        'line_items' => 'lineItems',
        'delivery' => 'delivery',
        'overpaid' => 'overpaid',
        'surcharges' => 'surcharges',
        'additional_services' => 'additionalServices',
        'seller_comment' => 'sellerComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'payment' => 'setPayment',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'total_value' => 'setTotalValue',
        'line_items' => 'setLineItems',
        'delivery' => 'setDelivery',
        'overpaid' => 'setOverpaid',
        'surcharges' => 'setSurcharges',
        'additional_services' => 'setAdditionalServices',
        'seller_comment' => 'setSellerComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'payment' => 'getPayment',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'total_value' => 'getTotalValue',
        'line_items' => 'getLineItems',
        'delivery' => 'getDelivery',
        'overpaid' => 'getOverpaid',
        'surcharges' => 'getSurcharges',
        'additional_services' => 'getAdditionalServices',
        'seller_comment' => 'getSellerComment'
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

    public const REASON_REFUND = 'REFUND';
    public const REASON_COMPLAINT = 'COMPLAINT';
    public const REASON_PRODUCT_NOT_AVAILABLE = 'PRODUCT_NOT_AVAILABLE';
    public const REASON_PAID_VALUE_TOO_LOW = 'PAID_VALUE_TOO_LOW';
    public const STATUS_SUCCESS = 'SUCCESS';
    public const STATUS_CANCELED = 'CANCELED';
    public const STATUS_PARTIAL = 'PARTIAL';
    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_VALIDATED = 'VALIDATED';
    public const STATUS_VALIDATE_FAILED = 'VALIDATE_FAILED';
    public const STATUS__NEW = 'NEW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_REFUND,
            self::REASON_COMPLAINT,
            self::REASON_PRODUCT_NOT_AVAILABLE,
            self::REASON_PAID_VALUE_TOO_LOW,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_CANCELED,
            self::STATUS_PARTIAL,
            self::STATUS_IN_PROGRESS,
            self::STATUS_VALIDATED,
            self::STATUS_VALIDATE_FAILED,
            self::STATUS__NEW,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('total_value', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('overpaid', $data ?? [], null);
        $this->setIfExists('surcharges', $data ?? [], null);
        $this->setIfExists('additional_services', $data ?? [], null);
        $this->setIfExists('seller_comment', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['total_value'] === null) {
            $invalidProperties[] = "'total_value' can't be null";
        }
        if (!is_null($this->container['seller_comment']) && (mb_strlen($this->container['seller_comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'seller_comment', the character length must be smaller than or equal to 250.";
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
     * @param string $id The payment refund identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Phobetor\Allegro\Model\RefundPayment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Phobetor\Allegro\Model\RefundPayment $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason for a payment refund.
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current status of payment refund.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time when the refund was created provided in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets total_value
     *
     * @return \Phobetor\Allegro\Model\RefundTotalValue
     */
    public function getTotalValue()
    {
        return $this->container['total_value'];
    }

    /**
     * Sets total_value
     *
     * @param \Phobetor\Allegro\Model\RefundTotalValue $total_value total_value
     *
     * @return self
     */
    public function setTotalValue($total_value)
    {
        if (is_null($total_value)) {
            throw new \InvalidArgumentException('non-nullable total_value cannot be null');
        }
        $this->container['total_value'] = $total_value;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Phobetor\Allegro\Model\RefundLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Phobetor\Allegro\Model\RefundLineItem[]|null $line_items List of order's line items which can be refunded.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Phobetor\Allegro\Model\InitializeRefundDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Phobetor\Allegro\Model\InitializeRefundDelivery|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets overpaid
     *
     * @return \Phobetor\Allegro\Model\InitializeRefundOverpaid|null
     */
    public function getOverpaid()
    {
        return $this->container['overpaid'];
    }

    /**
     * Sets overpaid
     *
     * @param \Phobetor\Allegro\Model\InitializeRefundOverpaid|null $overpaid overpaid
     *
     * @return self
     */
    public function setOverpaid($overpaid)
    {
        if (is_null($overpaid)) {
            throw new \InvalidArgumentException('non-nullable overpaid cannot be null');
        }
        $this->container['overpaid'] = $overpaid;

        return $this;
    }

    /**
     * Gets surcharges
     *
     * @return \Phobetor\Allegro\Model\PaymentsSurcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->container['surcharges'];
    }

    /**
     * Sets surcharges
     *
     * @param \Phobetor\Allegro\Model\PaymentsSurcharge[]|null $surcharges List of surcharges for payment which can be refunded.
     *
     * @return self
     */
    public function setSurcharges($surcharges)
    {
        if (is_null($surcharges)) {
            throw new \InvalidArgumentException('non-nullable surcharges cannot be null');
        }
        $this->container['surcharges'] = $surcharges;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \Phobetor\Allegro\Model\InitializeRefundAdditionalServices|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \Phobetor\Allegro\Model\InitializeRefundAdditionalServices|null $additional_services additional_services
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        if (is_null($additional_services)) {
            throw new \InvalidArgumentException('non-nullable additional_services cannot be null');
        }
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets seller_comment
     *
     * @return string|null
     */
    public function getSellerComment()
    {
        return $this->container['seller_comment'];
    }

    /**
     * Sets seller_comment
     *
     * @param string|null $seller_comment Sellers optional justification for refund.
     *
     * @return self
     */
    public function setSellerComment($seller_comment)
    {
        if (is_null($seller_comment)) {
            throw new \InvalidArgumentException('non-nullable seller_comment cannot be null');
        }
        if ((mb_strlen($seller_comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $seller_comment when calling RefundDetails., must be smaller than or equal to 250.');
        }

        $this->container['seller_comment'] = $seller_comment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


