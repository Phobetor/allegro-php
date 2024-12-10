# # SaleProductOfferResponseV1AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**product_set** | [**\Phobetor\Allegro\Model\SaleProductOfferResponseV1AllOfProductSetInner[]**](SaleProductOfferResponseV1AllOfProductSetInner.md) |  | [optional]
**category** | [**\Phobetor\Allegro\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**attachments** | [**\Phobetor\Allegro\Model\ProductOfferAttachmentInner[]**](ProductOfferAttachmentInner.md) | An array of offer attachments. | [optional]
**fundraising_campaign** | [**\Phobetor\Allegro\Model\ProductOfferFundraisingCampaignResponse**](ProductOfferFundraisingCampaignResponse.md) |  | [optional]
**additional_services** | [**\Phobetor\Allegro\Model\ProductOfferAdditionalServicesResponse**](ProductOfferAdditionalServicesResponse.md) |  | [optional]
**delivery** | [**\Phobetor\Allegro\Model\DeliveryProductOfferResponse**](DeliveryProductOfferResponse.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\SaleProductOfferPublicationResponse**](SaleProductOfferPublicationResponse.md) |  | [optional]
**additional_marketplaces** | [**array<string,\Phobetor\Allegro\Model\AdditionalMarketplacesResponseValue>**](AdditionalMarketplacesResponseValue.md) | Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response. | [optional]
**b2b** | [**\Phobetor\Allegro\Model\B2b**](B2b.md) |  | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\CompatibilityListProductOfferResponse**](CompatibilityListProductOfferResponse.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]
**validation** | [**\Phobetor\Allegro\Model\Validation**](Validation.md) |  | [optional]
**warnings** | **array** |  | [optional]
**after_sales_services** | [**\Phobetor\Allegro\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**discounts** | [**\Phobetor\Allegro\Model\DiscountsProductOfferResponse**](DiscountsProductOfferResponse.md) |  | [optional]
**stock** | [**\Phobetor\Allegro\Model\Stock**](Stock.md) |  | [optional]
**parameters** | [**\Phobetor\Allegro\Model\ParameterProductOfferResponse[]**](ParameterProductOfferResponse.md) | List of offer parameters. | [optional]
**contact** | [**\Phobetor\Allegro\Model\SaleProductOfferResponseV1AllOfContact**](SaleProductOfferResponseV1AllOfContact.md) |  | [optional]
**created_at** | **\DateTime** | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**updated_at** | **\DateTime** | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
