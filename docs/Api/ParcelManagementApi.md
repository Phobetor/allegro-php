# Phobetor\Allegro\ParcelManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelParcel()**](ParcelManagementApi.md#cancelParcel) | **PUT** /parcel-management/parcel-cancel-commands/{commandId} | Cancel parcel
[**createNewParcel()**](ParcelManagementApi.md#createNewParcel) | **PUT** /parcel-management/parcel-create-commands/{commandId} | Create a new parcel
[**getAvailableDeliveryServices()**](ParcelManagementApi.md#getAvailableDeliveryServices) | **GET** /parcel-management/delivery-services | Get available delivery services
[**getParcelCancellationStatus()**](ParcelManagementApi.md#getParcelCancellationStatus) | **GET** /parcel-management/parcel-cancel-commands/{commandId} | Get parcel cancellation status
[**getParcelCreationStatus()**](ParcelManagementApi.md#getParcelCreationStatus) | **GET** /parcel-management/parcel-create-commands/{commandId} | Get parcel creation status
[**getParcelDetails()**](ParcelManagementApi.md#getParcelDetails) | **GET** /parcel-management/parcels/{parcelId} | Get parcel details
[**getParcelLabel()**](ParcelManagementApi.md#getParcelLabel) | **GET** /parcel-management/parcels/label | Get parcel label
[**getParcelPickupStatus()**](ParcelManagementApi.md#getParcelPickupStatus) | **GET** /parcel-management/parcel-pickup-request-commands/{commandId} | Get parcel pickup status
[**getParcelsPickupDateProposals()**](ParcelManagementApi.md#getParcelsPickupDateProposals) | **GET** /parcel-management/pickup-date-proposals | Get parcels pickup date proposals
[**getParcelsProtocol()**](ParcelManagementApi.md#getParcelsProtocol) | **GET** /parcel-management/parcels/protocol | Get parcels protocol
[**requestParcelPickup()**](ParcelManagementApi.md#requestParcelPickup) | **PUT** /parcel-management/parcel-pickup-request-commands/{commandId} | Request parcel pickup


## `cancelParcel()`

```php
cancelParcel($command_id, $cancel_parcel_parameters): object
```

Cancel parcel

Use this resource to cancel parcel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.
$cancel_parcel_parameters = new \Phobetor\Allegro\Model\CancelParcelParameters(); // \Phobetor\Allegro\Model\CancelParcelParameters

try {
    $result = $apiInstance->cancelParcel($command_id, $cancel_parcel_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->cancelParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |
 **cancel_parcel_parameters** | [**\Phobetor\Allegro\Model\CancelParcelParameters**](../Model/CancelParcelParameters.md)|  |

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewParcel()`

```php
createNewParcel($command_id, $parcel_creation_parameters): object
```

Create a new parcel

Use this resource to create parcel for delivery. Read more: <a href=\"https://developer.allegro.pl/wza/#jak-utworzyć-nową-paczkę\" target=\"_blank\">PL</a> / <a href=\"https://developer.allegro.pl/en/wza/#how-to-create-a-new-parcel\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.
$parcel_creation_parameters = new \Phobetor\Allegro\Model\ParcelCreationParameters(); // \Phobetor\Allegro\Model\ParcelCreationParameters

try {
    $result = $apiInstance->createNewParcel($command_id, $parcel_creation_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->createNewParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |
 **parcel_creation_parameters** | [**\Phobetor\Allegro\Model\ParcelCreationParameters**](../Model/ParcelCreationParameters.md)|  |

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableDeliveryServices()`

```php
getAvailableDeliveryServices(): \Phobetor\Allegro\Model\DeliveryServices
```

Get available delivery services

Use this resource to get delivery services available for user. It returns services provided by Allegro and contracts with carriers owned by user and configured by GUI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableDeliveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getAvailableDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\DeliveryServices**](../Model/DeliveryServices.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelCancellationStatus()`

```php
getParcelCancellationStatus($command_id): object
```

Get parcel cancellation status

Use this resource to get parcel cancellation status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.

try {
    $result = $apiInstance->getParcelCancellationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelCancellationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

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

## `getParcelCreationStatus()`

```php
getParcelCreationStatus($command_id): object
```

Get parcel creation status

Use this resource to get parcel creation status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.

try {
    $result = $apiInstance->getParcelCreationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelCreationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

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

## `getParcelDetails()`

```php
getParcelDetails($parcel_id): \Phobetor\Allegro\Model\ParcelDetails
```

Get parcel details

Use this resource to get parcel details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Id of parcel.

try {
    $result = $apiInstance->getParcelDetails($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| Id of parcel. |

### Return type

[**\Phobetor\Allegro\Model\ParcelDetails**](../Model/ParcelDetails.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelLabel()`

```php
getParcelLabel($parcel_id, $page_format): \SplFileObject
```

Get parcel label

Use this resource to get label for created parcel. <br/>Returned content type depends on created parcel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Id of parcel.
$page_format = 'page_format_example'; // string | Label page format. Only for PDF file.

try {
    $result = $apiInstance->getParcelLabel($parcel_id, $page_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| Id of parcel. |
 **page_format** | **string**| Label page format. Only for PDF file. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `plain/text`, `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelPickupStatus()`

```php
getParcelPickupStatus($command_id): object
```

Get parcel pickup status

Use this resource to get parcel pickup status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.

try {
    $result = $apiInstance->getParcelPickupStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelPickupStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

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

## `getParcelsPickupDateProposals()`

```php
getParcelsPickupDateProposals($parcel_id, $ready_date): \Phobetor\Allegro\Model\PickupDateParcelsProposals
```

Get parcels pickup date proposals

Use this resource to get parcels pickup date proposals. Pickup takes place, when courier arrives to take parcels for shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = array('parcel_id_example'); // string[] | Ids of parcels. Passing more than one value will search pickup dates for all of them separately. Example: `parcelId=1233&parcelId=1234` - will return pickup date proposals for parcels with ID `1233` and `1234`.
$ready_date = 2020-01-01; // \DateTime | Date when parcels will be ready.

try {
    $result = $apiInstance->getParcelsPickupDateProposals($parcel_id, $ready_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelsPickupDateProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | [**string[]**](../Model/string.md)| Ids of parcels. Passing more than one value will search pickup dates for all of them separately. Example: &#x60;parcelId&#x3D;1233&amp;parcelId&#x3D;1234&#x60; - will return pickup date proposals for parcels with ID &#x60;1233&#x60; and &#x60;1234&#x60;. |
 **ready_date** | **\DateTime**| Date when parcels will be ready. | [optional]

### Return type

[**\Phobetor\Allegro\Model\PickupDateParcelsProposals**](../Model/PickupDateParcelsProposals.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelsProtocol()`

```php
getParcelsProtocol($parcel_id): \SplFileObject
```

Get parcels protocol

Use this resource to get parcels protocol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = array('parcel_id_example'); // string[] | Ids of parcels. Passing more than one value will generate protocol for all of them. Example: `parcelId=1233&parcelId=1234` - returns protocol for parcels with ID `1233` and `1234`.

try {
    $result = $apiInstance->getParcelsProtocol($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelsProtocol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | [**string[]**](../Model/string.md)| Ids of parcels. Passing more than one value will generate protocol for all of them. Example: &#x60;parcelId&#x3D;1233&amp;parcelId&#x3D;1234&#x60; - returns protocol for parcels with ID &#x60;1233&#x60; and &#x60;1234&#x60;. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestParcelPickup()`

```php
requestParcelPickup($command_id, $pickup_parcel_parameters): object
```

Request parcel pickup

Use this resource to request pickup for parcels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = 'command_id_example'; // string | Command UUID.
$pickup_parcel_parameters = new \Phobetor\Allegro\Model\PickupParcelParameters(); // \Phobetor\Allegro\Model\PickupParcelParameters

try {
    $result = $apiInstance->requestParcelPickup($command_id, $pickup_parcel_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->requestParcelPickup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |
 **pickup_parcel_parameters** | [**\Phobetor\Allegro\Model\PickupParcelParameters**](../Model/PickupParcelParameters.md)|  |

### Return type

**object**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
