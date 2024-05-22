# AllocationPeriodApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**supplier_invoice_draft_id** | **string** |  | [optional] 
**supplier_invoice_draft_row** | **int** |  | [optional] 
**supplier_invoice_id** | **string** |  | [optional] 
**supplier_invoice_row** | **int** |  | [optional] 
**manual_voucher_id** | **string** |  | [optional] 
**manual_voucher_row** | **int** |  | [optional] 
**customer_invoice_id** | **string** |  | [optional] 
**customer_invoice_row** | **int** |  | [optional] 
**voucher_fiscal_year_id** | **string** | Returns the fiscal year id of the voucher coresponding to the source type | [optional] 
**allocation_period_source_type** | **int** | 0 &#x3D; SupplierInvoice, 1 &#x3D; ManualVoucher, 2 &#x3D; CustomerInvoice | [optional] 
**status** | **int** | 0 &#x3D; Pending, 1 &#x3D; Revoked, 2 &#x3D; Booked | [optional] 
**cost_center_item_id1** | **string** |  | [optional] 
**cost_center_item_id2** | **string** |  | [optional] 
**cost_center_item_id3** | **string** |  | [optional] 
**project_id** | **string** |  | [optional] 
**bookkeeping_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**rows** | [**\Struqtur\VismaEAccounting\Model\AllocationPeriodRowApi[]**](AllocationPeriodRowApi.md) |  | 
**debit_account_number** | **int** |  | [optional] 
**credit_account_number** | **int** |  | [optional] 
**amount** | **double** |  | [optional] 
**is_credit** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


