# Phobetor\Allegro\BadgeCampaignsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**badgeApplicationsGetAll()**](BadgeCampaignsApi.md#badgeApplicationsGetAll) | **GET** /sale/badge-applications | [BETA] Get a list of badge applications
[**badgeApplicationsGetOne()**](BadgeCampaignsApi.md#badgeApplicationsGetOne) | **GET** /sale/badge-applications/{applicationId} | [BETA] Get a badge application details
[**badgeCampaignsGetAll()**](BadgeCampaignsApi.md#badgeCampaignsGetAll) | **GET** /sale/badge-campaigns | [BETA] Get a list of available badge campaigns
[**getBadges()**](BadgeCampaignsApi.md#getBadges) | **GET** /sale/badges | [BETA] Get a list of badges
[**postBadges()**](BadgeCampaignsApi.md#postBadges) | **POST** /sale/badges | [BETA] Apply for badge in selected offer


## `badgeApplicationsGetAll()`

```php
badgeApplicationsGetAll($campaign_id, $offer_id, $offset, $limit): \Phobetor\Allegro\Model\BadgeApplications
```

[BETA] Get a list of badge applications

Use this resource to get a list of badge applications. Read more: <a href=\"../../badge/#4-pobierz-swoje-zgłoszenia\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#4-retrieve-all-campaign-applications\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Campaign ID.
$offer_id = 'offer_id_example'; // string | Offer ID.
$offset = 56; // int | Offset.
$limit = 50; // int | The maximum number of applications returned in the response.

try {
    $result = $apiInstance->badgeApplicationsGetAll($campaign_id, $offer_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeApplicationsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Campaign ID. | [optional]
 **offer_id** | **string**| Offer ID. | [optional]
 **offset** | **int**| Offset. | [optional]
 **limit** | **int**| The maximum number of applications returned in the response. | [optional] [default to 50]

### Return type

[**\Phobetor\Allegro\Model\BadgeApplications**](../Model/BadgeApplications.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `badgeApplicationsGetOne()`

```php
badgeApplicationsGetOne($application_id): \Phobetor\Allegro\Model\BadgeApplication
```

[BETA] Get a badge application details

Use this resource to get a badge application details. Read more: <a href=\"../../badge/#3-pobierz-dane-zgłoszenie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#3-retrieve-campaign-application\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string | Badge application ID.

try {
    $result = $apiInstance->badgeApplicationsGetOne($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeApplicationsGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| Badge application ID. |

### Return type

[**\Phobetor\Allegro\Model\BadgeApplication**](../Model/BadgeApplication.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `badgeCampaignsGetAll()`

```php
badgeCampaignsGetAll(): \Phobetor\Allegro\Model\GetBadgeCampaignsList
```

[BETA] Get a list of available badge campaigns

Badge campaigns are another way to promote your offers. You can apply for a badge, which - depending on a type - will be displayed on your offer page of on the list of offers. First - use this resource to get a list of all available badge campaigns at the moment, then use *POST /sale/badges* to apply for badge. Read more: <a href=\"../../badge/#1-lista-dostępnych-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#1-list-of-available-campaigns\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->badgeCampaignsGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeCampaignsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\GetBadgeCampaignsList**](../Model/GetBadgeCampaignsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBadges()`

```php
getBadges($offer_id, $offset, $limit): \Phobetor\Allegro\Model\BadgesList
```

[BETA] Get a list of badges

Use this resource to get a list of badges in authorized seller's offers. Read more: <a href=\"../../badge/#5-kampanie-przypisane-do-ofert\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#5-check-badges-assigned-to-offers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = 'offer_id_example'; // string | Offer ID.
$offset = 56; // int | Offset.
$limit = 50; // int | The maximum number of badges returned in the response.

try {
    $result = $apiInstance->getBadges($offer_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->getBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. | [optional]
 **offset** | **int**| Offset. | [optional]
 **limit** | **int**| The maximum number of badges returned in the response. | [optional] [default to 50]

### Return type

[**\Phobetor\Allegro\Model\BadgesList**](../Model/BadgesList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBadges()`

```php
postBadges($badge_application_request): \Phobetor\Allegro\Model\BadgeApplication
```

[BETA] Apply for badge in selected offer

This resource allows you to apply for a badge. Most badges involve additional fee charged. Your badge application will be verified and you will be notified about the verification status via e-mail. You can use *Location* provided in header of the response to track your application status. Application will be removed after 30 days when status of the application was changed form PROCESSED or DECLINED. Fees will be charged in accordance with Annex No. 1 to the   <a href=\"https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In\"     target=\"_blank\">Daily deals zone terms and conditions</a>.  By using this resource you agree to the   <a href=\"https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In\"     target=\"_blank\">Daily deals zone terms and conditions</a> or   <a href=\"https://allegro.pl/regulaminy/regulamin-programu-bonusowego-prowizja-nawet-0-5-0KPkAE7wkcv\"     target=\"_blank\">Commission discount terms and conditions</a>. Read more: <a href=\"../../badge/#2-zgłoś-ofertę-do-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#2-submit-offer-to-a-campaign\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$badge_application_request = {"campaign":{"id":"BARGAIN"},"offer":{"id":"12345678"},"prices":{"market":{"amount":"19.99","currency":"PLN"},"bargain":{"amount":"9.99","currency":"PLN"}}}; // \Phobetor\Allegro\Model\BadgeApplicationRequest

try {
    $result = $apiInstance->postBadges($badge_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->postBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **badge_application_request** | [**\Phobetor\Allegro\Model\BadgeApplicationRequest**](../Model/BadgeApplicationRequest.md)|  | [optional]

### Return type

[**\Phobetor\Allegro\Model\BadgeApplication**](../Model/BadgeApplication.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.beta.v1+json`
- **Accept**: `application/vnd.allegro.beta.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
