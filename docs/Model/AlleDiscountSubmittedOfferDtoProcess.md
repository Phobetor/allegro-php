# # AlleDiscountSubmittedOfferDtoProcess

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | - VERIFICATION - participation is being verified. - ACCEPTED - participation in AlleDiscount was created and has passed initial verification. Participation will stay in this status until campaign starts or if additional verification fails. - ACTIVE - participation is active, price on the platform is lowered. Offer is participating in AlleDiscount. - DECLINED - participation didn’t pass verification, check process.errors field for more details. - FINISHED - participation is no longer active. | [optional]
**errors** | [**\Phobetor\Allegro\Model\AlleDiscountSubmittedOfferDtoProcessErrorsInner[]**](AlleDiscountSubmittedOfferDtoProcessErrorsInner.md) | Possible participation errors:   - TOO_HIGH_PROPOSED_PRICE - “proposedPrice” field when submitting an offer was set higher than the “requiredMerchantPrice” of this offer.   - PRODUCT_CONFIGURATION_CHANGED - configuration of offer’s product has changed in the meantime of processing the request.   - PRODUCT_NOT_IN_CAMPAIGN - submitted offer’s product is no longer available in this campaign.   - OFFER_NOT_VISIBLE_ON_CAMPAIGN_MARKETPLACE - offer is not visible on the marketplace of the campaign it was submitted to.   - CURRENCY_NOT_SUPPORTED - currency in “proposedPrice” does not match the currency of the marketplace offer was submitted to.   - ALLE_DISCOUNT_SUSPENDED_ACCOUNT - seller submitting offer is suspended and cannot perform any action. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
