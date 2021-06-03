# Struqtur\VismaEAccounting\UnitsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unitsV2Get**](UnitsV2Api.md#unitsV2Get) | **GET** /v2/units | Get a list of Units
[**unitsV2Get_0**](UnitsV2Api.md#unitsV2Get_0) | **GET** /v2/units/{id} | Get a single unit.


# **unitsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseUnitApi unitsV2Get()

Get a list of Units

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\UnitsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->unitsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsV2Api->unitsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseUnitApi**](../Model/PaginatedResponseUnitApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitsV2Get_0**
> \Struqtur\VismaEAccounting\Model\UnitApi unitsV2Get_0($id)

Get a single unit.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\UnitsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of requested unit.

try {
    $result = $apiInstance->unitsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsV2Api->unitsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Id of requested unit. |

### Return type

[**\Struqtur\VismaEAccounting\Model\UnitApi**](../Model/UnitApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

