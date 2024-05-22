# Struqtur\VismaEAccounting\DiscountAgreementsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountAgreementsV2Get**](DiscountAgreementsV2Api.md#discountAgreementsV2Get) | **GET** /v2/discountagreements | Gets discount agreements.
[**discountAgreementsV2Get_0**](DiscountAgreementsV2Api.md#discountAgreementsV2Get_0) | **GET** /v2/discountagreements/{discountAgreementId} | Gets a discount agreement by id.


# **discountAgreementsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseDiscountAgreementApi discountAgreementsV2Get()

Gets discount agreements.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\DiscountAgreementsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->discountAgreementsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountAgreementsV2Api->discountAgreementsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseDiscountAgreementApi**](../Model/PaginatedResponseDiscountAgreementApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountAgreementsV2Get_0**
> \Struqtur\VismaEAccounting\Model\DiscountAgreementApi discountAgreementsV2Get_0($discount_agreement_id)

Gets a discount agreement by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\DiscountAgreementsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_agreement_id = "discount_agreement_id_example"; // string | 

try {
    $result = $apiInstance->discountAgreementsV2Get_0($discount_agreement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountAgreementsV2Api->discountAgreementsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discount_agreement_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\DiscountAgreementApi**](../Model/DiscountAgreementApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

