# Struqtur\VismaEAccounting\CustomerLedgerItemsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerLedgerItemsV2Get**](CustomerLedgerItemsV2Api.md#customerLedgerItemsV2Get) | **GET** /v2/customerledgeritems | Get a list of customer ledger items.
[**customerLedgerItemsV2Get_0**](CustomerLedgerItemsV2Api.md#customerLedgerItemsV2Get_0) | **GET** /v2/customerledgeritems/{customerLedgerItemId} | Get a customer ledger item by id.
[**customerLedgerItemsV2Post**](CustomerLedgerItemsV2Api.md#customerLedgerItemsV2Post) | **POST** /v2/customerledgeritems | Create a customer ledger item.
[**customerLedgerItemsV2Post_0**](CustomerLedgerItemsV2Api.md#customerLedgerItemsV2Post_0) | **POST** /v2/customerledgeritems/customerledgeritemswithvoucher | Create a customer ledger item and a voucher included.


# **customerLedgerItemsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerLedgerItemApi customerLedgerItemsV2Get()

Get a list of customer ledger items.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerLedgerItemsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerLedgerItemApi**](../Model/PaginatedResponseCustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Get_0**
> \Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi customerLedgerItemsV2Get_0($customer_ledger_item_id)

Get a customer ledger item by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ledger_item_id = "customer_ledger_item_id_example"; // string | 

try {
    $result = $apiInstance->customerLedgerItemsV2Get_0($customer_ledger_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_ledger_item_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post**
> \Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi customerLedgerItemsV2Post($customer_ledger_item)

Create a customer ledger item.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ledger_item = new \Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi(); // \Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi | 

try {
    $result = $apiInstance->customerLedgerItemsV2Post($customer_ledger_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_ledger_item** | [**\Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLedgerItemApi**](../Model/CustomerLedgerItemApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLedgerItemsV2Post_0**
> \Struqtur\VismaEAccounting\Model\CustomerLedgerItemWithVoucherApi customerLedgerItemsV2Post_0($customer_ledger_item, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a customer ledger item and a voucher included.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLedgerItemsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ledger_item = new \Struqtur\VismaEAccounting\Model\CustomerLedgerItemWithVoucherApi(); // \Struqtur\VismaEAccounting\Model\CustomerLedgerItemWithVoucherApi | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->customerLedgerItemsV2Post_0($customer_ledger_item, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLedgerItemsV2Api->customerLedgerItemsV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_ledger_item** | [**\Struqtur\VismaEAccounting\Model\CustomerLedgerItemWithVoucherApi**](../Model/CustomerLedgerItemWithVoucherApi.md)|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLedgerItemWithVoucherApi**](../Model/CustomerLedgerItemWithVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

