# Struqtur\VismaEAccounting\SupplierInvoiceDraftsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierInvoiceDraftsV2Convert**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Convert) | **POST** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId}/convert | Converts a supplier invoice draft to a supplier invoice
[**supplierInvoiceDraftsV2Delete**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Delete) | **DELETE** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Deletes a supplier invoice draft
[**supplierInvoiceDraftsV2Get**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Get) | **GET** /v2/supplierinvoicedrafts | Get a paginated list of all supplier invoice drafts.
[**supplierInvoiceDraftsV2Get_0**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Get_0) | **GET** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Get a single supplier invoice draft.
[**supplierInvoiceDraftsV2Post**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Post) | **POST** /v2/supplierinvoicedrafts | Create a supplier invoice draft.
[**supplierInvoiceDraftsV2Put**](SupplierInvoiceDraftsV2Api.md#supplierInvoiceDraftsV2Put) | **PUT** /v2/supplierinvoicedrafts/{supplierInvoiceDraftId} | Replace content in a supplier invoice draft.


# **supplierInvoiceDraftsV2Convert**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceApi supplierInvoiceDraftsV2Convert($supplier_invoice_draft_id)

Converts a supplier invoice draft to a supplier invoice

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "supplier_invoice_draft_id_example"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Convert($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Delete**
> object supplierInvoiceDraftsV2Delete($supplier_invoice_draft_id)

Deletes a supplier invoice draft

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "supplier_invoice_draft_id_example"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Delete($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierInvoiceDraftApi supplierInvoiceDraftsV2Get()

Get a paginated list of all supplier invoice drafts.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierInvoiceDraftApi**](../Model/PaginatedResponseSupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Get_0**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Get_0($supplier_invoice_draft_id)

Get a single supplier invoice draft.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "supplier_invoice_draft_id_example"; // string | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Get_0($supplier_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Post**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Post($supplier_invoice_draft, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation)

Create a supplier invoice draft.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft = new \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi(); // \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \"useDefaultVatCodes\" parameter.
$batch_process_extended_validation = true; // bool | Validate for batch process and fiscal year.
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Post($supplier_invoice_draft, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $batch_process_extended_validation, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft** | [**\Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK, NL and SE only. If this is set to true, then vat rows will be added based on the vat code of the accounts which can be default or custom based on the \&quot;useDefaultVatCodes\&quot; parameter. | [optional]
 **batch_process_extended_validation** | **bool**| Validate for batch process and fiscal year. | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoiceDraftsV2Put**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi supplierInvoiceDraftsV2Put($supplier_invoice_draft_id, $supplier_invoice_draft)

Replace content in a supplier invoice draft.

To update attachments us the attachment endpoint.<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_draft_id = "supplier_invoice_draft_id_example"; // string | 
$supplier_invoice_draft = new \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi(); // \Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi | 

try {
    $result = $apiInstance->supplierInvoiceDraftsV2Put($supplier_invoice_draft_id, $supplier_invoice_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoiceDraftsV2Api->supplierInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_draft_id** | [**string**](../Model/.md)|  |
 **supplier_invoice_draft** | [**\Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceDraftApi**](../Model/SupplierInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

