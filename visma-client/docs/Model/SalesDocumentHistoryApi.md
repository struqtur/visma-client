# SalesDocumentHistoryApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | The date when this event occured | [optional] 
**type** | **string** | The type of event (e.g. Created, Payed) | [optional] 
**text** | **string** | A text associated with the event containing additional information. | [optional] 
**description** | **string[]** | An array of strings containing additional information about the event. This information can be used to build a detailed description of the event.  When a document (source) was created from another document (result) the description will contain on position 0 the unique id of the related document and on position  1 the number of the related document. Please note that in case the the result document is a draft the number will be an empty string.  Example scenario : A quote is converted to an order. The quote is the source document and the order is the result document. There will be two events one for quote  and one for order. The description of the event for quote will contain the id / number of the order and the description of the event for order will contain the  id number of the quote. In the case the result document creation involves a voucher on position 2 and 3 there will be the id and number of the related voucher | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


