# # RefundDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The payment refund identifier. |
**payment** | [**\Phobetor\Allegro\Model\RefundPayment**](RefundPayment.md) |  |
**reason** | **string** | Reason for a payment refund. |
**status** | **string** | Current status of payment refund. |
**created_at** | **\DateTime** | Date and time when the refund was created provided in ISO 8601 format. |
**total_value** | [**\Phobetor\Allegro\Model\RefundTotalValue**](RefundTotalValue.md) |  |
**line_items** | [**\Phobetor\Allegro\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#39;s line items which can be refunded. | [optional]
**delivery** | [**\Phobetor\Allegro\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional]
**overpaid** | [**\Phobetor\Allegro\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional]
**surcharges** | [**\Phobetor\Allegro\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional]
**additional_services** | [**\Phobetor\Allegro\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional]
**seller_comment** | **string** | Sellers optional justification for refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
