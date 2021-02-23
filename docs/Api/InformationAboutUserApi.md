# Phobetor\Allegro\InformationAboutUserApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAdditionalEmailUsingPOST()**](InformationAboutUserApi.md#addAdditionalEmailUsingPOST) | **POST** /account/additional-emails | Add a new additional email address to user&#39;s account
[**answerUserRatingUsingPUT()**](InformationAboutUserApi.md#answerUserRatingUsingPUT) | **PUT** /sale/user-ratings/{ratingId}/answer | Answer for user&#39;s rating
[**deleteAdditionalEmailUsingDELETE()**](InformationAboutUserApi.md#deleteAdditionalEmailUsingDELETE) | **DELETE** /account/additional-emails/{emailId} | Delete an additional email address
[**getAdditionalEmailUsingGET()**](InformationAboutUserApi.md#getAdditionalEmailUsingGET) | **GET** /account/additional-emails/{emailId} | Get information about a particular additional email
[**getListOfAdditionalEmailsUsingGET()**](InformationAboutUserApi.md#getListOfAdditionalEmailsUsingGET) | **GET** /account/additional-emails | Get user&#39;s additional emails
[**getUserRatingsUsingGET()**](InformationAboutUserApi.md#getUserRatingsUsingGET) | **GET** /sale/user-ratings | Get the user&#39;s ratings
[**meGET()**](InformationAboutUserApi.md#meGET) | **GET** /me | Get basic information about user
[**userRatingRemovalUsingPUT()**](InformationAboutUserApi.md#userRatingRemovalUsingPUT) | **PUT** /sale/user-ratings/{ratingId}/removal | Request removal of user&#39;s rating


## `addAdditionalEmailUsingPOST()`

```php
addAdditionalEmailUsingPOST($additional_email_request): \Phobetor\Allegro\Model\AdditionalEmail
```

Add a new additional email address to user's account

Use this resource to add a new additional email address to account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_email_request = new \Phobetor\Allegro\Model\AdditionalEmailRequest(); // \Phobetor\Allegro\Model\AdditionalEmailRequest | request

try {
    $result = $apiInstance->addAdditionalEmailUsingPOST($additional_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->addAdditionalEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_email_request** | [**\Phobetor\Allegro\Model\AdditionalEmailRequest**](../Model/AdditionalEmailRequest.md)| request |

### Return type

[**\Phobetor\Allegro\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `answerUserRatingUsingPUT()`

```php
answerUserRatingUsingPUT($rating_id, $user_rating_answer_request): \Phobetor\Allegro\Model\Answer
```

Answer for user's rating

Use this resource to answer for received rating.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 5df0a6d1ef437e00255572a1; // string | ID of the rating.
$user_rating_answer_request = new \Phobetor\Allegro\Model\UserRatingAnswerRequest(); // \Phobetor\Allegro\Model\UserRatingAnswerRequest | User rating answer request.

try {
    $result = $apiInstance->answerUserRatingUsingPUT($rating_id, $user_rating_answer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->answerUserRatingUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**| ID of the rating. |
 **user_rating_answer_request** | [**\Phobetor\Allegro\Model\UserRatingAnswerRequest**](../Model/UserRatingAnswerRequest.md)| User rating answer request. |

### Return type

[**\Phobetor\Allegro\Model\Answer**](../Model/Answer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdditionalEmailUsingDELETE()`

```php
deleteAdditionalEmailUsingDELETE($email_id)
```

Delete an additional email address

Use this resource to delete one of additional emails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email to be deleted.

try {
    $apiInstance->deleteAdditionalEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->deleteAdditionalEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email to be deleted. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdditionalEmailUsingGET()`

```php
getAdditionalEmailUsingGET($email_id): \Phobetor\Allegro\Model\AdditionalEmail
```

Get information about a particular additional email

Use this resource to retrieve a single additional email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | Id of the additional email.

try {
    $result = $apiInstance->getAdditionalEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getAdditionalEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email. |

### Return type

[**\Phobetor\Allegro\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfAdditionalEmailsUsingGET()`

```php
getListOfAdditionalEmailsUsingGET(): \Phobetor\Allegro\Model\AdditionalEmailsResponse
```

Get user's additional emails

Use this resource to get a list of all additional email addresses assigned to account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfAdditionalEmailsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getListOfAdditionalEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\AdditionalEmailsResponse**](../Model/AdditionalEmailsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRatingsUsingGET()`

```php
getUserRatingsUsingGET($recommended, $offset, $limit): \Phobetor\Allegro\Model\UserRatingListResponse
```

Get the user's ratings

Use this resource to receive your sales score. <a href=\"../../news/2017-10-09-news_informacje_o_ocenach/\" target=\"_blank\">Read more</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommended = 'recommended_example'; // string | Filter by recommended.
$offset = 0; // int | The offset of elements in the response.
$limit = 20; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getUserRatingsUsingGET($recommended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getUserRatingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommended** | **string**| Filter by recommended. | [optional]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 20]

### Return type

[**\Phobetor\Allegro\Model\UserRatingListResponse**](../Model/UserRatingListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meGET()`

```php
meGET(): \Phobetor\Allegro\Model\MeResponse
```

Get basic information about user

Use this resource when you need basic information about authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->meGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRatingRemovalUsingPUT()`

```php
userRatingRemovalUsingPUT($rating_id, $user_rating_removal_request): \Phobetor\Allegro\Model\Removal
```

Request removal of user's rating

Use this resource to request removal of received rating.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 5df0a6d1ef437e00255572a1; // string | ID of the rating.
$user_rating_removal_request = new \Phobetor\Allegro\Model\UserRatingRemovalRequest(); // \Phobetor\Allegro\Model\UserRatingRemovalRequest | User rating removal request.

try {
    $result = $apiInstance->userRatingRemovalUsingPUT($rating_id, $user_rating_removal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->userRatingRemovalUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**| ID of the rating. |
 **user_rating_removal_request** | [**\Phobetor\Allegro\Model\UserRatingRemovalRequest**](../Model/UserRatingRemovalRequest.md)| User rating removal request. |

### Return type

[**\Phobetor\Allegro\Model\Removal**](../Model/Removal.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
