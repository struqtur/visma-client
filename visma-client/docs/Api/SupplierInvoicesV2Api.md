# Struqtur\VismaEAccounting\SupplierInvoicesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierInvoicesV2Get**](SupplierInvoicesV2Api.md#supplierInvoicesV2Get) | **GET** /v2/supplierinvoices | Get a list of supplier invoices
[**supplierInvoicesV2Get_0**](SupplierInvoicesV2Api.md#supplierInvoicesV2Get_0) | **GET** /v2/supplierinvoices/{supplierInvoiceId} | Get a supplier
[**supplierInvoicesV2Post**](SupplierInvoicesV2Api.md#supplierInvoicesV2Post) | **POST** /v2/supplierinvoices | Create a supplier invoice.
[**supplierInvoicesV2Post_0**](SupplierInvoicesV2Api.md#supplierInvoicesV2Post_0) | **POST** /v2/supplierinvoices/{invoiceId}/payments | Post a payment towards a bookkept supplier invoice


# **supplierInvoicesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierInvoiceApi supplierInvoicesV2Get()

Get a list of supplier invoices

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supplierInvoicesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseSupplierInvoiceApi**](../Model/PaginatedResponseSupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Get_0**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceApi supplierInvoicesV2Get_0($supplier_invoice_id)

Get a supplier

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_id = "supplier_invoice_id_example"; // string | 

try {
    $result = $apiInstance->supplierInvoicesV2Get_0($supplier_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post**
> \Struqtur\VismaEAccounting\Model\SupplierInvoiceApi supplierInvoicesV2Post($supplier_invoice, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation)

Create a supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice = new \Struqtur\VismaEAccounting\Model\SupplierInvoiceApi(); // \Struqtur\VismaEAccounting\Model\SupplierInvoiceApi | 
$use_default_vat_codes = true; // bool | 
$calculate_vat_on_cost_accounts = true; // bool | Automatic calculation of VAT based on vat code. DK and NL only
$duplicate_check_extended_validation = true; // bool | Check if the invoice is duplicate.

try {
    $result = $apiInstance->supplierInvoicesV2Post($supplier_invoice, $use_default_vat_codes, $calculate_vat_on_cost_accounts, $duplicate_check_extended_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice** | [**\Struqtur\VismaEAccounting\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)|  |
 **use_default_vat_codes** | **bool**|  | [optional]
 **calculate_vat_on_cost_accounts** | **bool**| Automatic calculation of VAT based on vat code. DK and NL only | [optional]
 **duplicate_check_extended_validation** | **bool**| Check if the invoice is duplicate. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\SupplierInvoiceApi**](../Model/SupplierInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierInvoicesV2Post_0**
> \Struqtur\VismaEAccounting\Model\InvoicePaymentApi supplierInvoicesV2Post_0($supplier_invoice_payment, $invoice_id)

Post a payment towards a bookkept supplier invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\SupplierInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$supplier_invoice_payment = new \Struqtur\VismaEAccounting\Model\InvoicePaymentApi(); // \Struqtur\VismaEAccounting\Model\InvoicePaymentApi | 
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->supplierInvoicesV2Post_0($supplier_invoice_payment, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesV2Api->supplierInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_invoice_payment** | [**\Struqtur\VismaEAccounting\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

