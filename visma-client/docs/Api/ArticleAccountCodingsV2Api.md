# Struqtur\VismaEAccounting\ArticleAccountCodingsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**articleAccountCodingsV2Get**](ArticleAccountCodingsV2Api.md#articleAccountCodingsV2Get) | **GET** /v2/articleaccountcodings | Get a list of article account codings
[**articleAccountCodingsV2Get_0**](ArticleAccountCodingsV2Api.md#articleAccountCodingsV2Get_0) | **GET** /v2/articleaccountcodings/{articleAccountCodingId} | Get a single article account coding. Vat rates are on present UTC time. Specify date (yyyy-MM-dd) to get for specific date.


# **articleAccountCodingsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseArticleAccountCodingAPI articleAccountCodingsV2Get($vat_rate_date)

Get a list of article account codings

Vat rates are on present UTC time. Specify date (yyyy-MM-dd) to get for specific date.<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleAccountCodingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vat_rate_date = "vat_rate_date_example"; // string | 

try {
    $result = $apiInstance->articleAccountCodingsV2Get($vat_rate_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleAccountCodingsV2Api->articleAccountCodingsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vat_rate_date** | **string**|  | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseArticleAccountCodingAPI**](../Model/PaginatedResponseArticleAccountCodingAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleAccountCodingsV2Get_0**
> \Struqtur\VismaEAccounting\Model\ArticleAccountCodingAPI articleAccountCodingsV2Get_0($article_account_coding_id, $vat_rate_date)

Get a single article account coding. Vat rates are on present UTC time. Specify date (yyyy-MM-dd) to get for specific date.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleAccountCodingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_account_coding_id = "article_account_coding_id_example"; // string | 
$vat_rate_date = "vat_rate_date_example"; // string | 

try {
    $result = $apiInstance->articleAccountCodingsV2Get_0($article_account_coding_id, $vat_rate_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleAccountCodingsV2Api->articleAccountCodingsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_account_coding_id** | [**string**](../Model/.md)|  |
 **vat_rate_date** | **string**|  | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleAccountCodingAPI**](../Model/ArticleAccountCodingAPI.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

