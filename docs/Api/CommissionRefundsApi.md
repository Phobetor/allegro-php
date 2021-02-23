# Phobetor\Allegro\CommissionRefundsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelRefundApplication()**](CommissionRefundsApi.md#cancelRefundApplication) | **DELETE** /order/refund-claims/{claimId} | Cancel a refund application
[**createRefundApplication()**](CommissionRefundsApi.md#createRefundApplication) | **POST** /order/refund-claims | Create a refund application
[**getRefundApplication()**](CommissionRefundsApi.md#getRefundApplication) | **GET** /order/refund-claims/{claimId} | Get a refund application details
[**getRefundApplications()**](CommissionRefundsApi.md#getRefundApplications) | **GET** /order/refund-claims | Get a list of refund applications


## `cancelRefundApplication()`

```php
cancelRefundApplication($claim_id)
```

Cancel a refund application

Use this resource to cancel a refund application. This cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | Refund application ID.

try {
    $apiInstance->cancelRefundApplication($claim_id);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->cancelRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| Refund application ID. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefundApplication()`

```php
createRefundApplication($refund_claim_request)
```

Create a refund application

Use this resource to create a refund application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_claim_request = new \Phobetor\Allegro\Model\RefundClaimRequest(); // \Phobetor\Allegro\Model\RefundClaimRequest

try {
    $apiInstance->createRefundApplication($refund_claim_request);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->createRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_claim_request** | [**\Phobetor\Allegro\Model\RefundClaimRequest**](../Model/RefundClaimRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundApplication()`

```php
getRefundApplication($claim_id): \Phobetor\Allegro\Model\RefundClaim
```

Get a refund application details

Use this resource to get refund application details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | Refund application ID.

try {
    $result = $apiInstance->getRefundApplication($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->getRefundApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| Refund application ID. |

### Return type

[**\Phobetor\Allegro\Model\RefundClaim**](../Model/RefundClaim.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundApplications()`

```php
getRefundApplications($line_item_offer_id, $buyer_login, $status, $limit, $offset): object
```

Get a list of refund applications

Use this resource to get a list of refund applications based on the provided query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\CommissionRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_offer_id = 'line_item_offer_id_example'; // string | ID of the offer associated with the refund application.
$buyer_login = 'buyer_login_example'; // string | Login of the buyer that made the purchase associated with the refund application.
$status = 'status_example'; // string | Status of the refund application.
$limit = 25; // int | Maximum number of returned refund applications in response.
$offset = 0; // int | Index of the first returned refund application from all search results.

try {
    $result = $apiInstance->getRefundApplications($line_item_offer_id, $buyer_login, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionRefundsApi->getRefundApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_offer_id** | **string**| ID of the offer associated with the refund application. | [optional]
 **buyer_login** | **string**| Login of the buyer that made the purchase associated with the refund application. | [optional]
 **status** | **string**| Status of the refund application. | [optional]
 **limit** | **int**| Maximum number of returned refund applications in response. | [optional] [default to 25]
 **offset** | **int**| Index of the first returned refund application from all search results. | [optional] [default to 0]

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
