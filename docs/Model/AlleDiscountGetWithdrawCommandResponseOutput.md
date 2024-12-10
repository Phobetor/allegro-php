# # AlleDiscountGetWithdrawCommandResponseOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status field possible values:   - NEW - command processing has not started   - IN_PROGRESS - command is being processed   - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.   - SUCCESSFUL - processing of the command was successful. New participation was created. To make sure that the offer is participating in AlleDiscount, request the participation status. | [optional]
**created_at** | **\DateTime** | Command creation date. ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Command update date. ISO 8601 format. | [optional]
**withdrawn_offer_participation** | [**\Phobetor\Allegro\Model\AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation**](AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation.md) |  | [optional]
**errors** | [**\Phobetor\Allegro\Model\ErrorsHolder[]**](ErrorsHolder.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
