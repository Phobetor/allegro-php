# # CommandTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | Modified field as JSON path. | [optional]
**message** | **string** | General fail reason. You should check the errors structure to get more detailed information of the encountered errors. | [optional]
**offer** | [**\Phobetor\Allegro\Model\OfferId**](OfferId.md) |  | [optional]
**status** | **string** | Available statuses: NEW, SUCCESS, FAIL | [optional]
**errors** | [**\Phobetor\Allegro\Model\Error[]**](Error.md) | The list of error objects explaining the problems with command processing for the given offer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
