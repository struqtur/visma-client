# Struqtur\VismaEAccounting\QuotesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotesV2ConvertToInvoice**](QuotesV2Api.md#quotesV2ConvertToInvoice) | **POST** /v2/quotes/{id}/converttocustomerinvoice | Converts an existing quote to a customer invoice
[**quotesV2ConvertToOrder**](QuotesV2Api.md#quotesV2ConvertToOrder) | **POST** /v2/quotes/{id}/converttoorder | Converts an existing quote to a order type
[**quotesV2Delete**](QuotesV2Api.md#quotesV2Delete) | **DELETE** /v2/quotes/{id} | Delete an quote.
[**quotesV2Get**](QuotesV2Api.md#quotesV2Get) | **GET** /v2/quotes | Get sent and converted quotes.
[**quotesV2Get_0**](QuotesV2Api.md#quotesV2Get_0) | **GET** /v2/quotes/{id} | Get a sent and converted quote
[**quotesV2Post**](QuotesV2Api.md#quotesV2Post) | **POST** /v2/quotes | Create a quote.
[**quotesV2Print**](QuotesV2Api.md#quotesV2Print) | **GET** /v2/quotes/{id}/print | Get a pdf-file of a quote.
[**quotesV2Put**](QuotesV2Api.md#quotesV2Put) | **PUT** /v2/quotes/{id} | Replace the contents of an ongoing quote.
[**quotesV2Put_0**](QuotesV2Api.md#quotesV2Put_0) | **PUT** /v2/quotes/{id}/accept | Accepts an ongoing quote


# **quotesV2ConvertToInvoice**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi quotesV2ConvertToInvoice($id)

Converts an existing quote to a customer invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quotesV2ConvertToInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2ConvertToOrder**
> \Struqtur\VismaEAccounting\Model\OrderApi quotesV2ConvertToOrder($id, $conversion_type)

Converts an existing quote to a order type

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$conversion_type = new \Struqtur\VismaEAccounting\Model\QuoteConversionApi(); // \Struqtur\VismaEAccounting\Model\QuoteConversionApi | 

try {
    $result = $apiInstance->quotesV2ConvertToOrder($id, $conversion_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2ConvertToOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **conversion_type** | [**\Struqtur\VismaEAccounting\Model\QuoteConversionApi**](../Model/QuoteConversionApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2Delete**
> object quotesV2Delete($id)

Delete an quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quotesV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseQuoteApi quotesV2Get()

Get sent and converted quotes.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quotesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Get: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Get_0**
> \Struqtur\VismaEAccounting\Model\QuoteApi quotesV2Get_0($id)

Get a sent and converted quote

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quotesV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Get_0: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Post**
> \Struqtur\VismaEAccounting\Model\QuoteApi quotesV2Post($quote_api)

Create a quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quote_api = new \Struqtur\VismaEAccounting\Model\QuoteApi(); // \Struqtur\VismaEAccounting\Model\QuoteApi | 

try {
    $result = $apiInstance->quotesV2Post($quote_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_api** | [**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\QuoteApi**](../Model/QuoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2Print**
> object quotesV2Print($id)

Get a pdf-file of a quote.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the quote

try {
    $result = $apiInstance->quotesV2Print($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the quote |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesV2Put**
> object quotesV2Put($id, $quote_api)

Replace the contents of an ongoing quote.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$quote_api = new \Struqtur\VismaEAccounting\Model\QuoteApi(); // \Struqtur\VismaEAccounting\Model\QuoteApi | 

try {
    $result = $apiInstance->quotesV2Put($id, $quote_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Put: ', $e->getMessage(), PHP_EOL;
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

# **quotesV2Put_0**
> object quotesV2Put_0($id)

Accepts an ongoing quote

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>quote_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\QuotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->quotesV2Put_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesV2Api->quotesV2Put_0: ', $e->getMessage(), PHP_EOL;
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

