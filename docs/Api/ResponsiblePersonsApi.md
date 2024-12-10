# Phobetor\Allegro\ResponsiblePersonsApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**responsiblePersonsGET()**](ResponsiblePersonsApi.md#responsiblePersonsGET) | **GET** /sale/responsible-persons | Get the list of responsible persons |
| [**responsiblePersonsPOST()**](ResponsiblePersonsApi.md#responsiblePersonsPOST) | **POST** /sale/responsible-persons | Create responsible person |
| [**responsiblePersonsPUT()**](ResponsiblePersonsApi.md#responsiblePersonsPUT) | **PUT** /sale/responsible-persons/{id} | Update responsible person |


## `responsiblePersonsGET()`

```php
responsiblePersonsGET($accept, $offset, $limit): \Phobetor\Allegro\Model\ResponsiblePersonsGET200Response
```

Get the list of responsible persons

Use this resource to get a list of responsible persons for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$offset = 0; // int | Index of first returned responsible persons data from all search results.
$limit = 1000; // int | Number of returned responsible persons data.

try {
    $result = $apiInstance->responsiblePersonsGET($accept, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Acceptable representation of the response. | |
| **offset** | **int**| Index of first returned responsible persons data from all search results. | [optional] [default to 0] |
| **limit** | **int**| Number of returned responsible persons data. | [optional] [default to 1000] |

### Return type

[**\Phobetor\Allegro\Model\ResponsiblePersonsGET200Response**](../Model/ResponsiblePersonsGET200Response.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsiblePersonsPOST()`

```php
responsiblePersonsPOST($accept, $content_type, $create_responsible_person_request): \Phobetor\Allegro\Model\ResponsiblePersonResponse
```

Create responsible person

Use this resource to create a new responsible person for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$content_type = application/vnd.allegro.public.v1+json; // string | Content type of the request body.
$create_responsible_person_request = new \Phobetor\Allegro\Model\CreateResponsiblePersonRequest(); // \Phobetor\Allegro\Model\CreateResponsiblePersonRequest

try {
    $result = $apiInstance->responsiblePersonsPOST($accept, $content_type, $create_responsible_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Acceptable representation of the response. | |
| **content_type** | **string**| Content type of the request body. | |
| **create_responsible_person_request** | [**\Phobetor\Allegro\Model\CreateResponsiblePersonRequest**](../Model/CreateResponsiblePersonRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\ResponsiblePersonResponse**](../Model/ResponsiblePersonResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `responsiblePersonsPUT()`

```php
responsiblePersonsPUT($id, $accept, $content_type, $update_responsible_person_request): \Phobetor\Allegro\Model\ResponsiblePersonResponse
```

Update responsible person

Use this resource to update the responsible person for the compliance of the product with EU regulations. Read more: <a href=\"../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ResponsiblePersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Responsible person ID.
$accept = application/vnd.allegro.public.v1+json; // string | Acceptable representation of the response.
$content_type = application/vnd.allegro.public.v1+json; // string | Content type of the request body.
$update_responsible_person_request = new \Phobetor\Allegro\Model\UpdateResponsiblePersonRequest(); // \Phobetor\Allegro\Model\UpdateResponsiblePersonRequest

try {
    $result = $apiInstance->responsiblePersonsPUT($id, $accept, $content_type, $update_responsible_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsiblePersonsApi->responsiblePersonsPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Responsible person ID. | |
| **accept** | **string**| Acceptable representation of the response. | |
| **content_type** | **string**| Content type of the request body. | |
| **update_responsible_person_request** | [**\Phobetor\Allegro\Model\UpdateResponsiblePersonRequest**](../Model/UpdateResponsiblePersonRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\ResponsiblePersonResponse**](../Model/ResponsiblePersonResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
