# Struqtur\VismaEAccounting\QuoteDraftsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteDraftsV2ConvertToQuote**](QuoteDraftsV2Api.md#quoteDraftsV2ConvertToQuote) | **PUT** /v2/quotedrafts/{id}/convert | Converts a quote draft to a quote
[**quoteDraftsV2Delete**](QuoteDraftsV2Api.md#quoteDraftsV2Delete) | **DELETE** /v2/quotedrafts/{id} | Delete an quote.
[**quoteDraftsV2Get**](QuoteDraftsV2Api.md#quoteDraftsV2Get) | **GET** /v2/quotedrafts | Get all quote drafts.
[**quoteDraftsV2Get_0**](QuoteDraftsV2Api.md#quoteDraftsV2Get_0) | **GET** /v2/quotedrafts/{id} | Get a quote draft
[**quoteDraftsV2Post**](QuoteDraftsV2Api.md#quoteDraftsV2Post) | **POST** /v2/quotedrafts | Create quote draft.
[**quoteDraftsV2Put**](QuoteDraftsV2Api.md#quoteDraftsV2Put) | **PUT** /v2/quotedrafts/{id} | Replace content in an quote.


# **quoteDraftsV2ConvertToQuote**
> \Struqtur\VismaEAccounting\Model\QuoteApi quoteDraftsV2ConvertToQuote($id)

Converts a quote draft to a quote

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2ConvertToQuote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2ConvertToQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Delete**
> object quoteDraftsV2Delete($id)

Delete an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseQuoteApi quoteDraftsV2Get()

Get all quote drafts.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseQuoteApi**](../Model/PaginatedResponseQuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Get_0**
> \Struqtur\VismaEAccounting\Model\QuoteApi quoteDraftsV2Get_0($id)

Get a quote draft

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quoteDraftsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Post**
> \Struqtur\VismaEAccounting\Model\QuoteApi quoteDraftsV2Post($quote_draft_api)

Create quote draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quote_draft_api = new \Struqtur\VismaEAccounting\Model\QuoteApi(); // \Struqtur\VismaEAccounting\Model\QuoteApi | 

try {
    $result = $apiInstance->quoteDraftsV2Post($quote_draft_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_draft_api** | [**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteDraftsV2Put**
> object quoteDraftsV2Put($id, $quote_api)

Replace content in an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuoteDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$quote_api = new \Struqtur\VismaEAccounting\Model\QuoteApi(); // \Struqtur\VismaEAccounting\Model\QuoteApi | 

try {
    $result = $apiInstance->quoteDraftsV2Put($id, $quote_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteDraftsV2Api->quoteDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **quote_api** | [**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

