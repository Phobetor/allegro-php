<?php
/**
 * ModificationPublication
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
 * ModificationPublication Class Doc Comment
 *
 * @category Class
 * @description Allows you to change duration of offers. You can include only property in a request \&quot;duration\&quot; or \&quot;durationUnlimited\&quot;.
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ModificationPublication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModificationPublication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => 'string',
        'duration_unlimited' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration' => null,
        'duration_unlimited' => null
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
        'duration' => 'duration',
        'duration_unlimited' => 'durationUnlimited'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'duration_unlimited' => 'setDurationUnlimited'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'duration_unlimited' => 'getDurationUnlimited'
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

    const DURATION_PT72_H = 'PT72H';
    const DURATION_PT120_H = 'PT120H';
    const DURATION_PT168_H = 'PT168H';
    const DURATION_PT240_H = 'PT240H';
    const DURATION_PT480_H = 'PT480H';
    const DURATION_PT720_H = 'PT720H';
    const DURATION_P3_D = 'P3D';
    const DURATION_P5_D = 'P5D';
    const DURATION_P7_D = 'P7D';
    const DURATION_P10_D = 'P10D';
    const DURATION_P20_D = 'P20D';
    const DURATION_P30_D = 'P30D';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurationAllowableValues()
    {
        return [
            self::DURATION_PT72_H,
            self::DURATION_PT120_H,
            self::DURATION_PT168_H,
            self::DURATION_PT240_H,
            self::DURATION_PT480_H,
            self::DURATION_PT720_H,
            self::DURATION_P3_D,
            self::DURATION_P5_D,
            self::DURATION_P7_D,
            self::DURATION_P10_D,
            self::DURATION_P20_D,
            self::DURATION_P30_D,
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
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['duration_unlimited'] = $data['duration_unlimited'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDurationAllowableValues();
        if (!is_null($this->container['duration']) && !in_array($this->container['duration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duration', must be one of '%s'",
                $this->container['duration'],
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
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration Offer duration time provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $allowedValues = $this->getDurationAllowableValues();
        if (!is_null($duration) && !in_array($duration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duration', must be one of '%s'",
                    $duration,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets duration_unlimited
     *
     * @return bool|null
     */
    public function getDurationUnlimited()
    {
        return $this->container['duration_unlimited'];
    }

    /**
     * Sets duration_unlimited
     *
     * @param bool|null $duration_unlimited Unlimited duration time.
     *
     * @return self
     */
    public function setDurationUnlimited($duration_unlimited)
    {
        $this->container['duration_unlimited'] = $duration_unlimited;

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


