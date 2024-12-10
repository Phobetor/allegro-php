# # BaseSaleProductResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** | Name of the product. |
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**category** | [**\Phobetor\Allegro\Model\ProductCategoryWithPath**](ProductCategoryWithPath.md) |  |
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ProductParameterDto[]**](ProductParameterDto.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]
**ai_co_created_content** | [**\Phobetor\Allegro\Model\AiCoCreatedContent**](AiCoCreatedContent.md) |  | [optional]
**has_protected_brand** | **bool** | Flag that informs if product is a part of a protected brand&#39;s assortment and its use may be restricted. | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductDtoPublication**](SaleProductDtoPublication.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
