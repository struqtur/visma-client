# Struqtur\VismaEAccounting\PaymentVoucherV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentVoucherV2PostPayment**](PaymentVoucherV2Api.md#paymentVoucherV2PostPayment) | **POST** /v2/paymentvoucher | Creates a payment voucher.


# **paymentVoucherV2PostPayment**
> \Struqtur\VismaEAccounting\Model\VoucherApi paymentVoucherV2PostPayment($payment_voucher_api, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction)

Creates a payment voucher.

Action available for norwegian and dutch companies only.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PaymentVoucherV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_voucher_api = new \Struqtur\VismaEAccounting\Model\PaymentVoucherApi(); // \Struqtur\VismaEAccounting\Model\PaymentVoucherApi | 
$use_automatic_vat_calculation = true; // bool | Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically.
$use_default_vat_codes = true; // bool | Default value: True. Set to false and override default vatcodes on all rows in the request.
$use_default_voucher_series = true; // bool | Default value: True. Set to false and override default voucher series (alphabetic character before number).
$check_existing_bank_transaction = true; // bool | Default value: False. Set to false and override existing bank transaction validation.

try {
    $result = $apiInstance->paymentVoucherV2PostPayment($payment_voucher_api, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentVoucherV2Api->paymentVoucherV2PostPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_voucher_api** | [**\Struqtur\VismaEAccounting\Model\PaymentVoucherApi**](../Model/PaymentVoucherApi.md)|  |
 **use_automatic_vat_calculation** | **bool**| Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. | [optional]
 **use_default_vat_codes** | **bool**| Default value: True. Set to false and override default vatcodes on all rows in the request. | [optional]
 **use_default_voucher_series** | **bool**| Default value: True. Set to false and override default voucher series (alphabetic character before number). | [optional]
 **check_existing_bank_transaction** | **bool**| Default value: False. Set to false and override existing bank transaction validation. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

