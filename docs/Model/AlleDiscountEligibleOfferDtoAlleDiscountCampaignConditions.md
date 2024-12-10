# # AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meets_conditions** | **bool** | If true, offer matches campaign requirements and &#x60;violations&#x60; array will be empty. | [optional]
**violations** | [**\Phobetor\Allegro\Model\AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsInner[]**](AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsInner.md) | Example violations:   - NOT_ENOUGH_STOCK - offer doesn’t meet the stock requirement.   - VAT_INVOICE_REQUIRED - offer doesn’t have vat invoice enabled.   - NOT_NEW_OFFER - offer’s condition is not new (e.g used).   - OFFER_PRICE_VERIFICATION_IN_PROGRESS - we are still gathering the information about the offer price. In this case the “basePrice” field should be set to null. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
