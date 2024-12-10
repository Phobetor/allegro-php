# # OfferBundleDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Bundle ID. |
**offers** | [**\Phobetor\Allegro\Model\BundledOfferDTO[]**](BundledOfferDTO.md) | Offers included in bundle. |
**publication** | [**\Phobetor\Allegro\Model\OfferBundleDTOPublication**](OfferBundleDTOPublication.md) |  |
**discounts** | [**\Phobetor\Allegro\Model\BundleDiscountDTO[]**](BundleDiscountDTO.md) | Discounts on marketplaces. |
**created_at** | **\DateTime** | When this bundle was created in &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO_8601&lt;/a&gt; format. |
**created_by** | **string** | Who created this bundle. It is set to: &lt;ul&gt; &lt;li&gt; &#x60;USER&#x60; for all bundles created by seller on Allegro web page or via public API;&lt;/li&gt; &lt;li&gt; &#x60;ALLEGRO&#x60; when bundle was created &lt;a href&#x3D;\&quot;https://allegro.pl/dla-sprzedajacych/automatycznie-laczymy-wybrane-oferty-w-zestaw-K6VYllRgbs0\&quot; target&#x3D;\&quot;_blank\&quot;&gt;automatically&lt;/a&gt; by Allegro. &lt;/li&gt; &lt;/ul&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
