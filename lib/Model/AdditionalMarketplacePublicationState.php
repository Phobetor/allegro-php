<?php
/**
 * AdditionalMarketplacePublicationState
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
use \Phobetor\Allegro\ObjectSerializer;

/**
 * AdditionalMarketplacePublicationState Class Doc Comment
 *
 * @category Class
 * @description The publication status of the offer on an additional marketplace. The possible values:    - *NOT_REQUESTED* - The seller has not declared their intention to list this offer on the marketplace   - *PENDING* - The qualification process has not started; the offer is not listed yet   - *IN_PROGRESS* - We are processing whether the offer qualifies to be listed on the marketplace; the offer is not listed yet   - *APPROVED* - The offer is approved to be listed on the marketplace   - *REFUSED* - The offer will not be listed on the marketplace; the offer may be re-qualified if is corrected
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalMarketplacePublicationState
{
    /**
     * Possible values of this enum
     */
    public const NOT_REQUESTED = 'NOT_REQUESTED';

    public const PENDING = 'PENDING';

    public const IN_PROGRESS = 'IN_PROGRESS';

    public const APPROVED = 'APPROVED';

    public const REFUSED = 'REFUSED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_REQUESTED,
            self::PENDING,
            self::IN_PROGRESS,
            self::APPROVED,
            self::REFUSED
        ];
    }
}


