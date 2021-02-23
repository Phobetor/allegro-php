# Phobetor\Allegro\PointsOfServiceApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPOSUsingPOST()**](PointsOfServiceApi.md#createPOSUsingPOST) | **POST** /points-of-service | Create a point of service
[**deletePOSUsingDELETE()**](PointsOfServiceApi.md#deletePOSUsingDELETE) | **DELETE** /points-of-service/{id} | Delete a point of service
[**getPOSDataUsingGET()**](PointsOfServiceApi.md#getPOSDataUsingGET) | **GET** /points-of-service/{id} | Get the details of a point of service
[**getPOSListUsingGET()**](PointsOfServiceApi.md#getPOSListUsingGET) | **GET** /points-of-service | Get the user&#39;s points of service
[**modifyPOSUsingPUT()**](PointsOfServiceApi.md#modifyPOSUsingPUT) | **PUT** /points-of-service/{id} | Modify a point of service


## `createPOSUsingPOST()`

```php
createPOSUsingPOST($pos): \Phobetor\Allegro\Model\Pos
```

Create a point of service

Use this resource to create a point of service. <a href=\"../../news/2017-08-11-punkty_odbioru/#1\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pos = new \Phobetor\Allegro\Model\Pos(); // \Phobetor\Allegro\Model\Pos | Point of service

try {
    $result = $apiInstance->createPOSUsingPOST($pos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->createPOSUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pos** | [**\Phobetor\Allegro\Model\Pos**](../Model/Pos.md)| Point of service |

### Return type

[**\Phobetor\Allegro\Model\Pos**](../Model/Pos.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePOSUsingDELETE()`

```php
deletePOSUsingDELETE($id)
```

Delete a point of service

Use this resource to delete a point of service. <a href=\"../../news/2017-08-11-punkty_odbioru/#5\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Point of service ID.

try {
    $apiInstance->deletePOSUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->deletePOSUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID. |

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

## `getPOSDataUsingGET()`

```php
getPOSDataUsingGET($id): \Phobetor\Allegro\Model\Pos
```

Get the details of a point of service

Use this resource to get a details of a point of service for a given ID. <a href=\"../../news/2017-08-11-punkty_odbioru/#4\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Point of service ID.

try {
    $result = $apiInstance->getPOSDataUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->getPOSDataUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID. |

### Return type

[**\Phobetor\Allegro\Model\Pos**](../Model/Pos.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPOSListUsingGET()`

```php
getPOSListUsingGET($seller_id): \Phobetor\Allegro\Model\SearchResult
```

Get the user's points of service

Use this resource to get a list of points of service by seller ID. <a href=\"../../news/2017-08-11-punkty_odbioru/#3\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 'seller_id_example'; // string | User identifier.

try {
    $result = $apiInstance->getPOSListUsingGET($seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->getPOSListUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| User identifier. |

### Return type

[**\Phobetor\Allegro\Model\SearchResult**](../Model/SearchResult.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyPOSUsingPUT()`

```php
modifyPOSUsingPUT($id, $pos): \Phobetor\Allegro\Model\Pos
```

Modify a point of service

Use this resource to modify a point of service. <a href=\"../../news/2017-08-11-punkty_odbioru/#2\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\PointsOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Point of service ID. Must match values with 'id' property from the body.
$pos = new \Phobetor\Allegro\Model\Pos(); // \Phobetor\Allegro\Model\Pos | Point of service

try {
    $result = $apiInstance->modifyPOSUsingPUT($id, $pos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsOfServiceApi->modifyPOSUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Point of service ID. Must match values with &#39;id&#39; property from the body. |
 **pos** | [**\Phobetor\Allegro\Model\Pos**](../Model/Pos.md)| Point of service |

### Return type

[**\Phobetor\Allegro\Model\Pos**](../Model/Pos.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
