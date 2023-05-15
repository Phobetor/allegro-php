<?php
/**
 * ShippingRateMaxPackageWeightTest
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
 * Please update the test case below to test the model.
 */

namespace Phobetor\Allegro\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ShippingRateMaxPackageWeightTest Class Doc Comment
 *
 * @category    Class
 * @description Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with &#x60;IN_ADVANCE&#x60; and &#x60;CASH_ON_DELIVERY&#x60; payment policy if both methods are in the shipping rates set.
 * @package     Phobetor\Allegro
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ShippingRateMaxPackageWeightTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ShippingRateMaxPackageWeight"
     */
    public function testShippingRateMaxPackageWeight()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "unit"
     */
    public function testPropertyUnit()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
