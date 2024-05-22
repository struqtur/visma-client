# Struqtur\VismaEAccounting\CustomersV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersV2Delete**](CustomersV2Api.md#customersV2Delete) | **DELETE** /v2/customers/{customerId} | Delete a customer.
[**customersV2Get**](CustomersV2Api.md#customersV2Get) | **GET** /v2/customers | Get all customers.
[**customersV2GetAutoInvoiceRecipients**](CustomersV2Api.md#customersV2GetAutoInvoiceRecipients) | **GET** /v2/customers/{customerId}/autoinvoicerecipients | Check this list if the provided customer can receive e-invoices. An empty list is retrieved if the customer   is a private person or is not found in the network.
[**customersV2Get_0**](CustomersV2Api.md#customersV2Get_0) | **GET** /v2/customers/{customerId} | Get a specific customer.
[**customersV2Post**](CustomersV2Api.md#customersV2Post) | **POST** /v2/customers | Creates a customer.
[**customersV2Put**](CustomersV2Api.md#customersV2Put) | **PUT** /v2/customers/{customerId} | Replace the data in a customer.


# **customersV2Delete**
> object customersV2Delete($customer_id)

Delete a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | 

try {
    $result = $apiInstance->customersV2Delete($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerApi customersV2Get()

Get all customers.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerApi**](../Model/PaginatedResponseCustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2GetAutoInvoiceRecipients**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAutoInvoiceAddressApi customersV2GetAutoInvoiceRecipients($customer_id)

Check this list if the provided customer can receive e-invoices. An empty list is retrieved if the customer   is a private person or is not found in the network.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | Id of the customer.

try {
    $result = $apiInstance->customersV2GetAutoInvoiceRecipients($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2GetAutoInvoiceRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)| Id of the customer. |

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAutoInvoiceAddressApi**](../Model/PaginatedResponseAutoInvoiceAddressApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Get_0**
> object customersV2Get_0($customer_id)

Get a specific customer.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | Id of the requested customer.

try {
    $result = $apiInstance->customersV2Get_0($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)| Id of the requested customer. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Post**
> \Struqtur\VismaEAccounting\Model\CustomerApi customersV2Post($customer)

Creates a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = new \Struqtur\VismaEAccounting\Model\CustomerApi(); // \Struqtur\VismaEAccounting\Model\CustomerApi | 

try {
    $result = $apiInstance->customersV2Post($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Struqtur\VismaEAccounting\Model\CustomerApi**](../Model/CustomerApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersV2Put**
> \Struqtur\VismaEAccounting\Model\CustomerApi customersV2Put($customer_id, $updated_customer)

Replace the data in a customer.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | 
$updated_customer = new \Struqtur\VismaEAccounting\Model\CustomerApi(); // \Struqtur\VismaEAccounting\Model\CustomerApi | 

try {
    $result = $apiInstance->customersV2Put($customer_id, $updated_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersV2Api->customersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | [**string**](../Model/.md)|  |
 **updated_customer** | [**\Struqtur\VismaEAccounting\Model\CustomerApi**](../Model/CustomerApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerApi**](../Model/CustomerApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

