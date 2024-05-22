# Struqtur\VismaEAccounting\AppStoreActivationStatusV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreActivationStatusV2Get**](AppStoreActivationStatusV2Api.md#appStoreActivationStatusV2Get) | **GET** /v2/appstore/status | 
[**appStoreActivationStatusV2Put**](AppStoreActivationStatusV2Api.md#appStoreActivationStatusV2Put) | **PUT** /v2/appstore/status | 


# **appStoreActivationStatusV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAppStoreActivationStatusApi appStoreActivationStatusV2Get()



<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AppStoreActivationStatusV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->appStoreActivationStatusV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreActivationStatusV2Api->appStoreActivationStatusV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAppStoreActivationStatusApi**](../Model/PaginatedResponseAppStoreActivationStatusApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appStoreActivationStatusV2Put**
> \Struqtur\VismaEAccounting\Model\AppStoreActivationStatusApi appStoreActivationStatusV2Put($status_dto)



<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AppStoreActivationStatusV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status_dto = new \Struqtur\VismaEAccounting\Model\AppStoreActivationStatusApi(); // \Struqtur\VismaEAccounting\Model\AppStoreActivationStatusApi | 

try {
    $result = $apiInstance->appStoreActivationStatusV2Put($status_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreActivationStatusV2Api->appStoreActivationStatusV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_dto** | [**\Struqtur\VismaEAccounting\Model\AppStoreActivationStatusApi**](../Model/AppStoreActivationStatusApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AppStoreActivationStatusApi**](../Model/AppStoreActivationStatusApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

