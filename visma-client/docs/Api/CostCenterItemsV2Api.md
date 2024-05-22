# Struqtur\VismaEAccounting\CostCenterItemsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**costCenterItemsV2Get**](CostCenterItemsV2Api.md#costCenterItemsV2Get) | **GET** /v2/costcenteritems/{itemId} | Get a specific cost center item.
[**costCenterItemsV2Post**](CostCenterItemsV2Api.md#costCenterItemsV2Post) | **POST** /v2/costcenteritems | Create a single cost center item.
[**costCenterItemsV2Put**](CostCenterItemsV2Api.md#costCenterItemsV2Put) | **PUT** /v2/costcenteritems/{costCenterItemId} | Replace the data in a cost center item.


# **costCenterItemsV2Get**
> \Struqtur\VismaEAccounting\Model\CostCenterItemApi costCenterItemsV2Get($item_id)

Get a specific cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 

try {
    $result = $apiInstance->costCenterItemsV2Get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Post**
> \Struqtur\VismaEAccounting\Model\CostCenterItemApi costCenterItemsV2Post($cost_center_item)

Create a single cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cost_center_item = new \Struqtur\VismaEAccounting\Model\CostCenterItemApi(); // \Struqtur\VismaEAccounting\Model\CostCenterItemApi | 

try {
    $result = $apiInstance->costCenterItemsV2Post($cost_center_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cost_center_item** | [**\Struqtur\VismaEAccounting\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **costCenterItemsV2Put**
> \Struqtur\VismaEAccounting\Model\CostCenterItemApi costCenterItemsV2Put($cost_center_item_id, $cost_center_item)

Replace the data in a cost center item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CostCenterItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cost_center_item_id = "cost_center_item_id_example"; // string | 
$cost_center_item = new \Struqtur\VismaEAccounting\Model\CostCenterItemApi(); // \Struqtur\VismaEAccounting\Model\CostCenterItemApi | 

try {
    $result = $apiInstance->costCenterItemsV2Put($cost_center_item_id, $cost_center_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCenterItemsV2Api->costCenterItemsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cost_center_item_id** | [**string**](../Model/.md)|  |
 **cost_center_item** | [**\Struqtur\VismaEAccounting\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CostCenterItemApi**](../Model/CostCenterItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

