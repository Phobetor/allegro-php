# Phobetor\Allegro\AdvanceShipNoticesApi

All URIs are relative to https://api.allegro.pl, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAdvanceShipNotice()**](AdvanceShipNoticesApi.md#cancelAdvanceShipNotice) | **PUT** /fulfillment/advance-ship-notices/{id}/cancel | Cancel Advance Ship Notice |
| [**createAdvanceShipNotice()**](AdvanceShipNoticesApi.md#createAdvanceShipNotice) | **POST** /fulfillment/advance-ship-notices | Create an Advance Ship Notice |
| [**deleteAdvanceShipNotice()**](AdvanceShipNoticesApi.md#deleteAdvanceShipNotice) | **DELETE** /fulfillment/advance-ship-notices/{id} | Delete Advance Ship Notice |
| [**getAdvanceShipNotice()**](AdvanceShipNoticesApi.md#getAdvanceShipNotice) | **GET** /fulfillment/advance-ship-notices/{id} | Get single Advance Ship Notice |
| [**getAdvanceShipNoticeLabels()**](AdvanceShipNoticesApi.md#getAdvanceShipNoticeLabels) | **GET** /fulfillment/advance-ship-notices/{id}/labels | Get labels for Advance Ship Notice |
| [**getAdvanceShipNoticeReceivingState()**](AdvanceShipNoticesApi.md#getAdvanceShipNoticeReceivingState) | **GET** /fulfillment/advance-ship-notices/{id}/receiving-state | Check current state and details of Advance Ship Notice receiving |
| [**getAdvanceShipNotices()**](AdvanceShipNoticesApi.md#getAdvanceShipNotices) | **GET** /fulfillment/advance-ship-notices | Get list of Advance Ship Notices |
| [**getSubmitCommand()**](AdvanceShipNoticesApi.md#getSubmitCommand) | **GET** /fulfillment/submit-commands/{command-id} | Get submit status |
| [**submitCommand()**](AdvanceShipNoticesApi.md#submitCommand) | **PUT** /fulfillment/submit-commands/{command-id} | Submit the Advance Ship Notice |
| [**updateAdvanceShipNotice()**](AdvanceShipNoticesApi.md#updateAdvanceShipNotice) | **PUT** /fulfillment/advance-ship-notices/{id} | Update Advance Ship Notice |
| [**updateSubmittedAdvanceShipNotice()**](AdvanceShipNoticesApi.md#updateSubmittedAdvanceShipNotice) | **PUT** /fulfillment/advance-ship-notices/{id}/submitted | Update submitted Advance Ship Notice |


## `cancelAdvanceShipNotice()`

```php
cancelAdvanceShipNotice($id)
```

Cancel Advance Ship Notice

Use this resource to cancel an Advance Ship Notice in IN_TRANSIT status. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#anuluj-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#cancel-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0b488a23-bc99-470d-8842-0c585adf2479'; // string | An identifier of the Advance Ship Notice to cancel.

try {
    $apiInstance->cancelAdvanceShipNotice($id);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->cancelAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of the Advance Ship Notice to cancel. | [default to &#39;0b488a23-bc99-470d-8842-0c585adf2479&#39;] |

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

## `createAdvanceShipNotice()`

```php
createAdvanceShipNotice($create_advance_ship_notice_request): \Phobetor\Allegro\Model\CreateAdvanceShipNoticeResponse
```

Create an Advance Ship Notice

Use this resource to create an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#utworz-draft-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-a-draft-of-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_advance_ship_notice_request = new \Phobetor\Allegro\Model\CreateAdvanceShipNoticeRequest(); // \Phobetor\Allegro\Model\CreateAdvanceShipNoticeRequest

try {
    $result = $apiInstance->createAdvanceShipNotice($create_advance_ship_notice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->createAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_advance_ship_notice_request** | [**\Phobetor\Allegro\Model\CreateAdvanceShipNoticeRequest**](../Model/CreateAdvanceShipNoticeRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\CreateAdvanceShipNoticeResponse**](../Model/CreateAdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdvanceShipNotice()`

```php
deleteAdvanceShipNotice($id)
```

Delete Advance Ship Notice

Use this resource to delete an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-usunac-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-delete-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0b488a23-bc99-470d-8842-0c585adf2479'; // string | An identifier of the Advance Ship Notice to delete.

try {
    $apiInstance->deleteAdvanceShipNotice($id);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->deleteAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of the Advance Ship Notice to delete. | [default to &#39;0b488a23-bc99-470d-8842-0c585adf2479&#39;] |

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

## `getAdvanceShipNotice()`

```php
getAdvanceShipNotice($id): \Phobetor\Allegro\Model\AdvanceShipNoticeResponse
```

Get single Advance Ship Notice

Use this resource to get an Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '84529ad2-2265-4e15-b76b-c17025d848f6'; // string | The identifier of returned Advance Ship Notice.

try {
    $result = $apiInstance->getAdvanceShipNotice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The identifier of returned Advance Ship Notice. | |

### Return type

[**\Phobetor\Allegro\Model\AdvanceShipNoticeResponse**](../Model/AdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNoticeLabels()`

```php
getAdvanceShipNoticeLabels($id, $accept): \SplFileObject
```

Get labels for Advance Ship Notice

Use this resource to get labels for Advance Ship Notice after being created with \"create labels command\". Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#wygeneruj-oznaczenia-na-kartony\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#create-labels-for-boxes\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 84529ad2-2265-4e15-b76b-c17025d848f6; // string | An identifier of the Advance Ship Notice.
$accept = 'accept_example'; // string | Content-type of generated labels

try {
    $result = $apiInstance->getAdvanceShipNoticeLabels($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNoticeLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of the Advance Ship Notice. | |
| **accept** | **string**| Content-type of generated labels. | |

### Return type

**\SplFileObject**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `x-application/zpl`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNoticeReceivingState()`

```php
getAdvanceShipNoticeReceivingState($id): \Phobetor\Allegro\Model\ReceivingState
```

Check current state and details of Advance Ship Notice receiving

Use this resource to check the state of Advance Ship Notice receiving in Fulfillment Center in real time. The response contains a receiving progress and information about particular items - their quantities and conditions. While the Advance Ship Notice is in UNPACKING state, report is updated dynamically, which might result in different responses even at short time intervals. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#sprawdz-postep-odbioru-awizo-przez-magazyn\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#check-current-state-and-details-of-advance-ship-notice-receiving\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '712fa46c-7d4a-4ba0-b094-b5d1d4f6155d'; // string | An identifier of advance ship notice.

try {
    $result = $apiInstance->getAdvanceShipNoticeReceivingState($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNoticeReceivingState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of advance ship notice. | [default to &#39;712fa46c-7d4a-4ba0-b094-b5d1d4f6155d&#39;] |

### Return type

[**\Phobetor\Allegro\Model\ReceivingState**](../Model/ReceivingState.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvanceShipNotices()`

```php
getAdvanceShipNotices($offset, $limit, $status): \Phobetor\Allegro\Model\AdvanceShipNoticeList
```

Get list of Advance Ship Notices

Use this resource to get a list of Advance Ship Notices. The list is ordered by **createdAt** property. Default **offset** is 0, default **limit** is 50. A list can be filtered by statuses. Multiple status query parameters are allowed. In such cases, filters are joined with **OR** logical operator. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-przegladac-utworzone-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#how-to-get-created-advance-ship-notices\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 50; // int | Maximum number of elements in response.
$status = array(new \Phobetor\Allegro\Model\\Phobetor\Allegro\Model\AdvanceShipNoticeStatus()); // \Phobetor\Allegro\Model\AdvanceShipNoticeStatus[] | A status of the Advance Ship Notices in the response.

try {
    $result = $apiInstance->getAdvanceShipNotices($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getAdvanceShipNotices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The offset of elements in the response. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of elements in response. | [optional] [default to 50] |
| **status** | [**\Phobetor\Allegro\Model\AdvanceShipNoticeStatus[]**](../Model/\Phobetor\Allegro\Model\AdvanceShipNoticeStatus.md)| A status of the Advance Ship Notices in the response. | [optional] |

### Return type

[**\Phobetor\Allegro\Model\AdvanceShipNoticeList**](../Model/AdvanceShipNoticeList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmitCommand()`

```php
getSubmitCommand($command_id): \Phobetor\Allegro\Model\SubmitCommand
```

Get submit status

Use this resource to get submit status of the Advance Ship Notice. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '882202c8-15ab-4a83-aeef-29ea505bf0d0'; // string | An identifier of the command.

try {
    $result = $apiInstance->getSubmitCommand($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->getSubmitCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| An identifier of the command. | [default to &#39;882202c8-15ab-4a83-aeef-29ea505bf0d0&#39;] |

### Return type

[**\Phobetor\Allegro\Model\SubmitCommand**](../Model/SubmitCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCommand()`

```php
submitCommand($command_id, $submit_command): \Phobetor\Allegro\Model\SubmitCommand
```

Submit the Advance Ship Notice

Use this resource to submit the Advance Ship Notice. After this operation, updates of the Advance Ship Notice are limited to selected properties only. See <a href=\"../../documentation#operation/updateSubmittedAdvanceShipNotice\">PUT /fulfillment/advance-ship-notices/{id}/submitted</a>. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = '725432a9-ae9e-43de-b8c5-7430606a81a4'; // string | The identifier of the command.
$submit_command = new \Phobetor\Allegro\Model\SubmitCommand(); // \Phobetor\Allegro\Model\SubmitCommand

try {
    $result = $apiInstance->submitCommand($command_id, $submit_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->submitCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **command_id** | **string**| The identifier of the command. | [default to &#39;725432a9-ae9e-43de-b8c5-7430606a81a4&#39;] |
| **submit_command** | [**\Phobetor\Allegro\Model\SubmitCommand**](../Model/SubmitCommand.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\SubmitCommand**](../Model/SubmitCommand.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdvanceShipNotice()`

```php
updateAdvanceShipNotice($id, $if_match, $advance_ship_notice): \Phobetor\Allegro\Model\AdvanceShipNoticeResponse
```

Update Advance Ship Notice

Use this resource to update an Advance Ship Notice. Any content property update will clear labels property. Use Create labels command to create new labels for provided content. If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo\" target=\"_blank\">PL</a> / <a href=\"../../one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 84529ad2-2265-4e15-b76b-c17025d848f6; // string | An identifier of Advance Ship Notice.
$if_match = 123456; // string | A current version of Advance Ship Notice (e.g. from etag header obtained via get).
$advance_ship_notice = new \Phobetor\Allegro\Model\AdvanceShipNotice(); // \Phobetor\Allegro\Model\AdvanceShipNotice

try {
    $result = $apiInstance->updateAdvanceShipNotice($id, $if_match, $advance_ship_notice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->updateAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of Advance Ship Notice. | |
| **if_match** | **string**| A current version of Advance Ship Notice (e.g. from etag header obtained via get). | |
| **advance_ship_notice** | [**\Phobetor\Allegro\Model\AdvanceShipNotice**](../Model/AdvanceShipNotice.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AdvanceShipNoticeResponse**](../Model/AdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubmittedAdvanceShipNotice()`

```php
updateSubmittedAdvanceShipNotice($id, $if_match, $update_submitted_advance_ship_notice_request): \Phobetor\Allegro\Model\AdvanceShipNoticeResponse
```

Update submitted Advance Ship Notice

Use this resource to update already submitted Advance Ship Notice. Update is allowed only when Advance Ship Notice is in \"IN_TRANSIT\" status. Modifications are limited to:   - changing items quantity   - removing items   - changing handling unit amount   - changing shipping courier id, name, tracking numbers or vehicle licence plate or third party delivery details (depending on the selected shipping method in the submitted advance ship notice) Handling unit's amount property update clears labels property. Use Create labels command to create new labels for provided content. Read more: <a href=\"../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#edytuj-zakonczone-awizo\" target=\"_blank\">PL</a> / <a href=\"../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#edit-advance-ship-notice\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\AdvanceShipNoticesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 84529ad2-2265-4e15-b76b-c17025d848f6; // string | An identifier of Advance Ship Notice.
$if_match = 123456; // string | A current version of Advance Ship Notice (e.g. from etag header obtained via get).
$update_submitted_advance_ship_notice_request = new \Phobetor\Allegro\Model\UpdateSubmittedAdvanceShipNoticeRequest(); // \Phobetor\Allegro\Model\UpdateSubmittedAdvanceShipNoticeRequest

try {
    $result = $apiInstance->updateSubmittedAdvanceShipNotice($id, $if_match, $update_submitted_advance_ship_notice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvanceShipNoticesApi->updateSubmittedAdvanceShipNotice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| An identifier of Advance Ship Notice. | |
| **if_match** | **string**| A current version of Advance Ship Notice (e.g. from etag header obtained via get). | |
| **update_submitted_advance_ship_notice_request** | [**\Phobetor\Allegro\Model\UpdateSubmittedAdvanceShipNoticeRequest**](../Model/UpdateSubmittedAdvanceShipNoticeRequest.md)|  | |

### Return type

[**\Phobetor\Allegro\Model\AdvanceShipNoticeResponse**](../Model/AdvanceShipNoticeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
