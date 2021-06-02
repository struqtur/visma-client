# Struqtur\VismaEAccounting\DeliveryTermsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliveryTermsV2Get**](DeliveryTermsV2Api.md#deliveryTermsV2Get) | **GET** /v2/deliveryterms | Get a list of delivery terms
[**deliveryTermsV2Get_0**](DeliveryTermsV2Api.md#deliveryTermsV2Get_0) | **GET** /v2/deliveryterms/{deliveryTermId} | Get single delivery term


# **deliveryTermsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseDeliveryTermApi deliveryTermsV2Get()

Get a list of delivery terms

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\DeliveryTermsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deliveryTermsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTermsV2Api->deliveryTermsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseDeliveryTermApi**](../Model/PaginatedResponseDeliveryTermApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deliveryTermsV2Get_0**
> \Struqtur\VismaEAccounting\Model\DeliveryTermApi deliveryTermsV2Get_0($delivery_term_id)

Get single delivery term

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\DeliveryTermsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_term_id = "delivery_term_id_example"; // string | 

try {
    $result = $apiInstance->deliveryTermsV2Get_0($delivery_term_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTermsV2Api->deliveryTermsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_term_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\DeliveryTermApi**](../Model/DeliveryTermApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

