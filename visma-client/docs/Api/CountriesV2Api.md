# Struqtur\VismaEAccounting\CountriesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countriesV2Get**](CountriesV2Api.md#countriesV2Get) | **GET** /v2/countries | Get a list of all countries.
[**countriesV2Get_0**](CountriesV2Api.md#countriesV2Get_0) | **GET** /v2/countries/{countrycode} | Get a single country.


# **countriesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCountryApi countriesV2Get()

Get a list of all countries.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CountriesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->countriesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesV2Api->countriesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCountryApi**](../Model/PaginatedResponseCountryApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesV2Get_0**
> \Struqtur\VismaEAccounting\Model\CountryApi countriesV2Get_0($countrycode)

Get a single country.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CountriesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$countrycode = "countrycode_example"; // string | Two letter code of requested country.

try {
    $result = $apiInstance->countriesV2Get_0($countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesV2Api->countriesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countrycode** | **string**| Two letter code of requested country. |

### Return type

[**\Struqtur\VismaEAccounting\Model\CountryApi**](../Model/CountryApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

