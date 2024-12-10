# # ShipmentCreateRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_method_id** | **string** | Id of delivery method, chosen by buyer in order. |
**credentials_id** | **string** | ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null. | [optional]
**sender** | [**\Phobetor\Allegro\Model\SenderAddressDto**](SenderAddressDto.md) |  |
**receiver** | [**\Phobetor\Allegro\Model\ReceiverAddressDto**](ReceiverAddressDto.md) |  |
**pickup** | [**\Phobetor\Allegro\Model\PickupAddressDto**](PickupAddressDto.md) |  | [optional]
**reference_number** | **string** | Shipment identifier in own system. Example: &#x60;Ordering number&#x60;. | [optional]
**description** | **string** | Shipment description. It is recommended to use the &#x60;textOnLabel&#x60; field instead. | [optional]
**packages** | [**\Phobetor\Allegro\Model\PackageRequestDto[]**](PackageRequestDto.md) |  |
**insurance** | [**\Phobetor\Allegro\Model\InsuranceDto**](InsuranceDto.md) |  | [optional]
**cash_on_delivery** | [**\Phobetor\Allegro\Model\CashOnDeliveryDto**](CashOnDeliveryDto.md) |  | [optional]
**label_format** | **string** | Label file format. | [optional]
**additional_services** | **string[]** | List of additional services. | [optional]
**additional_properties** | **array<string,string>** | Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
