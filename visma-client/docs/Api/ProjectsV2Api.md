# Struqtur\VismaEAccounting\ProjectsV2Api

All URIs are relative to *https://eaccountingapi-sandbox.test.vismaonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsV2Get**](ProjectsV2Api.md#projectsV2Get) | **GET** /v2/projects | Get a list of projects.
[**projectsV2Get_0**](ProjectsV2Api.md#projectsV2Get_0) | **GET** /v2/projects/{id} | Get a specific project.
[**projectsV2Post**](ProjectsV2Api.md#projectsV2Post) | **POST** /v2/projects | Create a new project.
[**projectsV2Put**](ProjectsV2Api.md#projectsV2Put) | **PUT** /v2/projects/{id} | Replace content in a project.


# **projectsV2Get**
> \Struqtur\VismaEAccounting\Model\PaginatedResponseProjectApi projectsV2Get()

Get a list of projects.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->projectsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Struqtur\VismaEAccounting\Model\PaginatedResponseProjectApi**](../Model/PaginatedResponseProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Get_0**
> \Struqtur\VismaEAccounting\Model\ProjectApi projectsV2Get_0($id)

Get a specific project.

<p>Requires any of the following scopes: <br><b>ea:accounting, ea:accounting_readonly, ea:sales, ea:sales_readonly, ea:purchase, ea:purchase_readonly</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Project Id

try {
    $result = $apiInstance->projectsV2Get_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Get_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Project Id |

### Return type

[**\Struqtur\VismaEAccounting\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Post**
> \Struqtur\VismaEAccounting\Model\ProjectApi projectsV2Post($project)

Create a new project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project = new \Struqtur\VismaEAccounting\Model\ProjectApi(); // \Struqtur\VismaEAccounting\Model\ProjectApi | 

try {
    $result = $apiInstance->projectsV2Post($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\Struqtur\VismaEAccounting\Model\ProjectApi**](../Model/ProjectApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsV2Put**
> \Struqtur\VismaEAccounting\Model\ProjectApi projectsV2Put($id, $project)

Replace content in a project.

<p>Requires any of the following scopes: <br><b>ea:accounting</b></p><p>Available in any of the following variants: <br><b>Pro, Standard, Bookkeeping, Invoicing, Visma Lön Smart</b></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Struqtur\VismaEAccounting\Api\ProjectsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$project = new \Struqtur\VismaEAccounting\Model\ProjectApi(); // \Struqtur\VismaEAccounting\Model\ProjectApi | 

try {
    $result = $apiInstance->projectsV2Put($id, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsV2Api->projectsV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **project** | [**\Struqtur\VismaEAccounting\Model\ProjectApi**](../Model/ProjectApi.md)|  |

### Return type

[**\Struqtur\VismaEAccounting\Model\ProjectApi**](../Model/ProjectApi.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

