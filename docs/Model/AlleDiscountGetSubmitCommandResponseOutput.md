# # AlleDiscountGetSubmitCommandResponseOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status field possible values:   - NEW - command processing has not started.   - IN_PROGRESS - command is being processed.   - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.   - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.     To make sure that the offer is participating in AlleDiscount, check the participation status in     &#39;GET /sale/alle-discount/{campaignId}/submitted-offers&#x60;. | [optional]
**created_at** | **\DateTime** | Command creation date. ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Command update date. ISO 8601 format. | [optional]
**new_offer_participation** | [**\Phobetor\Allegro\Model\AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation**](AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation.md) |  | [optional]
**errors** | [**\Phobetor\Allegro\Model\ErrorsHolder[]**](ErrorsHolder.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
