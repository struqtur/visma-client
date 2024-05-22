# Struqtur\VismaEAccounting\VoucherDraftsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherDraftsV2Convert**](VoucherDraftsV2Api.md#voucherDraftsV2Convert) | **POST** /v2/voucherdrafts/{voucherDraftId}/convert | Converts a VoucherDraft to a Voucher.
[**voucherDraftsV2Delete**](VoucherDraftsV2Api.md#voucherDraftsV2Delete) | **DELETE** /v2/voucherdrafts/{voucherDraftId} | Delete a voucher draft.
[**voucherDraftsV2Get**](VoucherDraftsV2Api.md#voucherDraftsV2Get) | **GET** /v2/voucherdrafts | Get all vouchers drafts.
[**voucherDraftsV2Get_0**](VoucherDraftsV2Api.md#voucherDraftsV2Get_0) | **GET** /v2/voucherdrafts/{voucherDraftId} | Gets a voucher draft by id.
[**voucherDraftsV2Post**](VoucherDraftsV2Api.md#voucherDraftsV2Post) | **POST** /v2/voucherdrafts | Create a single voucher draft.
[**voucherDraftsV2Put**](VoucherDraftsV2Api.md#voucherDraftsV2Put) | **PUT** /v2/voucherdrafts/{voucherDraftId} | Replace the data in a voucher draft.


# **voucherDraftsV2Convert**
> \Struqtur\VismaEAccounting\Model\VoucherApi voucherDraftsV2Convert($voucher_draft_id)

Converts a VoucherDraft to a Voucher.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "voucher_draft_id_example"; // string | The Voucher Draft Id.

try {
    $result = $apiInstance->voucherDraftsV2Convert($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Convert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)| The Voucher Draft Id. |

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherApi**](../Model/VoucherApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Delete**
> object voucherDraftsV2Delete($voucher_draft_id)

Delete a voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "voucher_draft_id_example"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Delete($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherDraftApi voucherDraftsV2Get()

Get all vouchers drafts.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->voucherDraftsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseVoucherDraftApi**](../Model/PaginatedResponseVoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Get_0**
> \Struqtur\VismaEAccounting\Model\VoucherDraftApi voucherDraftsV2Get_0($voucher_draft_id)

Gets a voucher draft by id.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "voucher_draft_id_example"; // string | 

try {
    $result = $apiInstance->voucherDraftsV2Get_0($voucher_draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Post**
> \Struqtur\VismaEAccounting\Model\VoucherDraftApi voucherDraftsV2Post($voucher_draft, $amount_includes_vat)

Create a single voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft = new \Struqtur\VismaEAccounting\Model\VoucherDraftApi(); // \Struqtur\VismaEAccounting\Model\VoucherDraftApi | 
$amount_includes_vat = true; // bool | Default value: false. If true, the amounts are used as including VAT when draft is created.

try {
    $result = $apiInstance->voucherDraftsV2Post($voucher_draft, $amount_includes_vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft** | [**\Struqtur\VismaEAccounting\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)|  |
 **amount_includes_vat** | **bool**| Default value: false. If true, the amounts are used as including VAT when draft is created. | [optional]

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDraftsV2Put**
> \Struqtur\VismaEAccounting\Model\VoucherDraftApi voucherDraftsV2Put($voucher_draft_id, $voucher_draft)

Replace the data in a voucher draft.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Solo, Bookkeeping</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\VoucherDraftsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$voucher_draft_id = "voucher_draft_id_example"; // string | 
$voucher_draft = new \Struqtur\VismaEAccounting\Model\VoucherDraftApi(); // \Struqtur\VismaEAccounting\Model\VoucherDraftApi | 

try {
    $result = $apiInstance->voucherDraftsV2Put($voucher_draft_id, $voucher_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDraftsV2Api->voucherDraftsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_draft_id** | [**string**](../Model/.md)|  |
 **voucher_draft** | [**\Struqtur\VismaEAccounting\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\VoucherDraftApi**](../Model/VoucherDraftApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

