# AccountingLockSettingsApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_locked_as_of** | [**\Struqtur\VismaEAccounting\Model\AccountingLockDateApi**](AccountingLockDateApi.md) | Default: No lock | [optional] 
**accounting_lock_interval** | **int** | Range: 0 - 4. 0 &#x3D; None, 1 &#x3D; Month, 2 &#x3D; Quarter, 3 &#x3D; Year, 4 &#x3D; TaxDeclaration | [optional] 
**tax_declaration_date** | [**\Struqtur\VismaEAccounting\Model\TaxDeclarationDateApi**](TaxDeclarationDateApi.md) | Only available for accounting lock interval as of tax declaration date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


