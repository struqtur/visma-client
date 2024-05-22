# Struqtur\VismaEAccounting\CustomerInvoiceDraftsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerInvoiceDraftsV2ConvertToInvoice**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2ConvertToInvoice) | **POST** /v2/customerinvoicedrafts/{customerInvoiceDraftId}/convert | Converts a CustomerInvoiceDraft to a CustomerInvoice.
[**customerInvoiceDraftsV2Delete**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2Delete) | **DELETE** /v2/customerinvoicedrafts/{customerInvoiceDraftId} | Delete a customer invoice draft.
[**customerInvoiceDraftsV2Get**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2Get) | **GET** /v2/customerinvoicedrafts | Get all customer invoice drafts.
[**customerInvoiceDraftsV2Get_0**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2Get_0) | **GET** /v2/customerinvoicedrafts/{invoiceDraftId} | Gets a customer invoice draft by id.
[**customerInvoiceDraftsV2Post**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2Post) | **POST** /v2/customerinvoicedrafts | Create a single customer invoice draft.
[**customerInvoiceDraftsV2Put**](CustomerInvoiceDraftsV2Api.md#customerInvoiceDraftsV2Put) | **PUT** /v2/customerinvoicedrafts/{customerInvoiceDraftId} | Replace the data in a customer invoice draft.


# **customerInvoiceDraftsV2ConvertToInvoice**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi customerInvoiceDraftsV2ConvertToInvoice($customer_invoice_draft_id, $invoice_validations, $keep_original_draft_date, $override_company_keep_original_draft_date)

Converts a CustomerInvoiceDraft to a CustomerInvoice.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "customer_invoice_draft_id_example"; // string | The customer Invoice Draft Id.
$invoice_validations = new \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationApi(); // \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationApi | Optional set of properties to validate. Ignore the properties you do not wish to validate.
$keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft's invoice date is used (past or future), or if date misses, the draft's creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft's invoice date is used if it's in future, or if that date misses or is in past, today date is used
$override_company_keep_original_draft_date = true; // bool | Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft's invoice date or not regardless of company settings value.

try {
    $result = $apiInstance->customerInvoiceDraftsV2ConvertToInvoice($customer_invoice_draft_id, $invoice_validations, $keep_original_draft_date, $override_company_keep_original_draft_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2ConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)| The customer Invoice Draft Id. |
 **invoice_validations** | [**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftValidationApi**](../Model/CustomerInvoiceDraftValidationApi.md)| Optional set of properties to validate. Ignore the properties you do not wish to validate. |
 **keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, or if the same parameter from company settings is set to true, then the draft&#39;s invoice date is used (past or future), or if date misses, the draft&#39;s creation date is used  If this parameter is omitted, and the same parameter from company settings is not set or is set to false, then the draft&#39;s invoice date is used if it&#39;s in future, or if that date misses or is in past, today date is used | [optional]
 **override_company_keep_original_draft_date** | **bool**| Optional, false by default.  If this parameter is set to true, use keepOriginalDraftDate parameter value to decide whether to use draft&#39;s invoice date or not regardless of company settings value. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Delete**
> object customerInvoiceDraftsV2Delete($customer_invoice_draft_id)

Delete a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "customer_invoice_draft_id_example"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Delete($customer_invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerInvoiceDraftApi customerInvoiceDraftsV2Get()

Get all customer invoice drafts.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerInvoiceDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerInvoiceDraftApi**](../Model/PaginatedResponseCustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Get_0**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Get_0($invoice_draft_id)

Gets a customer invoice draft by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_draft_id = "invoice_draft_id_example"; // string | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Get_0($invoice_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Post**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Post($customer_invoice_draft, $override_customer_is_private_person)

Create a single customer invoice draft.

ReversedConstructionServicesVatFree attribute on a CustomerInvoiceDraftRow shall only be used for articels with reverse VAT charge.  For other VAT free articles ReversedConstructionServicesVatFree shall be set to 'false'.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft = new \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi(); // \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi | 
$override_customer_is_private_person = true; // bool | Set to true in order to override the CustomerIsPrivatePerson property in order to ignore the customer setting.

try {
    $result = $apiInstance->customerInvoiceDraftsV2Post($customer_invoice_draft, $override_customer_is_private_person);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft** | [**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)|  |
 **override_customer_is_private_person** | **bool**| Set to true in order to override the CustomerIsPrivatePerson property in order to ignore the customer setting. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoiceDraftsV2Put**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi customerInvoiceDraftsV2Put($customer_invoice_draft_id, $customer_invoice_draft)

Replace the data in a customer invoice draft.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoiceDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_draft_id = "customer_invoice_draft_id_example"; // string | 
$customer_invoice_draft = new \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi(); // \Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi | 

try {
    $result = $apiInstance->customerInvoiceDraftsV2Put($customer_invoice_draft_id, $customer_invoice_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceDraftsV2Api->customerInvoiceDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_draft_id** | [**string**](../Model/.md)|  |
 **customer_invoice_draft** | [**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceDraftApi**](../Model/CustomerInvoiceDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

