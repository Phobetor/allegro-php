# # PublicationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ending_at** | **\DateTime** | Publication ending date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified | [optional]
**ended_by** | **string** | Indicates the reason for ending the offer: - &#x60;USER&#x60; - offer ended by the seller. - &#x60;ADMIN&#x60; - offer ended by an admin. - &#x60;EXPIRATION&#x60; - offer duration had expired (valid for offers with specified duration). - &#x60;EMPTY_STOCK&#x60; - offer ended because all available items had been sold out. - &#x60;PRODUCT_DETACHMENT&#x60; - offer ended because its link to the product was removed. Status will only occur   if the base marketplace of offer requires full productization. - &#x60;ERROR&#x60; - offer ended due to internal problem with offer publication. The publication command responded with   success status, but further processing failed. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
