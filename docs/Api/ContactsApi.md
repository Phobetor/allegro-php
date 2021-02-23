# Phobetor\Allegro\ContactsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContactUsingPOST()**](ContactsApi.md#createContactUsingPOST) | **POST** /sale/offer-contacts | Create a new contact
[**getContactUsingGET()**](ContactsApi.md#getContactUsingGET) | **GET** /sale/offer-contacts/{id} | Get contact details
[**getListOfContactsUsingGET()**](ContactsApi.md#getListOfContactsUsingGET) | **GET** /sale/offer-contacts | Get the user&#39;s contacts
[**modifyContactUsingPUT()**](ContactsApi.md#modifyContactUsingPUT) | **PUT** /sale/offer-contacts/{id} | Modify contact details


## `createContactUsingPOST()`

```php
createContactUsingPOST($contact_request): \Phobetor\Allegro\Model\ContactResponse
```

Create a new contact

Use this resource to create a new contact. Read more: <a href=\"../../advertisement/#dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#contact-data\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \Phobetor\Allegro\Model\ContactRequest(); // \Phobetor\Allegro\Model\ContactRequest | New contact

try {
    $result = $apiInstance->createContactUsingPOST($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContactUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_request** | [**\Phobetor\Allegro\Model\ContactRequest**](../Model/ContactRequest.md)| New contact |

### Return type

[**\Phobetor\Allegro\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactUsingGET()`

```php
getContactUsingGET($id): \Phobetor\Allegro\Model\ContactResponse
```

Get contact details

Use this resource to get contact details. Read more: <a href=\"../../advertisement/#dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#contact-data\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.

try {
    $result = $apiInstance->getContactUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact identifier. |

### Return type

[**\Phobetor\Allegro\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfContactsUsingGET()`

```php
getListOfContactsUsingGET(): \Phobetor\Allegro\Model\ContactResponseList
```

Get the user's contacts

Use this resource to get details of many contacts. Read more: <a href=\"../../advertisement/#dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#contact-data\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfContactsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getListOfContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\ContactResponseList**](../Model/ContactResponseList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyContactUsingPUT()`

```php
modifyContactUsingPUT($id, $contact_request): \Phobetor\Allegro\Model\ContactResponse
```

Modify contact details

Use this resource to modify contact details. Read more: <a href=\"../../advertisement/#dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#contact-data\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.
$contact_request = new \Phobetor\Allegro\Model\ContactRequest(); // \Phobetor\Allegro\Model\ContactRequest | Contact

try {
    $result = $apiInstance->modifyContactUsingPUT($id, $contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->modifyContactUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact identifier. |
 **contact_request** | [**\Phobetor\Allegro\Model\ContactRequest**](../Model/ContactRequest.md)| Contact |

### Return type

[**\Phobetor\Allegro\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
