<?php
/**
 * Message
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
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Message implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'type' => 'string',
        'created_at' => '\DateTime',
        'thread' => '\Phobetor\Allegro\Model\ThreadId',
        'author' => '\Phobetor\Allegro\Model\MessageAuthor',
        'text' => 'string',
        'subject' => 'string',
        'relates_to' => '\Phobetor\Allegro\Model\MessageRelatedObject',
        'has_additional_attachments' => 'bool',
        'attachments' => '\Phobetor\Allegro\Model\MessageAttachmentInfo[]',
        'additional_information' => '\Phobetor\Allegro\Model\MessageAdditionalInformation'
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
        'status' => null,
        'type' => null,
        'created_at' => 'date-time',
        'thread' => null,
        'author' => null,
        'text' => null,
        'subject' => null,
        'relates_to' => null,
        'has_additional_attachments' => null,
        'attachments' => null,
        'additional_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'status' => false,
		'type' => false,
		'created_at' => false,
		'thread' => false,
		'author' => false,
		'text' => false,
		'subject' => true,
		'relates_to' => false,
		'has_additional_attachments' => false,
		'attachments' => false,
		'additional_information' => true
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
        'status' => 'status',
        'type' => 'type',
        'created_at' => 'createdAt',
        'thread' => 'thread',
        'author' => 'author',
        'text' => 'text',
        'subject' => 'subject',
        'relates_to' => 'relatesTo',
        'has_additional_attachments' => 'hasAdditionalAttachments',
        'attachments' => 'attachments',
        'additional_information' => 'additionalInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'type' => 'setType',
        'created_at' => 'setCreatedAt',
        'thread' => 'setThread',
        'author' => 'setAuthor',
        'text' => 'setText',
        'subject' => 'setSubject',
        'relates_to' => 'setRelatesTo',
        'has_additional_attachments' => 'setHasAdditionalAttachments',
        'attachments' => 'setAttachments',
        'additional_information' => 'setAdditionalInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'type' => 'getType',
        'created_at' => 'getCreatedAt',
        'thread' => 'getThread',
        'author' => 'getAuthor',
        'text' => 'getText',
        'subject' => 'getSubject',
        'relates_to' => 'getRelatesTo',
        'has_additional_attachments' => 'getHasAdditionalAttachments',
        'attachments' => 'getAttachments',
        'additional_information' => 'getAdditionalInformation'
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

    public const STATUS_VERIFYING = 'VERIFYING';
    public const STATUS_BLOCKED = 'BLOCKED';
    public const STATUS_DELIVERED = 'DELIVERED';
    public const STATUS_INTERACTING = 'INTERACTING';
    public const STATUS_DISMISSED = 'DISMISSED';
    public const TYPE_ASK_QUESTION = 'ASK_QUESTION';
    public const TYPE_MAIL = 'MAIL';
    public const TYPE_MESSAGE_CENTER = 'MESSAGE_CENTER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VERIFYING,
            self::STATUS_BLOCKED,
            self::STATUS_DELIVERED,
            self::STATUS_INTERACTING,
            self::STATUS_DISMISSED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ASK_QUESTION,
            self::TYPE_MAIL,
            self::TYPE_MESSAGE_CENTER,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('thread', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('relates_to', $data ?? [], null);
        $this->setIfExists('has_additional_attachments', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('additional_information', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['thread'] === null) {
            $invalidProperties[] = "'thread' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['relates_to'] === null) {
            $invalidProperties[] = "'relates_to' can't be null";
        }
        if ($this->container['has_additional_attachments'] === null) {
            $invalidProperties[] = "'has_additional_attachments' can't be null";
        }
        if ($this->container['attachments'] === null) {
            $invalidProperties[] = "'attachments' can't be null";
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
     * @param string $id id
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
     * @param string $status status
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param \DateTime $created_at created_at
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
     * Gets thread
     *
     * @return \Phobetor\Allegro\Model\ThreadId
     */
    public function getThread()
    {
        return $this->container['thread'];
    }

    /**
     * Sets thread
     *
     * @param \Phobetor\Allegro\Model\ThreadId $thread thread
     *
     * @return self
     */
    public function setThread($thread)
    {
        if (is_null($thread)) {
            throw new \InvalidArgumentException('non-nullable thread cannot be null');
        }
        $this->container['thread'] = $thread;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Phobetor\Allegro\Model\MessageAuthor
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Phobetor\Allegro\Model\MessageAuthor $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets relates_to
     *
     * @return \Phobetor\Allegro\Model\MessageRelatedObject
     */
    public function getRelatesTo()
    {
        return $this->container['relates_to'];
    }

    /**
     * Sets relates_to
     *
     * @param \Phobetor\Allegro\Model\MessageRelatedObject $relates_to relates_to
     *
     * @return self
     */
    public function setRelatesTo($relates_to)
    {
        if (is_null($relates_to)) {
            throw new \InvalidArgumentException('non-nullable relates_to cannot be null');
        }
        $this->container['relates_to'] = $relates_to;

        return $this;
    }

    /**
     * Gets has_additional_attachments
     *
     * @return bool
     */
    public function getHasAdditionalAttachments()
    {
        return $this->container['has_additional_attachments'];
    }

    /**
     * Sets has_additional_attachments
     *
     * @param bool $has_additional_attachments has_additional_attachments
     *
     * @return self
     */
    public function setHasAdditionalAttachments($has_additional_attachments)
    {
        if (is_null($has_additional_attachments)) {
            throw new \InvalidArgumentException('non-nullable has_additional_attachments cannot be null');
        }
        $this->container['has_additional_attachments'] = $has_additional_attachments;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Phobetor\Allegro\Model\MessageAttachmentInfo[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Phobetor\Allegro\Model\MessageAttachmentInfo[] $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return \Phobetor\Allegro\Model\MessageAdditionalInformation|null
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param \Phobetor\Allegro\Model\MessageAdditionalInformation|null $additional_information additional_information
     *
     * @return self
     */
    public function setAdditionalInformation($additional_information)
    {
        if (is_null($additional_information)) {
            array_push($this->openAPINullablesSetToNull, 'additional_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('additional_information', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['additional_information'] = $additional_information;

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


