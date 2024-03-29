# # SaleProductOfferPatchRequestV1AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_set** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfProductSetInner[]**](SaleProductOfferRequestV1AllOfProductSetInner.md) |  | [optional]
**b2b** | [**\Phobetor\Allegro\Model\B2b**](B2b.md) |  | [optional]
**attachments** | [**\Phobetor\Allegro\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\Phobetor\Allegro\Model\ProductOfferFundraisingCampaignRequest**](ProductOfferFundraisingCampaignRequest.md) |  | [optional]
**additional_services** | [**\Phobetor\Allegro\Model\ProductOfferAdditionalServicesRequest**](ProductOfferAdditionalServicesRequest.md) |  | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfCompatibilityList**](SaleProductOfferRequestV1AllOfCompatibilityList.md) |  | [optional]
**delivery** | [**\Phobetor\Allegro\Model\SaleProductOfferRequestV1AllOfDelivery**](SaleProductOfferRequestV1AllOfDelivery.md) |  | [optional]
**stock** | [**\Phobetor\Allegro\Model\SaleProductOffersRequestStock**](SaleProductOffersRequestStock.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductOfferPublicationRequest**](SaleProductOfferPublicationRequest.md) |  | [optional]
**additional_marketplaces** | [**array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesRequestValue>**](AdditionalMarketplacesRequestValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.&lt;br/&gt; Possible values of &#x60;marketplaceId&#x60; can be obtained from &#x60;GET /marketplaces&#x60; resource.&lt;/br&gt; See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field. | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
