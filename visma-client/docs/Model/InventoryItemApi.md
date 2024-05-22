# InventoryItemApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**number** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**purchase_price** | **double** |  | [optional] 
**purchase_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**inventory_item_status** | **int** | Inactive &#x3D; 1, Active &#x3D; 2, Sold &#x3D; 3, Dispose &#x3D; 4 | [optional] 
**depreciate** | **bool** |  | [optional] 
**life_span_in_months** | **int** |  | [optional] 
**depreciation_start_type** | **int** | PurchaseMonth &#x3D; 1, MonthAfterPurchaseMonth &#x3D; 2, FirstMonthOfPurchaseYear &#x3D; 3 | [optional] 
**first_depreciation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**latest_depreciation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**residual_value** | **double** |  | [optional] 
**current_value** | **double** |  | [optional] 
**cost_center_item_id1** | **string** |  | [optional] 
**cost_center_item_id2** | **string** |  | [optional] 
**cost_center_item_id3** | **string** |  | [optional] 
**project_id** | **string** |  | [optional] 
**inventory_accounting_template** | [**\Struqtur\VismaEAccounting\Model\InventoryAccountingTemplateApi**](InventoryAccountingTemplateApi.md) |  | [optional] 
**events** | [**\Struqtur\VismaEAccounting\Model\InventoryEventApi[]**](InventoryEventApi.md) |  | [optional] 
**opening_depreciations** | [**\Struqtur\VismaEAccounting\Model\InventoryAccumulatedDepreciationApi[]**](InventoryAccumulatedDepreciationApi.md) |  | [optional] 
**has_upcoming_depreciations** | **bool** |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**depreciation_basis** | **double** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


