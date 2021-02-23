# Phobetor\Allegro\OrderManagementApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderInvoicesMetadata()**](OrderManagementApi.md#addOrderInvoicesMetadata) | **POST** /order/checkout-forms/{id}/invoices | Post new invoice
[**createOrderShipmentsUsingPOST()**](OrderManagementApi.md#createOrderShipmentsUsingPOST) | **POST** /order/checkout-forms/{id}/shipments | Add a parcel tracking number
[**getListOfOrdersUsingGET()**](OrderManagementApi.md#getListOfOrdersUsingGET) | **GET** /order/checkout-forms | Get the user&#39;s orders
[**getOrderEventsStatisticsUsingGET()**](OrderManagementApi.md#getOrderEventsStatisticsUsingGET) | **GET** /order/event-stats | Get order events statistics
[**getOrderEventsUsingGET()**](OrderManagementApi.md#getOrderEventsUsingGET) | **GET** /order/events | Get order events
[**getOrderInvoicesDetails()**](OrderManagementApi.md#getOrderInvoicesDetails) | **GET** /order/checkout-forms/{id}/invoices | Get order invoices details
[**getOrderShipmentsUsingGET()**](OrderManagementApi.md#getOrderShipmentsUsingGET) | **GET** /order/checkout-forms/{id}/shipments | Get a list of parcel tracking numbers
[**getOrdersCarriersUsingGET()**](OrderManagementApi.md#getOrdersCarriersUsingGET) | **GET** /order/carriers | Get a list of available shipping carriers
[**getOrdersDetailsUsingGET()**](OrderManagementApi.md#getOrdersDetailsUsingGET) | **GET** /order/checkout-forms/{id} | Get an order&#39;s details
[**setOrderFulfillmentUsingPUT()**](OrderManagementApi.md#setOrderFulfillmentUsingPUT) | **PUT** /order/checkout-forms/{id}/fulfillment | Set seller order status
[**uploadOrderInvoiceFile()**](OrderManagementApi.md#uploadOrderInvoiceFile) | **PUT** /order/checkout-forms/{id}/invoices/{invoiceId}/file | Upload invoice file


## `addOrderInvoicesMetadata()`

```php
addOrderInvoicesMetadata($id, $check_forms_new_order_invoice): \Phobetor\Allegro\Model\CheckFormsNewOrderInvoiceId
```

Post new invoice

Use to add new invoice metadata. Before you send an invoice file, you need to initialize the invoice instance with the required parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$check_forms_new_order_invoice = new \Phobetor\Allegro\Model\CheckFormsNewOrderInvoice(); // \Phobetor\Allegro\Model\CheckFormsNewOrderInvoice | request

try {
    $result = $apiInstance->addOrderInvoicesMetadata($id, $check_forms_new_order_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->addOrderInvoicesMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **check_forms_new_order_invoice** | [**\Phobetor\Allegro\Model\CheckFormsNewOrderInvoice**](../Model/CheckFormsNewOrderInvoice.md)| request |

### Return type

[**\Phobetor\Allegro\Model\CheckFormsNewOrderInvoiceId**](../Model/CheckFormsNewOrderInvoiceId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderShipmentsUsingPOST()`

```php
createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request): \Phobetor\Allegro\Model\CheckoutFormAddWaybillCreated
```

Add a parcel tracking number

Add a parcel tracking number (shipment) to given order line items. Read more: <a href=\"../../orders/#jak-dodać-numer-przesyłki-do-przedmiotu-w-zamówieniu\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#add-tracking-number-to-order\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$checkout_form_add_waybill_request = new \Phobetor\Allegro\Model\CheckoutFormAddWaybillRequest(); // \Phobetor\Allegro\Model\CheckoutFormAddWaybillRequest | request

try {
    $result = $apiInstance->createOrderShipmentsUsingPOST($id, $checkout_form_add_waybill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->createOrderShipmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **checkout_form_add_waybill_request** | [**\Phobetor\Allegro\Model\CheckoutFormAddWaybillRequest**](../Model/CheckoutFormAddWaybillRequest.md)| request |

### Return type

[**\Phobetor\Allegro\Model\CheckoutFormAddWaybillCreated**](../Model/CheckoutFormAddWaybillCreated.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListOfOrdersUsingGET()`

```php
getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $updated_at_lte, $updated_at_gte, $sort): \Phobetor\Allegro\Model\CheckoutForms
```

Get the user's orders

Use this resource to get an order list. Read more: <a href=\"../../orders/#lista-zamówień\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-list\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Index of first returned checkout-form from all search results.
$limit = 100; // int | Maximum number of checkout-forms in response.
$status = 'status_example'; // string | Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in.   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.   * `CANCELLED`: purchase cancelled by buyer.
$fulfillment_status = 'fulfillment_status_example'; // string | Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * `NEW`   * `PROCESSING`   * `READY_FOR_SHIPMENT`   * `SENT`   * `CANCELLED`.
$fulfillment_shipment_summary_line_items_sent = 'fulfillment_shipment_summary_line_items_sent_example'; // string | Specify filter for line items sending status. Allowed values are:   * `NONE`: none of line items have tracking number specified   * `SOME`: some of line items have tracking number specified   * `ALL`: all of line items have tracking number specified.
$line_items_bought_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
$line_items_bought_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
$payment_id = 'payment_id_example'; // string | Find checkout-forms having specified payment id.
$surcharges_id = 'surcharges_id_example'; // string | Find checkout-forms having specified surcharge id.
$delivery_method_id = 'delivery_method_id_example'; // string | Find checkout-forms having specified delivery method id.
$buyer_login = 'buyer_login_example'; // string | Find checkout-forms having specified buyer login.
$updated_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
$updated_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
$sort = 'sort_example'; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.

try {
    $result = $apiInstance->getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $updated_at_lte, $updated_at_gte, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getListOfOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned checkout-form from all search results. | [optional] [default to 0]
 **limit** | **int**| Maximum number of checkout-forms in response. | [optional] [default to 100]
 **status** | **string**| Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in.   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change.   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing.   * &#x60;CANCELLED&#x60;: purchase cancelled by buyer. | [optional]
 **fulfillment_status** | **string**| Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;NEW&#x60;   * &#x60;PROCESSING&#x60;   * &#x60;READY_FOR_SHIPMENT&#x60;   * &#x60;SENT&#x60;   * &#x60;CANCELLED&#x60;. | [optional]
 **fulfillment_shipment_summary_line_items_sent** | **string**| Specify filter for line items sending status. Allowed values are:   * &#x60;NONE&#x60;: none of line items have tracking number specified   * &#x60;SOME&#x60;: some of line items have tracking number specified   * &#x60;ALL&#x60;: all of line items have tracking number specified. | [optional]
 **line_items_bought_at_lte** | **\DateTime**| Latest line item bought date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **line_items_bought_at_gte** | **\DateTime**| Latest line item bought date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **payment_id** | **string**| Find checkout-forms having specified payment id. | [optional]
 **surcharges_id** | **string**| Find checkout-forms having specified surcharge id. | [optional]
 **delivery_method_id** | **string**| Find checkout-forms having specified delivery method id. | [optional]
 **buyer_login** | **string**| Find checkout-forms having specified buyer login. | [optional]
 **updated_at_lte** | **\DateTime**| Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **updated_at_gte** | **\DateTime**| Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **sort** | **string**| The results&#39; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#39;t provide the sort parameter, the list is sorted by line item boughtAt date, descending. | [optional]

### Return type

[**\Phobetor\Allegro\Model\CheckoutForms**](../Model/CheckoutForms.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderEventsStatisticsUsingGET()`

```php
getOrderEventsStatisticsUsingGET(): \Phobetor\Allegro\Model\OrderEventStats
```

Get order events statistics

Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. Read more: <a href=\"../../orders/#jak-znaleźć-najnowsze-zdarzenie\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#how-to-find-the-newest-event\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrderEventsStatisticsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsStatisticsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\OrderEventStats**](../Model/OrderEventStats.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderEventsUsingGET()`

```php
getOrderEventsUsingGET($from, $type, $limit): \Phobetor\Allegro\Model\OrderEventsList
```

Get order events

Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href=\"../../orders/#dziennik-zdarzeń\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#event-log\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | You can use the event ID to retrieve subsequent chunks of events.
$type = array('type_example'); // string[] | Specify array of event types for filtering. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing   * `BUYER_CANCELLED`: purchase was cancelled by buyer   * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed.
$limit = 100; // int | The maximum number of events returned in the response.

try {
    $result = $apiInstance->getOrderEventsUsingGET($from, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| You can use the event ID to retrieve subsequent chunks of events. | [optional]
 **type** | [**string[]**](../Model/string.md)| Specify array of event types for filtering. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing   * &#x60;BUYER_CANCELLED&#x60;: purchase was cancelled by buyer   * &#x60;FULFILLMENT_STATUS_CHANGED&#x60;: fulfillment status changed. | [optional]
 **limit** | **int**| The maximum number of events returned in the response. | [optional] [default to 100]

### Return type

[**\Phobetor\Allegro\Model\OrderEventsList**](../Model/OrderEventsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderInvoicesDetails()`

```php
getOrderInvoicesDetails($id): \Phobetor\Allegro\Model\CheckoutFormsOrderInvoices
```

Get order invoices details

Use to get invoices details including antivirus scan results and EPT invoice verification status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.

try {
    $result = $apiInstance->getOrderInvoicesDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderInvoicesDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\Phobetor\Allegro\Model\CheckoutFormsOrderInvoices**](../Model/CheckoutFormsOrderInvoices.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderShipmentsUsingGET()`

```php
getOrderShipmentsUsingGET($id): \Phobetor\Allegro\Model\CheckoutFormOrderWaybillResponse
```

Get a list of parcel tracking numbers

Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel. Read more: <a href=\"../../orders/#jak-pobrać-numery-przesyłek-dodane-do-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#retrieving-tracking-numbers\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.

try {
    $result = $apiInstance->getOrderShipmentsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\Phobetor\Allegro\Model\CheckoutFormOrderWaybillResponse**](../Model/CheckoutFormOrderWaybillResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersCarriersUsingGET()`

```php
getOrdersCarriersUsingGET(): \Phobetor\Allegro\Model\OrdersShippingCarriersResponse
```

Get a list of available shipping carriers

Shipping carriers are essential to provide accurate tracking experience for customers. Use this resource to get a list of all available shipping carriers.  The response of this resource can be stored in accordance with returned caching headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrdersCarriersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersCarriersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phobetor\Allegro\Model\OrdersShippingCarriersResponse**](../Model/OrdersShippingCarriersResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersDetailsUsingGET()`

```php
getOrdersDetailsUsingGET($id): \Phobetor\Allegro\Model\CheckoutForm
```

Get an order's details

Use this resource to get an order details. Read more: <a href=\"../../orders/#szczegóły-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-details\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 29738e61-7f6a-11e8-ac45-09db60ede9d6; // string | Checkout form identifier.

try {
    $result = $apiInstance->getOrdersDetailsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Checkout form identifier. |

### Return type

[**\Phobetor\Allegro\Model\CheckoutForm**](../Model/CheckoutForm.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderFulfillmentUsingPUT()`

```php
setOrderFulfillmentUsingPUT($id, $checkout_form_fulfillment, $checkout_form_revision)
```

Set seller order status

Use to set seller order status. Read more: <a href=\"../../orders/#zmiana-statusu-realizacji-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-fulfillment-status-changeg\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$checkout_form_fulfillment = new \Phobetor\Allegro\Model\CheckoutFormFulfillment(); // \Phobetor\Allegro\Model\CheckoutFormFulfillment | request
$checkout_form_revision = 819b5836; // string | Checkout form revision.

try {
    $apiInstance->setOrderFulfillmentUsingPUT($id, $checkout_form_fulfillment, $checkout_form_revision);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->setOrderFulfillmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **checkout_form_fulfillment** | [**\Phobetor\Allegro\Model\CheckoutFormFulfillment**](../Model/CheckoutFormFulfillment.md)| request |
 **checkout_form_revision** | **string**| Checkout form revision. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOrderInvoiceFile()`

```php
uploadOrderInvoiceFile($id, $invoice_id, $body)
```

Upload invoice file

Use to upload invoice file to match created invoice metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Order identifier.
$invoice_id = 'invoice_id_example'; // string | Invoice identifier.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadOrderInvoiceFile($id, $invoice_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->uploadOrderInvoiceFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **invoice_id** | **string**| Invoice identifier. |
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/pdf`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
