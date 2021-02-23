# # UserRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answer** | [**\Phobetor\Allegro\Model\Answer**](Answer.md) |  | [optional]
**buyer** | [**\Phobetor\Allegro\Model\User**](User.md) |  |
**comment** | **string** | Buyer&#39;s text comment |
**created_at** | [**\DateTime**](\DateTime.md) | Creation datetime in ISO 8601 format |
**excluded_from_average_rates** | **bool** | If true this rating was not included in calculating average user rates | [optional]
**id** | **string** | Rating id |
**order** | [**\Phobetor\Allegro\Model\Order**](Order.md) |  | [optional]
**rates** | [**\Phobetor\Allegro\Model\Rates**](Rates.md) |  | [optional]
**recommended** | **bool** | Whether buyer recommends the order |
**removal** | [**\Phobetor\Allegro\Model\Removal**](Removal.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
