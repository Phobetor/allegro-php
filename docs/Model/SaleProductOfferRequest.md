# # SaleProductOfferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**ProductOffer**](ProductOffer.md) | You should enter the product identifier (UUID or EAN) or a complete product definition. | [optional]
**after_sales_services** | [**\Phobetor\Allegro\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**delivery** | [**DeliveryProductOfferRequest**](DeliveryProductOfferRequest.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestAllOfPublication**](SaleProductOfferRequestAllOfPublication.md) |  | [optional]
**category** | [**\Phobetor\Allegro\Model\Category**](Category.md) |  | [optional]
**size_table** | [**\Phobetor\Allegro\Model\SizeTable**](SizeTable.md) |  | [optional]
**discounts** | [**\Phobetor\Allegro\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name of the offer. Words used in the name field cannot be longer than 50 characters. | [optional]
**payments** | [**\Phobetor\Allegro\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\Phobetor\Allegro\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\Phobetor\Allegro\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\Phobetor\Allegro\Model\ExternalId**](ExternalId.md) |  | [optional]
**stock** | [**\Phobetor\Allegro\Model\Stock**](Stock.md) |  |
**tax** | [**\Phobetor\Allegro\Model\Tax**](Tax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
