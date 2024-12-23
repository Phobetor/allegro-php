# Phobetor\Allegro\BatchOfferModificationApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGeneralReportUsingGET()**](BatchOfferModificationApi.md#getGeneralReportUsingGET) | **GET** /sale/offer-modification-commands/{commandId} | Modification command summary |
| [**getPriceModificationCommandStatusUsingGET()**](BatchOfferModificationApi.md#getPriceModificationCommandStatusUsingGET) | **GET** /sale/offer-price-change-commands/{commandId} | Change price command summary |
| [**getPriceModificationCommandTasksStatusesUsingGET()**](BatchOfferModificationApi.md#getPriceModificationCommandTasksStatusesUsingGET) | **GET** /sale/offer-price-change-commands/{commandId}/tasks | Change price command detailed report |
| [**getQuantityModificationCommandStatusUsingGET()**](BatchOfferModificationApi.md#getQuantityModificationCommandStatusUsingGET) | **GET** /sale/offer-quantity-change-commands/{commandId} | Change quantity command summary |
| [**getQuantityModificationCommandTasksStatusesUsingGET()**](BatchOfferModificationApi.md#getQuantityModificationCommandTasksStatusesUsingGET) | **GET** /sale/offer-quantity-change-commands/{commandId}/tasks | Change quantity command detailed report |
| [**getTasksUsingGET()**](BatchOfferModificationApi.md#getTasksUsingGET) | **GET** /sale/offer-modification-commands/{commandId}/tasks | Modification command detailed report |
| [**getofferAutomaticPricingModificationCommandStatusUsingGET()**](BatchOfferModificationApi.md#getofferAutomaticPricingModificationCommandStatusUsingGET) | **GET** /sale/offer-price-automation-commands/{commandId} | Automatic pricing command summary |
| [**getofferAutomaticPricingModificationCommandTasksStatusesUsingGET()**](BatchOfferModificationApi.md#getofferAutomaticPricingModificationCommandTasksStatusesUsingGET) | **GET** /sale/offer-price-automation-commands/{commandId}/tasks | Automatic pricing command detailed report |
| [**modificationCommandUsingPUT()**](BatchOfferModificationApi.md#modificationCommandUsingPUT) | **PUT** /sale/offer-modification-commands/{commandId} | Batch offer modification |
| [**offerAutomaticPricingModificationCommandUsingPOST()**](BatchOfferModificationApi.md#offerAutomaticPricingModificationCommandUsingPOST) | **POST** /sale/offer-price-automation-commands | Batch offer automatic pricing rules modification |
| [**priceModificationCommandUsingPUT()**](BatchOfferModificationApi.md#priceModificationCommandUsingPUT) | **PUT** /sale/offer-price-change-commands/{commandId} | Batch offer price modification |
| [**quantityModificationCommandUsingPUT()**](BatchOfferModificationApi.md#quantityModificationCommandUsingPUT) | **PUT** /sale/offer-quantity-change-commands/{commandId} | Batch offer quantity modification |


## `getGeneralReportUsingGET()`

```php
getGeneralReportUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getGeneralReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getGeneralReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

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

## `getPriceModificationCommandStatusUsingGET()`

```php
getPriceModificationCommandStatusUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Change price command summary

Returns status and summary of particular command execution. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getPriceModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

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

## `getPriceModificationCommandTasksStatusesUsingGET()`

```php
getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\TaskReport
```

Change price command detailed report

Defaults: limit = 100, offset = 0. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

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

## `getQuantityModificationCommandStatusUsingGET()`

```php
getQuantityModificationCommandStatusUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Change quantity command summary

Returns status and summary of the command. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getQuantityModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

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

## `getQuantityModificationCommandTasksStatusesUsingGET()`

```php
getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\TaskReport
```

Change quantity command detailed report

Defaults: limit = 100, offset = 0. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

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

## `getTasksUsingGET()`

```php
getTasksUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\TaskReport
```

Modification command detailed report

Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

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

## `getofferAutomaticPricingModificationCommandStatusUsingGET()`

```php
getofferAutomaticPricingModificationCommandStatusUsingGET($command_id): \Phobetor\Allegro\Model\GeneralReport
```

Automatic pricing command summary

Returns status and summary of the offer-price-automation-command. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.

try {
    $result = $apiInstance->getofferAutomaticPricingModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getofferAutomaticPricingModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |

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

## `getofferAutomaticPricingModificationCommandTasksStatusesUsingGET()`

```php
getofferAutomaticPricingModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset): \Phobetor\Allegro\Model\TaskReport
```

Automatic pricing command detailed report

Defaults: limit = 100, offset = 0. Returns status and report of the offer-price-automation-command. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules\" target=\"_blank\">EN</a>. This resource is rate limited to retrieving information about 270 000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getofferAutomaticPricingModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getofferAutomaticPricingModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **limit** | **int**| The limit of elements in the response. | [optional] [default to 100] |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |

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

## `modificationCommandUsingPUT()`

```php
modificationCommandUsingPUT($command_id, $offer_change_command): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer modification

Use this resource to modify multiple offers at once. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#edycja-wielu-ofert-jednoczesnie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#editing-many-offers\" target=\"_blank\">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$offer_change_command = new \Phobetor\Allegro\Model\OfferChangeCommand(); // \Phobetor\Allegro\Model\OfferChangeCommand | offerChangeCommandDto

try {
    $result = $apiInstance->modificationCommandUsingPUT($command_id, $offer_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->modificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **offer_change_command** | [**\Phobetor\Allegro\Model\OfferChangeCommand**](../Model/OfferChangeCommand.md)| offerChangeCommandDto | |

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

## `offerAutomaticPricingModificationCommandUsingPOST()`

```php
offerAutomaticPricingModificationCommandUsingPOST($offer_automatic_pricing_command): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer automatic pricing rules modification

Use this resource to modify the automatic pricing rules of multiple offers at the same time. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules\" target=\"_blank\">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_automatic_pricing_command = new \Phobetor\Allegro\Model\OfferAutomaticPricingCommand(); // \Phobetor\Allegro\Model\OfferAutomaticPricingCommand | OfferAutomaticPricingCommand

try {
    $result = $apiInstance->offerAutomaticPricingModificationCommandUsingPOST($offer_automatic_pricing_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->offerAutomaticPricingModificationCommandUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_automatic_pricing_command** | [**\Phobetor\Allegro\Model\OfferAutomaticPricingCommand**](../Model/OfferAutomaticPricingCommand.md)| OfferAutomaticPricingCommand | |

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

## `priceModificationCommandUsingPUT()`

```php
priceModificationCommandUsingPUT($command_id, $offer_price_change_command): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer price modification

Change price of offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price\" target=\"_blank\">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$offer_price_change_command = new \Phobetor\Allegro\Model\OfferPriceChangeCommand(); // \Phobetor\Allegro\Model\OfferPriceChangeCommand | offerPriceChangeCommandDto

try {
    $result = $apiInstance->priceModificationCommandUsingPUT($command_id, $offer_price_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->priceModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **offer_price_change_command** | [**\Phobetor\Allegro\Model\OfferPriceChangeCommand**](../Model/OfferPriceChangeCommand.md)| offerPriceChangeCommandDto | |

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

## `quantityModificationCommandUsingPUT()`

```php
quantityModificationCommandUsingPUT($command_id, $offer_quantity_change_command): \Phobetor\Allegro\Model\GeneralReport
```

Batch offer quantity modification

Change quantity of multiple offers. Read more: <a href=\"../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#liczba-przedmiotow\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#quantity\" target=\"_blank\">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command identifier.
$offer_quantity_change_command = new \Phobetor\Allegro\Model\OfferQuantityChangeCommand(); // \Phobetor\Allegro\Model\OfferQuantityChangeCommand | offerQuantityChangeCommandDto

try {
    $result = $apiInstance->quantityModificationCommandUsingPUT($command_id, $offer_quantity_change_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->quantityModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command identifier. | |
| **offer_quantity_change_command** | [**\Phobetor\Allegro\Model\OfferQuantityChangeCommand**](../Model/OfferQuantityChangeCommand.md)| offerQuantityChangeCommandDto | |

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
