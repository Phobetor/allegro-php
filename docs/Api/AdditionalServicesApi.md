# Phobetor\Allegro\AdditionalServicesApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdditionalServicesGroupUsingPOST()**](AdditionalServicesApi.md#createAdditionalServicesGroupUsingPOST) | **POST** /sale/offer-additional-services/groups | Create additional services group
[**getAdditionalServicesGroupUsingGET()**](AdditionalServicesApi.md#getAdditionalServicesGroupUsingGET) | **GET** /sale/offer-additional-services/groups/{groupId} | Get the details of an additional services group
[**getListOfAdditionalServicesDefinitionsUsingGET()**](AdditionalServicesApi.md#getListOfAdditionalServicesDefinitionsUsingGET) | **GET** /sale/offer-additional-services/definitions | Get the user&#39;s additional services definitions
[**getListOfAdditionalServicesGroupsUsingGET()**](AdditionalServicesApi.md#getListOfAdditionalServicesGroupsUsingGET) | **GET** /sale/offer-additional-services/groups | Get the user&#39;s additional services groups
[**modifyAdditionalServicesGroupUsingPUT()**](AdditionalServicesApi.md#modifyAdditionalServicesGroupUsingPUT) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify an additional services group


## `createAdditionalServicesGroupUsingPOST()`

```php
createAdditionalServicesGroupUsingPOST($additional_services_group_request): \Phobetor\Allegro\Model\AdditionalServicesGroupResponse
```

Create additional services group

Use this resource to create a group of additional services. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_services_group_request = new \Phobetor\Allegro\Model\AdditionalServicesGroupRequest(); // \Phobetor\Allegro\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->createAdditionalServicesGroupUsingPOST($additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->createAdditionalServicesGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_services_group_request** | [**\Phobetor\Allegro\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\Phobetor\Allegro\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalServicesGroupUsingGET()`

```php
getAdditionalServicesGroupUsingGET($group_id): \Phobetor\Allegro\Model\AdditionalServicesGroupResponse
```

Get the details of an additional services group

Use this resource to get additional services group for a given ID. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#5\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional Service Group ID.

try {
    $result = $apiInstance->getAdditionalServicesGroupUsingGET($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getAdditionalServicesGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional Service Group ID. |

### Return type

[**\Phobetor\Allegro\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalServicesDefinitionsUsingGET()`

```php
getListOfAdditionalServicesDefinitionsUsingGET($offset, $limit): \Phobetor\Allegro\Model\DefinitionsResponse
```

Get the user's additional services definitions

Use this resource to get additional services definitions by user ID. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#1\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getListOfAdditionalServicesDefinitionsUsingGET($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesDefinitionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Phobetor\Allegro\Model\DefinitionsResponse**](../Model/DefinitionsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalServicesGroupsUsingGET()`

```php
getListOfAdditionalServicesGroupsUsingGET($offset, $limit): \Phobetor\Allegro\Model\AdditionalServicesGroups
```

Get the user's additional services groups

Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#4\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getListOfAdditionalServicesGroupsUsingGET($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Phobetor\Allegro\Model\AdditionalServicesGroups**](../Model/AdditionalServicesGroups.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAdditionalServicesGroupUsingPUT()`

```php
modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request): \Phobetor\Allegro\Model\AdditionalServicesGroupResponse
```

Modify an additional services group

Use this resource to modify existing additional service group. <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#3\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Additional service group ID.
$additional_services_group_request = new \Phobetor\Allegro\Model\AdditionalServicesGroupRequest(); // \Phobetor\Allegro\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->modifyAdditionalServicesGroupUsingPUT($group_id, $additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->modifyAdditionalServicesGroupUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional service group ID. |
 **additional_services_group_request** | [**\Phobetor\Allegro\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\Phobetor\Allegro\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
