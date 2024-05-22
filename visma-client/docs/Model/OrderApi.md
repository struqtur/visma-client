# OrderApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**amount** | **double** | Format: 2 decimals | [optional] 
**customer_id** | **string** |  | 
**currency_code** | **string** | Max length: 3 characters | 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**vat_amount** | **double** | Format: 2 decimals | [optional] 
**roundings_amount** | **double** | Format: 2 decimals | [optional] 
**delivered_amount** | **double** | Format: 2 decimals | [optional] 
**delivered_vat_amount** | **double** | Format: 2 decimals | [optional] 
**delivered_roundings_amount** | **double** | Format: 2 decimals | [optional] 
**delivery_customer_name** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**delivery_address1** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**delivery_address2** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**delivery_postal_code** | **string** | Max length: 10 characters  Default: The value on the selected customer | [optional] 
**delivery_city** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**delivery_country_code** | **string** | Max length: 2 characters  Default: The value on the selected customer | [optional] 
**your_reference** | **string** | Max length: 100 characters | [optional] 
**our_reference** | **string** | Max length: 100 characters | [optional] 
**buyers_order_reference** | **string** |  | [optional] 
**invoice_address1** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**invoice_address2** | **string** | Max length: 50 characters  Default: The value on the selected customer | [optional] 
**invoice_city** | **string** | Default: The value on the selected customer | [optional] 
**invoice_country_code** | **string** | Max length: 2 characters  The value on the selected customer | [optional] 
**invoice_customer_name** | **string** | Readonly  The selected customer&#39;s name | [optional] 
**customer_number** | **string** | Readonly  The selected customer&#39;s number | [optional] 
**customer_name** | **string** | Readonly  The selected customers name | [optional] 
**invoice_postal_code** | **string** | Max length: 10 characters  Default: The value on the selected customer | [optional] 
**delivery_method_name** | **string** | Max length: 50 characters | [optional] 
**delivery_method_code** | **string** | Max length: 50 characters | [optional] 
**delivery_term_name** | **string** | Max length: 50 characters | [optional] 
**delivery_term_code** | **string** | Max length: 20 characters | [optional] 
**eu_third_party** | **bool** |  | 
**customer_is_private_person** | **bool** | Purpose: This property will be set automatically depending on it&#39;s value which is set on the customer level | [optional] 
**includes_vat** | **bool** | Returns true if Amount and UnitPrice includes VAT. It will be automatically added based on company settings and customer type(private person or company). | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD | 
**status** | **int** | 1 &#x3D; Draft, 2 &#x3D; Ongoing, 3 &#x3D; Shipped, 4 &#x3D; Invoiced | 
**number** | **int** | Purpose: This property will be set automatically upon creation of an order | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD.   Default: null | [optional] 
**house_work_amount** | **double** |  | [optional] 
**house_work_automatic_distribution** | **bool** |  | [optional] 
**house_work_corporate_identity_number** | **string** | Max length: 20 characters | [optional] 
**house_work_property_name** | **string** | Max length: 100 characters | [optional] 
**sales_document_attachments** | **string[]** | Fetch SalesDocumentAttachments via GET /v2/salesdocumentattachments/{attachmentId} | [optional] 
**message_threads** | **string[]** | Fetch messages via GET /v2/messagethreads/{messageThreadId} | [optional] 
**notes** | **string[]** | Fetch notes via GET /v2/notes/{notesId} | [optional] 
**rows** | [**\Struqtur\VismaEAccounting\Model\OrderRowApi[]**](OrderRowApi.md) |  | [optional] 
**shipped_date_time** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD.   Default: null | [optional] 
**rot_reduced_invoicing_type** | **int** | 0 &#x3D; None, 1 &#x3D; Rot, 2 &#x3D; Rut | 
**rot_reduced_invoicing_percent** | **double** | Format: 4 decimals | [optional] 
**rot_property_type** | **int** | 1 &#x3D; Apartment, 2 &#x3D; Property  Leave blank or set to null if you do not intend to use ROT or Green Technology functionality | [optional] 
**persons** | [**\Struqtur\VismaEAccounting\Model\SalesDocumentRotRutReductionPersonApi[]**](SalesDocumentRotRutReductionPersonApi.md) |  | [optional] 
**reverse_charge_on_construction_services** | **bool** |  | 
**uses_green_technology** | **bool** | Set to true if this order benefits from deduction on Green Technology.  If set to true the order must have RotReducedInvoicingType set to normal and contain at least one row with applicable deduction. | [optional] 
**is_not_delivered** | **bool** |  | [optional] 
**contribution_margin** | [**\Struqtur\VismaEAccounting\Model\ContributionMarginApi**](ContributionMarginApi.md) | Contribution margin variables | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


