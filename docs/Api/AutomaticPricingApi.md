# Phobetor\Allegro\AutomaticPricingApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAutomaticPricingRulesUsingPost()**](AutomaticPricingApi.md#createAutomaticPricingRulesUsingPost) | **POST** /sale/price-automation/rules | Post automatic pricing rule |
| [**deleteAutomaticPricingRuleUsingDelete()**](AutomaticPricingApi.md#deleteAutomaticPricingRuleUsingDelete) | **DELETE** /sale/price-automation/rules/{ruleId} | Delete automatic pricing rule |
| [**getAutomaticPricingRuleByIdUsingGET()**](AutomaticPricingApi.md#getAutomaticPricingRuleByIdUsingGET) | **GET** /sale/price-automation/rules/{ruleId} | Get automatic pricing rule by id |
| [**getAutomaticPricingRulesForOfferUsingGET()**](AutomaticPricingApi.md#getAutomaticPricingRulesForOfferUsingGET) | **GET** /sale/price-automation/offers/{offerId}/rules | Get automatic pricing rules assigned to the offer |
| [**getAutomaticPricingRulesUsingGET()**](AutomaticPricingApi.md#getAutomaticPricingRulesUsingGET) | **GET** /sale/price-automation/rules | Get automatic pricing rules |
| [**updateAutomaticPricingRuleUsingPut()**](AutomaticPricingApi.md#updateAutomaticPricingRuleUsingPut) | **PUT** /sale/price-automation/rules/{ruleId} | Edit automatic pricing rule |


## `createAutomaticPricingRulesUsingPost()`

```php
createAutomaticPricingRulesUsingPost($automatic_pricing_rule_post_request): \Phobetor\Allegro\Model\AutomaticPricingRuleResponse
```

Post automatic pricing rule

Use this resource to create automatic pricing rule. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automatic_pricing_rule_post_request = new \Phobetor\Allegro\Model\AutomaticPricingRulePostRequest(); // \Phobetor\Allegro\Model\AutomaticPricingRulePostRequest | The automatic pricing rule.

try {
    $result = $apiInstance->createAutomaticPricingRulesUsingPost($automatic_pricing_rule_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->createAutomaticPricingRulesUsingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automatic_pricing_rule_post_request** | [**\Phobetor\Allegro\Model\AutomaticPricingRulePostRequest**](../Model/AutomaticPricingRulePostRequest.md)| The automatic pricing rule. | |

### Return type

[**\Phobetor\Allegro\Model\AutomaticPricingRuleResponse**](../Model/AutomaticPricingRuleResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomaticPricingRuleUsingDelete()`

```php
deleteAutomaticPricingRuleUsingDelete($rule_id)
```

Delete automatic pricing rule

Use this resource to delete automatic pricing rule. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 66466e2b07ba0029b829f08d; // string | The rule identifier.

try {
    $apiInstance->deleteAutomaticPricingRuleUsingDelete($rule_id);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->deleteAutomaticPricingRuleUsingDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**| The rule identifier. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticPricingRuleByIdUsingGET()`

```php
getAutomaticPricingRuleByIdUsingGET($rule_id): \Phobetor\Allegro\Model\AutomaticPricingRuleResponse
```

Get automatic pricing rule by id

Use this resource to get automatic pricing rule by id. Rules with property **default** set to **true** are default rules created by Allegro for each merchant and cannot be modified. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 66466e2b07ba0029b829f08d; // string | The rule identifier.

try {
    $result = $apiInstance->getAutomaticPricingRuleByIdUsingGET($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->getAutomaticPricingRuleByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**| The rule identifier. | |

### Return type

[**\Phobetor\Allegro\Model\AutomaticPricingRuleResponse**](../Model/AutomaticPricingRuleResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticPricingRulesForOfferUsingGET()`

```php
getAutomaticPricingRulesForOfferUsingGET($offer_id): \Phobetor\Allegro\Model\OfferRules
```

Get automatic pricing rules assigned to the offer

Use this resource to get automatic pricing rules for offer. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 15521818197; // string | The offer identifier.

try {
    $result = $apiInstance->getAutomaticPricingRulesForOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->getAutomaticPricingRulesForOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| The offer identifier. | |

### Return type

[**\Phobetor\Allegro\Model\OfferRules**](../Model/OfferRules.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticPricingRulesUsingGET()`

```php
getAutomaticPricingRulesUsingGET(): \Phobetor\Allegro\Model\AutomaticPricingRulesResponse
```

Get automatic pricing rules

Use this resource to get automatic pricing rules. Rules with property **default** set to **true** are default rules created by Allegro for each merchant. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAutomaticPricingRulesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->getAutomaticPricingRulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\AutomaticPricingRulesResponse**](../Model/AutomaticPricingRulesResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomaticPricingRuleUsingPut()`

```php
updateAutomaticPricingRuleUsingPut($rule_id, $automatic_pricing_rule_put_request): \Phobetor\Allegro\Model\AutomaticPricingRuleResponse
```

Edit automatic pricing rule

Use this resource to update automatic pricing rule. This resource is rate limited to 5 requests per second.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AutomaticPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 66466e2b07ba0029b829f08d; // string | The rule identifier.
$automatic_pricing_rule_put_request = new \Phobetor\Allegro\Model\AutomaticPricingRulePutRequest(); // \Phobetor\Allegro\Model\AutomaticPricingRulePutRequest | The automatic pricing rule.

try {
    $result = $apiInstance->updateAutomaticPricingRuleUsingPut($rule_id, $automatic_pricing_rule_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticPricingApi->updateAutomaticPricingRuleUsingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule_id** | **string**| The rule identifier. | |
| **automatic_pricing_rule_put_request** | [**\Phobetor\Allegro\Model\AutomaticPricingRulePutRequest**](../Model/AutomaticPricingRulePutRequest.md)| The automatic pricing rule. | |

### Return type

[**\Phobetor\Allegro\Model\AutomaticPricingRuleResponse**](../Model/AutomaticPricingRuleResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
