<?php

namespace AlibabaCloud\CloudSiem\V20220616;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchJobCheck batchJobCheck(array $options = [])
 * @method BatchJobSubmit batchJobSubmit(array $options = [])
 * @method CloseDelivery closeDelivery(array $options = [])
 * @method DeleteAutomateResponseConfig deleteAutomateResponseConfig(array $options = [])
 * @method DeleteCustomizeRule deleteCustomizeRule(array $options = [])
 * @method DeleteQuickQuery deleteQuickQuery(array $options = [])
 * @method DeleteWhiteRuleList deleteWhiteRuleList(array $options = [])
 * @method DescribeAggregateFunction describeAggregateFunction(array $options = [])
 * @method DescribeAlertSceneByEvent describeAlertSceneByEvent(array $options = [])
 * @method DescribeAlertsCount describeAlertsCount(array $options = [])
 * @method DescribeAlertSource describeAlertSource(array $options = [])
 * @method DescribeAlertSourceWithEvent describeAlertSourceWithEvent(array $options = [])
 * @method DescribeAlertType describeAlertType(array $options = [])
 * @method DescribeAttackTimeLine describeAttackTimeLine(array $options = [])
 * @method DescribeAutomateResponseConfigCounter describeAutomateResponseConfigCounter(array $options = [])
 * @method DescribeAutomateResponseConfigFeature describeAutomateResponseConfigFeature(array $options = [])
 * @method DescribeAutomateResponseConfigPlayBooks describeAutomateResponseConfigPlayBooks(array $options = [])
 * @method DescribeCloudSiemAssets describeCloudSiemAssets(array $options = [])
 * @method DescribeCloudSiemAssetsCounter describeCloudSiemAssetsCounter(array $options = [])
 * @method DescribeCloudSiemEventDetail describeCloudSiemEventDetail(array $options = [])
 * @method DescribeCloudSiemEvents describeCloudSiemEvents(array $options = [])
 * @method DescribeCustomizeRule describeCustomizeRule(array $options = [])
 * @method DescribeCustomizeRuleCount describeCustomizeRuleCount(array $options = [])
 * @method DescribeCustomizeRuleTest describeCustomizeRuleTest(array $options = [])
 * @method DescribeCustomizeRuleTestHistogram describeCustomizeRuleTestHistogram(array $options = [])
 * @method DescribeDisposeAndPlaybook describeDisposeAndPlaybook(array $options = [])
 * @method DescribeDisposeStrategyPlaybook describeDisposeStrategyPlaybook(array $options = [])
 * @method DescribeEntityInfo describeEntityInfo(array $options = [])
 * @method DescribeEventCountByThreatLevel describeEventCountByThreatLevel(array $options = [])
 * @method DescribeEventDispose describeEventDispose(array $options = [])
 * @method DescribeJobStatus describeJobStatus(array $options = [])
 * @method DescribeLogFields describeLogFields(array $options = [])
 * @method DescribeLogSource describeLogSource(array $options = [])
 * @method DescribeLogStore describeLogStore(array $options = [])
 * @method DescribeLogType describeLogType(array $options = [])
 * @method DescribeOperators describeOperators(array $options = [])
 * @method DescribeScopeUsers describeScopeUsers(array $options = [])
 * @method DescribeStorage describeStorage(array $options = [])
 * @method DescribeWafScope describeWafScope(array $options = [])
 * @method DoQuickField doQuickField(array $options = [])
 * @method DoSelfDelegate doSelfDelegate(array $options = [])
 * @method GetCapacity getCapacity(array $options = [])
 * @method GetHistograms getHistograms(array $options = [])
 * @method GetLogs getLogs(array $options = [])
 * @method GetQuickQuery getQuickQuery(array $options = [])
 * @method GetStorage getStorage(array $options = [])
 * @method ListAutomateResponseConfigs listAutomateResponseConfigs(array $options = [])
 * @method ListCloudSiemCustomizeRules listCloudSiemCustomizeRules(array $options = [])
 * @method ListCloudSiemPredefinedRules listCloudSiemPredefinedRules(array $options = [])
 * @method ListCustomizeRuleTestResult listCustomizeRuleTestResult(array $options = [])
 * @method ListDelivery listDelivery(array $options = [])
 * @method ListDisposeStrategy listDisposeStrategy(array $options = [])
 * @method ListOperation listOperation(array $options = [])
 * @method ListQuickQuery listQuickQuery(array $options = [])
 * @method OpenDelivery openDelivery(array $options = [])
 * @method PostAutomateResponseConfig postAutomateResponseConfig(array $options = [])
 * @method PostCustomizeRule postCustomizeRule(array $options = [])
 * @method PostCustomizeRuleTest postCustomizeRuleTest(array $options = [])
 * @method PostEventDisposeAndWhiteruleList postEventDisposeAndWhiteruleList(array $options = [])
 * @method PostEventWhiteruleList postEventWhiteruleList(array $options = [])
 * @method PostFinishCustomizeRuleTest postFinishCustomizeRuleTest(array $options = [])
 * @method PostRuleStatusChange postRuleStatusChange(array $options = [])
 * @method RestoreCapacity restoreCapacity(array $options = [])
 * @method SaveQuickQuery saveQuickQuery(array $options = [])
 * @method SetStorage setStorage(array $options = [])
 * @method ShowQuickAnalysis showQuickAnalysis(array $options = [])
 * @method UpdateAutomateResponseConfigStatus updateAutomateResponseConfigStatus(array $options = [])
 * @method UpdateWhiteRuleList updateWhiteRuleList(array $options = [])
 */
class CloudSiemApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloud-siem';

    /** @var string */
    public $version = '2022-06-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloud-siem';
}

/**
 * @method string getSubmitId()
 */
class BatchJobCheck extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubmitId($value)
    {
        $this->data['SubmitId'] = $value;
        $this->options['form_params']['SubmitId'] = $value;

        return $this;
    }
}

/**
 * @method string getJsonConfig()
 */
class BatchJobSubmit extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonConfig($value)
    {
        $this->data['JsonConfig'] = $value;
        $this->options['form_params']['JsonConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getLogCode()
 */
class CloseDelivery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogCode($value)
    {
        $this->data['LogCode'] = $value;
        $this->options['form_params']['LogCode'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteAutomateResponseConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleId()
 */
class DeleteCustomizeRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchName()
 */
class DeleteQuickQuery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchName($value)
    {
        $this->data['SearchName'] = $value;
        $this->options['form_params']['SearchName'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteWhiteRuleList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

class DescribeAggregateFunction extends Rpc
{
}

/**
 * @method string getIncidentUuid()
 */
class DescribeAlertSceneByEvent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getEndTime()
 */
class DescribeAlertsCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method array getLevel()
 * @method string getEndTime()
 */
class DescribeAlertSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param array $level
     *
     * @return $this
     */
	public function withLevel(array $level)
	{
	    $this->data['Level'] = $level;
		foreach ($level as $i => $iValue) {
			$this->options['form_params']['Level.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getIncidentUuid()
 */
class DescribeAlertSourceWithEvent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

class DescribeAlertType extends Rpc
{
}

/**
 * @method string getAssetName()
 * @method string getStartTime()
 * @method string getEndTime()
 * @method string getIncidentUuid()
 */
class DescribeAttackTimeLine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssetName($value)
    {
        $this->data['AssetName'] = $value;
        $this->options['form_params']['AssetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

class DescribeAutomateResponseConfigCounter extends Rpc
{
}

/**
 * @method string getAutoResponseType()
 */
class DescribeAutomateResponseConfigFeature extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoResponseType($value)
    {
        $this->data['AutoResponseType'] = $value;
        $this->options['form_params']['AutoResponseType'] = $value;

        return $this;
    }
}

/**
 * @method string getAutoResponseType()
 * @method string getEntityType()
 */
class DescribeAutomateResponseConfigPlayBooks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoResponseType($value)
    {
        $this->data['AutoResponseType'] = $value;
        $this->options['form_params']['AutoResponseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityType($value)
    {
        $this->data['EntityType'] = $value;
        $this->options['form_params']['EntityType'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getAssetType()
 * @method string getCurrentPage()
 * @method string getIncidentUuid()
 */
class DescribeCloudSiemAssets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssetType($value)
    {
        $this->data['AssetType'] = $value;
        $this->options['form_params']['AssetType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getIncidentUuid()
 */
class DescribeCloudSiemAssetsCounter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getIncidentUuid()
 */
class DescribeCloudSiemEventDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getEventName()
 * @method string getPageSize()
 * @method string getOrderField()
 * @method string getOrder()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method array getThreadLevel()
 * @method string getAssetId()
 * @method string getIncidentUuid()
 * @method string getStatus()
 */
class DescribeCloudSiemEvents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventName($value)
    {
        $this->data['EventName'] = $value;
        $this->options['form_params']['EventName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderField($value)
    {
        $this->data['OrderField'] = $value;
        $this->options['form_params']['OrderField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['form_params']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param array $threadLevel
     *
     * @return $this
     */
	public function withThreadLevel(array $threadLevel)
	{
	    $this->data['ThreadLevel'] = $threadLevel;
		foreach ($threadLevel as $i => $iValue) {
			$this->options['form_params']['ThreadLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssetId($value)
    {
        $this->data['AssetId'] = $value;
        $this->options['form_params']['AssetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleId()
 */
class DescribeCustomizeRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

        return $this;
    }
}

class DescribeCustomizeRuleCount extends Rpc
{
}

/**
 * @method string getId()
 */
class DescribeCustomizeRuleTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DescribeCustomizeRuleTestHistogram extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getEntityType()
 * @method string getIncidentUuid()
 */
class DescribeDisposeAndPlaybook extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityType($value)
    {
        $this->data['EntityType'] = $value;
        $this->options['form_params']['EntityType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getEndTime()
 */
class DescribeDisposeStrategyPlaybook extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }
}

/**
 * @method string getEntityIdentity()
 * @method string getEntityId()
 * @method string getSophonTaskId()
 * @method string getIncidentUuid()
 */
class DescribeEntityInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityIdentity($value)
    {
        $this->data['EntityIdentity'] = $value;
        $this->options['form_params']['EntityIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSophonTaskId($value)
    {
        $this->data['SophonTaskId'] = $value;
        $this->options['form_params']['SophonTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

class DescribeEventCountByThreatLevel extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getIncidentUuid()
 */
class DescribeEventDispose extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getSubmitId()
 */
class DescribeJobStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubmitId($value)
    {
        $this->data['SubmitId'] = $value;
        $this->options['form_params']['SubmitId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogType()
 * @method string getLogSource()
 */
class DescribeLogFields extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogType($value)
    {
        $this->data['LogType'] = $value;
        $this->options['form_params']['LogType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogSource($value)
    {
        $this->data['LogSource'] = $value;
        $this->options['form_params']['LogSource'] = $value;

        return $this;
    }
}

/**
 * @method string getLogType()
 */
class DescribeLogSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogType($value)
    {
        $this->data['LogType'] = $value;
        $this->options['form_params']['LogType'] = $value;

        return $this;
    }
}

class DescribeLogStore extends Rpc
{
}

class DescribeLogType extends Rpc
{
}

/**
 * @method string getSceneType()
 */
class DescribeOperators extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneType($value)
    {
        $this->data['SceneType'] = $value;
        $this->options['form_params']['SceneType'] = $value;

        return $this;
    }
}

class DescribeScopeUsers extends Rpc
{
}

class DescribeStorage extends Rpc
{
}

/**
 * @method string getEntityId()
 */
class DescribeWafScope extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getFrom()
 * @method string getIndex()
 * @method string getReverse()
 * @method string getSize()
 * @method string getTo()
 * @method string getPage()
 */
class DoQuickField extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIndex($value)
    {
        $this->data['Index'] = $value;
        $this->options['form_params']['Index'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverse($value)
    {
        $this->data['Reverse'] = $value;
        $this->options['form_params']['Reverse'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['form_params']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['form_params']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getAliUid()
 * @method string getDelegateOrNot()
 */
class DoSelfDelegate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['form_params']['AliUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDelegateOrNot($value)
    {
        $this->data['DelegateOrNot'] = $value;
        $this->options['form_params']['DelegateOrNot'] = $value;

        return $this;
    }
}

class GetCapacity extends Rpc
{
}

/**
 * @method string getFrom()
 * @method string getQuery()
 * @method string getTo()
 */
class GetHistograms extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['form_params']['Query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }
}

/**
 * @method string getTotal()
 * @method string getPageSize()
 * @method string getFrom()
 * @method string getPageIndex()
 * @method string getReverseOrNot()
 * @method string getQuery()
 * @method string getTo()
 */
class GetLogs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTotal($value)
    {
        $this->data['Total'] = $value;
        $this->options['form_params']['Total'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['form_params']['PageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverseOrNot($value)
    {
        $this->data['ReverseOrNot'] = $value;
        $this->options['form_params']['ReverseOrNot'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['form_params']['Query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchName()
 */
class GetQuickQuery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchName($value)
    {
        $this->data['SearchName'] = $value;
        $this->options['form_params']['SearchName'] = $value;

        return $this;
    }
}

class GetStorage extends Rpc
{
}

/**
 * @method string getActionType()
 * @method string getRuleName()
 * @method string getSubUserId()
 * @method string getPageSize()
 * @method string getAutoResponseType()
 * @method string getId()
 * @method string getCurrentPage()
 * @method string getPlaybookUuid()
 * @method string getStatus()
 */
class ListAutomateResponseConfigs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionType($value)
    {
        $this->data['ActionType'] = $value;
        $this->options['form_params']['ActionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['form_params']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoResponseType($value)
    {
        $this->data['AutoResponseType'] = $value;
        $this->options['form_params']['AutoResponseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method string getStartTime()
 * @method string getPageSize()
 * @method string getId()
 * @method string getRuleType()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getAlertType()
 * @method array getThreatLevel()
 * @method string getStatus()
 */
class ListCloudSiemCustomizeRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertType($value)
    {
        $this->data['AlertType'] = $value;
        $this->options['form_params']['AlertType'] = $value;

        return $this;
    }

    /**
     * @param array $threatLevel
     *
     * @return $this
     */
	public function withThreatLevel(array $threatLevel)
	{
	    $this->data['ThreatLevel'] = $threatLevel;
		foreach ($threatLevel as $i => $iValue) {
			$this->options['form_params']['ThreatLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method string getStartTime()
 * @method string getPageSize()
 * @method string getId()
 * @method string getRuleType()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getAlertType()
 * @method array getThreatLevel()
 * @method string getStatus()
 */
class ListCloudSiemPredefinedRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertType($value)
    {
        $this->data['AlertType'] = $value;
        $this->options['form_params']['AlertType'] = $value;

        return $this;
    }

    /**
     * @param array $threatLevel
     *
     * @return $this
     */
	public function withThreatLevel(array $threatLevel)
	{
	    $this->data['ThreatLevel'] = $threatLevel;
		foreach ($threatLevel as $i => $iValue) {
			$this->options['form_params']['ThreatLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getId()
 * @method string getCurrentPage()
 */
class ListCustomizeRuleTestResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

class ListDelivery extends Rpc
{
}

/**
 * @method string getEntityIdentity()
 * @method string getPlaybookName()
 * @method string getPlaybookTypes()
 * @method string getStartTime()
 * @method string getPageSize()
 * @method string getOrderField()
 * @method string getOrder()
 * @method string getSophonTaskId()
 * @method string getEffectiveStatus()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getPlaybookUuid()
 * @method string getEntityType()
 */
class ListDisposeStrategy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityIdentity($value)
    {
        $this->data['EntityIdentity'] = $value;
        $this->options['form_params']['EntityIdentity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookName($value)
    {
        $this->data['PlaybookName'] = $value;
        $this->options['form_params']['PlaybookName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookTypes($value)
    {
        $this->data['PlaybookTypes'] = $value;
        $this->options['form_params']['PlaybookTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderField($value)
    {
        $this->data['OrderField'] = $value;
        $this->options['form_params']['OrderField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['form_params']['Order'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSophonTaskId($value)
    {
        $this->data['SophonTaskId'] = $value;
        $this->options['form_params']['SophonTaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveStatus($value)
    {
        $this->data['EffectiveStatus'] = $value;
        $this->options['form_params']['EffectiveStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlaybookUuid($value)
    {
        $this->data['PlaybookUuid'] = $value;
        $this->options['form_params']['PlaybookUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityType($value)
    {
        $this->data['EntityType'] = $value;
        $this->options['form_params']['EntityType'] = $value;

        return $this;
    }
}

class ListOperation extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method string getOffset()
 */
class ListQuickQuery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getLogCode()
 */
class OpenDelivery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogCode($value)
    {
        $this->data['LogCode'] = $value;
        $this->options['form_params']['LogCode'] = $value;

        return $this;
    }
}

/**
 * @method string getActionType()
 * @method string getRuleName()
 * @method string getExecutionCondition()
 * @method string getActionConfig()
 * @method string getSubUserId()
 * @method string getAutoResponseType()
 * @method string getId()
 */
class PostAutomateResponseConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionType($value)
    {
        $this->data['ActionType'] = $value;
        $this->options['form_params']['ActionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutionCondition($value)
    {
        $this->data['ExecutionCondition'] = $value;
        $this->options['form_params']['ExecutionCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionConfig($value)
    {
        $this->data['ActionConfig'] = $value;
        $this->options['form_params']['ActionConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubUserId($value)
    {
        $this->data['SubUserId'] = $value;
        $this->options['form_params']['SubUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoResponseType($value)
    {
        $this->data['AutoResponseType'] = $value;
        $this->options['form_params']['AutoResponseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleDesc()
 * @method string getRuleName()
 * @method string getAlertTypeMds()
 * @method string getRuleThreshold()
 * @method string getLogSourceMds()
 * @method string getLogType()
 * @method string getLogTypeMds()
 * @method string getId()
 * @method string getEventTransferSwitch()
 * @method string getQueryCycle()
 * @method string getLogSource()
 * @method string getAlertType()
 * @method string getEventTransferType()
 * @method string getRuleCondition()
 * @method string getEventTransferExt()
 * @method string getThreatLevel()
 * @method string getRuleGroup()
 */
class PostCustomizeRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleDesc($value)
    {
        $this->data['RuleDesc'] = $value;
        $this->options['form_params']['RuleDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertTypeMds($value)
    {
        $this->data['AlertTypeMds'] = $value;
        $this->options['form_params']['AlertTypeMds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleThreshold($value)
    {
        $this->data['RuleThreshold'] = $value;
        $this->options['form_params']['RuleThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogSourceMds($value)
    {
        $this->data['LogSourceMds'] = $value;
        $this->options['form_params']['LogSourceMds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogType($value)
    {
        $this->data['LogType'] = $value;
        $this->options['form_params']['LogType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogTypeMds($value)
    {
        $this->data['LogTypeMds'] = $value;
        $this->options['form_params']['LogTypeMds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTransferSwitch($value)
    {
        $this->data['EventTransferSwitch'] = $value;
        $this->options['form_params']['EventTransferSwitch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryCycle($value)
    {
        $this->data['QueryCycle'] = $value;
        $this->options['form_params']['QueryCycle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogSource($value)
    {
        $this->data['LogSource'] = $value;
        $this->options['form_params']['LogSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertType($value)
    {
        $this->data['AlertType'] = $value;
        $this->options['form_params']['AlertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTransferType($value)
    {
        $this->data['EventTransferType'] = $value;
        $this->options['form_params']['EventTransferType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleCondition($value)
    {
        $this->data['RuleCondition'] = $value;
        $this->options['form_params']['RuleCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTransferExt($value)
    {
        $this->data['EventTransferExt'] = $value;
        $this->options['form_params']['EventTransferExt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreatLevel($value)
    {
        $this->data['ThreatLevel'] = $value;
        $this->options['form_params']['ThreatLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleGroup($value)
    {
        $this->data['RuleGroup'] = $value;
        $this->options['form_params']['RuleGroup'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getSimulatedData()
 * @method string getTestType()
 */
class PostCustomizeRuleTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSimulatedData($value)
    {
        $this->data['SimulatedData'] = $value;
        $this->options['form_params']['SimulatedData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTestType($value)
    {
        $this->data['TestType'] = $value;
        $this->options['form_params']['TestType'] = $value;

        return $this;
    }
}

/**
 * @method string getRemark()
 * @method string getEventDispose()
 * @method string getReceiverInfo()
 * @method string getIncidentUuid()
 * @method string getStatus()
 */
class PostEventDisposeAndWhiteruleList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventDispose($value)
    {
        $this->data['EventDispose'] = $value;
        $this->options['form_params']['EventDispose'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceiverInfo($value)
    {
        $this->data['ReceiverInfo'] = $value;
        $this->options['form_params']['ReceiverInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getWhiteruleList()
 * @method string getIncidentUuid()
 */
class PostEventWhiteruleList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhiteruleList($value)
    {
        $this->data['WhiteruleList'] = $value;
        $this->options['form_params']['WhiteruleList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class PostFinishCustomizeRuleTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleType()
 * @method string getIds()
 * @method string getInUse()
 */
class PostRuleStatusChange extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['form_params']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['form_params']['Ids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInUse($value)
    {
        $this->data['InUse'] = $value;
        $this->options['form_params']['InUse'] = $value;

        return $this;
    }
}

class RestoreCapacity extends Rpc
{
}

/**
 * @method string getQuery()
 * @method string getDisplayName()
 */
class SaveQuickQuery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['form_params']['Query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }
}

/**
 * @method string getTtl()
 * @method string getRegion()
 */
class SetStorage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtl($value)
    {
        $this->data['Ttl'] = $value;
        $this->options['form_params']['Ttl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['form_params']['Region'] = $value;

        return $this;
    }
}

class ShowQuickAnalysis extends Rpc
{
}

/**
 * @method string getIds()
 * @method string getInUse()
 */
class UpdateAutomateResponseConfigStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIds($value)
    {
        $this->data['Ids'] = $value;
        $this->options['form_params']['Ids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInUse($value)
    {
        $this->data['InUse'] = $value;
        $this->options['form_params']['InUse'] = $value;

        return $this;
    }
}

/**
 * @method string getWhiteRuleId()
 * @method string getExpression()
 * @method string getIncidentUuid()
 */
class UpdateWhiteRuleList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhiteRuleId($value)
    {
        $this->data['WhiteRuleId'] = $value;
        $this->options['form_params']['WhiteRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpression($value)
    {
        $this->data['Expression'] = $value;
        $this->options['form_params']['Expression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncidentUuid($value)
    {
        $this->data['IncidentUuid'] = $value;
        $this->options['form_params']['IncidentUuid'] = $value;

        return $this;
    }
}
