# CustomerInvoiceRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Id provided by eAccounting for every row | [optional] 
**article_number** | **string** |  | [optional] 
**article_id** | **string** | Purpose: Null if text row | [optional] 
**is_service_article** | **bool** | IsServiceArticle &#x3D; FALSE if the sales category for the article is of the type Goods  IsServiceArticle &#x3D; TRUE if the sales category for the article is of the type Service. | [optional] 
**amount_no_vat** | **double** |  | [optional] 
**percent_vat** | **double** |  | [optional] 
**line_number** | **int** |  | [optional] 
**is_text_row** | **bool** |  | [optional] 
**text** | **string** | Default: The article&#39;s name | [optional] 
**unit_price** | **double** | Format: 2 decimals allowed if the customer is domestic or 4 decimals if foreign | [optional] 
**unit_abbreviation** | **string** |  | [optional] 
**unit_abbreviation_english** | **string** |  | [optional] 
**discount_percentage** | **double** | Format: 4 decimals | [optional] 
**quantity** | **double** |  | [optional] 
**is_work_cost** | **bool** |  | [optional] 
**is_vat_free** | **bool** |  | [optional] 
**cost_center_item_id1** | **string** |  | [optional] 
**cost_center_item_id2** | **string** |  | [optional] 
**cost_center_item_id3** | **string** |  | [optional] 
**unit_id** | **string** |  | [optional] 
**project_id** | **string** |  | [optional] 
**work_cost_type** | **int** | Only used for ROT/RUT invoices | [optional] 
**work_hours** | **double** | Only used for ROT/RUT invoices | [optional] 
**material_costs** | **double** | Only used for ROT/RUT invoices | [optional] 
**green_technology_type** | **int** | Type of green technology on the quote row, can be :   None &#x3D; 0,  SolarCellInstallation &#x3D; 1,  ElectricEnergyStorageInstallation &#x3D; 2,  ElectricVehicleChargingPointInstallation &#x3D; 3,  Default value is 0. | [optional] 
**contribution_margin** | [**\Struqtur\VismaEAccounting\Model\ContributionMarginApi**](ContributionMarginApi.md) | Contribution margin variables | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


