# # CheckoutFormInvoiceInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**required** | **bool** | Is invoice required by buyer? |
**address** | [**\Phobetor\Allegro\Model\CheckoutFormInvoiceAddress**](CheckoutFormInvoiceAddress.md) |  | [optional]
**due_date** | **string** | Due date to put on an invoice for Extended Payment Terms purchases. For other payment methods this field will be null. | [optional]
**features** | **string[]** | Invoice features list:  - VAT_EU_VERIFIED - order&#39;s data is verified for VAT EU transactions. The presence of this feature means that VAT_EU number will appear in &#x60;address.company.ids&#x60; field. This feature flag is mutually exclusive with &#x60;VAT_EU_UNVERIFIED&#x60; feature. Read more: &lt;a href&#x3D;\&quot;../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt; / &lt;a href&#x3D;\&quot;../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt;.  - VAT_EU_UNVERIFIED - order meets the conditions of VAT EU transaction, but the Buyer&#39;s VAT_EU number is not verified. This feature flag is mutually exclusive with &#x60;VAT_EU_VERIFIED&#x60; feature. Read more: &lt;a href&#x3D;\&quot;../../news/serwisy-zagraniczne-allegro-od-18-listopada-2024-pozwolimy-wszystkim-sprzedajacym-udostepnic-oferty-na-business-allegro-cz-oraz-wdrozymy-wsparcie-dla-transakcji-wewnatrzwspolnotowych-1nayOPKLaSr\&quot; target&#x3D;\&quot;_blank\&quot;&gt;PL&lt;/a&gt; / &lt;a href&#x3D;\&quot;../../news/allegro-foreign-marketplaces-starting-november-18-2024-we-will-allow-all-sellers-to-list-offers-on-business-allegro-cz-and-implement-support-for-intra-community-transactions-1nayOPKLaSr\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EN&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
