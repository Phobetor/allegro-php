<?php
/**
 * GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner
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
 * GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getListOfDeliveryMethodsUsingGET_200_response_deliveryMethods_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'marketplaces' => 'string[]',
        'payment_policy' => 'string',
        'allegro_endorsed' => 'bool',
        'shipping_rates_constraints' => '\Phobetor\Allegro\Model\GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'marketplaces' => null,
        'payment_policy' => null,
        'allegro_endorsed' => null,
        'shipping_rates_constraints' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'marketplaces' => false,
		'payment_policy' => false,
		'allegro_endorsed' => false,
		'shipping_rates_constraints' => false
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
        'name' => 'name',
        'marketplaces' => 'marketplaces',
        'payment_policy' => 'paymentPolicy',
        'allegro_endorsed' => 'allegroEndorsed',
        'shipping_rates_constraints' => 'shippingRatesConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'marketplaces' => 'setMarketplaces',
        'payment_policy' => 'setPaymentPolicy',
        'allegro_endorsed' => 'setAllegroEndorsed',
        'shipping_rates_constraints' => 'setShippingRatesConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'marketplaces' => 'getMarketplaces',
        'payment_policy' => 'getPaymentPolicy',
        'allegro_endorsed' => 'getAllegroEndorsed',
        'shipping_rates_constraints' => 'getShippingRatesConstraints'
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

    public const PAYMENT_POLICY_IN_ADVANCE = 'IN_ADVANCE';
    public const PAYMENT_POLICY_CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentPolicyAllowableValues()
    {
        return [
            self::PAYMENT_POLICY_IN_ADVANCE,
            self::PAYMENT_POLICY_CASH_ON_DELIVERY,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('marketplaces', $data ?? [], null);
        $this->setIfExists('payment_policy', $data ?? [], null);
        $this->setIfExists('allegro_endorsed', $data ?? [], null);
        $this->setIfExists('shipping_rates_constraints', $data ?? [], null);
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

        $allowedValues = $this->getPaymentPolicyAllowableValues();
        if (!is_null($this->container['payment_policy']) && !in_array($this->container['payment_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_policy', must be one of '%s'",
                $this->container['payment_policy'],
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Delivery method id.
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets marketplaces
     *
     * @return string[]|null
     */
    public function getMarketplaces()
    {
        return $this->container['marketplaces'];
    }

    /**
     * Sets marketplaces
     *
     * @param string[]|null $marketplaces List of marketplace ids where this delivery method is available for buyers.
     *
     * @return self
     */
    public function setMarketplaces($marketplaces)
    {
        if (is_null($marketplaces)) {
            throw new \InvalidArgumentException('non-nullable marketplaces cannot be null');
        }
        $this->container['marketplaces'] = $marketplaces;

        return $this;
    }

    /**
     * Gets payment_policy
     *
     * @return string|null
     */
    public function getPaymentPolicy()
    {
        return $this->container['payment_policy'];
    }

    /**
     * Sets payment_policy
     *
     * @param string|null $payment_policy Whether the payment is to be collected in advance or on delivery.
     *
     * @return self
     */
    public function setPaymentPolicy($payment_policy)
    {
        if (is_null($payment_policy)) {
            throw new \InvalidArgumentException('non-nullable payment_policy cannot be null');
        }
        $allowedValues = $this->getPaymentPolicyAllowableValues();
        if (!in_array($payment_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_policy', must be one of '%s'",
                    $payment_policy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_policy'] = $payment_policy;

        return $this;
    }

    /**
     * Gets allegro_endorsed
     *
     * @return bool|null
     */
    public function getAllegroEndorsed()
    {
        return $this->container['allegro_endorsed'];
    }

    /**
     * Sets allegro_endorsed
     *
     * @param bool|null $allegro_endorsed Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     *
     * @return self
     */
    public function setAllegroEndorsed($allegro_endorsed)
    {
        if (is_null($allegro_endorsed)) {
            throw new \InvalidArgumentException('non-nullable allegro_endorsed cannot be null');
        }
        $this->container['allegro_endorsed'] = $allegro_endorsed;

        return $this;
    }

    /**
     * Gets shipping_rates_constraints
     *
     * @return \Phobetor\Allegro\Model\GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints|null
     */
    public function getShippingRatesConstraints()
    {
        return $this->container['shipping_rates_constraints'];
    }

    /**
     * Sets shipping_rates_constraints
     *
     * @param \Phobetor\Allegro\Model\GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints|null $shipping_rates_constraints shipping_rates_constraints
     *
     * @return self
     */
    public function setShippingRatesConstraints($shipping_rates_constraints)
    {
        if (is_null($shipping_rates_constraints)) {
            throw new \InvalidArgumentException('non-nullable shipping_rates_constraints cannot be null');
        }
        $this->container['shipping_rates_constraints'] = $shipping_rates_constraints;

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

