# Phobetor\Allegro\ResponsibleProducersApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**responsibleProducerGET()**](ResponsibleProducersApi.md#responsibleProducerGET) | **GET** /sale/responsible-producers/{id} | Get responsible producer |
| [**responsibleProducersGET()**](ResponsibleProducersApi.md#responsibleProducersGET) | **GET** /sale/responsible-producers | Get the list of responsible producers |
| [**responsibleProducersPOST()**](ResponsibleProducersApi.md#responsibleProducersPOST) | **POST** /sale/responsible-producers | Create responsible producer |
| [**responsibleProducersPUT()**](ResponsibleProducersApi.md#responsibleProducersPUT) | **PUT** /sale/responsible-producers/{id} | Update responsible producer |


## `responsibleProducerGET()`

```php
responsibleProducerGET($id, $accept): \Phobetor\Allegro\Model\ResponsibleProducerResponse
```

Get responsible producer

Use this resource to get a responsible producer for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsibleProducersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Responsible producer ID.
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.

try {
    $result = $apiInstance->responsibleProducerGET($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsibleProducersApi->responsibleProducerGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Responsible producer ID. | |
| **accept** | **string**| Acceptable representation of the response. | |

### Return type

[**\Phobetor\Allegro\Model\ResponsibleProducerResponse**](../Model/ResponsibleProducerResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsibleProducersGET()`

```php
responsibleProducersGET($accept, $offset, $limit): \Phobetor\Allegro\Model\ResponsibleProducersGET200Response
```

Get the list of responsible producers

Use this resource to get a list of responsible producers for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsibleProducersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$offset = 0; // int | Index of first returned responsible producers data from all search results.
$limit = 1000; // int | Number of returned responsible producers data.

try {
    $result = $apiInstance->responsibleProducersGET($accept, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsibleProducersApi->responsibleProducersGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Acceptable representation of the response. | |
| **offset** | **int**| Index of first returned responsible producers data from all search results. | [optional] [default to 0] |
| **limit** | **int**| Number of returned responsible producers data. | [optional] [default to 1000] |

### Return type

[**\Phobetor\Allegro\Model\ResponsibleProducersGET200Response**](../Model/ResponsibleProducersGET200Response.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsibleProducersPOST()`

```php
responsibleProducersPOST($accept, $content_type, $create_responsible_producer_request): \Phobetor\Allegro\Model\ResponsibleProducerResponse
```

Create responsible producer

Use this resource to create a new responsible producer for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsibleProducersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$content_type = application/vnd.allegro.public.v1+json; // string | Content type of the request body.
$create_responsible_producer_request = new \Phobetor\Allegro\Model\CreateResponsibleProducerRequest(); // \Phobetor\Allegro\Model\CreateResponsibleProducerRequest

try {
    $result = $apiInstance->responsibleProducersPOST($accept, $content_type, $create_responsible_producer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsibleProducersApi->responsibleProducersPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Acceptable representation of the response. | |
| **content_type** | **string**| Content type of the request body. | |
| **create_responsible_producer_request** | [**\Phobetor\Allegro\Model\CreateResponsibleProducerRequest**](../Model/CreateResponsibleProducerRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\ResponsibleProducerResponse**](../Model/ResponsibleProducerResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsibleProducersPUT()`

```php
responsibleProducersPUT($id, $accept, $content_type, $update_responsible_producer_request): \Phobetor\Allegro\Model\ResponsibleProducerResponse
```

Update responsible producer

Use this resource to update the responsible producer for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsibleProducersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Responsible producer ID.
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$content_type = application/vnd.allegro.public.v1+json; // string | Content type of the request body.
$update_responsible_producer_request = new \Phobetor\Allegro\Model\UpdateResponsibleProducerRequest(); // \Phobetor\Allegro\Model\UpdateResponsibleProducerRequest

try {
    $result = $apiInstance->responsibleProducersPUT($id, $accept, $content_type, $update_responsible_producer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsibleProducersApi->responsibleProducersPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Responsible producer ID. | |
| **accept** | **string**| Acceptable representation of the response. | |
| **content_type** | **string**| Content type of the request body. | |
| **update_responsible_producer_request** | [**\Phobetor\Allegro\Model\UpdateResponsibleProducerRequest**](../Model/UpdateResponsibleProducerRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\ResponsibleProducerResponse**](../Model/ResponsibleProducerResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
