# # BaseSaleProductResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** | Name of the product. |
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**category** | [**\Phobetor\Allegro\Model\BaseSaleProductResponseDtoCategory**](BaseSaleProductResponseDtoCategory.md) |  |
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ProductParameterDto[]**](ProductParameterDto.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
