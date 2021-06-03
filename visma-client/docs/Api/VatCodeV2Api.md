# Struqtur\VismaEAccounting\VatCodeV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatCodeV2Get**](VatCodeV2Api.md#vatCodeV2Get) | **GET** /v2/vatcodes | Gets a list of all vat codes
[**vatCodeV2Get_0**](VatCodeV2Api.md#vatCodeV2Get_0) | **GET** /v2/vatcodes/{id} | Get a vat code item by it&#39;s id.


# **vatCodeV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseVatCodeApi vatCodeV2Get($vat_rate_date)

Gets a list of all vat codes

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VatCodeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vat_rate_date = "vat_rate_date_example"; // string | Default value: Today

try {
    $result = $apiInstance->vatCodeV2Get($vat_rate_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatCodeV2Api->vatCodeV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_rate_date** | **string**| Default value: Today | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseVatCodeApi**](../Model/PaginatedResponseVatCodeApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vatCodeV2Get_0**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseVatCodeApi vatCodeV2Get_0($id, $vat_rate_date)

Get a vat code item by it's id.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VatCodeV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$vat_rate_date = "vat_rate_date_example"; // string | Default value: Today

try {
    $result = $apiInstance->vatCodeV2Get_0($id, $vat_rate_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatCodeV2Api->vatCodeV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **vat_rate_date** | **string**| Default value: Today | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseVatCodeApi**](../Model/PaginatedResponseVatCodeApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

