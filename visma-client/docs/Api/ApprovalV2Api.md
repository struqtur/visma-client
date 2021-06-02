# Struqtur\VismaEAccounting\ApprovalV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approvalV2ApproveInvoice**](ApprovalV2Api.md#approvalV2ApproveInvoice) | **PUT** /v2/approval/supplierinvoice/{id} | Replace the approval status of a invoice draft.
[**approvalV2ApproveVatReport**](ApprovalV2Api.md#approvalV2ApproveVatReport) | **PUT** /v2/approval/vatreport/{id} | Replace the approval status of a vat report.


# **approvalV2ApproveInvoice**
> string approvalV2ApproveInvoice($approval_model, $id)

Replace the approval status of a invoice draft.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$approval_model = new \Struqtur\VismaEAccounting\Model\ApprovalApi(); // \Struqtur\VismaEAccounting\Model\ApprovalApi | 
$id = "id_example"; // string | The id of the invoice draft

try {
    $result = $apiInstance->approvalV2ApproveInvoice($approval_model, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **approval_model** | [**\Struqtur\VismaEAccounting\Model\ApprovalApi**](../Model/ApprovalApi.md)|  |
 **id** | [**string**](../Model/.md)| The id of the invoice draft |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvalV2ApproveVatReport**
> \Struqtur\VismaEAccounting\Model\VatReportApi approvalV2ApproveVatReport($approval_model, $id)

Replace the approval status of a vat report.

Make sure you have the correct approval settings in company settings and permissions on user level.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ApprovalV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$approval_model = new \Struqtur\VismaEAccounting\Model\ApprovalApi(); // \Struqtur\VismaEAccounting\Model\ApprovalApi | 
$id = "id_example"; // string | The id of the vat report

try {
    $result = $apiInstance->approvalV2ApproveVatReport($approval_model, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalV2Api->approvalV2ApproveVatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **approval_model** | [**\Struqtur\VismaEAccounting\Model\ApprovalApi**](../Model/ApprovalApi.md)|  |
 **id** | [**string**](../Model/.md)| The id of the vat report |

### Return type

[**\Struqtur\VismaEAccounting\Model\VatReportApi**](../Model/VatReportApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

