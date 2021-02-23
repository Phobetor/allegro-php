# Phobetor\Allegro\ClassifiedsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignClassifiedPackagesUsingPUT()**](ClassifiedsApi.md#assignClassifiedPackagesUsingPUT) | **PUT** /sale/offer-classifieds-packages/{offerId} | Assign packages to a classified
[**getClassifiedPackageConfigurationUsingGET()**](ClassifiedsApi.md#getClassifiedPackageConfigurationUsingGET) | **GET** /sale/classifieds-packages/{packageId} | Get the configuration of a package
[**getClassifiedPackageConfigurationsForCategoryUsingGET()**](ClassifiedsApi.md#getClassifiedPackageConfigurationsForCategoryUsingGET) | **GET** /sale/classifieds-packages | Get configurations of packages
[**getClassifiedPackagesUsingGET()**](ClassifiedsApi.md#getClassifiedPackagesUsingGET) | **GET** /sale/offer-classifieds-packages/{offerId} | Get classified packages assigned to an offer


## `assignClassifiedPackagesUsingPUT()`

```php
assignClassifiedPackagesUsingPUT($offer_id, $classified_packages)
```

Assign packages to a classified

Use this resource to assign classified packages to an offer. Read more: <a href=\"../../advertisement/#8-pakiet-i-opcje-dodatkowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#8-package-and-additional-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$classified_packages = new \Phobetor\Allegro\Model\ClassifiedPackages(); // \Phobetor\Allegro\Model\ClassifiedPackages | Packages that should be assigned to the classified.

try {
    $apiInstance->assignClassifiedPackagesUsingPUT($offer_id, $classified_packages);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->assignClassifiedPackagesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **classified_packages** | [**\Phobetor\Allegro\Model\ClassifiedPackages**](../Model/ClassifiedPackages.md)| Packages that should be assigned to the classified. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackageConfigurationUsingGET()`

```php
getClassifiedPackageConfigurationUsingGET($package_id): \Phobetor\Allegro\Model\ClassifiedPackageConfig
```

Get the configuration of a package

Use this resource to retrieve the configuration of a classifieds package. Read more: <a href=\"../../advertisement/#lista-pakietów-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | The classifieds package ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationUsingGET($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The classifieds package ID. |

### Return type

[**\Phobetor\Allegro\Model\ClassifiedPackageConfig**](../Model/ClassifiedPackageConfig.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackageConfigurationsForCategoryUsingGET()`

```php
getClassifiedPackageConfigurationsForCategoryUsingGET($category_id): \Phobetor\Allegro\Model\ClassifiedPackageConfigs
```

Get configurations of packages

Use this resource to retrieve configurations of classifieds packages for a category. Read more: <a href=\"../../advertisement/#lista-pakietów-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The category ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationsForCategoryUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationsForCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\Phobetor\Allegro\Model\ClassifiedPackageConfigs**](../Model/ClassifiedPackageConfigs.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassifiedPackagesUsingGET()`

```php
getClassifiedPackagesUsingGET($offer_id): \Phobetor\Allegro\Model\ClassifiedResponse
```

Get classified packages assigned to an offer

Use this resource to retrieve classified packages currently assigned to an offer. Read more: <a href=\"../../advertisement/#przypisane-pakiety\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#promo-options-assigned-to-ad\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.

try {
    $result = $apiInstance->getClassifiedPackagesUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. |

### Return type

[**\Phobetor\Allegro\Model\ClassifiedResponse**](../Model/ClassifiedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
