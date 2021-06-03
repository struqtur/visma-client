# Struqtur\VismaEAccounting\MessageThreadsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageThreadsV2Get**](MessageThreadsV2Api.md#messageThreadsV2Get) | **GET** /v2/messagethreads/{messageThreadId} | Retrives a message thread.
[**messageThreadsV2GetMessages**](MessageThreadsV2Api.md#messageThreadsV2GetMessages) | **GET** /v2/messagethreads/{messageThreadId}/messages | Retrives the messages of a message thread.
[**messageThreadsV2GetMessages_0**](MessageThreadsV2Api.md#messageThreadsV2GetMessages_0) | **GET** /v2/messagethreads/messages | Gets all the messages of the threads.
[**messageThreadsV2Get_0**](MessageThreadsV2Api.md#messageThreadsV2Get_0) | **GET** /v2/messagethreads | Gets all messages threads.
[**messageThreadsV2MarkThread**](MessageThreadsV2Api.md#messageThreadsV2MarkThread) | **PUT** /v2/messagethreads/{messageThreadId} | Marks a specific message thread.
[**messageThreadsV2Post**](MessageThreadsV2Api.md#messageThreadsV2Post) | **POST** /v2/messagethreads | Create a new message thread.
[**messageThreadsV2ReplyToMessage**](MessageThreadsV2Api.md#messageThreadsV2ReplyToMessage) | **POST** /v2/messagethreads/{messageThreadId} | Replies to a message thread.


# **messageThreadsV2Get**
> \Struqtur\VismaEAccounting\Model\MessageThreadApi messageThreadsV2Get($message_thread_id)

Retrives a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_thread_id = "message_thread_id_example"; // string | 

try {
    $result = $apiInstance->messageThreadsV2Get($message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2GetMessages**
> \Struqtur\VismaEAccounting\Model\MessageApi messageThreadsV2GetMessages($message_thread_id)

Retrives the messages of a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_thread_id = "message_thread_id_example"; // string | 

try {
    $result = $apiInstance->messageThreadsV2GetMessages($message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2GetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2GetMessages_0**
> \Struqtur\VismaEAccounting\Model\MessageApi messageThreadsV2GetMessages_0()

Gets all the messages of the threads.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messageThreadsV2GetMessages_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2GetMessages_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2Get_0**
> \Struqtur\VismaEAccounting\Model\MessageThreadApi messageThreadsV2Get_0($exclude_closed)

Gets all messages threads.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exclude_closed = true; // bool | 

try {
    $result = $apiInstance->messageThreadsV2Get_0($exclude_closed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_closed** | **bool**|  | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2MarkThread**
> \Struqtur\VismaEAccounting\Model\MessageThreadApi messageThreadsV2MarkThread($options, $message_thread_id)

Marks a specific message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = new \Struqtur\VismaEAccounting\Model\MessageStatusApi(); // \Struqtur\VismaEAccounting\Model\MessageStatusApi | 
$message_thread_id = "message_thread_id_example"; // string | 

try {
    $result = $apiInstance->messageThreadsV2MarkThread($options, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2MarkThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | [**\Struqtur\VismaEAccounting\Model\MessageStatusApi**](../Model/MessageStatusApi.md)|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2Post**
> \Struqtur\VismaEAccounting\Model\MessageThreadApi messageThreadsV2Post($message_to_post_api)

Create a new message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_to_post_api = new \Struqtur\VismaEAccounting\Model\MessageToPostApi(); // \Struqtur\VismaEAccounting\Model\MessageToPostApi | 

try {
    $result = $apiInstance->messageThreadsV2Post($message_to_post_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_to_post_api** | [**\Struqtur\VismaEAccounting\Model\MessageToPostApi**](../Model/MessageToPostApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageThreadApi**](../Model/MessageThreadApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageThreadsV2ReplyToMessage**
> \Struqtur\VismaEAccounting\Model\MessageApi messageThreadsV2ReplyToMessage($message_reply_api, $message_thread_id)

Replies to a message thread.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\MessageThreadsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_reply_api = new \Struqtur\VismaEAccounting\Model\MessageApi(); // \Struqtur\VismaEAccounting\Model\MessageApi | 
$message_thread_id = "message_thread_id_example"; // string | 

try {
    $result = $apiInstance->messageThreadsV2ReplyToMessage($message_reply_api, $message_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageThreadsV2Api->messageThreadsV2ReplyToMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_reply_api** | [**\Struqtur\VismaEAccounting\Model\MessageApi**](../Model/MessageApi.md)|  |
 **message_thread_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\MessageApi**](../Model/MessageApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

