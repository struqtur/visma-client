# Struqtur\VismaEAccounting\ForeignPaymentCodesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foreignPaymentCodesV2Get**](ForeignPaymentCodesV2Api.md#foreignPaymentCodesV2Get) | **GET** /v2/foreignpaymentcodes | Gets a list of foreign payment codes.


# **foreignPaymentCodesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseForeignPaymentCodesAPI foreignPaymentCodesV2Get()

Gets a list of foreign payment codes.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ForeignPaymentCodesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->foreignPaymentCodesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignPaymentCodesV2Api->foreignPaymentCodesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseForeignPaymentCodesAPI**](../Model/PaginatedResponseForeignPaymentCodesAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

