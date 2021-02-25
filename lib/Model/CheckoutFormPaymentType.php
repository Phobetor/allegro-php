<?php
/**
 * CheckoutFormPaymentType
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
use \Phobetor\Allegro\ObjectSerializer;

/**
 * CheckoutFormPaymentType Class Doc Comment
 *
 * @category Class
 * @description Payment type
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormPaymentType
{
    /**
     * Possible values of this enum
     */
    const CASH_ON_DELIVERY = 'CASH_ON_DELIVERY';
    const WIRE_TRANSFER = 'WIRE_TRANSFER';
    const ONLINE = 'ONLINE';
    const SPLIT_PAYMENT = 'SPLIT_PAYMENT';
    const EXTENDED_TERM = 'EXTENDED_TERM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASH_ON_DELIVERY,
            self::WIRE_TRANSFER,
            self::ONLINE,
            self::SPLIT_PAYMENT,
            self::EXTENDED_TERM,
        ];
    }
}

