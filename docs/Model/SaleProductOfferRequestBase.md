# # SaleProductOfferRequestBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfCategory**](SaleProductOfferRequestBaseAllOfCategory.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfPublication**](SaleProductOfferRequestBaseAllOfPublication.md) |  | [optional]
**delivery** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfDelivery**](SaleProductOfferRequestBaseAllOfDelivery.md) |  | [optional]
**after_sales_services** | [**\Phobetor\Allegro\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\Phobetor\Allegro\Model\SizeTable**](SizeTable.md) |  | [optional]
**discounts** | [**\Phobetor\Allegro\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\Phobetor\Allegro\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\Phobetor\Allegro\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\Phobetor\Allegro\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\Phobetor\Allegro\Model\ExternalId**](ExternalId.md) |  | [optional]
**tax** | [**\Phobetor\Allegro\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**tax_settings** | [**\Phobetor\Allegro\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\Phobetor\Allegro\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**additional_marketplaces** | [**array<string,\Phobetor\Allegro\Model\OfferAdditionalMarketplace>**](OfferAdditionalMarketplace.md) | Settings for each additional marketplace. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
