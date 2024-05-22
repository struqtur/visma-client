# CustomerApi

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Purpose: Unique Id provided by eAccounting | [optional] 
**customer_number** | **string** | Max length: 16 characters. Purpose: Unique identifier. If not provided, eAccounting will provide one | [optional] 
**corporate_identity_number** | **string** | Max length: 20 characters | [optional] 
**contact_person_email** | **string** | Max length: 255 characters | [optional] 
**contact_person_mobile** | **string** | Max length: 50 characters | [optional] 
**contact_person_name** | **string** | Max length: 100 characters | [optional] 
**contact_person_phone** | **string** | Max length: 50 characters | [optional] 
**currency_code** | **string** | Max length: 3 characters. Default value: Currency of the user company | [optional] 
**gln** | **string** | NOTE: Obsolete. Please use EdiGlnNumber instead | [optional] 
**email_address** | **string** | Max length: 255 characters  This is a default email address for sending customer invoices.  If EmailAddressOrder and EmailAddressQuote properties are empty we use this email as default one for sending quotes and orders. | [optional] 
**email_address_order** | **string** | Max length: 255 characters  This is a default email address for sending orders.  If it is empty then we use general EmailAddress property. | [optional] 
**email_address_quote** | **string** | Max length: 255 characters  This is a default email address for sending quotes.  If it is empty then we use general EmailAddress property. | [optional] 
**invoice_address1** | **string** | Max length: 50 characters | [optional] 
**invoice_address2** | **string** | Max length: 50 characters | [optional] 
**invoice_city** | **string** | Max length: 50 characters | 
**invoice_country_code** | **string** | Max length: 2 characters | [optional] 
**invoice_postal_code** | **string** | Max length: 10 characters | 
**delivery_customer_name** | **string** | Max length: 100 characters | [optional] 
**delivery_address1** | **string** | Max length: 50 characters. Purpose: Only used if invoice address differs from delivery address | [optional] 
**delivery_address2** | **string** | Max length: 50 characters. Purpose: Only used if invoice address differs from delivery address | [optional] 
**delivery_city** | **string** | Max length: 50 characters. Purpose: Only used if invoice city differs from delivery city | [optional] 
**delivery_country_code** | **string** | Max length: 2 characters. Purpose: Only used if invoice country code differs from delivery country code | [optional] 
**delivery_postal_code** | **string** | Max length: 10 characters. Purpose: Only used if invoice postal code differs from delivery postal code | [optional] 
**delivery_method_id** | **string** | Source: Get from /v2/deliverymethods | [optional] 
**delivery_term_id** | **string** | Source: Get from /v2/deliveryterms | [optional] 
**pay_to_account_id** | **string** | Purpose: The account Id on which payments are registered | [optional] 
**name** | **string** | Max length: 50 characters | 
**note** | **string** | Max length: 4000 characters | [optional] 
**reverse_charge_on_construction_services** | **bool** | Default: false. Purpose: If true, VatNumber must be set aswell | [optional] 
**webshop_customer_number** | **int** |  | [optional] 
**mobile_phone** | **string** | Max length: 50 characters | [optional] 
**telephone** | **string** | Max length: 50 characters | [optional] 
**terms_of_payment_id** | **string** | Source: Get from /v2/termsofpayment | 
**terms_of_payment** | [**\Struqtur\VismaEAccounting\Model\TermsOfPaymentApi**](TermsOfPaymentApi.md) | Purpose. Purpose: Returns the terms of payment model entered from TermsOfPaymentId | [optional] 
**vat_number** | **string** | Max length: 20 characters. Format: 2 character country code followed by 8-12 numbers. | [optional] 
**www_address** | **string** | Max length: 255 characters | [optional] 
**last_invoice_date** | [**\DateTime**](\DateTime.md) | Purpose: Returns the last invoice date | [optional] 
**is_private_person** | **bool** |  | 
**is_northern_ireland** | **bool** |  | [optional] 
**discount_percentage** | **double** | Format: 4 decimals | [optional] 
**changed_utc** | [**\DateTime**](\DateTime.md) | Purpose: Returns the last date and time from when a change was made on the customer | [optional] 
**is_active** | **bool** |  | 
**force_bookkeep_vat** | **bool** |  | [optional] 
**edi_gln_number** | **string** |  | [optional] 
**sales_document_language** | **string** | Max length: 2 characters | [optional] 
**electronic_address** | **string** |  | [optional] 
**electronic_reference** | **string** |  | [optional] 
**edi_service_deliverer_id** | **string** |  | [optional] 
**auto_invoice_activation_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**auto_invoice_registration_request_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**email_addresses** | **string[]** |  | [optional] 
**customer_labels** | [**\Struqtur\VismaEAccounting\Model\CustomerLabelApi[]**](CustomerLabelApi.md) |  | [optional] 
**message_threads** | **string[]** | Fetch messages via GET /v2/messagethreads/{messageThreadId} | [optional] 
**notes** | **string[]** | Fetch notes via GET /v2/notes/{noteId} | [optional] 
**is_future_invoice_date_allowed** | **bool** | Purpose: Future dates on invoices are allowed based on terms of payments and invoice currency code settings | [optional] 
**delivery_based_vat** | **bool** | Purpose: Option to set the delivery address as the base for vat and oss calculations. Delivery city, country code and postal code must be set aswell | [optional] 
**sales_price_list_id** | **string** | Returns the sales price list id that is connected to the customer. It will be used only for Pro variant companies | [optional] 
**iban** | **string** | Purpose: Customer&#39;s bank account IBAN (manual entry) | [optional] 
**direct_debit_customer_settings** | [**\Struqtur\VismaEAccounting\Model\DirectDebitCustomerSettingsApi**](DirectDebitCustomerSettingsApi.md) | Purpose: Direct Debit module (for the Netherlands) settings | [optional] 
**discount_agreement_id** | **string** | Returns the discount agreement id that is connected to the customer. It will be used only for Pro variant companies | [optional] 
**unpaid_invoices_amount** | **double** | The total amount of unpaid invoices for the customer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


