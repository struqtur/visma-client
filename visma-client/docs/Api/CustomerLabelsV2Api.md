# Struqtur\VismaEAccounting\CustomerLabelsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerLabelsV2Delete**](CustomerLabelsV2Api.md#customerLabelsV2Delete) | **DELETE** /v2/customerlabels/{customerLabelId} | Deletes a customer label.
[**customerLabelsV2Get**](CustomerLabelsV2Api.md#customerLabelsV2Get) | **GET** /v2/customerlabels | Gets all customer labels.
[**customerLabelsV2Get_0**](CustomerLabelsV2Api.md#customerLabelsV2Get_0) | **GET** /v2/customerlabels/{customerLabelId} | Gets an customer label by id.
[**customerLabelsV2Post**](CustomerLabelsV2Api.md#customerLabelsV2Post) | **POST** /v2/customerlabels | Create a customer label.
[**customerLabelsV2Put**](CustomerLabelsV2Api.md#customerLabelsV2Put) | **PUT** /v2/customerlabels/{customerLabelId} | Replace content of a customer label.


# **customerLabelsV2Delete**
> \Struqtur\VismaEAccounting\Model\CustomerLabelApi customerLabelsV2Delete($customer_label_id)

Deletes a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_label_id = "customer_label_id_example"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Delete($customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerLabelApi customerLabelsV2Get()

Gets all customer labels.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerLabelsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseCustomerLabelApi**](../Model/PaginatedResponseCustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Get_0**
> \Struqtur\VismaEAccounting\Model\CustomerLabelApi customerLabelsV2Get_0($customer_label_id)

Gets an customer label by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_label_id = "customer_label_id_example"; // string | 

try {
    $result = $apiInstance->customerLabelsV2Get_0($customer_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_label_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Post**
> \Struqtur\VismaEAccounting\Model\CustomerLabelApi customerLabelsV2Post($from_customer_label)

Create a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_customer_label = new \Struqtur\VismaEAccounting\Model\CustomerLabelApi(); // \Struqtur\VismaEAccounting\Model\CustomerLabelApi | 

try {
    $result = $apiInstance->customerLabelsV2Post($from_customer_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_customer_label** | [**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLabelsV2Put**
> \Struqtur\VismaEAccounting\Model\CustomerLabelApi customerLabelsV2Put($customer_label_id, $from_customer_label)

Replace content of a customer label.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CustomerLabelsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_label_id = "customer_label_id_example"; // string | 
$from_customer_label = new \Struqtur\VismaEAccounting\Model\CustomerLabelApi(); // \Struqtur\VismaEAccounting\Model\CustomerLabelApi | 

try {
    $result = $apiInstance->customerLabelsV2Put($customer_label_id, $from_customer_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerLabelsV2Api->customerLabelsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_label_id** | [**string**](../Model/.md)|  |
 **from_customer_label** | [**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CustomerLabelApi**](../Model/CustomerLabelApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

