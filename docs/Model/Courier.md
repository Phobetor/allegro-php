# # Courier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field. | [optional]
**name** | **string** | Courier name to be provided only if id is OTHER, otherwise it&#39;s ignored. | [optional]
**tracking_numbers** | **string[]** | List of tracking numbers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
