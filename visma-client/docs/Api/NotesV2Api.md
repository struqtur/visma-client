# Struqtur\VismaEAccounting\NotesV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notesV2Get**](NotesV2Api.md#notesV2Get) | **GET** /v2/notes | Get all notes.
[**notesV2Get_0**](NotesV2Api.md#notesV2Get_0) | **GET** /v2/notes/{noteId} | Get a specific note.
[**notesV2Post**](NotesV2Api.md#notesV2Post) | **POST** /v2/notes | Create a new note.
[**notesV2Put**](NotesV2Api.md#notesV2Put) | **PUT** /v2/notes/{noteId} | Updates a note.


# **notesV2Get**
> \Struqtur\VismaEAccounting\Model\NoteApi notesV2Get()

Get all notes.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->notesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Get_0**
> \Struqtur\VismaEAccounting\Model\NoteApi notesV2Get_0($note_id)

Get a specific note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_id = "note_id_example"; // string | 

try {
    $result = $apiInstance->notesV2Get_0($note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Post**
> \Struqtur\VismaEAccounting\Model\NoteApi notesV2Post($note)

Create a new note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note = new \Struqtur\VismaEAccounting\Model\NoteApi(); // \Struqtur\VismaEAccounting\Model\NoteApi | 

try {
    $result = $apiInstance->notesV2Post($note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note** | [**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesV2Put**
> \Struqtur\VismaEAccounting\Model\NoteApi notesV2Put($note, $note_id)

Updates a note.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly, ea:accounting, ea:accounting_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\NotesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note = new \Struqtur\VismaEAccounting\Model\NoteApi(); // \Struqtur\VismaEAccounting\Model\NoteApi | 
$note_id = "note_id_example"; // string | 

try {
    $result = $apiInstance->notesV2Put($note, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesV2Api->notesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note** | [**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)|  |
 **note_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\NoteApi**](../Model/NoteApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

