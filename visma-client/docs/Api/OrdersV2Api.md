# Struqtur\VismaEAccounting\OrdersV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersV2BackOrder**](OrdersV2Api.md#ordersV2BackOrder) | **POST** /v2/orders/{id}/backorder | 
[**ordersV2Convert**](OrdersV2Api.md#ordersV2Convert) | **POST** /v2/orders/{id}/convert | Converts an order to an invoice
[**ordersV2Delete**](OrdersV2Api.md#ordersV2Delete) | **DELETE** /v2/orders/{id} | Delete an order.
[**ordersV2DeliveryNotePrint**](OrdersV2Api.md#ordersV2DeliveryNotePrint) | **GET** /v2/orders/{id}/deliverynote/print | Get a pdf-file of a delivery note for an order.
[**ordersV2Get**](OrdersV2Api.md#ordersV2Get) | **GET** /v2/orders | Get orders.
[**ordersV2Get_0**](OrdersV2Api.md#ordersV2Get_0) | **GET** /v2/orders/{id} | Get order
[**ordersV2Post**](OrdersV2Api.md#ordersV2Post) | **POST** /v2/orders | Create order.
[**ordersV2Print**](OrdersV2Api.md#ordersV2Print) | **GET** /v2/orders/{id}/print | Get a pdf-file of an order.
[**ordersV2Put**](OrdersV2Api.md#ordersV2Put) | **PUT** /v2/orders/{id} | Replace content in an order.


# **ordersV2BackOrder**
> \Struqtur\VismaEAccounting\Model\OrderApi ordersV2BackOrder($id)



<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->ordersV2BackOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2BackOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Convert**
> \Struqtur\VismaEAccounting\Model\CustomerInvoiceApi ordersV2Convert($id)

Converts an order to an invoice

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->ordersV2Convert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerInvoiceApi**](../Model/CustomerInvoiceApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Delete**
> object ordersV2Delete($id)

Delete an order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->ordersV2Delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2DeliveryNotePrint**
> object ordersV2DeliveryNotePrint($id)

Get a pdf-file of a delivery note for an order.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the order

try {
    $result = $apiInstance->ordersV2DeliveryNotePrint($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2DeliveryNotePrint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the order |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseOrderApi ordersV2Get()

Get orders.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ordersV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseOrderApi**](../Model/PaginatedResponseOrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Get_0**
> \Struqtur\VismaEAccounting\Model\OrderApi ordersV2Get_0($id)

Get order

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->ordersV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Post**
> \Struqtur\VismaEAccounting\Model\OrderApi ordersV2Post($order)

Create order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order = new \Struqtur\VismaEAccounting\Model\OrderApi(); // \Struqtur\VismaEAccounting\Model\OrderApi | 

try {
    $result = $apiInstance->ordersV2Post($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Print**
> object ordersV2Print($id)

Get a pdf-file of an order.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the order

try {
    $result = $apiInstance->ordersV2Print($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Print: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The id of the order |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersV2Put**
> object ordersV2Put($id, $order)

Replace content in an order.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Requires any of the following modules: <br><b>order_standard</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\OrdersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$order = new \Struqtur\VismaEAccounting\Model\OrderApi(); // \Struqtur\VismaEAccounting\Model\OrderApi | 

try {
    $result = $apiInstance->ordersV2Put($id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV2Api->ordersV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **order** | [**\Struqtur\VismaEAccounting\Model\OrderApi**](../Model/OrderApi.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

