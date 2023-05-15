# # CheckoutForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id |
**message_to_seller** | **string** | Message from buyer to seller | [optional]
**buyer** | [**\Phobetor\Allegro\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  |
**payment** | [**\Phobetor\Allegro\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional]
**status** | [**\Phobetor\Allegro\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  |
**fulfillment** | [**\Phobetor\Allegro\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional]
**delivery** | [**\Phobetor\Allegro\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional]
**invoice** | [**\Phobetor\Allegro\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional]
**line_items** | [**\Phobetor\Allegro\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  |
**surcharges** | [**\Phobetor\Allegro\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  |
**discounts** | [**\Phobetor\Allegro\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  |
**marketplace** | [**\Phobetor\Allegro\Model\CheckoutFormMarketplace**](CheckoutFormMarketplace.md) |  | [optional]
**summary** | [**\Phobetor\Allegro\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  |
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional]
**revision** | **string** | Checkout form revision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
