# Struqtur\VismaEAccounting\CompanySettingsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companySettingsV2Get**](CompanySettingsV2Api.md#companySettingsV2Get) | **GET** /v2/companysettings | Get company settings.
[**companySettingsV2Put**](CompanySettingsV2Api.md#companySettingsV2Put) | **PUT** /v2/companysettings | Replace company settings.
[**companySettingsV2UpdateAccountingLockSettings**](CompanySettingsV2Api.md#companySettingsV2UpdateAccountingLockSettings) | **PUT** /v2/companysettings/accountinglocksettings | Update accounting lock interval settings.
[**companySettingsV2UpdateRotRutSettings**](CompanySettingsV2Api.md#companySettingsV2UpdateRotRutSettings) | **PUT** /v2/companysettings/rotrut | Update ROT/RUT settings.


# **companySettingsV2Get**
> \Struqtur\VismaEAccounting\Model\CompanySettingsApi companySettingsV2Get()

Get company settings.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->companySettingsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2Put**
> \Struqtur\VismaEAccounting\Model\CompanySettingsApi companySettingsV2Put($company_settings)

Replace company settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_settings = new \Struqtur\VismaEAccounting\Model\CompanySettingsApi(); // \Struqtur\VismaEAccounting\Model\CompanySettingsApi | 

try {
    $result = $apiInstance->companySettingsV2Put($company_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_settings** | [**\Struqtur\VismaEAccounting\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateAccountingLockSettings**
> \Struqtur\VismaEAccounting\Model\CompanySettingsApi companySettingsV2UpdateAccountingLockSettings($accounting_lock_settings_api)

Update accounting lock interval settings.

<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accounting_lock_settings_api = new \Struqtur\VismaEAccounting\Model\AccountingLockSettingsApi(); // \Struqtur\VismaEAccounting\Model\AccountingLockSettingsApi | 

try {
    $result = $apiInstance->companySettingsV2UpdateAccountingLockSettings($accounting_lock_settings_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateAccountingLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_lock_settings_api** | [**\Struqtur\VismaEAccounting\Model\AccountingLockSettingsApi**](../Model/AccountingLockSettingsApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsV2UpdateRotRutSettings**
> \Struqtur\VismaEAccounting\Model\CompanySettingsApi companySettingsV2UpdateRotRutSettings($rot_rut_settings_api)

Update ROT/RUT settings.

Only for swedish companies and if the company uses rot reduced invoicing. Use PUT v2/companysettings to change that.<p>Requires any of the following scopes: <br><b>ea:sales</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\CompanySettingsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rot_rut_settings_api = new \Struqtur\VismaEAccounting\Model\CompanyRotRutSettingsApi(); // \Struqtur\VismaEAccounting\Model\CompanyRotRutSettingsApi | 

try {
    $result = $apiInstance->companySettingsV2UpdateRotRutSettings($rot_rut_settings_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsV2Api->companySettingsV2UpdateRotRutSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rot_rut_settings_api** | [**\Struqtur\VismaEAccounting\Model\CompanyRotRutSettingsApi**](../Model/CompanyRotRutSettingsApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\CompanySettingsApi**](../Model/CompanySettingsApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

