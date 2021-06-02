# Struqtur\VismaEAccounting\AccountsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsV2Get**](AccountsV2Api.md#accountsV2Get) | **GET** /v2/accounts | Get a list of accounts
[**accountsV2Get_0**](AccountsV2Api.md#accountsV2Get_0) | **GET** /v2/accounts/standardaccounts | Get a list of the predefined standard accounts.
[**accountsV2Get_1**](AccountsV2Api.md#accountsV2Get_1) | **GET** /v2/accounts/{fiscalyearId} | Get a list of accounts
[**accountsV2Get_2**](AccountsV2Api.md#accountsV2Get_2) | **GET** /v2/accounts/{fiscalyearId}/{accountNumber} | Get a account
[**accountsV2Post**](AccountsV2Api.md#accountsV2Post) | **POST** /v2/accounts | Add a account
[**accountsV2Put**](AccountsV2Api.md#accountsV2Put) | **PUT** /v2/accounts/{fiscalyearId}/{accountNumber} | Replace a account


# **accountsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAccountApi accountsV2Get()

Get a list of accounts

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAccountApi**](../Model/PaginatedResponseAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_0**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseStandardAccountApi accountsV2Get_0()

Get a list of the predefined standard accounts.

Predefined standard accounts are for dutch companies only.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountsV2Get_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseStandardAccountApi**](../Model/PaginatedResponseStandardAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_1**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseAccountApi accountsV2Get_1($fiscalyear_id)

Get a list of accounts

Get a list of accounts for a given fiscalyear.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "fiscalyear_id_example"; // string | 

try {
    $result = $apiInstance->accountsV2Get_1($fiscalyear_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseAccountApi**](../Model/PaginatedResponseAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Get_2**
> \Struqtur\VismaEAccounting\Model\AccountApi accountsV2Get_2($fiscalyear_id, $account_number)

Get a account

Get a account from a given fiscalyear by specifying the account number.<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "fiscalyear_id_example"; // string | 
$account_number = 56; // int | 

try {
    $result = $apiInstance->accountsV2Get_2($fiscalyear_id, $account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Get_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **account_number** | **int**|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Post**
> \Struqtur\VismaEAccounting\Model\AccountApi accountsV2Post($api_account, $use_default_account_type)

Add a account

Add a account to a given fiscalyear. Use the required FiscalYearId property to specify the fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_account = new \Struqtur\VismaEAccounting\Model\AccountApi(); // \Struqtur\VismaEAccounting\Model\AccountApi | 
$use_default_account_type = true; // bool | If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies.

try {
    $result = $apiInstance->accountsV2Post($api_account, $use_default_account_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_account** | [**\Struqtur\VismaEAccounting\Model\AccountApi**](../Model/AccountApi.md)|  |
 **use_default_account_type** | **bool**| If true, eAccounting will provide the standard account type.               If false, you have to provide your own, can be found at /v2/accounttypes.               Account types can only be set on dutch companies. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsV2Put**
> \Struqtur\VismaEAccounting\Model\AccountApi accountsV2Put($fiscalyear_id, $account_number, $replaced_account)

Replace a account

Replace a account in a given fiscal year. Will only replace the account in that fiscal year.<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\AccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiscalyear_id = "fiscalyear_id_example"; // string | 
$account_number = 789; // int | 
$replaced_account = new \Struqtur\VismaEAccounting\Model\AccountApi(); // \Struqtur\VismaEAccounting\Model\AccountApi | 

try {
    $result = $apiInstance->accountsV2Put($fiscalyear_id, $account_number, $replaced_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsV2Api->accountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fiscalyear_id** | [**string**](../Model/.md)|  |
 **account_number** | **int**|  |
 **replaced_account** | [**\Struqtur\VismaEAccounting\Model\AccountApi**](../Model/AccountApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\AccountApi**](../Model/AccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

