# # SaleProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product id. |
**name** | **string** | Product name. |
**category** | [**Category**](Category.md) |  |
**eans** | **string[]** | A list of codes that identify this product. Currently this can include EAN, ISBN, and UPC identifier types. | [optional]
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) | List of product images. | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ProductParameterDto[]**](ProductParameterDto.md) | List of product parameters. | [optional]
**offer_requirements** | [**\Phobetor\Allegro\Model\OfferRequirements**](OfferRequirements.md) |  | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\SaleProductCompatibilityList**](SaleProductCompatibilityList.md) |  | [optional]
**tecdoc_specification** | [**\Phobetor\Allegro\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
