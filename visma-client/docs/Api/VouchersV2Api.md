# Struqtur\VismaEAccounting\VouchersV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vouchersV2Get**](VouchersV2Api.md#vouchersV2Get) | **GET** /v2/vouchers | Get all vouchers from all fiscal years.
[**vouchersV2Get_0**](VouchersV2Api.md#vouchersV2Get_0) | **GET** /v2/vouchers/{fiscalyearId} | Get all vouchers in a given fiscal year.
[**vouchersV2Get_1**](VouchersV2Api.md#vouchersV2Get_1) | **GET** /v2/vouchers/{fiscalyearId}/{voucherId} | Get a single voucher from a given fiscal year
[**vouchersV2Post**](VouchersV2Api.md#vouchersV2Post) | **POST** /v2/vouchers | Create a voucher.


# **vouchersV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherApi vouchersV2Get()

Get all vouchers from all fiscal years.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->vouchersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherApi**](../Model/PaginatedResponseVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Get_0**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherApi vouchersV2Get_0($fiscalyear_id)

Get all vouchers in a given fiscal year.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "fiscalyear_id_example"; // string | 

try {
    $result = $apiInstance->vouchersV2Get_0($fiscalyear_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherApi**](../Model/PaginatedResponseVoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Get_1**
> \Struqtur\VismaEAccounting\Model\VoucherApi vouchersV2Get_1($fiscalyear_id, $voucher_id)

Get a single voucher from a given fiscal year

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "fiscalyear_id_example"; // string | 
$voucher_id = "voucher_id_example"; // string | 

try {
    $result = $apiInstance->vouchersV2Get_1($fiscalyear_id, $voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **voucher_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersV2Post**
> \Struqtur\VismaEAccounting\Model\VoucherApi vouchersV2Post($api_voucher, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series)

Create a voucher.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VouchersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_voucher = new \Struqtur\VismaEAccounting\Model\VoucherApi(); // \Struqtur\VismaEAccounting\Model\VoucherApi | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).

try {
    $result = $apiInstance->vouchersV2Post($api_voucher, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersV2Api->vouchersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_voucher** | [**\Struqtur\VismaEAccounting\Model\VoucherApi**](../Model/VoucherApi.md)|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

