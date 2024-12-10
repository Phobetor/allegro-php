<?php
/**
 * SaleProductOfferPatchRequestV1AllOf
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
 * SaleProductOfferPatchRequestV1AllOf Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SaleProductOfferPatchRequestV1AllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleProductOfferPatchRequestV1_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_set' => '\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfProductSetInner[]',
        'b2b' => '\Phobetor\Allegro\Model\B2b',
        'attachments' => '\Phobetor\Allegro\Model\ProductOfferAttachmentInner[]',
        'fundraising_campaign' => '\Phobetor\Allegro\Model\ProductOfferFundraisingCampaignRequest',
        'additional_services' => '\Phobetor\Allegro\Model\ProductOfferAdditionalServicesRequest',
        'compatibility_list' => '\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfCompatibilityList',
        'delivery' => '\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfDelivery',
        'stock' => '\Phobetor\Allegro\Model\SaleProductOffersRequestStock',
        'publication' => '\Phobetor\Allegro\Model\SaleProductOfferPublicationRequest',
        'additional_marketplaces' => 'array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesRequestValue>',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_set' => null,
        'b2b' => null,
        'attachments' => null,
        'fundraising_campaign' => null,
        'additional_services' => null,
        'compatibility_list' => null,
        'delivery' => null,
        'stock' => null,
        'publication' => null,
        'additional_marketplaces' => null,
        'language' => 'BCP-47 language code'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_set' => false,
		'b2b' => false,
		'attachments' => false,
		'fundraising_campaign' => false,
		'additional_services' => false,
		'compatibility_list' => false,
		'delivery' => false,
		'stock' => false,
		'publication' => false,
		'additional_marketplaces' => false,
		'language' => false
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
        'product_set' => 'productSet',
        'b2b' => 'b2b',
        'attachments' => 'attachments',
        'fundraising_campaign' => 'fundraisingCampaign',
        'additional_services' => 'additionalServices',
        'compatibility_list' => 'compatibilityList',
        'delivery' => 'delivery',
        'stock' => 'stock',
        'publication' => 'publication',
        'additional_marketplaces' => 'additionalMarketplaces',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_set' => 'setProductSet',
        'b2b' => 'setB2b',
        'attachments' => 'setAttachments',
        'fundraising_campaign' => 'setFundraisingCampaign',
        'additional_services' => 'setAdditionalServices',
        'compatibility_list' => 'setCompatibilityList',
        'delivery' => 'setDelivery',
        'stock' => 'setStock',
        'publication' => 'setPublication',
        'additional_marketplaces' => 'setAdditionalMarketplaces',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_set' => 'getProductSet',
        'b2b' => 'getB2b',
        'attachments' => 'getAttachments',
        'fundraising_campaign' => 'getFundraisingCampaign',
        'additional_services' => 'getAdditionalServices',
        'compatibility_list' => 'getCompatibilityList',
        'delivery' => 'getDelivery',
        'stock' => 'getStock',
        'publication' => 'getPublication',
        'additional_marketplaces' => 'getAdditionalMarketplaces',
        'language' => 'getLanguage'
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
        $this->setIfExists('product_set', $data ?? [], null);
        $this->setIfExists('b2b', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('fundraising_campaign', $data ?? [], null);
        $this->setIfExists('additional_services', $data ?? [], null);
        $this->setIfExists('compatibility_list', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('publication', $data ?? [], null);
        $this->setIfExists('additional_marketplaces', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
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
     * Gets product_set
     *
     * @return \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfProductSetInner[]|null
     */
    public function getProductSet()
    {
        return $this->container['product_set'];
    }

    /**
     * Sets product_set
     *
     * @param \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfProductSetInner[]|null $product_set product_set
     *
     * @return self
     */
    public function setProductSet($product_set)
    {
        if (is_null($product_set)) {
            throw new \InvalidArgumentException('non-nullable product_set cannot be null');
        }
        $this->container['product_set'] = $product_set;

        return $this;
    }

    /**
     * Gets b2b
     *
     * @return \Phobetor\Allegro\Model\B2b|null
     */
    public function getB2b()
    {
        return $this->container['b2b'];
    }

    /**
     * Sets b2b
     *
     * @param \Phobetor\Allegro\Model\B2b|null $b2b b2b
     *
     * @return self
     */
    public function setB2b($b2b)
    {
        if (is_null($b2b)) {
            throw new \InvalidArgumentException('non-nullable b2b cannot be null');
        }
        $this->container['b2b'] = $b2b;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Phobetor\Allegro\Model\ProductOfferAttachmentInner[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Phobetor\Allegro\Model\ProductOfferAttachmentInner[]|null $attachments An array of offer attachments.
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
     * Gets fundraising_campaign
     *
     * @return \Phobetor\Allegro\Model\ProductOfferFundraisingCampaignRequest|null
     */
    public function getFundraisingCampaign()
    {
        return $this->container['fundraising_campaign'];
    }

    /**
     * Sets fundraising_campaign
     *
     * @param \Phobetor\Allegro\Model\ProductOfferFundraisingCampaignRequest|null $fundraising_campaign fundraising_campaign
     *
     * @return self
     */
    public function setFundraisingCampaign($fundraising_campaign)
    {
        if (is_null($fundraising_campaign)) {
            throw new \InvalidArgumentException('non-nullable fundraising_campaign cannot be null');
        }
        $this->container['fundraising_campaign'] = $fundraising_campaign;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \Phobetor\Allegro\Model\ProductOfferAdditionalServicesRequest|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \Phobetor\Allegro\Model\ProductOfferAdditionalServicesRequest|null $additional_services additional_services
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
     * Gets compatibility_list
     *
     * @return \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfCompatibilityList|null
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfCompatibilityList|null $compatibility_list compatibility_list
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
     * Gets delivery
     *
     * @return \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfDelivery|null $delivery delivery
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
     * Gets stock
     *
     * @return \Phobetor\Allegro\Model\SaleProductOffersRequestStock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \Phobetor\Allegro\Model\SaleProductOffersRequestStock|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        if (is_null($stock)) {
            throw new \InvalidArgumentException('non-nullable stock cannot be null');
        }
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \Phobetor\Allegro\Model\SaleProductOfferPublicationRequest|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \Phobetor\Allegro\Model\SaleProductOfferPublicationRequest|null $publication publication
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
     * Gets additional_marketplaces
     *
     * @return array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesRequestValue>|null
     */
    public function getAdditionalMarketplaces()
    {
        return $this->container['additional_marketplaces'];
    }

    /**
     * Sets additional_marketplaces
     *
     * @param array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesRequestValue>|null $additional_marketplaces Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @return self
     */
    public function setAdditionalMarketplaces($additional_marketplaces)
    {
        if (is_null($additional_marketplaces)) {
            throw new \InvalidArgumentException('non-nullable additional_marketplaces cannot be null');
        }
        $this->container['additional_marketplaces'] = $additional_marketplaces;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Declared base language of the offer.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

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


