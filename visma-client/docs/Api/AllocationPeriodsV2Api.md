# Struqtur\VismaEAccounting\AllocationPeriodsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocationPeriodsV2Get**](AllocationPeriodsV2Api.md#allocationPeriodsV2Get) | **GET** /v2/allocationperiods | Get allocation periods.
[**allocationPeriodsV2Get_0**](AllocationPeriodsV2Api.md#allocationPeriodsV2Get_0) | **GET** /v2/allocationperiods/{allocationPeriodId} | Get single allocation period.
[**allocationPeriodsV2Post**](AllocationPeriodsV2Api.md#allocationPeriodsV2Post) | **POST** /v2/allocationperiods | Add allocation periods for voucher or supplier invoice.
[**allocationPeriodsV2Put**](AllocationPeriodsV2Api.md#allocationPeriodsV2Put) | **PUT** /v2/allocationperiods | Update allocation periods for voucher or supplier invoice.


# **allocationPeriodsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAllocationPeriodApi allocationPeriodsV2Get()

Get allocation periods.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allocationPeriodsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAllocationPeriodApi**](../Model/PaginatedResponseAllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocationPeriodsV2Get_0**
> \Struqtur\VismaEAccounting\Model\AllocationPeriodApi allocationPeriodsV2Get_0($allocation_period_id)

Get single allocation period.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allocation_period_id = "allocation_period_id_example"; // string | Id of the requsted allocation period.

try {
    $result = $apiInstance->allocationPeriodsV2Get_0($allocation_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation_period_id** | [**string**](../Model/.md)| Id of the requsted allocation period. |

### Return type

[**\Struqtur\VismaEAccounting\Model\AllocationPeriodApi**](../Model/AllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocationPeriodsV2Post**
> \Struqtur\VismaEAccounting\Model\AllocationPeriodApi allocationPeriodsV2Post($allocation_plans)

Add allocation periods for voucher or supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allocation_plans = array(new \Struqtur\VismaEAccounting\Model\AllocationPlan()); // \Struqtur\VismaEAccounting\Model\AllocationPlan[] | 

try {
    $result = $apiInstance->allocationPeriodsV2Post($allocation_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation_plans** | [**\Struqtur\VismaEAccounting\Model\AllocationPlan[]**](../Model/AllocationPlan.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AllocationPeriodApi**](../Model/AllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocationPeriodsV2Put**
> \Struqtur\VismaEAccounting\Model\AllocationPeriodApi allocationPeriodsV2Put($allocation_plans)

Update allocation periods for voucher or supplier invoice.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AllocationPeriodsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allocation_plans = array(new \Struqtur\VismaEAccounting\Model\AllocationPlan()); // \Struqtur\VismaEAccounting\Model\AllocationPlan[] | 

try {
    $result = $apiInstance->allocationPeriodsV2Put($allocation_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationPeriodsV2Api->allocationPeriodsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation_plans** | [**\Struqtur\VismaEAccounting\Model\AllocationPlan[]**](../Model/AllocationPlan.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AllocationPeriodApi**](../Model/AllocationPeriodApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

