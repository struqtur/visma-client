# SalesDocumentAttachmentApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Attachment ID. | [optional] 
**document_id** | **string** | Sales document ID. | [optional] 
**document_type** | **int** | Sales document type:  CustomerInvoiceDraft &#x3D; 1,  CustomerInvoice &#x3D; 2,  Quote &#x3D; 3,  Order &#x3D; 4,  PurchaseOrder &#x3D; 5,  QuoteDraft &#x3D; 6 | [optional] 
**original_filename** | **string** | Attached file name. | [optional] 
**document_size** | **int** | Attached file size. | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) | Attachment date (UTC). | [optional] 
**created_by** | **string** | Full name of user who attached the file. | [optional] 
**thumbnail** | **string** | It is an image thumbnail, for PDF&#39;s Thumbnail &#x3D; NULL. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


