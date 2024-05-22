# Struqtur\VismaEAccounting\CostCentersV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**costCentersV2Get**](CostCentersV2Api.md#costCentersV2Get) | **GET** /v2/costcenters | Get a list of cost centers
[**costCentersV2Get_0**](CostCentersV2Api.md#costCentersV2Get_0) | **PUT** /v2/costcenters/{id} | Replace content in a cost center.


# **costCentersV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCostCenterApi costCentersV2Get()

Get a list of cost centers

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CostCentersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->costCentersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersV2Api->costCentersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCostCenterApi**](../Model/PaginatedResponseCostCenterApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCentersV2Get_0**
> \Struqtur\VismaEAccounting\Model\CostCenterApi costCentersV2Get_0($id, $cost_center)

Replace content in a cost center.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CostCentersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$cost_center = new \Struqtur\VismaEAccounting\Model\CostCenterApi(); // \Struqtur\VismaEAccounting\Model\CostCenterApi | 

try {
    $result = $apiInstance->costCentersV2Get_0($id, $cost_center);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentersV2Api->costCentersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **cost_center** | [**\Struqtur\VismaEAccounting\Model\CostCenterApi**](../Model/CostCenterApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CostCenterApi**](../Model/CostCenterApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

