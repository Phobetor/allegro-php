# # InlineResponse2001DeliveryMethods

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Delivery method ID. | [optional]
**name** | **string** | Delivery method name. | [optional]
**payment_policy** | **string** | Whether the payment is to be collected in advance or on delivery. | [optional]
**allegro_endorsed** | **bool** | Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7. | [optional]
**shipping_rates_constraints** | [**\Phobetor\Allegro\Model\InlineResponse2001ShippingRatesConstraints**](InlineResponse2001ShippingRatesConstraints.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)