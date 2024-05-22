# Struqtur\VismaEAccounting\SalesPriceListsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesPriceListsV2Get**](SalesPriceListsV2Api.md#salesPriceListsV2Get) | **GET** /v2/salespricelists | Gets sales price lists.
[**salesPriceListsV2Get_0**](SalesPriceListsV2Api.md#salesPriceListsV2Get_0) | **GET** /v2/salespricelists/{salesPriceListId} | Gets a sales price list by id.
[**salesPriceListsV2Get_1**](SalesPriceListsV2Api.md#salesPriceListsV2Get_1) | **GET** /v2/salespricelists/prices | Gets all sales prices from the company.
[**salesPriceListsV2Get_2**](SalesPriceListsV2Api.md#salesPriceListsV2Get_2) | **GET** /v2/salespricelists/prices/{salesPriceListId}/{articleId} | Gets the sales price from a specific price list for a specific article.


# **salesPriceListsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseSalesPriceListApi salesPriceListsV2Get()

Gets sales price lists.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesPriceListsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->salesPriceListsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceListsV2Api->salesPriceListsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseSalesPriceListApi**](../Model/PaginatedResponseSalesPriceListApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceListsV2Get_0**
> \Struqtur\VismaEAccounting\Model\SalesPriceListApi salesPriceListsV2Get_0($sales_price_list_id)

Gets a sales price list by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesPriceListsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_price_list_id = "sales_price_list_id_example"; // string | 

try {
    $result = $apiInstance->salesPriceListsV2Get_0($sales_price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceListsV2Api->salesPriceListsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_price_list_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SalesPriceListApi**](../Model/SalesPriceListApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceListsV2Get_1**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseSalesPriceListRowApi salesPriceListsV2Get_1()

Gets all sales prices from the company.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesPriceListsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->salesPriceListsV2Get_1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceListsV2Api->salesPriceListsV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseSalesPriceListRowApi**](../Model/PaginatedResponseSalesPriceListRowApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceListsV2Get_2**
> \Struqtur\VismaEAccounting\Model\SalesPriceListRowApi salesPriceListsV2Get_2($sales_price_list_id, $article_id)

Gets the sales price from a specific price list for a specific article.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesPriceListsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_price_list_id = "sales_price_list_id_example"; // string | 
$article_id = "article_id_example"; // string | 

try {
    $result = $apiInstance->salesPriceListsV2Get_2($sales_price_list_id, $article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceListsV2Api->salesPriceListsV2Get_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_price_list_id** | [**string**](../Model/.md)|  |
 **article_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SalesPriceListRowApi**](../Model/SalesPriceListRowApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

