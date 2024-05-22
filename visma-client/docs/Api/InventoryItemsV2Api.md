# Struqtur\VismaEAccounting\InventoryItemsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryItemsV2Get**](InventoryItemsV2Api.md#inventoryItemsV2Get) | **GET** /v2/inventoryitems | Get a list of inventory items.
[**inventoryItemsV2Get_0**](InventoryItemsV2Api.md#inventoryItemsV2Get_0) | **GET** /v2/inventoryitems/{id} | Get a specific inventory item.


# **inventoryItemsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseInventoryItemApi inventoryItemsV2Get()

Get a list of inventory items.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\InventoryItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->inventoryItemsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsV2Api->inventoryItemsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseInventoryItemApi**](../Model/PaginatedResponseInventoryItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryItemsV2Get_0**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseInventoryItemApi inventoryItemsV2Get_0($id)

Get a specific inventory item.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\InventoryItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Inventory Item Id

try {
    $result = $apiInstance->inventoryItemsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsV2Api->inventoryItemsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Inventory Item Id |

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseInventoryItemApi**](../Model/PaginatedResponseInventoryItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

