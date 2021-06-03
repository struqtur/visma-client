# PaymentVoucherRowApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **int** |  | 
**debit_amount** | **double** | Format: Max 2 decimals | [optional] 
**credit_amount** | **double** | Format: Max 2 decimals | [optional] 
**transaction_text** | **string** | Max length: 50 characters | [optional] 
**cost_center_item_id1** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id2** | **string** | Source: Get from /v2/costcenters | [optional] 
**cost_center_item_id3** | **string** | Source: Get from /v2/costcenters | [optional] 
**vat_code_id** | **string** |  | [optional] 
**receivable_id** | **string** | Purpose: Id of the customer invoice to be paid | [optional] 
**payable_id** | **string** | Purpose: Id of the supplier invoice to be paid | [optional] 
**project_id** | **string** | Source: Get from /v2/projects | [optional] 
**quantity** | **double** | Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**weight** | **double** | Format: Max 2 decimals  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) | Format: YYYY-MM-DD  Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 
**harvest_year** | **int** | Purpose: This feature is for dutch companies only which enabled agriculture support | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


