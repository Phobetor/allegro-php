# Phobetor\Allegro\AlleDiscountApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAlleDiscountCampaigns()**](AlleDiscountApi.md#getAlleDiscountCampaigns) | **GET** /sale/alle-discount/campaigns | List AlleDiscount campaigns |
| [**getOffersEligibleForAlleDiscount()**](AlleDiscountApi.md#getOffersEligibleForAlleDiscount) | **GET** /sale/alle-discount/{campaignId}/eligible-offers | List eligible offers |
| [**getOffersSubmittedToAlleDiscount()**](AlleDiscountApi.md#getOffersSubmittedToAlleDiscount) | **GET** /sale/alle-discount/{campaignId}/submitted-offers | List offer participations |
| [**getSubmitOfferToAlleDiscountCommandsStatus()**](AlleDiscountApi.md#getSubmitOfferToAlleDiscountCommandsStatus) | **GET** /sale/alle-discount/submit-offer-commands/{commandId} | Get the offer submission command status |
| [**getWithdrawOfferFromAlleDiscountCommandsStatus()**](AlleDiscountApi.md#getWithdrawOfferFromAlleDiscountCommandsStatus) | **GET** /sale/alle-discount/withdraw-offer-commands/{commandId} | Get the offer withdrawal command status |
| [**submitOfferToAlleDiscountCommands()**](AlleDiscountApi.md#submitOfferToAlleDiscountCommands) | **POST** /sale/alle-discount/submit-offer-commands | Create submit offer command |
| [**withdrawOfferFromAlleDiscountCommands()**](AlleDiscountApi.md#withdrawOfferFromAlleDiscountCommands) | **POST** /sale/alle-discount/withdraw-offer-commands | Create withdraw offer command |


## `getAlleDiscountCampaigns()`

```php
getAlleDiscountCampaigns($campaign_id): \Phobetor\Allegro\Model\AlleDiscountListCampaignsResponse
```

List AlleDiscount campaigns

List current AlleDiscount campaigns. Each campaign has its own list of goods (products) that indicate which offers can be submitted to it. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-dostepnych-kampanii-alleobnizka\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-available-allediscount-campaigns\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Id of the searched campaign. If present, returns at most one entry.

try {
    $result = $apiInstance->getAlleDiscountCampaigns($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->getAlleDiscountCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Id of the searched campaign. If present, returns at most one entry. | [optional] |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountListCampaignsResponse**](../Model/AlleDiscountListCampaignsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersEligibleForAlleDiscount()`

```php
getOffersEligibleForAlleDiscount($campaign_id, $limit, $offset, $meets_conditions, $offer_id): \Phobetor\Allegro\Model\AlleDiscountListEligibleResponse
```

List eligible offers

Endpoint returning info about offers that can be submitted to a given AlleDiscount campaign. Only offer linked to the product in published list of goods (products) can be submitted to a given AlleDiscount campaign. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-kwalifikujacych-sie-do-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-eligible-for-the-selected-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign id to list offers from.
$limit = 56; // int | Maximum number of offers returned in the eligibleOffers list; max value is 200.
$offset = 56; // int | The number of offers to skip while listing the results.
$meets_conditions = True; // bool | If true, filters offers that only meet conditions of the campaign.
$offer_id = 'offer_id_example'; // string | ID of an offer; if the offer with the given ID exists, returns at most one element in the eligibleOffers list.

try {
    $result = $apiInstance->getOffersEligibleForAlleDiscount($campaign_id, $limit, $offset, $meets_conditions, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->getOffersEligibleForAlleDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign id to list offers from. | |
| **limit** | **int**| Maximum number of offers returned in the eligibleOffers list; max value is 200. | [optional] |
| **offset** | **int**| The number of offers to skip while listing the results. | [optional] |
| **meets_conditions** | **bool**| If true, filters offers that only meet conditions of the campaign. | [optional] |
| **offer_id** | **string**| ID of an offer; if the offer with the given ID exists, returns at most one element in the eligibleOffers list. | [optional] |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountListEligibleResponse**](../Model/AlleDiscountListEligibleResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersSubmittedToAlleDiscount()`

```php
getOffersSubmittedToAlleDiscount($campaign_id, $limit, $offset, $offer_id, $participation_id): \Phobetor\Allegro\Model\AlleDiscountListSubmittedResponse
```

List offer participations

Endpoint returning info about offer participations for a given AlleDiscount campaign. With this endpoint you are able to validate if the offer participates in AlleDiscount and if it has lowered price on the platform. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#lista-ofert-zgloszonych-do-wybranej-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#list-of-offers-submitted-for-the-selected-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign id to list offers from.
$limit = 56; // int | Maximum number of offers returned in the eligibleOffers list; max value is 200.
$offset = 56; // int | The number of offers to skip while listing the results.
$offer_id = 'offer_id_example'; // string | ID of an offer; if the offer with the given ID exists, returns at most one element in the submittedOffers list.
$participation_id = 'participation_id_example'; // string | Id of the participation, returns at most one element in the submittedOffers list.

try {
    $result = $apiInstance->getOffersSubmittedToAlleDiscount($campaign_id, $limit, $offset, $offer_id, $participation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->getOffersSubmittedToAlleDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Campaign id to list offers from. | |
| **limit** | **int**| Maximum number of offers returned in the eligibleOffers list; max value is 200. | [optional] |
| **offset** | **int**| The number of offers to skip while listing the results. | [optional] |
| **offer_id** | **string**| ID of an offer; if the offer with the given ID exists, returns at most one element in the submittedOffers list. | [optional] |
| **participation_id** | **string**| Id of the participation, returns at most one element in the submittedOffers list. | [optional] |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountListSubmittedResponse**](../Model/AlleDiscountListSubmittedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmitOfferToAlleDiscountCommandsStatus()`

```php
getSubmitOfferToAlleDiscountCommandsStatus($command_id): \Phobetor\Allegro\Model\AlleDiscountGetSubmitCommandResponse
```

Get the offer submission command status

Use this resource to get information about the submit offer command execution status. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-zgloszenia-oferty-do-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-status-of-an-offer-submission-to-a-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command id in UUID format, must be unique.

try {
    $result = $apiInstance->getSubmitOfferToAlleDiscountCommandsStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->getSubmitOfferToAlleDiscountCommandsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command id in UUID format, must be unique. | |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountGetSubmitCommandResponse**](../Model/AlleDiscountGetSubmitCommandResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWithdrawOfferFromAlleDiscountCommandsStatus()`

```php
getWithdrawOfferFromAlleDiscountCommandsStatus($command_id): \Phobetor\Allegro\Model\AlleDiscountGetWithdrawCommandResponse
```

Get the offer withdrawal command status

Use this resource to get information about the withdrawal command execution status. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-sprawdzic-status-wycofania-oferty-z-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-check-the-withdrawal-status-of-an-offer-from-a-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command id in UUID format, must be unique.

try {
    $result = $apiInstance->getWithdrawOfferFromAlleDiscountCommandsStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->getWithdrawOfferFromAlleDiscountCommandsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| Command id in UUID format, must be unique. | |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountGetWithdrawCommandResponse**](../Model/AlleDiscountGetWithdrawCommandResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitOfferToAlleDiscountCommands()`

```php
submitOfferToAlleDiscountCommands($alle_discount_submit_command_request): \Phobetor\Allegro\Model\AlleDiscountSubmitCommandResponse
```

Create submit offer command

Use this resource to create a command for submitting an offer. Offer will be submitted to the AlleDiscount campaign only if command is processed successfully. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-zglosic-oferte-do-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-submit-an-offer-to-a-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alle_discount_submit_command_request = {"commandId":"c1b3f63d-d293-4333-911d-a0c1053e2c81","input":{"offer":{"id":"10394822344"},"campaign":{"id":"ALLEOBNIZKA_20230209"},"proposedPrice":{"amount":"100.00","currency":"PLN"}}}; // \Phobetor\Allegro\Model\AlleDiscountSubmitCommandRequest

try {
    $result = $apiInstance->submitOfferToAlleDiscountCommands($alle_discount_submit_command_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->submitOfferToAlleDiscountCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alle_discount_submit_command_request** | [**\Phobetor\Allegro\Model\AlleDiscountSubmitCommandRequest**](../Model/AlleDiscountSubmitCommandRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountSubmitCommandResponse**](../Model/AlleDiscountSubmitCommandResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawOfferFromAlleDiscountCommands()`

```php
withdrawOfferFromAlleDiscountCommands($alle_discount_withdraw_command_request): \Phobetor\Allegro\Model\AlleDiscountWithdrawCommandResponse
```

Create withdraw offer command

Use this resource to create a command for withdrawing an offer from specific campaign. Offer will be withdrawn from the AlleDiscount campaign only if command is processed successfully. Read more: <a href=\"../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#jak-wycofac-oferte-z-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#how-to-withdraw-an-offer-from-a-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AlleDiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alle_discount_withdraw_command_request = {"commandId":"c1b3f63d-d293-4333-911d-a0c1053e2c81","input":{"participationId":"f9a4a70c-6db9-4473-976c-90f8df9f74e8"}}; // \Phobetor\Allegro\Model\AlleDiscountWithdrawCommandRequest

try {
    $result = $apiInstance->withdrawOfferFromAlleDiscountCommands($alle_discount_withdraw_command_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlleDiscountApi->withdrawOfferFromAlleDiscountCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alle_discount_withdraw_command_request** | [**\Phobetor\Allegro\Model\AlleDiscountWithdrawCommandRequest**](../Model/AlleDiscountWithdrawCommandRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AlleDiscountWithdrawCommandResponse**](../Model/AlleDiscountWithdrawCommandResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
