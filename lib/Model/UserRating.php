<?php
/**
 * UserRating
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
 * UserRating Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UserRating implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answer' => '\Phobetor\Allegro\Model\Answer',
        'buyer' => '\Phobetor\Allegro\Model\User',
        'comment' => 'string',
        'created_at' => '\DateTime',
        'excluded_from_average_rates' => 'bool',
        'id' => 'string',
        'order' => '\Phobetor\Allegro\Model\Order',
        'rates' => '\Phobetor\Allegro\Model\Rates',
        'recommended' => 'bool',
        'removal' => '\Phobetor\Allegro\Model\Removal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answer' => null,
        'buyer' => null,
        'comment' => null,
        'created_at' => 'date-time',
        'excluded_from_average_rates' => null,
        'id' => null,
        'order' => null,
        'rates' => null,
        'recommended' => null,
        'removal' => null
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
        'answer' => 'answer',
        'buyer' => 'buyer',
        'comment' => 'comment',
        'created_at' => 'createdAt',
        'excluded_from_average_rates' => 'excludedFromAverageRates',
        'id' => 'id',
        'order' => 'order',
        'rates' => 'rates',
        'recommended' => 'recommended',
        'removal' => 'removal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer' => 'setAnswer',
        'buyer' => 'setBuyer',
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'excluded_from_average_rates' => 'setExcludedFromAverageRates',
        'id' => 'setId',
        'order' => 'setOrder',
        'rates' => 'setRates',
        'recommended' => 'setRecommended',
        'removal' => 'setRemoval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer' => 'getAnswer',
        'buyer' => 'getBuyer',
        'comment' => 'getComment',
        'created_at' => 'getCreatedAt',
        'excluded_from_average_rates' => 'getExcludedFromAverageRates',
        'id' => 'getId',
        'order' => 'getOrder',
        'rates' => 'getRates',
        'recommended' => 'getRecommended',
        'removal' => 'getRemoval'
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
        $this->container['answer'] = $data['answer'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['excluded_from_average_rates'] = $data['excluded_from_average_rates'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['rates'] = $data['rates'] ?? null;
        $this->container['recommended'] = $data['recommended'] ?? null;
        $this->container['removal'] = $data['removal'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
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
     * Gets answer
     *
     * @return \Phobetor\Allegro\Model\Answer|null
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     *
     * @param \Phobetor\Allegro\Model\Answer|null $answer answer
     *
     * @return self
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Phobetor\Allegro\Model\User
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Phobetor\Allegro\Model\User $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Buyer's text comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * @param \DateTime $created_at Creation datetime in ISO 8601 format
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets excluded_from_average_rates
     *
     * @return bool|null
     */
    public function getExcludedFromAverageRates()
    {
        return $this->container['excluded_from_average_rates'];
    }

    /**
     * Sets excluded_from_average_rates
     *
     * @param bool|null $excluded_from_average_rates If true this rating was not included in calculating average user rates
     *
     * @return self
     */
    public function setExcludedFromAverageRates($excluded_from_average_rates)
    {
        $this->container['excluded_from_average_rates'] = $excluded_from_average_rates;

        return $this;
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
     * @param string $id Rating id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Phobetor\Allegro\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Phobetor\Allegro\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \Phobetor\Allegro\Model\Rates|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \Phobetor\Allegro\Model\Rates|null $rates rates
     *
     * @return self
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended Whether buyer recommends the order
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets removal
     *
     * @return \Phobetor\Allegro\Model\Removal|null
     */
    public function getRemoval()
    {
        return $this->container['removal'];
    }

    /**
     * Sets removal
     *
     * @param \Phobetor\Allegro\Model\Removal|null $removal removal
     *
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->container['removal'] = $removal;

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


