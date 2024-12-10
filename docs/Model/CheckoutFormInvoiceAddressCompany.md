# # CheckoutFormInvoiceAddressCompany

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of a company for which invoice should be issued. |
**ids** | [**\Phobetor\Allegro\Model\CheckoutFormInvoiceAddressCompanyId[]**](CheckoutFormInvoiceAddressCompanyId.md) | Tax ids of a company for which invoice should be issued. | [optional]
**vat_payer_status** | **string** | The vat payer status: - &#x60;ACTIVE&#x60; - user explicitly declared as an active VAT taxpayer, - &#x60;NON_ACTIVE&#x60; - user explicitly declared as not an active VAT taxpayer, - &#x60;NOT_APPLICABLE&#x60; - user hasn&#39;t declared the VAT taxpayer status, or it&#39;s not applicable for given address type or provided company numbers. |
**tax_id** | **string** | Tax id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
