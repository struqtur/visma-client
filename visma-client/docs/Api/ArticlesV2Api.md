# Struqtur\VismaEAccounting\ArticlesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**articlesV2Get**](ArticlesV2Api.md#articlesV2Get) | **GET** /v2/articles | Gets articles.
[**articlesV2Get_0**](ArticlesV2Api.md#articlesV2Get_0) | **GET** /v2/articles/{articleId} | Gets an article by id.
[**articlesV2Post**](ArticlesV2Api.md#articlesV2Post) | **POST** /v2/articles | Create a single article.
[**articlesV2Put**](ArticlesV2Api.md#articlesV2Put) | **PUT** /v2/articles/{articleId} | Replace the data in an article.


# **articlesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseArticleApi articlesV2Get($show_prices_with_two_decimals)

Gets articles.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$show_prices_with_two_decimals = true; // bool | 

try {
    $result = $apiInstance->articlesV2Get($show_prices_with_two_decimals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_prices_with_two_decimals** | **bool**|  | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseArticleApi**](../Model/PaginatedResponseArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Get_0**
> \Struqtur\VismaEAccounting\Model\ArticleApi articlesV2Get_0($article_id, $show_prices_with_two_decimals)

Gets an article by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_id = "article_id_example"; // string | 
$show_prices_with_two_decimals = true; // bool | 

try {
    $result = $apiInstance->articlesV2Get_0($article_id, $show_prices_with_two_decimals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_id** | [**string**](../Model/.md)|  |
 **show_prices_with_two_decimals** | **bool**|  | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Post**
> \Struqtur\VismaEAccounting\Model\ArticleApi articlesV2Post($article)

Create a single article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article = new \Struqtur\VismaEAccounting\Model\ArticleApi(); // \Struqtur\VismaEAccounting\Model\ArticleApi | 

try {
    $result = $apiInstance->articlesV2Post($article);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article** | [**\Struqtur\VismaEAccounting\Model\ArticleApi**](../Model/ArticleApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **articlesV2Put**
> \Struqtur\VismaEAccounting\Model\ArticleApi articlesV2Put($article_id, $article)

Replace the data in an article.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ArticlesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_id = "article_id_example"; // string | 
$article = new \Struqtur\VismaEAccounting\Model\ArticleApi(); // \Struqtur\VismaEAccounting\Model\ArticleApi | 

try {
    $result = $apiInstance->articlesV2Put($article_id, $article);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesV2Api->articlesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_id** | [**string**](../Model/.md)|  |
 **article** | [**\Struqtur\VismaEAccounting\Model\ArticleApi**](../Model/ArticleApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ArticleApi**](../Model/ArticleApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

