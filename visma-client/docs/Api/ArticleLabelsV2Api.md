# Struqtur\VismaEAccounting\ArticleLabelsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**articleLabelsV2Delete**](ArticleLabelsV2Api.md#articleLabelsV2Delete) | **DELETE** /v2/articlelabels/{articleLabelId} | Deletes an article label.
[**articleLabelsV2Get**](ArticleLabelsV2Api.md#articleLabelsV2Get) | **GET** /v2/articlelabels | Gets all article labels.
[**articleLabelsV2Get_0**](ArticleLabelsV2Api.md#articleLabelsV2Get_0) | **GET** /v2/articlelabels/{articleLabelId} | Gets an article label by id.
[**articleLabelsV2Post**](ArticleLabelsV2Api.md#articleLabelsV2Post) | **POST** /v2/articlelabels | Create an article label.
[**articleLabelsV2Put**](ArticleLabelsV2Api.md#articleLabelsV2Put) | **PUT** /v2/articlelabels/{articleLabelId} | Replace the content of an article label.


# **articleLabelsV2Delete**
> \Struqtur\VismaEAccounting\Model\ArticleLabelApi articleLabelsV2Delete($article_label_id)

Deletes an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_label_id = "article_label_id_example"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Delete($article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseArticleLabelApi articleLabelsV2Get()

Gets all article labels.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->articleLabelsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseArticleLabelApi**](../Model/PaginatedResponseArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Get_0**
> \Struqtur\VismaEAccounting\Model\ArticleLabelApi articleLabelsV2Get_0($article_label_id)

Gets an article label by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_label_id = "article_label_id_example"; // string | 

try {
    $result = $apiInstance->articleLabelsV2Get_0($article_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Post**
> \Struqtur\VismaEAccounting\Model\ArticleLabelApi articleLabelsV2Post($from_article_label)

Create an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_article_label = new \Struqtur\VismaEAccounting\Model\ArticleLabelApi(); // \Struqtur\VismaEAccounting\Model\ArticleLabelApi | 

try {
    $result = $apiInstance->articleLabelsV2Post($from_article_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_article_label** | [**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articleLabelsV2Put**
> \Struqtur\VismaEAccounting\Model\ArticleLabelApi articleLabelsV2Put($article_label_id, $from_article_label)

Replace the content of an article label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticleLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_label_id = "article_label_id_example"; // string | 
$from_article_label = new \Struqtur\VismaEAccounting\Model\ArticleLabelApi(); // \Struqtur\VismaEAccounting\Model\ArticleLabelApi | 

try {
    $result = $apiInstance->articleLabelsV2Put($article_label_id, $from_article_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleLabelsV2Api->articleLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_label_id** | [**string**](../Model/.md)|  |
 **from_article_label** | [**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleLabelApi**](../Model/ArticleLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

