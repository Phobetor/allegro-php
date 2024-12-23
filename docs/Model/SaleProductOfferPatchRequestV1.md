# # SaleProductOfferPatchRequestV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_set** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfProductSetInner[]**](SaleProductOfferRequestV1AllOfProductSetInner.md) |  | [optional]
**b2b** | [**\Phobetor\Allegro\Model\B2b**](B2b.md) |  | [optional]
**attachments** | [**\Phobetor\Allegro\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\Phobetor\Allegro\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\Phobetor\Allegro\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfCompatibilityList**](SaleProductOfferRequestV1AllOfCompatibilityList.md) |  | [optional]
**delivery** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfDelivery**](SaleProductOfferRequestBaseAllOfDelivery.md) |  | [optional]
**stock** | [**\Phobetor\Allegro\Model\SaleProductOffersRequestStock**](SaleProductOffersRequestStock.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfPublication**](SaleProductOfferRequestBaseAllOfPublication.md) |  | [optional]
**additional_marketplaces** | [**array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesRequestValue>**](AdditionalMarketplacesRequestValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.&lt;br/&gt; Possible values of &#x60;marketplaceId&#x60; can be obtained from &#x60;GET /marketplaces&#x60; resource.&lt;/br&gt; See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**category** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfCategory**](SaleProductOfferRequestBaseAllOfCategory.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ParameterProductOfferRequest[]**](ParameterProductOfferRequest.md) |  | [optional]
**after_sales_services** | [**\Phobetor\Allegro\Model\AfterSalesServicesProductOfferRequest**](AfterSalesServicesProductOfferRequest.md) |  | [optional]
**size_table** | [**\Phobetor\Allegro\Model\SizeTable**](SizeTable.md) |  | [optional]
**contact** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestBaseAllOfContact**](SaleProductOfferRequestBaseAllOfContact.md) |  | [optional]
**discounts** | [**\Phobetor\Allegro\Model\DiscountsProductOfferRequest**](DiscountsProductOfferRequest.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 75 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . | [optional]
**payments** | [**\Phobetor\Allegro\Model\Payments**](Payments.md) |  | [optional]
**selling_mode** | [**\Phobetor\Allegro\Model\SellingMode**](SellingMode.md) |  | [optional]
**location** | [**\Phobetor\Allegro\Model\Location**](Location.md) |  | [optional]
**images** | **string[]** |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**external** | [**\Phobetor\Allegro\Model\ExternalId**](ExternalId.md) |  | [optional]
**tax_settings** | [**\Phobetor\Allegro\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**message_to_seller_settings** | [**\Phobetor\Allegro\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
