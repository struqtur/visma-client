# Struqtur\VismaEAccounting\SuppliersV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suppliersV2Delete**](SuppliersV2Api.md#suppliersV2Delete) | **DELETE** /v2/suppliers/{supplierId} | Deletes a supplier
[**suppliersV2Get**](SuppliersV2Api.md#suppliersV2Get) | **GET** /v2/suppliers | Get a list of suppliers.
[**suppliersV2Get_0**](SuppliersV2Api.md#suppliersV2Get_0) | **GET** /v2/suppliers/{supplierId} | Get a specific supplier.
[**suppliersV2Post**](SuppliersV2Api.md#suppliersV2Post) | **POST** /v2/suppliers | Post a supplier
[**suppliersV2Put**](SuppliersV2Api.md#suppliersV2Put) | **PUT** /v2/suppliers/{supplierId} | Replace a supplier


# **suppliersV2Delete**
> object suppliersV2Delete($supplier_id)

Deletes a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_id = "supplier_id_example"; // string | 

try {
    $result = $apiInstance->suppliersV2Delete($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierApi suppliersV2Get()

Get a list of suppliers.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->suppliersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierApi**](../Model/PaginatedResponseSupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Get_0**
> \Struqtur\VismaEAccounting\Model\SupplierApi suppliersV2Get_0($supplier_id)

Get a specific supplier.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_id = "supplier_id_example"; // string | 

try {
    $result = $apiInstance->suppliersV2Get_0($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Post**
> \Struqtur\VismaEAccounting\Model\SupplierApi suppliersV2Post($supplier)

Post a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier = new \Struqtur\VismaEAccounting\Model\SupplierApi(); // \Struqtur\VismaEAccounting\Model\SupplierApi | 

try {
    $result = $apiInstance->suppliersV2Post($supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier** | [**\Struqtur\VismaEAccounting\Model\SupplierApi**](../Model/SupplierApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppliersV2Put**
> \Struqtur\VismaEAccounting\Model\SupplierApi suppliersV2Put($supplier_id, $api_supplier)

Replace a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SuppliersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_id = "supplier_id_example"; // string | 
$api_supplier = new \Struqtur\VismaEAccounting\Model\SupplierApi(); // \Struqtur\VismaEAccounting\Model\SupplierApi | 

try {
    $result = $apiInstance->suppliersV2Put($supplier_id, $api_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersV2Api->suppliersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | [**string**](../Model/.md)|  |
 **api_supplier** | [**\Struqtur\VismaEAccounting\Model\SupplierApi**](../Model/SupplierApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierApi**](../Model/SupplierApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

