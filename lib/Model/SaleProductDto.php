<?php
/**
 * SaleProductDto
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
 * SaleProductDto Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SaleProductDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => '\Phobetor\Allegro\Model\ProductCategoryWithPath',
        'images' => '\Phobetor\Allegro\Model\ImageUrl[]',
        'parameters' => '\Phobetor\Allegro\Model\ProductParameterDto[]',
        'offer_requirements' => '\Phobetor\Allegro\Model\OfferRequirements',
        'compatibility_list' => '\Phobetor\Allegro\Model\SaleProductCompatibilityList',
        'tecdoc_specification' => '\Phobetor\Allegro\Model\TecdocSpecification',
        'description' => '\Phobetor\Allegro\Model\StandardizedDescription',
        'is_draft' => 'bool',
        'ai_co_created_content' => '\Phobetor\Allegro\Model\AiCoCreatedContent',
        'has_protected_brand' => 'bool',
        'publication' => '\Phobetor\Allegro\Model\SaleProductDtoPublication',
        'product_safety' => '\Phobetor\Allegro\Model\ProductSafetyDto'
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
        'category' => null,
        'images' => null,
        'parameters' => null,
        'offer_requirements' => null,
        'compatibility_list' => null,
        'tecdoc_specification' => null,
        'description' => null,
        'is_draft' => null,
        'ai_co_created_content' => null,
        'has_protected_brand' => null,
        'publication' => null,
        'product_safety' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'category' => false,
		'images' => false,
		'parameters' => false,
		'offer_requirements' => false,
		'compatibility_list' => false,
		'tecdoc_specification' => false,
		'description' => false,
		'is_draft' => false,
		'ai_co_created_content' => false,
		'has_protected_brand' => false,
		'publication' => false,
		'product_safety' => true
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
        'category' => 'category',
        'images' => 'images',
        'parameters' => 'parameters',
        'offer_requirements' => 'offerRequirements',
        'compatibility_list' => 'compatibilityList',
        'tecdoc_specification' => 'tecdocSpecification',
        'description' => 'description',
        'is_draft' => 'isDraft',
        'ai_co_created_content' => 'aiCoCreatedContent',
        'has_protected_brand' => 'hasProtectedBrand',
        'publication' => 'publication',
        'product_safety' => 'productSafety'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'images' => 'setImages',
        'parameters' => 'setParameters',
        'offer_requirements' => 'setOfferRequirements',
        'compatibility_list' => 'setCompatibilityList',
        'tecdoc_specification' => 'setTecdocSpecification',
        'description' => 'setDescription',
        'is_draft' => 'setIsDraft',
        'ai_co_created_content' => 'setAiCoCreatedContent',
        'has_protected_brand' => 'setHasProtectedBrand',
        'publication' => 'setPublication',
        'product_safety' => 'setProductSafety'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'images' => 'getImages',
        'parameters' => 'getParameters',
        'offer_requirements' => 'getOfferRequirements',
        'compatibility_list' => 'getCompatibilityList',
        'tecdoc_specification' => 'getTecdocSpecification',
        'description' => 'getDescription',
        'is_draft' => 'getIsDraft',
        'ai_co_created_content' => 'getAiCoCreatedContent',
        'has_protected_brand' => 'getHasProtectedBrand',
        'publication' => 'getPublication',
        'product_safety' => 'getProductSafety'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('offer_requirements', $data ?? [], null);
        $this->setIfExists('compatibility_list', $data ?? [], null);
        $this->setIfExists('tecdoc_specification', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('is_draft', $data ?? [], null);
        $this->setIfExists('ai_co_created_content', $data ?? [], null);
        $this->setIfExists('has_protected_brand', $data ?? [], null);
        $this->setIfExists('publication', $data ?? [], null);
        $this->setIfExists('product_safety', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
     * @param string $id Product id.
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Product name.
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
     * Gets category
     *
     * @return \Phobetor\Allegro\Model\ProductCategoryWithPath
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Phobetor\Allegro\Model\ProductCategoryWithPath $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Phobetor\Allegro\Model\ImageUrl[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Phobetor\Allegro\Model\ImageUrl[]|null $images List of product images.
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Phobetor\Allegro\Model\ProductParameterDto[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Phobetor\Allegro\Model\ProductParameterDto[]|null $parameters List of product parameters.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        if (is_null($parameters)) {
            throw new \InvalidArgumentException('non-nullable parameters cannot be null');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets offer_requirements
     *
     * @return \Phobetor\Allegro\Model\OfferRequirements|null
     */
    public function getOfferRequirements()
    {
        return $this->container['offer_requirements'];
    }

    /**
     * Sets offer_requirements
     *
     * @param \Phobetor\Allegro\Model\OfferRequirements|null $offer_requirements offer_requirements
     *
     * @return self
     */
    public function setOfferRequirements($offer_requirements)
    {
        if (is_null($offer_requirements)) {
            throw new \InvalidArgumentException('non-nullable offer_requirements cannot be null');
        }
        $this->container['offer_requirements'] = $offer_requirements;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \Phobetor\Allegro\Model\SaleProductCompatibilityList|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \Phobetor\Allegro\Model\SaleProductCompatibilityList|null $compatibility_list compatibility_list
     *
     * @return self
     */
    public function setCompatibilityList($compatibility_list)
    {
        if (is_null($compatibility_list)) {
            throw new \InvalidArgumentException('non-nullable compatibility_list cannot be null');
        }
        $this->container['compatibility_list'] = $compatibility_list;

        return $this;
    }

    /**
     * Gets tecdoc_specification
     *
     * @return \Phobetor\Allegro\Model\TecdocSpecification|null
     */
    public function getTecdocSpecification()
    {
        return $this->container['tecdoc_specification'];
    }

    /**
     * Sets tecdoc_specification
     *
     * @param \Phobetor\Allegro\Model\TecdocSpecification|null $tecdoc_specification tecdoc_specification
     *
     * @return self
     */
    public function setTecdocSpecification($tecdoc_specification)
    {
        if (is_null($tecdoc_specification)) {
            throw new \InvalidArgumentException('non-nullable tecdoc_specification cannot be null');
        }
        $this->container['tecdoc_specification'] = $tecdoc_specification;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Phobetor\Allegro\Model\StandardizedDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Phobetor\Allegro\Model\StandardizedDescription|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_draft
     *
     * @return bool|null
     */
    public function getIsDraft()
    {
        return $this->container['is_draft'];
    }

    /**
     * Sets is_draft
     *
     * @param bool|null $is_draft Flag that informs if product is waiting for resolution of basic parameters change proposal.
     *
     * @return self
     */
    public function setIsDraft($is_draft)
    {
        if (is_null($is_draft)) {
            throw new \InvalidArgumentException('non-nullable is_draft cannot be null');
        }
        $this->container['is_draft'] = $is_draft;

        return $this;
    }

    /**
     * Gets ai_co_created_content
     *
     * @return \Phobetor\Allegro\Model\AiCoCreatedContent|null
     */
    public function getAiCoCreatedContent()
    {
        return $this->container['ai_co_created_content'];
    }

    /**
     * Sets ai_co_created_content
     *
     * @param \Phobetor\Allegro\Model\AiCoCreatedContent|null $ai_co_created_content ai_co_created_content
     *
     * @return self
     */
    public function setAiCoCreatedContent($ai_co_created_content)
    {
        if (is_null($ai_co_created_content)) {
            throw new \InvalidArgumentException('non-nullable ai_co_created_content cannot be null');
        }
        $this->container['ai_co_created_content'] = $ai_co_created_content;

        return $this;
    }

    /**
     * Gets has_protected_brand
     *
     * @return bool|null
     */
    public function getHasProtectedBrand()
    {
        return $this->container['has_protected_brand'];
    }

    /**
     * Sets has_protected_brand
     *
     * @param bool|null $has_protected_brand Flag that informs if product is a part of a protected brand's assortment and its use may be restricted.
     *
     * @return self
     */
    public function setHasProtectedBrand($has_protected_brand)
    {
        if (is_null($has_protected_brand)) {
            throw new \InvalidArgumentException('non-nullable has_protected_brand cannot be null');
        }
        $this->container['has_protected_brand'] = $has_protected_brand;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \Phobetor\Allegro\Model\SaleProductDtoPublication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \Phobetor\Allegro\Model\SaleProductDtoPublication|null $publication publication
     *
     * @return self
     */
    public function setPublication($publication)
    {
        if (is_null($publication)) {
            throw new \InvalidArgumentException('non-nullable publication cannot be null');
        }
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets product_safety
     *
     * @return \Phobetor\Allegro\Model\ProductSafetyDto|null
     */
    public function getProductSafety()
    {
        return $this->container['product_safety'];
    }

    /**
     * Sets product_safety
     *
     * @param \Phobetor\Allegro\Model\ProductSafetyDto|null $product_safety product_safety
     *
     * @return self
     */
    public function setProductSafety($product_safety)
    {
        if (is_null($product_safety)) {
            array_push($this->openAPINullablesSetToNull, 'product_safety');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_safety', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_safety'] = $product_safety;

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


