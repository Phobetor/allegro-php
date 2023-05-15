# # CreateAdvanceShipNoticeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An UUID identifier of ASN. |
**display_number** | **string** | A human friendly identifier of ASN. |
**status** | [**\Phobetor\Allegro\Model\AdvanceShipNoticeStatus**](AdvanceShipNoticeStatus.md) |  |
**created_at** | **\DateTime** | The date and time of Advance Ship Notice creation. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601). |
**updated_at** | **\DateTime** | The date and time of last Advance Ship Notice update. Provided in [ISO 8601 format](link: https://en.wikipedia.org/wiki/ISO_8601). |
**items** | [**\Phobetor\Allegro\Model\ProductItem[]**](ProductItem.md) | A list of product items. |
**handling_unit** | [**\Phobetor\Allegro\Model\HandlingUnit**](HandlingUnit.md) |  | [optional]
**labels** | [**\Phobetor\Allegro\Model\Labels**](Labels.md) |  | [optional]
**shipping** | [**\Phobetor\Allegro\Model\Shipping**](Shipping.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
