<?php
/**
 * Publication
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
 * Publication Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Publication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Publication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => 'string',
        'ending_at' => '\DateTime',
        'marketplaces' => '\Phobetor\Allegro\Model\OfferMarketplaces',
        'starting_at' => '\DateTime',
        'status' => '\Phobetor\Allegro\Model\OfferStatus',
        'ended_by' => 'string',
        'republish' => 'bool'
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
        'ending_at' => 'date-time',
        'marketplaces' => null,
        'starting_at' => 'date-time',
        'status' => null,
        'ended_by' => null,
        'republish' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'duration' => false,
		'ending_at' => false,
		'marketplaces' => false,
		'starting_at' => false,
		'status' => false,
		'ended_by' => false,
		'republish' => false
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
        'duration' => 'duration',
        'ending_at' => 'endingAt',
        'marketplaces' => 'marketplaces',
        'starting_at' => 'startingAt',
        'status' => 'status',
        'ended_by' => 'endedBy',
        'republish' => 'republish'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'ending_at' => 'setEndingAt',
        'marketplaces' => 'setMarketplaces',
        'starting_at' => 'setStartingAt',
        'status' => 'setStatus',
        'ended_by' => 'setEndedBy',
        'republish' => 'setRepublish'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'ending_at' => 'getEndingAt',
        'marketplaces' => 'getMarketplaces',
        'starting_at' => 'getStartingAt',
        'status' => 'getStatus',
        'ended_by' => 'getEndedBy',
        'republish' => 'getRepublish'
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

    public const ENDED_BY_USER = 'USER';
    public const ENDED_BY_ADMIN = 'ADMIN';
    public const ENDED_BY_EXPIRATION = 'EXPIRATION';
    public const ENDED_BY_EMPTY_STOCK = 'EMPTY_STOCK';
    public const ENDED_BY_ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndedByAllowableValues()
    {
        return [
            self::ENDED_BY_USER,
            self::ENDED_BY_ADMIN,
            self::ENDED_BY_EXPIRATION,
            self::ENDED_BY_EMPTY_STOCK,
            self::ENDED_BY_ERROR,
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
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('ending_at', $data ?? [], null);
        $this->setIfExists('marketplaces', $data ?? [], null);
        $this->setIfExists('starting_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('ended_by', $data ?? [], null);
        $this->setIfExists('republish', $data ?? [], null);
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

        $allowedValues = $this->getEndedByAllowableValues();
        if (!is_null($this->container['ended_by']) && !in_array($this->container['ended_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ended_by', must be one of '%s'",
                $this->container['ended_by'],
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
     * @param string|null $duration Publication duration, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets ending_at
     *
     * @return \DateTime|null
     */
    public function getEndingAt()
    {
        return $this->container['ending_at'];
    }

    /**
     * Sets ending_at
     *
     * @param \DateTime|null $ending_at Publication ending date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified
     *
     * @return self
     */
    public function setEndingAt($ending_at)
    {
        if (is_null($ending_at)) {
            throw new \InvalidArgumentException('non-nullable ending_at cannot be null');
        }
        $this->container['ending_at'] = $ending_at;

        return $this;
    }

    /**
     * Gets marketplaces
     *
     * @return \Phobetor\Allegro\Model\OfferMarketplaces|null
     */
    public function getMarketplaces()
    {
        return $this->container['marketplaces'];
    }

    /**
     * Sets marketplaces
     *
     * @param \Phobetor\Allegro\Model\OfferMarketplaces|null $marketplaces marketplaces
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
     * Gets starting_at
     *
     * @return \DateTime|null
     */
    public function getStartingAt()
    {
        return $this->container['starting_at'];
    }

    /**
     * Sets starting_at
     *
     * @param \DateTime|null $starting_at Publication starting date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer.
     *
     * @return self
     */
    public function setStartingAt($starting_at)
    {
        if (is_null($starting_at)) {
            throw new \InvalidArgumentException('non-nullable starting_at cannot be null');
        }
        $this->container['starting_at'] = $starting_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Phobetor\Allegro\Model\OfferStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Phobetor\Allegro\Model\OfferStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ended_by
     *
     * @return string|null
     */
    public function getEndedBy()
    {
        return $this->container['ended_by'];
    }

    /**
     * Sets ended_by
     *
     * @param string|null $ended_by Indicates the reason for ending the offer:  - `USER` - offer ended by the seller.  - `ADMIN` - offer ended by an admin.  - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).  - `EMPTY_STOCK` - offer ended because all available items had been sold out.  - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with    success status, but further processing failed.
     *
     * @return self
     */
    public function setEndedBy($ended_by)
    {
        if (is_null($ended_by)) {
            throw new \InvalidArgumentException('non-nullable ended_by cannot be null');
        }
        $allowedValues = $this->getEndedByAllowableValues();
        if (!in_array($ended_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ended_by', must be one of '%s'",
                    $ended_by,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ended_by'] = $ended_by;

        return $this;
    }

    /**
     * Gets republish
     *
     * @return bool|null
     */
    public function getRepublish()
    {
        return $this->container['republish'];
    }

    /**
     * Sets republish
     *
     * @param bool|null $republish Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @return self
     */
    public function setRepublish($republish)
    {
        if (is_null($republish)) {
            throw new \InvalidArgumentException('non-nullable republish cannot be null');
        }
        $this->container['republish'] = $republish;

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


