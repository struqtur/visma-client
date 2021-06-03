# Struqtur\VismaEAccounting\PartnerResourceLinksV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerResourceLinksV2Delete**](PartnerResourceLinksV2Api.md#partnerResourceLinksV2Delete) | **DELETE** /v2/partnerresourcelinks/{partnerResourceLinkId} | Delete a partner resource link
[**partnerResourceLinksV2Get**](PartnerResourceLinksV2Api.md#partnerResourceLinksV2Get) | **GET** /v2/partnerresourcelinks | Get a list of partner resource links.
[**partnerResourceLinksV2Get_0**](PartnerResourceLinksV2Api.md#partnerResourceLinksV2Get_0) | **GET** /v2/partnerresourcelinks/{partnerResourceLinkId} | Get a partner resource link by id.
[**partnerResourceLinksV2Post**](PartnerResourceLinksV2Api.md#partnerResourceLinksV2Post) | **POST** /v2/partnerresourcelinks | Create a partner resource link
[**partnerResourceLinksV2Put**](PartnerResourceLinksV2Api.md#partnerResourceLinksV2Put) | **PUT** /v2/partnerresourcelinks/{partnerResourceLinkId} | Update a partner resource link


# **partnerResourceLinksV2Delete**
> object partnerResourceLinksV2Delete($partner_resource_link_id)

Delete a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link_id = "partner_resource_link_id_example"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Delete($partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponsePartnerResourceLinkApi partnerResourceLinksV2Get()

Get a list of partner resource links.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->partnerResourceLinksV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponsePartnerResourceLinkApi**](../Model/PaginatedResponsePartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Get_0**
> \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi partnerResourceLinksV2Get_0($partner_resource_link_id)

Get a partner resource link by id.

<p>Requires any of the following scopes: <br><b>ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link_id = "partner_resource_link_id_example"; // string | 

try {
    $result = $apiInstance->partnerResourceLinksV2Get_0($partner_resource_link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link_id** | [**string**](../Model/.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Post**
> \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi partnerResourceLinksV2Post($partner_resource_link)

Create a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link = new \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi(); // \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi | 

try {
    $result = $apiInstance->partnerResourceLinksV2Post($partner_resource_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link** | [**\Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnerResourceLinksV2Put**
> \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi partnerResourceLinksV2Put($partner_resource_link_id, $partner_resource_link)

Update a partner resource link

<p>Requires any of the following scopes: <br><b>ea:sales, ea:purchase</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Invoicing, Bookkeeping, Solo</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\PartnerResourceLinksV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_resource_link_id = "partner_resource_link_id_example"; // string | 
$partner_resource_link = new \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi(); // \Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi | 

try {
    $result = $apiInstance->partnerResourceLinksV2Put($partner_resource_link_id, $partner_resource_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerResourceLinksV2Api->partnerResourceLinksV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource_link_id** | [**string**](../Model/.md)|  |
 **partner_resource_link** | [**\Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\PartnerResourceLinkApi**](../Model/PartnerResourceLinkApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

