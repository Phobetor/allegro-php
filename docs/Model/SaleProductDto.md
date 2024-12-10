# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. |
**name** | **string** | Product name. |
**category** | [**\Phobetor\Allegro\Model\ProductCategoryWithPath**](ProductCategoryWithPath.md) |  |
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ProductParameterDto[]**](ProductParameterDto.md) | List of product parameters. | [optional]
**offer_requirements** | [**\Phobetor\Allegro\Model\OfferRequirements**](OfferRequirements.md) |  | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional]
**tecdoc_specification** | [**\Phobetor\Allegro\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**is_draft** | **bool** | Flag that informs if product is waiting for resolution of basic parameters change proposal. | [optional]
**ai_co_created_content** | [**\Phobetor\Allegro\Model\AiCoCreatedContent**](AiCoCreatedContent.md) |  | [optional]
**has_protected_brand** | **bool** | Flag that informs if product is a part of a protected brand&#39;s assortment and its use may be restricted. | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductDtoPublication**](SaleProductDtoPublication.md) |  | [optional]
**product_safety** | [**\Phobetor\Allegro\Model\ProductSafetyDto**](ProductSafetyDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
