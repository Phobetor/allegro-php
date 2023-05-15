<?php
/**
 * ShippingRate
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
 * ShippingRate Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingRate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_method' => '\Phobetor\Allegro\Model\ShippingRateDeliveryMethod',
        'max_quantity_per_package' => 'int',
        'max_package_weight' => '\Phobetor\Allegro\Model\ShippingRateMaxPackageWeight',
        'first_item_rate' => '\Phobetor\Allegro\Model\ShippingRateFirstItemRate',
        'next_item_rate' => '\Phobetor\Allegro\Model\ShippingRateNextItemRate',
        'shipping_time' => '\Phobetor\Allegro\Model\ShippingRateShippingTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_method' => null,
        'max_quantity_per_package' => null,
        'max_package_weight' => null,
        'first_item_rate' => null,
        'next_item_rate' => null,
        'shipping_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery_method' => false,
		'max_quantity_per_package' => false,
		'max_package_weight' => false,
		'first_item_rate' => false,
		'next_item_rate' => false,
		'shipping_time' => false
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
        'delivery_method' => 'deliveryMethod',
        'max_quantity_per_package' => 'maxQuantityPerPackage',
        'max_package_weight' => 'maxPackageWeight',
        'first_item_rate' => 'firstItemRate',
        'next_item_rate' => 'nextItemRate',
        'shipping_time' => 'shippingTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_method' => 'setDeliveryMethod',
        'max_quantity_per_package' => 'setMaxQuantityPerPackage',
        'max_package_weight' => 'setMaxPackageWeight',
        'first_item_rate' => 'setFirstItemRate',
        'next_item_rate' => 'setNextItemRate',
        'shipping_time' => 'setShippingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_method' => 'getDeliveryMethod',
        'max_quantity_per_package' => 'getMaxQuantityPerPackage',
        'max_package_weight' => 'getMaxPackageWeight',
        'first_item_rate' => 'getFirstItemRate',
        'next_item_rate' => 'getNextItemRate',
        'shipping_time' => 'getShippingTime'
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
        $this->setIfExists('delivery_method', $data ?? [], null);
        $this->setIfExists('max_quantity_per_package', $data ?? [], null);
        $this->setIfExists('max_package_weight', $data ?? [], null);
        $this->setIfExists('first_item_rate', $data ?? [], null);
        $this->setIfExists('next_item_rate', $data ?? [], null);
        $this->setIfExists('shipping_time', $data ?? [], null);
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

        if ($this->container['delivery_method'] === null) {
            $invalidProperties[] = "'delivery_method' can't be null";
        }
        if ($this->container['max_quantity_per_package'] === null) {
            $invalidProperties[] = "'max_quantity_per_package' can't be null";
        }
        if (($this->container['max_quantity_per_package'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_quantity_per_package', must be bigger than or equal to 1.";
        }

        if ($this->container['first_item_rate'] === null) {
            $invalidProperties[] = "'first_item_rate' can't be null";
        }
        if ($this->container['next_item_rate'] === null) {
            $invalidProperties[] = "'next_item_rate' can't be null";
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
     * Gets delivery_method
     *
     * @return \Phobetor\Allegro\Model\ShippingRateDeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->container['delivery_method'];
    }

    /**
     * Sets delivery_method
     *
     * @param \Phobetor\Allegro\Model\ShippingRateDeliveryMethod $delivery_method delivery_method
     *
     * @return self
     */
    public function setDeliveryMethod($delivery_method)
    {
        if (is_null($delivery_method)) {
            throw new \InvalidArgumentException('non-nullable delivery_method cannot be null');
        }
        $this->container['delivery_method'] = $delivery_method;

        return $this;
    }

    /**
     * Gets max_quantity_per_package
     *
     * @return int
     */
    public function getMaxQuantityPerPackage()
    {
        return $this->container['max_quantity_per_package'];
    }

    /**
     * Sets max_quantity_per_package
     *
     * @param int $max_quantity_per_package Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @return self
     */
    public function setMaxQuantityPerPackage($max_quantity_per_package)
    {
        if (is_null($max_quantity_per_package)) {
            throw new \InvalidArgumentException('non-nullable max_quantity_per_package cannot be null');
        }

        if (($max_quantity_per_package < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_quantity_per_package when calling ShippingRate., must be bigger than or equal to 1.');
        }

        $this->container['max_quantity_per_package'] = $max_quantity_per_package;

        return $this;
    }

    /**
     * Gets max_package_weight
     *
     * @return \Phobetor\Allegro\Model\ShippingRateMaxPackageWeight|null
     */
    public function getMaxPackageWeight()
    {
        return $this->container['max_package_weight'];
    }

    /**
     * Sets max_package_weight
     *
     * @param \Phobetor\Allegro\Model\ShippingRateMaxPackageWeight|null $max_package_weight max_package_weight
     *
     * @return self
     */
    public function setMaxPackageWeight($max_package_weight)
    {
        if (is_null($max_package_weight)) {
            throw new \InvalidArgumentException('non-nullable max_package_weight cannot be null');
        }
        $this->container['max_package_weight'] = $max_package_weight;

        return $this;
    }

    /**
     * Gets first_item_rate
     *
     * @return \Phobetor\Allegro\Model\ShippingRateFirstItemRate
     */
    public function getFirstItemRate()
    {
        return $this->container['first_item_rate'];
    }

    /**
     * Sets first_item_rate
     *
     * @param \Phobetor\Allegro\Model\ShippingRateFirstItemRate $first_item_rate first_item_rate
     *
     * @return self
     */
    public function setFirstItemRate($first_item_rate)
    {
        if (is_null($first_item_rate)) {
            throw new \InvalidArgumentException('non-nullable first_item_rate cannot be null');
        }
        $this->container['first_item_rate'] = $first_item_rate;

        return $this;
    }

    /**
     * Gets next_item_rate
     *
     * @return \Phobetor\Allegro\Model\ShippingRateNextItemRate
     */
    public function getNextItemRate()
    {
        return $this->container['next_item_rate'];
    }

    /**
     * Sets next_item_rate
     *
     * @param \Phobetor\Allegro\Model\ShippingRateNextItemRate $next_item_rate next_item_rate
     *
     * @return self
     */
    public function setNextItemRate($next_item_rate)
    {
        if (is_null($next_item_rate)) {
            throw new \InvalidArgumentException('non-nullable next_item_rate cannot be null');
        }
        $this->container['next_item_rate'] = $next_item_rate;

        return $this;
    }

    /**
     * Gets shipping_time
     *
     * @return \Phobetor\Allegro\Model\ShippingRateShippingTime|null
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time
     *
     * @param \Phobetor\Allegro\Model\ShippingRateShippingTime|null $shipping_time shipping_time
     *
     * @return self
     */
    public function setShippingTime($shipping_time)
    {
        if (is_null($shipping_time)) {
            throw new \InvalidArgumentException('non-nullable shipping_time cannot be null');
        }
        $this->container['shipping_time'] = $shipping_time;

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


