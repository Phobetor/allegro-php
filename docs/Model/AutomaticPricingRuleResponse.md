# # AutomaticPricingRuleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of a automatic pricing rule. |
**type** | [**\Phobetor\Allegro\Model\AutomaticPricingRuleType**](AutomaticPricingRuleType.md) |  |
**name** | **string** | The rule name. Default rule names are automatically translated based on the value provided in the the \&quot;Accept-Language\&quot; header. |
**default** | **bool** | Indicates whether a rule is default (true) or created by merchant (false). |
**configuration** | [**\Phobetor\Allegro\Model\AutomaticPricingRuleConfiguration**](AutomaticPricingRuleConfiguration.md) |  | [optional]
**updated_at** | **\DateTime** | The date the rule was last modified in ISO 8601 format. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
