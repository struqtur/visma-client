# Struqtur\VismaEAccounting\DocumentsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsV2Get**](DocumentsV2Api.md#documentsV2Get) | **GET** /v2/documents/{id} | Get a vat report pdf by document id.


# **documentsV2Get**
> \Struqtur\VismaEAccounting\Model\DocumentApi documentsV2Get($id)

Get a vat report pdf by document id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\DocumentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Document id

try {
    $result = $apiInstance->documentsV2Get($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsV2Api->documentsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Document id |

### Return type

[**\Struqtur\VismaEAccounting\Model\DocumentApi**](../Model/DocumentApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

