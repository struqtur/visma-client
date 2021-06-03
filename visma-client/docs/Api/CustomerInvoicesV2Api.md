# Struqtur\VismaEAccounting\CustomerInvoicesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerInvoicesV2Get**](CustomerInvoicesV2Api.md#customerInvoicesV2Get) | **GET** /v2/customerinvoices | Get all customer invoices.
[**customerInvoicesV2GetPdfReplacement**](CustomerInvoicesV2Api.md#customerInvoicesV2GetPdfReplacement) | **GET** /v2/customerinvoices/{invoiceId}/pdf | Gets a customer invoice in Portable Document Format (PDF).
[**customerInvoicesV2Get_0**](CustomerInvoicesV2Api.md#customerInvoicesV2Get_0) | **GET** /v2/customerinvoices/{invoiceId} | Gets a customer invoice with a specific id.
[**customerInvoicesV2Post**](CustomerInvoicesV2Api.md#customerInvoicesV2Post) | **POST** /v2/customerinvoices | Create a single customer invoice.
[**customerInvoicesV2Post_0**](CustomerInvoicesV2Api.md#customerInvoicesV2Post_0) | **POST** /v2/customerinvoices/{invoiceId}/payments | Post a payment towards a bookkept customer invoice. Use factoring fee and account number in order to pay with factoring
[**customerInvoicesV2Print**](CustomerInvoicesV2Api.md#customerInvoicesV2Print) | **GET** /v2/customerinvoices/{invoiceId}/print | Gets a PDF-file of a customer invoice.
[**customerInvoicesV2SendEmail**](CustomerInvoicesV2Api.md#customerInvoicesV2SendEmail) | **POST** /v2/customerinvoices/{invoiceId}/email | Send an invoice by email
[**customerInvoicesV2SendPaymentReminderEmail**](CustomerInvoicesV2Api.md#customerInvoicesV2SendPaymentReminderEmail) | **POST** /v2/customerinvoices/{invoiceId}/paymentreminders | Sends a payment reminder email to an overdue invoice


# **customerInvoicesV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerInvoiceApi customerInvoicesV2Get($modified_since_utc)

Get all customer invoices.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modified_since_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to get the invoices which have been modified since a prompted date

try {
    $result = $apiInstance->customerInvoicesV2Get($modified_since_utc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modified_since_utc** | **\DateTime**| Used to get the invoices which have been modified since a prompted date | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerInvoiceApi**](../Model/PaginatedResponseCustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2GetPdfReplacement**
> \Struqtur\VismaEAccounting\Model\InvoiceUrlApi customerInvoicesV2GetPdfReplacement($invoice_id)

Gets a customer invoice in Portable Document Format (PDF).

As invoices are generated at request time, if not generated before, this endpoint sometimes has higher than average response time.<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2GetPdfReplacement($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2GetPdfReplacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\InvoiceUrlApi**](../Model/InvoiceUrlApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Get_0**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi customerInvoicesV2Get_0($invoice_id)

Gets a customer invoice with a specific id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2Get_0($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Post**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi customerInvoicesV2Post($invoice_api, $rot_reduced_automatic_distribution)

Create a single customer invoice.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_api = new \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi(); // \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi | 
$rot_reduced_automatic_distribution = true; // bool | Used for the automatic distribution per person of the rot reduced invoicing amount.

try {
    $result = $apiInstance->customerInvoicesV2Post($invoice_api, $rot_reduced_automatic_distribution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_api** | [**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)|  |
 **rot_reduced_automatic_distribution** | **bool**| Used for the automatic distribution per person of the rot reduced invoicing amount. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Post_0**
> \Struqtur\VismaEAccounting\Model\InvoicePaymentApi customerInvoicesV2Post_0($customer_invoice_payment, $invoice_id)

Post a payment towards a bookkept customer invoice. Use factoring fee and account number in order to pay with factoring

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_invoice_payment = new \Struqtur\VismaEAccounting\Model\InvoicePaymentApi(); // \Struqtur\VismaEAccounting\Model\InvoicePaymentApi | 
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->customerInvoicesV2Post_0($customer_invoice_payment, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Post_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_payment** | [**\Struqtur\VismaEAccounting\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\InvoicePaymentApi**](../Model/InvoicePaymentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2Print**
> object customerInvoicesV2Print($invoice_id)

Gets a PDF-file of a customer invoice.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | The id of the customer invoice

try {
    $result = $apiInstance->customerInvoicesV2Print($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)| The id of the customer invoice |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendEmail**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi customerInvoicesV2SendEmail($invoice_id, $email_api)

Send an invoice by email

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | 
$email_api = new \Struqtur\VismaEAccounting\Model\EmailApi(); // \Struqtur\VismaEAccounting\Model\EmailApi | 

try {
    $result = $apiInstance->customerInvoicesV2SendEmail($invoice_id, $email_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |
 **email_api** | [**\Struqtur\VismaEAccounting\Model\EmailApi**](../Model/EmailApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInvoicesV2SendPaymentReminderEmail**
> object customerInvoicesV2SendPaymentReminderEmail($invoice_id, $email_api)

Sends a payment reminder email to an overdue invoice

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerInvoicesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_id = "invoice_id_example"; // string | 
$email_api = new \Struqtur\VismaEAccounting\Model\PaymentReminderEmailApi(); // \Struqtur\VismaEAccounting\Model\PaymentReminderEmailApi | 

try {
    $result = $apiInstance->customerInvoicesV2SendPaymentReminderEmail($invoice_id, $email_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesV2Api->customerInvoicesV2SendPaymentReminderEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | [**string**](../Model/.md)|  |
 **email_api** | [**\Struqtur\VismaEAccounting\Model\PaymentReminderEmailApi**](../Model/PaymentReminderEmailApi.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

