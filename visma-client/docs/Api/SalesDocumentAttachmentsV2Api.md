# Struqtur\VismaEAccounting\SalesDocumentAttachmentsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesDocumentAttachmentsV2Delete**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2Delete) | **DELETE** /v2/salesdocumentattachments/{customerInvoiceDraftId}/{attachmentId} | Delete a customer invoice draft attachment.
[**salesDocumentAttachmentsV2DeleteCustomerInvoice**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2DeleteCustomerInvoice) | **DELETE** /v2/salesdocumentattachments/customerinvoice/{customerInvoiceId}/{attachmentId} | Delete a document attached to a customer invoice (including customer ledger items).
[**salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft) | **DELETE** /v2/salesdocumentattachments/customerinvoicedraft/{customerInvoiceDraftId}/{attachmentId} | Delete a document attached to a customer invoice draft.
[**salesDocumentAttachmentsV2Get**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2Get) | **GET** /v2/salesdocumentattachments/{attachmentId}.pdf | Download a specific sales document attachment using the attachmentId.
[**salesDocumentAttachmentsV2Post**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2Post) | **POST** /v2/salesdocumentattachments | Create a sales document attachment.
[**salesDocumentAttachmentsV2PostCustomerInvoice**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2PostCustomerInvoice) | **POST** /v2/salesdocumentattachments/customerinvoice | Create a sales document attached to a customer invoice (including customer ledger items).
[**salesDocumentAttachmentsV2PostCustomerInvoiceDraft**](SalesDocumentAttachmentsV2Api.md#salesDocumentAttachmentsV2PostCustomerInvoiceDraft) | **POST** /v2/salesdocumentattachments/customerinvoicedraft | Create a sales document attached to a customer invoice draft.


# **salesDocumentAttachmentsV2Delete**
> object salesDocumentAttachmentsV2Delete($customer_invoice_draft_id, $attachment_id)

Delete a customer invoice draft attachment.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "customer_invoice_draft_id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Delete($customer_invoice_draft_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2DeleteCustomerInvoice**
> object salesDocumentAttachmentsV2DeleteCustomerInvoice($customer_invoice_id, $attachment_id)

Delete a document attached to a customer invoice (including customer ledger items).

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_id = "customer_invoice_id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2DeleteCustomerInvoice($customer_invoice_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2DeleteCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft**
> object salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft($customer_invoice_draft_id, $attachment_id)

Delete a document attached to a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "customer_invoice_draft_id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft($customer_invoice_draft_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2DeleteCustomerInvoiceDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2Get**
> object salesDocumentAttachmentsV2Get($attachment_id)

Download a specific sales document attachment using the attachmentId.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Get($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Get: ', $e->getMessage(), PHP_EOL;
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

# **salesDocumentAttachmentsV2Post**
> \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2Post($attachment)

Create a sales document attachment.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment = new \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi(); // \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2Post($attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | [**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoice**
> \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoice($attachment)

Create a sales document attached to a customer invoice (including customer ledger items).

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment = new \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi(); // \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoice($attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | [**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesDocumentAttachmentsV2PostCustomerInvoiceDraft**
> \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi salesDocumentAttachmentsV2PostCustomerInvoiceDraft($attachment)

Create a sales document attached to a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SalesDocumentAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment = new \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi(); // \Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi | 

try {
    $result = $apiInstance->salesDocumentAttachmentsV2PostCustomerInvoiceDraft($attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesDocumentAttachmentsV2Api->salesDocumentAttachmentsV2PostCustomerInvoiceDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | [**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentUploadApi**](../Model/SalesDocumentAttachmentUploadApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SalesDocumentAttachmentApi**](../Model/SalesDocumentAttachmentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

