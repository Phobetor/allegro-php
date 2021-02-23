# # ProposeSaleProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Suggested product name. |
**category** | [**\Phobetor\Allegro\Model\Category**](Category.md) |  |
**eans** | **string[]** | A list of codes that identify this product. Currently this can include EAN, ISBN, and UPC identifier types. | [optional]
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) | List of product images. At least one image is required. |
**parameters** | [**\Phobetor\Allegro\Model\ProductParameter[]**](ProductParameter.md) | List of product parameters. |
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
