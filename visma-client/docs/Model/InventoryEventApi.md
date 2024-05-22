# InventoryEventApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**voucher_id** | **string** |  | [optional] 
**bookkeeping_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**undo_voucher_id** | **string** |  | [optional] 
**undo_bookkeeping_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**type** | **int** | Depreciation &#x3D; 0, Sale &#x3D; 1, Disposal &#x3D; 4, ValueChange &#x3D; 5, Appreciation &#x3D; 6, ImpairmentLoss &#x3D; 7, ReversalOfImpairment &#x3D; 8, AdditionalDepreciation &#x3D; 9, CostOfAquisitionAdjustement &#x3D; 10, DepreciationBasisAdjustement &#x3D; 11 | [optional] 
**amount** | **double** |  | [optional] 
**current_value_before_event** | **double** |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**undone** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


