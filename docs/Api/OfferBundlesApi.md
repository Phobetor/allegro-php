# Phobetor\Allegro\OfferBundlesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOfferBundleUsingPOST()**](OfferBundlesApi.md#createOfferBundleUsingPOST) | **POST** /sale/bundles | Create a new offer bundle |
| [**deleteOfferBundleUsingGET()**](OfferBundlesApi.md#deleteOfferBundleUsingGET) | **DELETE** /sale/bundles/{bundleId} | Delete bundle by ID |
| [**getOfferBundleUsingGET()**](OfferBundlesApi.md#getOfferBundleUsingGET) | **GET** /sale/bundles/{bundleId} | Get bundle by ID |
| [**listSellersOfferBundlesUsingGET()**](OfferBundlesApi.md#listSellersOfferBundlesUsingGET) | **GET** /sale/bundles | List seller&#39;s bundles |
| [**updateOfferBundleDiscountUsingPUT()**](OfferBundlesApi.md#updateOfferBundleDiscountUsingPUT) | **PUT** /sale/bundles/{bundleId}/discount | Update discount associated with bundle |


## `createOfferBundleUsingPOST()`

```php
createOfferBundleUsingPOST($create_offer_bundle_dto): \Phobetor\Allegro\Model\OfferBundleDTO
```

Create a new offer bundle

You can create <a href=\"https://help.allegro.com/sell/en/a/how-to-create-offer-bundles-rj9eAL2XnhK?marketplaceId=allegro-pl\" target=\"_blank\">offer bundle</a> using this endpoint. Bundle has to contain at least two offers and at least one of them has to be set as an entry point. Bundle will be shown on offers' pages which are marked as entry points. You can also specify how many units of each offer will be in bundle using `requiredQuantity` property. <br> Additionally, discount can be specified for each marketplace separately. If you do not want to set discount, set `discounts` property to `null` or empty array. Also, you do not have to specify discount on all marketplaces. Fill marketplaces in 'discounts' array accordingly to your needs. <br> For now the only supported marketplace is `allegro-pl`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_offer_bundle_dto = {"offers":[{"id":"123456789","requiredQuantity":1,"entryPoint":true},{"id":"987654321","requiredQuantity":2,"entryPoint":false}],"discounts":[{"marketplace":{"id":"allegro-pl"},"amount":"10.15","currency":"PLN"}]}; // \Phobetor\Allegro\Model\CreateOfferBundleDTO

try {
    $result = $apiInstance->createOfferBundleUsingPOST($create_offer_bundle_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferBundlesApi->createOfferBundleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_offer_bundle_dto** | [**\Phobetor\Allegro\Model\CreateOfferBundleDTO**](../Model/CreateOfferBundleDTO.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\OfferBundleDTO**](../Model/OfferBundleDTO.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOfferBundleUsingGET()`

```php
deleteOfferBundleUsingGET($bundle_id)
```

Delete bundle by ID

Use this resource to delete offer bundle by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_id = 'bundle_id_example'; // string | Bundle ID.

try {
    $apiInstance->deleteOfferBundleUsingGET($bundle_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferBundlesApi->deleteOfferBundleUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| Bundle ID. | |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferBundleUsingGET()`

```php
getOfferBundleUsingGET($bundle_id): \Phobetor\Allegro\Model\OfferBundleDTO
```

Get bundle by ID

Use this resource to retrieve offer bundle by its unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_id = 'bundle_id_example'; // string | Bundle ID.

try {
    $result = $apiInstance->getOfferBundleUsingGET($bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferBundlesApi->getOfferBundleUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| Bundle ID. | |

### Return type

[**\Phobetor\Allegro\Model\OfferBundleDTO**](../Model/OfferBundleDTO.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSellersOfferBundlesUsingGET()`

```php
listSellersOfferBundlesUsingGET($limit, $offer_id, $page_id): \Phobetor\Allegro\Model\OfferBundlesDTO
```

List seller's bundles

You can fetch page of seller's offer bundles using this endpoint. <br> Paging: <br> To move to next page, specify `page.id` parameter with value obtained in response from previous request. Number of offer bundles on single page can be specified using `limit` parameter. <br> Filtering: <br> Offer bundles can be filtered to bundles which contain offer specified in `offer.id` parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Limit of bundles per page.
$offer_id = 123456789; // string | Filter bundles which contains offer.
$page_id = MjAyNC0wOS0xMFQwNjo0OTowMi40NTBa; // string | ID of page which will be retrieved.

try {
    $result = $apiInstance->listSellersOfferBundlesUsingGET($limit, $offer_id, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferBundlesApi->listSellersOfferBundlesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit of bundles per page. | [optional] [default to 50] |
| **offer_id** | **string**| Filter bundles which contains offer. | [optional] |
| **page_id** | **string**| ID of page which will be retrieved. | [optional] |

### Return type

[**\Phobetor\Allegro\Model\OfferBundlesDTO**](../Model/OfferBundlesDTO.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferBundleDiscountUsingPUT()`

```php
updateOfferBundleDiscountUsingPUT($bundle_id, $update_offer_bundle_discount_dto): \Phobetor\Allegro\Model\OfferBundleDTO
```

Update discount associated with bundle

Use this resource to update discount per marketplaces associated with bundle specified by its unique identifier. This will override currently set discounts for all marketplaces, so the unchanged discounts also must be specified in request. In case discount for marketplace is not specified in request it will be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_id = 'bundle_id_example'; // string | Bundle ID.
$update_offer_bundle_discount_dto = {"discounts":[{"marketplace":{"id":"allegro-pl"},"amount":"10.15","currency":"PLN"}]}; // \Phobetor\Allegro\Model\UpdateOfferBundleDiscountDTO

try {
    $result = $apiInstance->updateOfferBundleDiscountUsingPUT($bundle_id, $update_offer_bundle_discount_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferBundlesApi->updateOfferBundleDiscountUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle_id** | **string**| Bundle ID. | |
| **update_offer_bundle_discount_dto** | [**\Phobetor\Allegro\Model\UpdateOfferBundleDiscountDTO**](../Model/UpdateOfferBundleDiscountDTO.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\OfferBundleDTO**](../Model/OfferBundleDTO.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
