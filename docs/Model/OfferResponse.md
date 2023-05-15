# # OfferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\Phobetor\Allegro\Model\OfferCategory**](OfferCategory.md) |  | [optional]
**additional_marketplaces** | [**array<string,\Phobetor\Allegro\Model\OfferAdditionalMarketplace>**](OfferAdditionalMarketplace.md) | Settings for each additional marketplace. | [optional]
**additional_services** | [**\Phobetor\Allegro\Model\JustId**](JustId.md) |  | [optional]
**after_sales_services** | [**\Phobetor\Allegro\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional]
**attachments** | [**\Phobetor\Allegro\Model\Attachment[]**](Attachment.md) | List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in &lt;a href&#x3D;\&quot;/documentation/#operation/createOfferAttachmentUsingPOST\&quot; target&#x3D;\&quot;_blank\&quot;&gt;uploading offer attachments flow&lt;/a&gt;. | [optional]
**compatibility_list** | [**\Phobetor\Allegro\Model\CompatibilityList**](CompatibilityList.md) |  | [optional]
**contact** | [**\Phobetor\Allegro\Model\JustId**](JustId.md) |  | [optional]
**created_at** | **\DateTime** | Creation date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified. | [optional]
**custom_parameters** | [**\Phobetor\Allegro\Model\CustomParameter[]**](CustomParameter.md) | List of custom parameters. You can add up to 4 custom parameters, each containing exactly one value. | [optional]
**delivery** | [**\Phobetor\Allegro\Model\DeliveryFull**](DeliveryFull.md) |  | [optional]
**description** | [**\Phobetor\Allegro\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional]
**discounts** | [**\Phobetor\Allegro\Model\Discounts**](Discounts.md) |  | [optional]
**external** | [**\Phobetor\Allegro\Model\ExternalId**](ExternalId.md) |  | [optional]
**fundraising_campaign** | [**\Phobetor\Allegro\Model\JustId**](JustId.md) |  | [optional]
**id** | **string** |  | [optional]
**images** | [**\Phobetor\Allegro\Model\ImageUrl[]**](ImageUrl.md) |  | [optional]
**location** | [**\Phobetor\Allegro\Model\Location**](Location.md) |  | [optional]
**name** | **string** | Name (title) of an offer. Length cannot be more than 50 characters. Read more: &lt;a href&#x3D;\&quot;../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt;  / &lt;a href&#x3D;\&quot;../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt; . |
**parameters** | [**\Phobetor\Allegro\Model\Parameter[]**](Parameter.md) |  | [optional]
**payments** | [**\Phobetor\Allegro\Model\Payments**](Payments.md) |  | [optional]
**product** | [**\Phobetor\Allegro\Model\JustId**](JustId.md) |  | [optional]
**promotion** | [**\Phobetor\Allegro\Model\Promotion**](Promotion.md) |  | [optional]
**publication** | [**\Phobetor\Allegro\Model\Publication**](Publication.md) |  | [optional]
**selling_mode** | [**\Phobetor\Allegro\Model\SellingModeWithNetPrice**](SellingModeWithNetPrice.md) |  | [optional]
**tax** | [**\Phobetor\Allegro\Model\ExtendedTax**](ExtendedTax.md) |  | [optional]
**tax_settings** | [**\Phobetor\Allegro\Model\OfferTaxSettings**](OfferTaxSettings.md) |  | [optional]
**size_table** | [**\Phobetor\Allegro\Model\JustId**](JustId.md) |  | [optional]
**stock** | [**\Phobetor\Allegro\Model\Stock**](Stock.md) |  | [optional]
**tecdoc_specification** | [**\Phobetor\Allegro\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional]
**b2b** | [**\Phobetor\Allegro\Model\B2b**](B2b.md) |  | [optional]
**message_to_seller_settings** | [**\Phobetor\Allegro\Model\MessageToSellerSettings**](MessageToSellerSettings.md) |  | [optional]
**updated_at** | **\DateTime** | Last update date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified | [optional]
**validation** | [**\Phobetor\Allegro\Model\Validation**](Validation.md) |  | [optional]
**language** | **string** | Declared base language of the offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
