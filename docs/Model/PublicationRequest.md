# # PublicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **string** | This field must be set to one of the following:&lt;br/&gt; - for auctions: 1 day, 3 days, 5 days, 7 days, 10 days&lt;br/&gt; - for buy-now offers: 3 days, 5 days, 7 days, 10 days, 20 days, 30 days&lt;br/&gt; - for advertisements: 10 days, 20 days, 30 days.&lt;br/&gt; The value is in ISO 8601 format (example: PT24H, PT72H). | [optional]
**starting_at** | **\DateTime** | Publication starting date: Format (ISO 8601) - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ. Cannot be modified after activation or ending of the offer. | [optional]
**status** | [**\Phobetor\Allegro\Model\OfferStatus**](OfferStatus.md) |  | [optional]
**republish** | **bool** | Whether to republish an offer after ending. Automatically republish offers or auctions:&lt;/br&gt; - &#x60;BUY_NOW&#x60; offer type are republished with initial stock, regardless of how many items you have sold.&lt;/br&gt; - &#x60;AUCTION&#x60; offer type are republished only if they were not concluded with purchase.&lt;/br&gt; - &#x60;ADVERTISEMENT&#x60; offer type are republished until it will be finished manually. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
