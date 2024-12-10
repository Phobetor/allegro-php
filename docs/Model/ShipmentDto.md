# # ShipmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**delivery_method_id** | **string** | Id of delivery method, chosen by buyer in order. | [optional]
**credentials_id** | **string** | ID of merchant agreement, registered in WZA. For Allegro methods, this field is null. | [optional]
**sender** | [**\Phobetor\Allegro\Model\SenderAddressDto**](SenderAddressDto.md) |  | [optional]
**receiver** | [**\Phobetor\Allegro\Model\ReceiverAddressDto**](ReceiverAddressDto.md) |  | [optional]
**pickup** | [**\Phobetor\Allegro\Model\PickupAddressDto**](PickupAddressDto.md) |  | [optional]
**reference_number** | **string** | Shipment identifier in own system. Example: &#x60;Ordering number&#x60;. | [optional]
**description** | **string** | Shipment description. It is recommended to use the &#x60;textOnLabel&#x60; field instead. | [optional]
**packages** | [**\Phobetor\Allegro\Model\PackageDto[]**](PackageDto.md) |  | [optional]
**insurance** | [**\Phobetor\Allegro\Model\InsuranceDto**](InsuranceDto.md) |  | [optional]
**cash_on_delivery** | [**\Phobetor\Allegro\Model\CashOnDeliveryDto**](CashOnDeliveryDto.md) |  | [optional]
**created_date** | **string** | Shipment creation date | [optional]
**canceled_date** | **string** | Shipment cancellation date. Only for canceled shipments, in all other cases is null. | [optional]
**carrier** | **string** | ID of carrier which carries out a shipment | [optional]
**label_format** | **string** | Label file format. | [optional]
**additional_services** | **string[]** | List of additional services. | [optional]
**additional_properties** | **array<string,string>** | Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
