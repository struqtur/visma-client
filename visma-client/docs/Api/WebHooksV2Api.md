# Struqtur\VismaEAccounting\WebHooksV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webHooksV2Delete**](WebHooksV2Api.md#webHooksV2Delete) | **DELETE** /v2/webhooks/{webHookId} | Deletes a webhook
[**webHooksV2Get**](WebHooksV2Api.md#webHooksV2Get) | **GET** /v2/webhooks | Get a list of webhooks.
[**webHooksV2Get_0**](WebHooksV2Api.md#webHooksV2Get_0) | **GET** /v2/webhooks/{webHookId} | Get a webhook by id.
[**webHooksV2Post**](WebHooksV2Api.md#webHooksV2Post) | **POST** /v2/webhooks | Creates a webhook.
[**webHooksV2Put**](WebHooksV2Api.md#webHooksV2Put) | **PUT** /v2/webhooks/{webHookId} | Updates a webhook.


# **webHooksV2Delete**
> object webHooksV2Delete($web_hook_id)

Deletes a webhook

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase, ea:sales, ea:accounting, ea:purchase, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\WebHooksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_hook_id = "web_hook_id_example"; // string | 

try {
    $result = $apiInstance->webHooksV2Delete($web_hook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHooksV2Api->webHooksV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseWebHookApi webHooksV2Get()

Get a list of webhooks.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase, ea:sales, ea:accounting, ea:purchase, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\WebHooksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->webHooksV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHooksV2Api->webHooksV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseWebHookApi**](../Model/PaginatedResponseWebHookApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksV2Get_0**
> \Struqtur\VismaEAccounting\Model\WebHookApi webHooksV2Get_0($web_hook_id)

Get a webhook by id.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase, ea:sales, ea:accounting, ea:purchase, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\WebHooksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_hook_id = "web_hook_id_example"; // string | 

try {
    $result = $apiInstance->webHooksV2Get_0($web_hook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHooksV2Api->webHooksV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\WebHookApi**](../Model/WebHookApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksV2Post**
> \Struqtur\VismaEAccounting\Model\WebHookApi webHooksV2Post($web_hook)

Creates a webhook.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase, ea:sales, ea:accounting, ea:purchase, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\WebHooksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_hook = new \Struqtur\VismaEAccounting\Model\WebHookApi(); // \Struqtur\VismaEAccounting\Model\WebHookApi | 

try {
    $result = $apiInstance->webHooksV2Post($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHooksV2Api->webHooksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook** | [**\Struqtur\VismaEAccounting\Model\WebHookApi**](../Model/WebHookApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\WebHookApi**](../Model/WebHookApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksV2Put**
> \Struqtur\VismaEAccounting\Model\WebHookApi webHooksV2Put($web_hook_api, $web_hook_id)

Updates a webhook.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase, ea:sales, ea:accounting, ea:purchase, ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\WebHooksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_hook_api = new \Struqtur\VismaEAccounting\Model\WebHookApi(); // \Struqtur\VismaEAccounting\Model\WebHookApi | 
$web_hook_id = "web_hook_id_example"; // string | 

try {
    $result = $apiInstance->webHooksV2Put($web_hook_api, $web_hook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebHooksV2Api->webHooksV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook_api** | [**\Struqtur\VismaEAccounting\Model\WebHookApi**](../Model/WebHookApi.md)|  |
 **web_hook_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\WebHookApi**](../Model/WebHookApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

