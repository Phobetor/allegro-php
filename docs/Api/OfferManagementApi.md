# Phobetor\Allegro\OfferManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePublicationStatusUsingPUT()**](OfferManagementApi.md#changePublicationStatusUsingPUT) | **PUT** /sale/offer-publication-commands/{commandId} | Batch offer publish / unpublish
[**createChangePriceCommandUsingPUT()**](OfferManagementApi.md#createChangePriceCommandUsingPUT) | **PUT** /offers/{offerId}/change-price-commands/{commandId} | Modify the Buy Now price in an offer
[**createOfferUsingPOST()**](OfferManagementApi.md#createOfferUsingPOST) | **POST** /sale/offers | Create a draft offer
[**createProductOffers()**](OfferManagementApi.md#createProductOffers) | **POST** /sale/product-offers | Create offer based on product
[**deleteOfferUsingDELETE()**](OfferManagementApi.md#deleteOfferUsingDELETE) | **DELETE** /sale/offers/{offerId} | Delete a draft offer
[**editProductOffers()**](OfferManagementApi.md#editProductOffers) | **PATCH** /sale/product-offers/{offerId} | Edit an offer
[**getAvailableOfferPromotionPackages()**](OfferManagementApi.md#getAvailableOfferPromotionPackages) | **GET** /sale/offer-promotion-packages | Get all available offer promotion packages
[**getOfferPromoOptionsUsingGET()**](OfferManagementApi.md#getOfferPromoOptionsUsingGET) | **GET** /sale/offers/{offerId}/promo-options | Get offer promotion packages
[**getOffersUnfilledParametersUsingGET1()**](OfferManagementApi.md#getOffersUnfilledParametersUsingGET1) | **GET** /sale/offers/unfilled-parameters | Get offers with missing parameters
[**getProductOffer()**](OfferManagementApi.md#getProductOffer) | **GET** /sale/product-offers/{offerId} | Get all data of the particular product-offer
[**getProductOfferProcessingStatus()**](OfferManagementApi.md#getProductOfferProcessingStatus) | **GET** /sale/product-offers/{offerId}/operations/{operationId} | Check the processing status of a POST or PATCH request
[**getPromoModificationCommandDetailedResultUsingGET()**](OfferManagementApi.md#getPromoModificationCommandDetailedResultUsingGET) | **GET** /sale/offers/promo-options-commands/{commandId}/tasks | Modification command detailed result
[**getPromoModificationCommandResultUsingGET()**](OfferManagementApi.md#getPromoModificationCommandResultUsingGET) | **GET** /sale/offers/promo-options-commands/{commandId} | Modification command summary
[**getPublicationReportUsingGET()**](OfferManagementApi.md#getPublicationReportUsingGET) | **GET** /sale/offer-publication-commands/{commandId} | Publish command summary
[**getPublicationTasksUsingGET()**](OfferManagementApi.md#getPublicationTasksUsingGET) | **GET** /sale/offer-publication-commands/{commandId}/tasks | Publish command detailed report
[**modifyOfferPromoOptionsUsingPOST()**](OfferManagementApi.md#modifyOfferPromoOptionsUsingPOST) | **POST** /sale/offers/{offerId}/promo-options-modification | Modify offer promotion packages
[**promoModificationCommandUsingPUT()**](OfferManagementApi.md#promoModificationCommandUsingPUT) | **PUT** /sale/offers/promo-options-commands/{commandId} | Batch offer promotion package modification
[**updateOfferUsingPUT()**](OfferManagementApi.md#updateOfferUsingPUT) | **PUT** /sale/offers/{offerId} | Complete a draft offer or edit an offer


## `changePublicationStatusUsingPUT()`

```php
changePublicationStatusUsingPUT($command_id, $publication_change_command_dto): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer publish / unpublish

Use this resource to modify multiple offers publication at once. Read more: <a href=\"../../sale/#9-publikacja-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#9-publish-your-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$publication_change_command_dto = new \Phobetor\Allegro\Model\PublicationChangeCommandDto(); // \Phobetor\Allegro\Model\PublicationChangeCommandDto | publicationChangeCommandDto

try {
    $result = $apiInstance->changePublicationStatusUsingPUT($command_id, $publication_change_command_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->changePublicationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |
 **publication_change_command_dto** | [**\Phobetor\Allegro\Model\PublicationChangeCommandDto**](../Model/PublicationChangeCommandDto.md)| publicationChangeCommandDto |

### Return type

[**\Phobetor\Allegro\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChangePriceCommandUsingPUT()`

```php
createChangePriceCommandUsingPUT($offer_id, $command_id, $change_price_without_output): \Phobetor\Allegro\Model\ChangePrice
```

Modify the Buy Now price in an offer

Use this resource to change the Buy Now price in a single offer. Read more: <a href=\"../../news/2016-08-01-zmiana-ceny/\" target=\"_blank\">PL</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer identifier.
$command_id = 'command_id_example'; // string | The unique command id generated by you.
$change_price_without_output = new \Phobetor\Allegro\Model\ChangePriceWithoutOutput(); // \Phobetor\Allegro\Model\ChangePriceWithoutOutput

try {
    $result = $apiInstance->createChangePriceCommandUsingPUT($offer_id, $command_id, $change_price_without_output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createChangePriceCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer identifier. |
 **command_id** | [**string**](../Model/.md)| The unique command id generated by you. |
 **change_price_without_output** | [**\Phobetor\Allegro\Model\ChangePriceWithoutOutput**](../Model/ChangePriceWithoutOutput.md)|  |

### Return type

[**\Phobetor\Allegro\Model\ChangePrice**](../Model/ChangePrice.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOfferUsingPOST()`

```php
createOfferUsingPOST($offer): \Phobetor\Allegro\Model\Offer
```

Create a draft offer

Use this resource to create a draft offer. Read more: <a href=\"../../sale/#7-draft-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#7-offer-draft\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer = new \Phobetor\Allegro\Model\Offer(); // \Phobetor\Allegro\Model\Offer | offer

try {
    $result = $apiInstance->createOfferUsingPOST($offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer** | [**\Phobetor\Allegro\Model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\Phobetor\Allegro\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductOffers()`

```php
createProductOffers($sale_product_offer_request): \Phobetor\Allegro\Model\SaleProductOfferResponse
```

Create offer based on product

Use this resource to create offer based on product. Read more: <a href=\"../../product_offers/\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_product_offer_request = new \Phobetor\Allegro\Model\SaleProductOfferRequest(); // \Phobetor\Allegro\Model\SaleProductOfferRequest

try {
    $result = $apiInstance->createProductOffers($sale_product_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createProductOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_product_offer_request** | [**\Phobetor\Allegro\Model\SaleProductOfferRequest**](../Model/SaleProductOfferRequest.md)|  |

### Return type

[**\Phobetor\Allegro\Model\SaleProductOfferResponse**](../Model/SaleProductOfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.beta.v2+json`
- **Accept**: `application/vnd.allegro.beta.v2+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOfferUsingDELETE()`

```php
deleteOfferUsingDELETE($offer_id)
```

Delete a draft offer

Use this resource to delete a draft offer. Read more: <a href=\"../../news/2018-10-09_draft_delete\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-10-09_draft_delete\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $apiInstance->deleteOfferUsingDELETE($offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->deleteOfferUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

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

## `editProductOffers()`

```php
editProductOffers($offer_id, $sale_product_offer_patch_request): \Phobetor\Allegro\Model\SaleProductOfferResponse
```

Edit an offer

Use this resource to edit offer. Read more <a href=\"../../product_offers/#jak-edytować-ofertę\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/#how-to-edit-an-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer identifier.
$sale_product_offer_patch_request = new \Phobetor\Allegro\Model\SaleProductOfferPatchRequest(); // \Phobetor\Allegro\Model\SaleProductOfferPatchRequest

try {
    $result = $apiInstance->editProductOffers($offer_id, $sale_product_offer_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->editProductOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer identifier. |
 **sale_product_offer_patch_request** | [**\Phobetor\Allegro\Model\SaleProductOfferPatchRequest**](../Model/SaleProductOfferPatchRequest.md)|  |

### Return type

[**\Phobetor\Allegro\Model\SaleProductOfferResponse**](../Model/SaleProductOfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.beta.v2+json`
- **Accept**: `application/vnd.allegro.beta.v2+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableOfferPromotionPackages()`

```php
getAvailableOfferPromotionPackages(): \Phobetor\Allegro\Model\AvailablePromotionPackages
```

Get all available offer promotion packages

Use this resource to retrieve all available offer promotion packages. Read more: <a href=\"../../my_offers/#jak-pobrać-dostępne-opcje-promowania\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-retrieve-available-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableOfferPromotionPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getAvailableOfferPromotionPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\AvailablePromotionPackages**](../Model/AvailablePromotionPackages.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferPromoOptionsUsingGET()`

```php
getOfferPromoOptionsUsingGET($offer_id): \Phobetor\Allegro\Model\OfferPromoOptions
```

Get offer promotion packages

Use this resource to get promotion packages assigned to an offer. Read more: <a href=\"../../my_offers/#jak-pobrać-opcje-promowania-przypisane-do-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-retrieve-promo-options-assigned-to-an-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 9991337999; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferPromoOptionsUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOfferPromoOptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Phobetor\Allegro\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersUnfilledParametersUsingGET1()`

```php
getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit): \Phobetor\Allegro\Model\UnfilledParametersResponse
```

Get offers with missing parameters

Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array('offer_id_example'); // string[] | List of offer ids. If empty all offers with unfilled parameters will be returned.
$parameter_type = 'parameter_type_example'; // string | Filter by parameter type.
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOffersUnfilledParametersUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | [**string[]**](../Model/string.md)| List of offer ids. If empty all offers with unfilled parameters will be returned. | [optional]
 **parameter_type** | **string**| Filter by parameter type. | [optional]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Phobetor\Allegro\Model\UnfilledParametersResponse**](../Model/UnfilledParametersResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductOffer()`

```php
getProductOffer($offer_id): \Phobetor\Allegro\Model\SaleProductOfferResponse
```

Get all data of the particular product-offer

Use this resource to retrieve all data of the particular product-offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.

try {
    $result = $apiInstance->getProductOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Phobetor\Allegro\Model\SaleProductOfferResponse**](../Model/SaleProductOfferResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v2+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductOfferProcessingStatus()`

```php
getProductOfferProcessingStatus($offer_id, $operation_id): \Phobetor\Allegro\Model\SaleProductOfferStatusResponse
```

Check the processing status of a POST or PATCH request

The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$operation_id = 'operation_id_example'; // string | Operation identifier provided in location header of POST or PATCH request.

try {
    $result = $apiInstance->getProductOfferProcessingStatus($offer_id, $operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOfferProcessingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |
 **operation_id** | **string**| Operation identifier provided in location header of POST or PATCH request. |

### Return type

[**\Phobetor\Allegro\Model\SaleProductOfferStatusResponse**](../Model/SaleProductOfferStatusResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v2+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoModificationCommandDetailedResultUsingGET()`

```php
getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\PromoModificationReport
```

Modification command detailed result

Use this resource to retrieve the result of an offer modification command. Read more: <a href=\"../../my_offers/#jak-sprawdzić-szczegółowy-raport-zadania \" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-check-a-detailed-report-of-your-task \" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of returned items.
$offset = 0; // int | The offset of returned items.

try {
    $result = $apiInstance->getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandDetailedResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |
 **limit** | **int**| The limit of returned items. | [optional] [default to 100]
 **offset** | **int**| The offset of returned items. | [optional] [default to 0]

### Return type

[**\Phobetor\Allegro\Model\PromoModificationReport**](../Model/PromoModificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoModificationCommandResultUsingGET()`

```php
getPromoModificationCommandResultUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers and errors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getPromoModificationCommandResultUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |

### Return type

[**\Phobetor\Allegro\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicationReportUsingGET()`

```php
getPublicationReportUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Publish command summary

Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. Read more: <a href=\"../../sale/#zestawienie-zadań\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#task-list\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getPublicationReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |

### Return type

[**\Phobetor\Allegro\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicationTasksUsingGET()`

```php
getPublicationTasksUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\TaskReport
```

Publish command detailed report

Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href=\"../../sale/#informacje-o-publikacji\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#information-about-publication\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicationTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Phobetor\Allegro\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyOfferPromoOptionsUsingPOST()`

```php
modifyOfferPromoOptionsUsingPOST($offer_id, $promo_options_modifications): \Phobetor\Allegro\Model\OfferPromoOptions
```

Modify offer promotion packages

Use this resource to modify offer promotion packages. Read more: <a href=\"../../my_offers/#jak-dodać-lub-zmienić-opcje-promowania-w-pojedynczej-ofercie\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-add-or-change-promo-options-in-a-single-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 9991337999; // string | Offer identifier.
$promo_options_modifications = new \Phobetor\Allegro\Model\PromoOptionsModifications(); // \Phobetor\Allegro\Model\PromoOptionsModifications | request

try {
    $result = $apiInstance->modifyOfferPromoOptionsUsingPOST($offer_id, $promo_options_modifications);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->modifyOfferPromoOptionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |
 **promo_options_modifications** | [**\Phobetor\Allegro\Model\PromoOptionsModifications**](../Model/PromoOptionsModifications.md)| request |

### Return type

[**\Phobetor\Allegro\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promoModificationCommandUsingPUT()`

```php
promoModificationCommandUsingPUT($command_id, $promo_options_command): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer promotion package modification

Use this resource to modify promotion packages on multiple offers at once. Read more: <a href=\"../../my_offers/#jak-dodać-lub-edytować-opcje-promowania-na-wielu-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-add-or-change-promo-options-in-multiple-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = aca8103b-14eb-4855-b9b3-de5bef06bd30; // string | Command identifier. Must be a UUID.
$promo_options_command = new \Phobetor\Allegro\Model\PromoOptionsCommand(); // \Phobetor\Allegro\Model\PromoOptionsCommand | Promo packages modification command request.

try {
    $result = $apiInstance->promoModificationCommandUsingPUT($command_id, $promo_options_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->promoModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. Must be a UUID. |
 **promo_options_command** | [**\Phobetor\Allegro\Model\PromoOptionsCommand**](../Model/PromoOptionsCommand.md)| Promo packages modification command request. |

### Return type

[**\Phobetor\Allegro\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferUsingPUT()`

```php
updateOfferUsingPUT($offer_id, $offer): \Phobetor\Allegro\Model\Offer
```

Complete a draft offer or edit an offer

Use this resource to complete a draft offer or edit ongoing offers. Read more: <a href=\"../../sale/#uzupełnij-draft-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#new-offer\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer identifier.
$offer = new \Phobetor\Allegro\Model\Offer(); // \Phobetor\Allegro\Model\Offer | offer

try {
    $result = $apiInstance->updateOfferUsingPUT($offer_id, $offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->updateOfferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |
 **offer** | [**\Phobetor\Allegro\Model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\Phobetor\Allegro\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
