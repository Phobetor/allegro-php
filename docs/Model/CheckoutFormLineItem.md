# # CheckoutFormLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Line item identifier |
**offer** | [**\Phobetor\Allegro\Model\OfferReference**](OfferReference.md) |  |
**quantity** | **float** | quantity |
**original_price** | [**\Phobetor\Allegro\Model\Price**](Price.md) |  |
**price** | [**\Phobetor\Allegro\Model\Price**](Price.md) |  |
**reconciliation** | [**\Phobetor\Allegro\Model\LineItemReconciliation**](LineItemReconciliation.md) |  | [optional]
**selected_additional_services** | [**\Phobetor\Allegro\Model\CheckoutFormAdditionalService[]**](CheckoutFormAdditionalService.md) |  | [optional]
**bought_at** | **\DateTime** | ISO date when offer was bought | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
