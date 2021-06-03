# Struqtur\VismaEAccounting\BankAccountsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountsV2Delete**](BankAccountsV2Api.md#bankAccountsV2Delete) | **DELETE** /v2/bankaccounts/{bankAccountId} | Delete a bank account.
[**bankAccountsV2Get**](BankAccountsV2Api.md#bankAccountsV2Get) | **GET** /v2/bankaccounts | Get a list of bank accounts.
[**bankAccountsV2Get_0**](BankAccountsV2Api.md#bankAccountsV2Get_0) | **GET** /v2/bankaccounts/{bankAccountId} | Get a specific bank account.
[**bankAccountsV2Post**](BankAccountsV2Api.md#bankAccountsV2Post) | **POST** /v2/bankaccounts | Create a bank account.
[**bankAccountsV2Put**](BankAccountsV2Api.md#bankAccountsV2Put) | **PUT** /v2/bankaccounts/{bankAccountId} | Replace a bank account.


# **bankAccountsV2Delete**
> object bankAccountsV2Delete($bank_account_id)

Delete a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "bank_account_id_example"; // string | 

try {
    $result = $apiInstance->bankAccountsV2Delete($bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseBankAccountApi bankAccountsV2Get()

Get a list of bank accounts.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->bankAccountsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseBankAccountApi**](../Model/PaginatedResponseBankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Get_0**
> \Struqtur\VismaEAccounting\Model\BankAccountApi bankAccountsV2Get_0($bank_account_id)

Get a specific bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "bank_account_id_example"; // string | Id of the requested bank account.

try {
    $result = $apiInstance->bankAccountsV2Get_0($bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)| Id of the requested bank account. |

### Return type

[**\Struqtur\VismaEAccounting\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Post**
> \Struqtur\VismaEAccounting\Model\BankAccountApi bankAccountsV2Post($bank_account)

Create a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account = new \Struqtur\VismaEAccounting\Model\BankAccountApi(); // \Struqtur\VismaEAccounting\Model\BankAccountApi | 

try {
    $result = $apiInstance->bankAccountsV2Post($bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account** | [**\Struqtur\VismaEAccounting\Model\BankAccountApi**](../Model/BankAccountApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsV2Put**
> \Struqtur\VismaEAccounting\Model\BankAccountApi bankAccountsV2Put($bank_account_id, $bank_account_changes)

Replace a bank account.

<p>Requires any of the following scopes: <br><b>ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\BankAccountsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bank_account_id = "bank_account_id_example"; // string | 
$bank_account_changes = new \Struqtur\VismaEAccounting\Model\BankAccountApi(); // \Struqtur\VismaEAccounting\Model\BankAccountApi | 

try {
    $result = $apiInstance->bankAccountsV2Put($bank_account_id, $bank_account_changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsV2Api->bankAccountsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | [**string**](../Model/.md)|  |
 **bank_account_changes** | [**\Struqtur\VismaEAccounting\Model\BankAccountApi**](../Model/BankAccountApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\BankAccountApi**](../Model/BankAccountApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

