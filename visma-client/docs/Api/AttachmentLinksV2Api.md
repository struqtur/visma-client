# Struqtur\VismaEAccounting\AttachmentLinksV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentLinksV2Delete**](AttachmentLinksV2Api.md#attachmentLinksV2Delete) | **DELETE** /v2/attachmentlinks/{attachmentId} | Delete the link between an existing document and its attachment.
[**attachmentLinksV2Post**](AttachmentLinksV2Api.md#attachmentLinksV2Post) | **POST** /v2/attachmentlinks | Create new links between an existing document and a set of attachments.


# **attachmentLinksV2Delete**
> object attachmentLinksV2Delete($attachment_id)

Delete the link between an existing document and its attachment.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->attachmentLinksV2Delete($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentLinksV2Api->attachmentLinksV2Delete: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentLinksV2Post**
> \Struqtur\VismaEAccounting\Model\AttachmentLinkApi attachmentLinksV2Post($attachment_links)

Create new links between an existing document and a set of attachments.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AttachmentLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_links = new \Struqtur\VismaEAccounting\Model\AttachmentLinkApi(); // \Struqtur\VismaEAccounting\Model\AttachmentLinkApi | 

try {
    $result = $apiInstance->attachmentLinksV2Post($attachment_links);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentLinksV2Api->attachmentLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_links** | [**\Struqtur\VismaEAccounting\Model\AttachmentLinkApi**](../Model/AttachmentLinkApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AttachmentLinkApi**](../Model/AttachmentLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

