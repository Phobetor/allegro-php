# Phobetor\Allegro\ProductsApi

All URIs are relative to https://api.allegro.pl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFlatProductParametersUsingGET()**](ProductsApi.md#getFlatProductParametersUsingGET) | **GET** /sale/categories/{categoryId}/product-parameters | Get product parameters available in given category
[**getSaleProduct()**](ProductsApi.md#getSaleProduct) | **GET** /sale/products/{productId} | Get all data of the particular product
[**getSaleProducts()**](ProductsApi.md#getSaleProducts) | **GET** /sale/products | Get search products results
[**proposeSaleProduct()**](ProductsApi.md#proposeSaleProduct) | **POST** /sale/product-proposals | Propose a product


## `getFlatProductParametersUsingGET()`

```php
getFlatProductParametersUsingGET($category_id): \Phobetor\Allegro\Model\CategoryProductParameterList
```

Get product parameters available in given category

Use this resource to get the list of product parameters available in given category. You can use these parameters to create a new product. Read more: <a href=\"../../productization/#6-jak-dodać-produkt\" target=\"_blank\">PL</a> / <a href=\"../../en/productization/#6-how-to-create-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 709; // string | The category ID.

try {
    $result = $apiInstance->getFlatProductParametersUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getFlatProductParametersUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\Phobetor\Allegro\Model\CategoryProductParameterList**](../Model/CategoryProductParameterList.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleProduct()`

```php
getSaleProduct($product_id, $category_id): \Phobetor\Allegro\Model\SaleProductDto
```

Get all data of the particular product

Use this resource to retrieve all data of the particular product. Read more: <a href=\"../../productization/#3-jak-pobrać-pełne-dane-o-produkcie\" target=\"_blank\">PL</a> / <a href=\"../../en/productization/#3-how-to-get-the-complete-data-on-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | The product identifier.
$category_id = 'category_id_example'; // string | The similar category identifier. You can choose a category from 'similar categories' to filter the list of parameters available in the category context.

try {
    $result = $apiInstance->getSaleProduct($product_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The product identifier. |
 **category_id** | **string**| The similar category identifier. You can choose a category from &#39;similar categories&#39; to filter the list of parameters available in the category context. | [optional]

### Return type

[**\Phobetor\Allegro\Model\SaleProductDto**](../Model/SaleProductDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSaleProducts()`

```php
getSaleProducts($ean, $phrase, $category_id, $dynamic_filters, $page_id): \Phobetor\Allegro\Model\GetSaleProductsResponse
```

Get search products results

Use this resource to get a list of products according to provided parameters. At least ean or phrase parameter is required. Read more: <a href=\"../../productization/#2-jak-wyszukać-produkt\" target=\"_blank\">PL</a> / <a href=\"../../en/productization/#2-how-to-search-for-products\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 'ean_example'; // string | The EAN values can include EAN, ISBN, and UPC identifier types.
$phrase = 'phrase_example'; // string | Search phrase.
$category_id = 'category_id_example'; // string | The category identifier to filter results. This can only be used when searching by phrase.
$dynamic_filters = array('key' => 'dynamic_filters_example'); // map[string,string] | You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:   ````   {     \"id\": \"127448\",     \"name\": \"Kolor\",     \"type\": \"SINGLE\",     \"values\": [       {         \"name\": \"biały\",         \"value\": \"2\"       },       {         \"name\": \"czarny\",         \"value\": \"1\" }     ]   }   ```` You can use 'Kolor' filter to query results, i.e.:   * `127448=2` for \"biały\"   * `127448=1` for \"czarny\".
$page_id = 'page_id_example'; // string | A \"cursor\" to the next set of results.

try {
    $result = $apiInstance->getSaleProducts($ean, $phrase, $category_id, $dynamic_filters, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSaleProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN values can include EAN, ISBN, and UPC identifier types. | [optional]
 **phrase** | **string**| Search phrase. | [optional]
 **category_id** | **string**| The category identifier to filter results. This can only be used when searching by phrase. | [optional]
 **dynamic_filters** | [**map[string,string]**](../Model/string.md)| You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id&#x3D;value. When the filter definition looks like:   &#x60;&#x60;&#x60;&#x60;   {     \&quot;id\&quot;: \&quot;127448\&quot;,     \&quot;name\&quot;: \&quot;Kolor\&quot;,     \&quot;type\&quot;: \&quot;SINGLE\&quot;,     \&quot;values\&quot;: [       {         \&quot;name\&quot;: \&quot;biały\&quot;,         \&quot;value\&quot;: \&quot;2\&quot;       },       {         \&quot;name\&quot;: \&quot;czarny\&quot;,         \&quot;value\&quot;: \&quot;1\&quot; }     ]   }   &#x60;&#x60;&#x60;&#x60; You can use &#39;Kolor&#39; filter to query results, i.e.:   * &#x60;127448&#x3D;2&#x60; for \&quot;biały\&quot;   * &#x60;127448&#x3D;1&#x60; for \&quot;czarny\&quot;. | [optional]
 **page_id** | **string**| A \&quot;cursor\&quot; to the next set of results. | [optional]

### Return type

[**\Phobetor\Allegro\Model\GetSaleProductsResponse**](../Model/GetSaleProductsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proposeSaleProduct()`

```php
proposeSaleProduct($propose_sale_product_request): \Phobetor\Allegro\Model\SaleProductDto
```

Propose a product

Use this resource to propose a product. Read more: <a href=\"../../productization/#6-jak-dodać-produkt\" target=\"_blank\">PL</a> / <a href=\"../../en/productization/#6-how-to-create-a-product\" target=\"_blank\">EN</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Phobetor\Allegro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Phobetor\Allegro\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$propose_sale_product_request = new \Phobetor\Allegro\Model\ProposeSaleProductRequest(); // \Phobetor\Allegro\Model\ProposeSaleProductRequest

try {
    $result = $apiInstance->proposeSaleProduct($propose_sale_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->proposeSaleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **propose_sale_product_request** | [**\Phobetor\Allegro\Model\ProposeSaleProductRequest**](../Model/ProposeSaleProductRequest.md)|  |

### Return type

[**\Phobetor\Allegro\Model\SaleProductDto**](../Model/SaleProductDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

- **Content-Type**: `application/vnd.allegro.public.v1+json`
- **Accept**: `application/vnd.allegro.public.v1+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
