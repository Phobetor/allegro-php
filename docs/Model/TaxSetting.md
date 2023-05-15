# # TaxSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier of an immutable VAT setting. | [optional]
**rate** | [**\Phobetor\Allegro\Model\TaxSettingRate**](TaxSettingRate.md) |  | [optional]
**percentage** | **string** | A numeric value of VAT tax rate. In case of \&quot;OUT_OF_SCOPE_OF_VAT\&quot; it&#39;s set to 0. | [optional]
**subject** | [**\Phobetor\Allegro\Model\TaxSettingSubject**](TaxSettingSubject.md) |  | [optional]
**exemption** | [**\Phobetor\Allegro\Model\TaxSettingExemption**](TaxSettingExemption.md) |  | [optional]
**country_code** | **string** | A country code for which given VAT setting is defined. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
