# CompanySettingsApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Max length: 100 characters | 
**email** | **string** | Max length: 255 characters | [optional] 
**phone** | **string** | Max length: 20 characters | [optional] 
**mobile_phone** | **string** | Max length: 20 characters | [optional] 
**address1** | **string** | Max length: 40 characters | [optional] 
**address2** | **string** | Max length: 40 characters | [optional] 
**country_code** | **string** | Max length: 2 characters | 
**postal_code** | **string** | Max length: 10 characters | [optional] 
**city** | **string** | Max length: 40 characters | [optional] 
**website** | **string** | Max length: 255 characters | [optional] 
**currency_code** | **string** |  | [optional] 
**terms_of_payment_id** | **string** | Source: Get from /v2/termsofpayments | [optional] 
**corporate_identity_number** | **string** |  | [optional] 
**vat_code** | **string** | VAT identification number | [optional] 
**bank_giro** | **string** | Only used in Sweden. | [optional] 
**plus_giro** | **string** | Only used in Sweden. | [optional] 
**bank_account** | **string** |  | [optional] 
**iban** | **string** |  | [optional] 
**accounting_locked_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**accounting_lock_interval** | **int** | 0 &#x3D; None, 1 &#x3D; Month, 2 &#x3D; Quarter, 3 &#x3D; Year, 4 &#x3D; TaxDeclaration | [optional] 
**tax_declaration_date** | [**\Struqtur\VismaEAccounting\Model\TaxDeclarationDateApi**](TaxDeclarationDateApi.md) | Purpose: Only for Sweden and Finland | [optional] 
**gln** | **string** | Global Location Number | [optional] 
**product_variant** | **int** | Variant of eAccouting. 1 &#x3D; Standard/Smart, 2 &#x3D; Invoicing, 3 &#x3D; Bookkeeping, 4 &#x3D; Start/Solo, 5 &#x3D; Pro, 6 &#x3D; InvoicingCollaboration | [optional] 
**type_of_business** | **int** | 1 &#x3D; Corporation, 2 &#x3D; SoleProprietorship, 3 &#x3D; EconomicAssociation, 4 &#x3D; NonProfitOrganization, 5 &#x3D; GeneralPartnership, 6 &#x3D; LimitedPartnership, 7 &#x3D; Cooperatives, 9 &#x3D; PublicLimited | [optional] 
**vat_period** | **int** | Period when VAT report should be sent. 1 &#x3D; OnceAMonth12th, 2 &#x3D; OnceAMonth26th, 3 &#x3D; OnceAQuarter, 4 &#x3D; OnceAYear, 5 &#x3D; Never, 6 &#x3D; Bimonthly, 7 &#x3D; OnceAMonth, 8 &#x3D; TwiceAYear, 9 &#x3D; OnceAQuarterFloating | [optional] 
**activated_modules** | **string[]** |  | [optional] 
**company_text** | [**\Struqtur\VismaEAccounting\Model\CompanyTextsApi**](CompanyTextsApi.md) | Company settings - Other information | [optional] 
**next_customer_number** | **int** |  | [optional] 
**next_supplier_number** | **int** |  | [optional] 
**next_customer_invoice_number** | **int** |  | [optional] 
**next_quote_number** | **int** |  | [optional] 
**show_prices_excl_vat_pc** | **bool** | Show prices excluding VAT for private individuals | [optional] 
**is_payslip_activated** | **bool** |  | [optional] 
**uses_moss** | **bool** |  | [optional] 
**uses_payment_reference_number** | **bool** | Show OCR/KID reference no. on invoice | [optional] 
**domestic_currency_rounding** | **int** | 0 &#x3D; None, HalfAwayFromZero &#x3D; 1 | [optional] 
**auto_invoice** | [**\Struqtur\VismaEAccounting\Model\AutoInvoiceApi**](AutoInvoiceApi.md) | Auto invoice company settings | [optional] 
**approval_settings** | [**\Struqtur\VismaEAccounting\Model\ApprovalSettingsApi**](ApprovalSettingsApi.md) | Approval company settings | [optional] 
**uses_reverse_construction_vat** | **bool** | Construction sector, VAT reverse charge rules apply | [optional] 
**uses_rot_reduced_invoicing** | **bool** | Only for swedish companies. Domestic services to private individuals, ROT/RUT rules apply | [optional] 
**company_rot_rut_settings** | [**\Struqtur\VismaEAccounting\Model\CompanyRotRutSettingsApi**](CompanyRotRutSettingsApi.md) | Only for swedish companies and values are recommended by the tax authority. Use PUT v2/companysettings/rotrutsettings in combination with UsesRotReducedInvoicing set to true. | [optional] 
**company_status** | **int** | 0 &#x3D; Inactive, Active &#x3D; 1, ReadOnly &#x3D; 2 | [optional] 
**company_identifier** | **string** | Company Identifier. Unique identifier for the company | [optional] 
**bankgiro_number_print** | **string** | Alternative bank giro number on sales invoice printouts | [optional] 
**keep_original_draft_date** | **bool** | When set to true, keep the original sales invoice draft date as invoice date | [optional] 
**use_payment_files_for_outgoing_payments** | **bool** | When set to true, supplier invoices can be exported as paymentfile and manually sent to bank | [optional] 
**use_automatic_vat_calculation** | **bool** | When set to true, vat rows are added (when creating a voucher for example), if the account used relates to.  Used for SE, NO, FI | [optional] 
**show_cost_center_reminder** | **bool** | Customer has opted to get reminded about adding a cost center when creating invoices. | [optional] 
**show_project_reminder** | **bool** | Customer has opted to get reminded about adding a project when creating invoices. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


