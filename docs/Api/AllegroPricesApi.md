# Phobetor\Allegro\AllegroPricesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllegroPricesConsentForOffer()**](AllegroPricesApi.md#getAllegroPricesConsentForOffer) | **GET** /sale/allegro-prices-offer-consents/{offerId} | Get the current consents&#39; state for an offer |
| [**getAllegroPricesEligibilityForAccount()**](AllegroPricesApi.md#getAllegroPricesEligibilityForAccount) | **GET** /sale/allegro-prices-account-eligibility | Get the current eligibility information for the account |
| [**updateAllegroPricesConsentForAccount()**](AllegroPricesApi.md#updateAllegroPricesConsentForAccount) | **PUT** /sale/allegro-prices-account-consent | Update consents for the account |
| [**updateAllegroPricesConsentForOffer()**](AllegroPricesApi.md#updateAllegroPricesConsentForOffer) | **PUT** /sale/allegro-prices-offer-consents/{offerId} | Update consents for an offer |


## `getAllegroPricesConsentForOffer()`

```php
getAllegroPricesConsentForOffer($offer_id): \Phobetor\Allegro\Model\AllegroPricesOfferConsentChangeResponse
```

Get the current consents' state for an offer

Use this resource to get the current Allegro Prices consent value for the offer on each of the available marketplaces. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.

try {
    $result = $apiInstance->getAllegroPricesConsentForOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->getAllegroPricesConsentForOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| The offer ID. | |

### Return type

[**\Phobetor\Allegro\Model\AllegroPricesOfferConsentChangeResponse**](../Model/AllegroPricesOfferConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllegroPricesEligibilityForAccount()`

```php
getAllegroPricesEligibilityForAccount(): \Phobetor\Allegro\Model\AllegroPricesEligibilityResponse
```

Get the current eligibility information for the account

Use this resource to get the current Allegro Prices eligibility information for the account on each of the available marketplaces. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllegroPricesEligibilityForAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->getAllegroPricesEligibilityForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\AllegroPricesEligibilityResponse**](../Model/AllegroPricesEligibilityResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAllegroPricesConsentForAccount()`

```php
updateAllegroPricesConsentForAccount($allegro_prices_account_change_request): \Phobetor\Allegro\Model\AllegroPricesAccountConsentChangeResponse
```

Update consents for the account

Use this resource to update the Allegro Prices consent value for the account on chosen marketplaces. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allegro_prices_account_change_request = {"status":"ALLOWED","additionalMarketplaces":{"allegro-cz":{"status":"DENIED"}}}; // \Phobetor\Allegro\Model\AllegroPricesAccountChangeRequest

try {
    $result = $apiInstance->updateAllegroPricesConsentForAccount($allegro_prices_account_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->updateAllegroPricesConsentForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **allegro_prices_account_change_request** | [**\Phobetor\Allegro\Model\AllegroPricesAccountChangeRequest**](../Model/AllegroPricesAccountChangeRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AllegroPricesAccountConsentChangeResponse**](../Model/AllegroPricesAccountConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAllegroPricesConsentForOffer()`

```php
updateAllegroPricesConsentForOffer($offer_id, $allegro_prices_offer_change_request): \Phobetor\Allegro\Model\AllegroPricesOfferConsentChangeResponse
```

Update consents for an offer

Use this resource to update the Allegro Prices consent value for the offer on chosen marketplaces. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#allegro-ceny-jak-zarzadzac-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | The offer ID.
$allegro_prices_offer_change_request = {"status":"DENIED","additionalMarketplaces":{"allegro-cz":{"status":"DENIED"}}}; // \Phobetor\Allegro\Model\AllegroPricesOfferChangeRequest

try {
    $result = $apiInstance->updateAllegroPricesConsentForOffer($offer_id, $allegro_prices_offer_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->updateAllegroPricesConsentForOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_id** | **string**| The offer ID. | |
| **allegro_prices_offer_change_request** | [**\Phobetor\Allegro\Model\AllegroPricesOfferChangeRequest**](../Model/AllegroPricesOfferChangeRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AllegroPricesOfferConsentChangeResponse**](../Model/AllegroPricesOfferConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
