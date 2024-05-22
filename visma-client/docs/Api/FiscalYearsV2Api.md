# Struqtur\VismaEAccounting\FiscalYearsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fiscalYearsV2Get**](FiscalYearsV2Api.md#fiscalYearsV2Get) | **GET** /v2/fiscalyears | Get a list of fiscal years.
[**fiscalYearsV2Get_0**](FiscalYearsV2Api.md#fiscalYearsV2Get_0) | **GET** /v2/fiscalyears/{id} | Get a single fiscal year.
[**fiscalYearsV2Get_1**](FiscalYearsV2Api.md#fiscalYearsV2Get_1) | **GET** /v2/fiscalyears/openingbalances | Gets the opening balances of the first fiscal year. If you want balances of following years, use the GET /accountbalances instead.
[**fiscalYearsV2Post**](FiscalYearsV2Api.md#fiscalYearsV2Post) | **POST** /v2/fiscalyears | Create a fiscal year.
[**fiscalYearsV2Put**](FiscalYearsV2Api.md#fiscalYearsV2Put) | **PUT** /v2/fiscalyears/{id} | Updates a fiscal year.
[**fiscalYearsV2UpdateAccountOpeningBalance**](FiscalYearsV2Api.md#fiscalYearsV2UpdateAccountOpeningBalance) | **PUT** /v2/fiscalyears/openingbalances | Updates the opening balance of the first fiscal year


# **fiscalYearsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseFiscalYearApi fiscalYearsV2Get()

Get a list of fiscal years.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fiscalYearsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseFiscalYearApi**](../Model/PaginatedResponseFiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Get_0**
> \Struqtur\VismaEAccounting\Model\FiscalYearApi fiscalYearsV2Get_0($id)

Get a single fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of requested fiscal year.

try {
    $result = $apiInstance->fiscalYearsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Id of requested fiscal year. |

### Return type

[**\Struqtur\VismaEAccounting\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Get_1**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseOpeningBalancesApi fiscalYearsV2Get_1()

Gets the opening balances of the first fiscal year. If you want balances of following years, use the GET /accountbalances instead.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->fiscalYearsV2Get_1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseOpeningBalancesApi**](../Model/PaginatedResponseOpeningBalancesApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Post**
> \Struqtur\VismaEAccounting\Model\FiscalYearApi fiscalYearsV2Post($fiscal_year)

Create a fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscal_year = new \Struqtur\VismaEAccounting\Model\FiscalYearApi(); // \Struqtur\VismaEAccounting\Model\FiscalYearApi | 

try {
    $result = $apiInstance->fiscalYearsV2Post($fiscal_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscal_year** | [**\Struqtur\VismaEAccounting\Model\FiscalYearApi**](../Model/FiscalYearApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2Put**
> \Struqtur\VismaEAccounting\Model\FiscalYearApi fiscalYearsV2Put($id, $fiscal_year)

Updates a fiscal year.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of the fiscal year to update.
$fiscal_year = new \Struqtur\VismaEAccounting\Model\FiscalYearUpdateApi(); // \Struqtur\VismaEAccounting\Model\FiscalYearUpdateApi | 

try {
    $result = $apiInstance->fiscalYearsV2Put($id, $fiscal_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Id of the fiscal year to update. |
 **fiscal_year** | [**\Struqtur\VismaEAccounting\Model\FiscalYearUpdateApi**](../Model/FiscalYearUpdateApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\FiscalYearApi**](../Model/FiscalYearApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsV2UpdateAccountOpeningBalance**
> \Struqtur\VismaEAccounting\Model\OpeningBalancesApi[] fiscalYearsV2UpdateAccountOpeningBalance($account_balances_to_update_api, $enable_inactive_accounts)

Updates the opening balance of the first fiscal year

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\FiscalYearsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_balances_to_update_api = array(new \Struqtur\VismaEAccounting\Model\AccountOpeningBalanceApi()); // \Struqtur\VismaEAccounting\Model\AccountOpeningBalanceApi[] | The account balances to update
$enable_inactive_accounts = true; // bool | If true, the selected inactive accounts will be enabled, therefore allowing editing of the balance. Default: true

try {
    $result = $apiInstance->fiscalYearsV2UpdateAccountOpeningBalance($account_balances_to_update_api, $enable_inactive_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsV2Api->fiscalYearsV2UpdateAccountOpeningBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_balances_to_update_api** | [**\Struqtur\VismaEAccounting\Model\AccountOpeningBalanceApi[]**](../Model/AccountOpeningBalanceApi.md)| The account balances to update |
 **enable_inactive_accounts** | **bool**| If true, the selected inactive accounts will be enabled, therefore allowing editing of the balance. Default: true | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\OpeningBalancesApi[]**](../Model/OpeningBalancesApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

