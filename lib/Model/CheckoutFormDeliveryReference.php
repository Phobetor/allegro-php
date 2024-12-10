<?php
/**
 * CheckoutFormDeliveryReference
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
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file. To start working with our API, you can also check our [official Allegro REST API public collection](https://www.postman.com/allegro-rest-api/allegro-rest-api/collection/4puh6ls/allegro-rest-api) in Postman.
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
 * CheckoutFormDeliveryReference Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutFormDeliveryReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutFormDeliveryReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\Phobetor\Allegro\Model\CheckoutFormDeliveryAddress',
        'method' => '\Phobetor\Allegro\Model\CheckoutFormDeliveryMethod',
        'pickup_point' => '\Phobetor\Allegro\Model\CheckoutFormDeliveryPickupPoint',
        'cost' => '\Phobetor\Allegro\Model\Price',
        'time' => '\Phobetor\Allegro\Model\CheckoutFormDeliveryTime',
        'smart' => 'bool',
        'calculated_number_of_packages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'method' => null,
        'pickup_point' => null,
        'cost' => null,
        'time' => null,
        'smart' => null,
        'calculated_number_of_packages' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
		'method' => false,
		'pickup_point' => false,
		'cost' => false,
		'time' => false,
		'smart' => false,
		'calculated_number_of_packages' => false
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
        'address' => 'address',
        'method' => 'method',
        'pickup_point' => 'pickupPoint',
        'cost' => 'cost',
        'time' => 'time',
        'smart' => 'smart',
        'calculated_number_of_packages' => 'calculatedNumberOfPackages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'method' => 'setMethod',
        'pickup_point' => 'setPickupPoint',
        'cost' => 'setCost',
        'time' => 'setTime',
        'smart' => 'setSmart',
        'calculated_number_of_packages' => 'setCalculatedNumberOfPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'method' => 'getMethod',
        'pickup_point' => 'getPickupPoint',
        'cost' => 'getCost',
        'time' => 'getTime',
        'smart' => 'getSmart',
        'calculated_number_of_packages' => 'getCalculatedNumberOfPackages'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('pickup_point', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('smart', $data ?? [], null);
        $this->setIfExists('calculated_number_of_packages', $data ?? [], null);
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

        if (!is_null($this->container['calculated_number_of_packages']) && ($this->container['calculated_number_of_packages'] < 0)) {
            $invalidProperties[] = "invalid value for 'calculated_number_of_packages', must be bigger than or equal to 0.";
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
     * Gets address
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDeliveryAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDeliveryAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDeliveryMethod|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDeliveryMethod|null $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets pickup_point
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDeliveryPickupPoint|null
     */
    public function getPickupPoint()
    {
        return $this->container['pickup_point'];
    }

    /**
     * Sets pickup_point
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDeliveryPickupPoint|null $pickup_point pickup_point
     *
     * @return self
     */
    public function setPickupPoint($pickup_point)
    {
        if (is_null($pickup_point)) {
            throw new \InvalidArgumentException('non-nullable pickup_point cannot be null');
        }
        $this->container['pickup_point'] = $pickup_point;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return \Phobetor\Allegro\Model\Price|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \Phobetor\Allegro\Model\Price|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \Phobetor\Allegro\Model\CheckoutFormDeliveryTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \Phobetor\Allegro\Model\CheckoutFormDeliveryTime|null $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets smart
     *
     * @return bool|null
     */
    public function getSmart()
    {
        return $this->container['smart'];
    }

    /**
     * Sets smart
     *
     * @param bool|null $smart Buyer used a SMART option
     *
     * @return self
     */
    public function setSmart($smart)
    {
        if (is_null($smart)) {
            throw new \InvalidArgumentException('non-nullable smart cannot be null');
        }
        $this->container['smart'] = $smart;

        return $this;
    }

    /**
     * Gets calculated_number_of_packages
     *
     * @return int|null
     */
    public function getCalculatedNumberOfPackages()
    {
        return $this->container['calculated_number_of_packages'];
    }

    /**
     * Sets calculated_number_of_packages
     *
     * @param int|null $calculated_number_of_packages Calculated number of packages.
     *
     * @return self
     */
    public function setCalculatedNumberOfPackages($calculated_number_of_packages)
    {
        if (is_null($calculated_number_of_packages)) {
            throw new \InvalidArgumentException('non-nullable calculated_number_of_packages cannot be null');
        }

        if (($calculated_number_of_packages < 0)) {
            throw new \InvalidArgumentException('invalid value for $calculated_number_of_packages when calling CheckoutFormDeliveryReference., must be bigger than or equal to 0.');
        }

        $this->container['calculated_number_of_packages'] = $calculated_number_of_packages;

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


