# Struqtur\VismaEAccounting\AttachmentsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsV2Delete**](AttachmentsV2Api.md#attachmentsV2Delete) | **DELETE** /v2/attachments/{attachmentId} | Delete a attachment
[**attachmentsV2Get**](AttachmentsV2Api.md#attachmentsV2Get) | **GET** /v2/attachments | Get a list of attachments
[**attachmentsV2Get_0**](AttachmentsV2Api.md#attachmentsV2Get_0) | **GET** /v2/attachments/{attachmentId} | Get a attachment
[**attachmentsV2Post**](AttachmentsV2Api.md#attachmentsV2Post) | **POST** /v2/attachments | Create a attachment


# **attachmentsV2Delete**
> object attachmentsV2Delete($attachment_id)

Delete a attachment

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->attachmentsV2Delete($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsV2Api->attachmentsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAttachmentResultApi attachmentsV2Get($include_matched, $include_temporary_url)

Get a list of attachments

If you don't need to download the attachment we advise using the includeTemporaryUrl parameter set to false in order to increase performance.<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_matched = true; // bool | Default value: true. When set to false the endpoint returns just the unmatched attachments.
$include_temporary_url = true; // bool | Default value: true. When set to false the endpoint returns attachments but does not provide the TemporaryUrl.

try {
    $result = $apiInstance->attachmentsV2Get($include_matched, $include_temporary_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsV2Api->attachmentsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_matched** | **bool**| Default value: true. When set to false the endpoint returns just the unmatched attachments. | [optional]
 **include_temporary_url** | **bool**| Default value: true. When set to false the endpoint returns attachments but does not provide the TemporaryUrl. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAttachmentResultApi**](../Model/PaginatedResponseAttachmentResultApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsV2Get_0**
> \Struqtur\VismaEAccounting\Model\AttachmentResultApi attachmentsV2Get_0($attachment_id)

Get a attachment

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->attachmentsV2Get_0($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsV2Api->attachmentsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AttachmentResultApi**](../Model/AttachmentResultApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsV2Post**
> \Struqtur\VismaEAccounting\Model\AttachmentResultApi attachmentsV2Post($posted_attachment)

Create a attachment

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$posted_attachment = new \Struqtur\VismaEAccounting\Model\AttachmentUploadApi(); // \Struqtur\VismaEAccounting\Model\AttachmentUploadApi | 

try {
    $result = $apiInstance->attachmentsV2Post($posted_attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsV2Api->attachmentsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **posted_attachment** | [**\Struqtur\VismaEAccounting\Model\AttachmentUploadApi**](../Model/AttachmentUploadApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AttachmentResultApi**](../Model/AttachmentResultApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

