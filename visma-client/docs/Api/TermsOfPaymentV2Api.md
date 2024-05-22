# Struqtur\VismaEAccounting\TermsOfPaymentV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**termsOfPaymentV2Get**](TermsOfPaymentV2Api.md#termsOfPaymentV2Get) | **GET** /v2/termsofpayments | Get a list of terms of payment items
[**termsOfPaymentV2Get_0**](TermsOfPaymentV2Api.md#termsOfPaymentV2Get_0) | **GET** /v2/termsofpayments/{id} | Get a terms of payment item by id


# **termsOfPaymentV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseTermsOfPaymentApi termsOfPaymentV2Get()

Get a list of terms of payment items

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\TermsOfPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->termsOfPaymentV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentV2Api->termsOfPaymentV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseTermsOfPaymentApi**](../Model/PaginatedResponseTermsOfPaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termsOfPaymentV2Get_0**
> \Struqtur\VismaEAccounting\Model\TermsOfPaymentApi termsOfPaymentV2Get_0($id)

Get a terms of payment item by id

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\TermsOfPaymentV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->termsOfPaymentV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsOfPaymentV2Api->termsOfPaymentV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\TermsOfPaymentApi**](../Model/TermsOfPaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

