# Phobetor\Allegro\BillingApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBillingEntries()**](BillingApi.md#getBillingEntries) | **GET** /billing/billing-entries | Get a list of billing entries
[**getBillingTypes()**](BillingApi.md#getBillingTypes) | **GET** /billing/billing-types | Get a list of billing types


## `getBillingEntries()`

```php
getBillingEntries($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset): object
```

Get a list of billing entries

The billing entries are sorted in a descending order (newest first) by date on which they occurred. Read more: <a href=\"../../charges/#historia-operacji-billingowych\" target=\"_blank\">PL</a> / <a href=\"../../en/charges/#billing-operations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$occurred_at_gte = 2019-05-08T09:45:32.818Z; // \DateTime | Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
$occurred_at_lte = 2019-05-08T09:45:32.818Z; // \DateTime | Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
$type_id = array('type_id_example'); // string[] | List of billing types by which billing entries are filtered.
$offer_id = 'offer_id_example'; // string | Offer ID by which billing entries are filtered.
$limit = 100; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.

try {
    $result = $apiInstance->getBillingEntries($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **occurred_at_gte** | **\DateTime**| Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. | [optional]
 **occurred_at_lte** | **\DateTime**| Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. | [optional]
 **type_id** | [**string[]**](../Model/string.md)| List of billing types by which billing entries are filtered. | [optional]
 **offer_id** | **string**| Offer ID by which billing entries are filtered. | [optional]
 **limit** | **int**| Number of returned operations. | [optional] [default to 100]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTypes()`

```php
getBillingTypes($accept_language): object
```

Get a list of billing types

List of all billing types. Type names are localized according to \"Accept-Language\" header. Read more: <a href=\"../../charges/#historia-operacji-billingowych\" target=\"_blank\">PL</a> / <a href=\"../../en/charges/#billing-operations\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = pl-PL; // string | Expected language of name translations. Only Polish and English are currently supported.

try {
    $result = $apiInstance->getBillingTypes($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Expected language of name translations. Only Polish and English are currently supported. | [optional]

### Return type

**object**

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
