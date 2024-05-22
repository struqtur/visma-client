# Struqtur\VismaEAccounting\VoucherWithOverunderPaymentV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherWithOverunderPaymentV2Get**](VoucherWithOverunderPaymentV2Api.md#voucherWithOverunderPaymentV2Get) | **GET** /v2/voucherwithoverunderpayment/{voucherId} | Get all customer or supplier references for a specific voucher Id
[**voucherWithOverunderPaymentV2Post**](VoucherWithOverunderPaymentV2Api.md#voucherWithOverunderPaymentV2Post) | **POST** /v2/voucherwithoverunderpayment | Create an over or underpayment voucher


# **voucherWithOverunderPaymentV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseLedgerVoucherRelationApi voucherWithOverunderPaymentV2Get($voucher_id)

Get all customer or supplier references for a specific voucher Id

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherWithOverunderPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_id = "voucher_id_example"; // string | 

try {
    $result = $apiInstance->voucherWithOverunderPaymentV2Get($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherWithOverunderPaymentV2Api->voucherWithOverunderPaymentV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseLedgerVoucherRelationApi**](../Model/PaginatedResponseLedgerVoucherRelationApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherWithOverunderPaymentV2Post**
> string voucherWithOverunderPaymentV2Post($overunder_payment_voucher_api)

Create an over or underpayment voucher

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherWithOverunderPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$overunder_payment_voucher_api = new \Struqtur\VismaEAccounting\Model\VoucherWithOverunderPaymentApi(); // \Struqtur\VismaEAccounting\Model\VoucherWithOverunderPaymentApi | 

try {
    $result = $apiInstance->voucherWithOverunderPaymentV2Post($overunder_payment_voucher_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherWithOverunderPaymentV2Api->voucherWithOverunderPaymentV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overunder_payment_voucher_api** | [**\Struqtur\VismaEAccounting\Model\VoucherWithOverunderPaymentApi**](../Model/VoucherWithOverunderPaymentApi.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

