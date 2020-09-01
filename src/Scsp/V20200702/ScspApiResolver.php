<?php

namespace AlibabaCloud\Scsp\V20200702;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AnswerCall answerCall(array $options = [])
 * @method AssignTicket assignTicket(array $options = [])
 * @method CloseTicket closeTicket(array $options = [])
 * @method CreateAgent createAgent(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method DeleteAgent deleteAgent(array $options = [])
 * @method DisableRole disableRole(array $options = [])
 * @method EnableRole enableRole(array $options = [])
 * @method ExecuteActivity executeActivity(array $options = [])
 * @method FinishHotlineService finishHotlineService(array $options = [])
 * @method GenerateWebSocketSign generateWebSocketSign(array $options = [])
 * @method GetAgent getAgent(array $options = [])
 * @method GetGrantedRoleIds getGrantedRoleIds(array $options = [])
 * @method GetHotlineAgentDetail getHotlineAgentDetail(array $options = [])
 * @method GetTicketTemplateSchema getTicketTemplateSchema(array $options = [])
 * @method GetUserToken getUserToken(array $options = [])
 * @method GrantRoles grantRoles(array $options = [])
 * @method HangupCall hangupCall(array $options = [])
 * @method ListAgentBySkillGroupId listAgentBySkillGroupId(array $options = [])
 * @method ListHotlineRecord listHotlineRecord(array $options = [])
 * @method ListOutboundPhoneNumber listOutboundPhoneNumber(array $options = [])
 * @method ListSkillGroup listSkillGroup(array $options = [])
 * @method QuerySkillGroups querySkillGroups(array $options = [])
 * @method RemoveSkillGroup removeSkillGroup(array $options = [])
 * @method SearchTicketById searchTicketById(array $options = [])
 * @method SearchTicketList searchTicketList(array $options = [])
 * @method SendHotlineHeartBeat sendHotlineHeartBeat(array $options = [])
 * @method StartCall startCall(array $options = [])
 * @method StartHotlineService startHotlineService(array $options = [])
 * @method SuspendHotlineService suspendHotlineService(array $options = [])
 * @method TransferCallToAgent transferCallToAgent(array $options = [])
 * @method TransferCallToPhone transferCallToPhone(array $options = [])
 * @method TransferCallToSkillGroup transferCallToSkillGroup(array $options = [])
 * @method UpdateAgent updateAgent(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UpdateSkillGroup updateSkillGroup(array $options = [])
 * @method UpdateTicket updateTicket(array $options = [])
 */
class ScspApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'scsp';

    /** @var string */
    public $version = '2020-07-02';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class AnswerCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getAcceptorId()
 */
class AssignTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptorId($value)
    {
        $this->data['AcceptorId'] = $value;
        $this->options['form_params']['AcceptorId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getActionItems()
 * @method string getOperatorId()
 */
class CloseTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionItems($value)
    {
        $this->data['ActionItems'] = $value;
        $this->options['form_params']['ActionItems'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getDisplayName()
 * @method array getSkillGroupIdList()
 */
class CreateAgent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

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

    /**
     * @param array $skillGroupIdList
     *
     * @return $this
     */
	public function withSkillGroupIdList(array $skillGroupIdList)
	{
	    $this->data['SkillGroupIdList'] = $skillGroupIdList;
		foreach ($skillGroupIdList as $i => $iValue) {
			$this->options['form_params']['SkillGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleName()
 * @method array getPermissionId()
 * @method string getOperator()
 */
class CreateRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param array $permissionId
     *
     * @return $this
     */
	public function withPermissionId(array $permissionId)
	{
	    $this->data['PermissionId'] = $permissionId;
		foreach ($permissionId as $i => $iValue) {
			$this->options['form_params']['PermissionId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getDisplayName()
 * @method string getChannelType()
 * @method string getSkillGroupName()
 * @method string getDescription()
 */
class CreateSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupName($value)
    {
        $this->data['SkillGroupName'] = $value;
        $this->options['form_params']['SkillGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTemplateId()
 * @method string getCategoryId()
 * @method string getCreatorId()
 * @method string getCreatorType()
 * @method string getCreatorName()
 * @method string getMemberId()
 * @method string getMemberName()
 * @method string getFromInfo()
 * @method string getPriority()
 * @method string getCarbonCopy()
 * @method string getFormData()
 */
class CreateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorType($value)
    {
        $this->data['CreatorType'] = $value;
        $this->options['form_params']['CreatorType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorName($value)
    {
        $this->data['CreatorName'] = $value;
        $this->options['form_params']['CreatorName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberName($value)
    {
        $this->data['MemberName'] = $value;
        $this->options['form_params']['MemberName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromInfo($value)
    {
        $this->data['FromInfo'] = $value;
        $this->options['form_params']['FromInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCarbonCopy($value)
    {
        $this->data['CarbonCopy'] = $value;
        $this->options['form_params']['CarbonCopy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormData($value)
    {
        $this->data['FormData'] = $value;
        $this->options['form_params']['FormData'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DeleteAgent extends Rpc
{

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 */
class DisableRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 */
class EnableRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getActivityCode()
 * @method string getActivityForm()
 */
class ExecuteActivity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivityCode($value)
    {
        $this->data['ActivityCode'] = $value;
        $this->options['form_params']['ActivityCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivityForm($value)
    {
        $this->data['ActivityForm'] = $value;
        $this->options['form_params']['ActivityForm'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class FinishHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class GenerateWebSocketSign extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetAgent extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetGrantedRoleIds extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetHotlineAgentDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTemplateId()
 */
class GetTicketTemplateSchema extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getNick()
 * @method string getInstanceId()
 * @method string getAppKey()
 * @method string getUserId()
 */
class GetUserToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNick($value)
    {
        $this->data['Nick'] = $value;
        $this->options['form_params']['Nick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method array getRoleId()
 * @method string getOperator()
 */
class GrantRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['form_params']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class HangupCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ListAgentBySkillGroupId extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallId()
 * @method $this withCallId($value)
 */
class ListHotlineRecord extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ListOutboundPhoneNumber extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelType()
 * @method $this withChannelType($value)
 */
class ListSkillGroup extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QuerySkillGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getSkillGroupId()
 */
class RemoveSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupId($value)
    {
        $this->data['SkillGroupId'] = $value;
        $this->options['form_params']['SkillGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 */
class SearchTicketById extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getOperatorId()
 * @method string getTicketStatus()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class SearchTicketList extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketStatus($value)
    {
        $this->data['TicketStatus'] = $value;
        $this->options['form_params']['TicketStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getToken()
 */
class SendHotlineHeartBeat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaller()
 * @method string getCallee()
 */
class StartCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['form_params']['Caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallee($value)
    {
        $this->data['Callee'] = $value;
        $this->options['form_params']['Callee'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class StartHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getType()
 */
class SuspendHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getTargetAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getIsSingleTransfer()
 */
class TransferCallToAgent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetAccountName($value)
    {
        $this->data['TargetAccountName'] = $value;
        $this->options['form_params']['TargetAccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaller()
 * @method string getCallee()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getIsSingleTransfer()
 */
class TransferCallToPhone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['form_params']['Caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallee($value)
    {
        $this->data['Callee'] = $value;
        $this->options['form_params']['Callee'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getSkillGroupId()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getIsSingleTransfer()
 */
class TransferCallToSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupId($value)
    {
        $this->data['SkillGroupId'] = $value;
        $this->options['form_params']['SkillGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getDisplayName()
 * @method array getSkillGroupIdList()
 */
class UpdateAgent extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

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

    /**
     * @param array $skillGroupIdList
     *
     * @return $this
     */
	public function withSkillGroupIdList(array $skillGroupIdList)
	{
	    $this->data['SkillGroupIdList'] = $skillGroupIdList;
		foreach ($skillGroupIdList as $i => $iValue) {
			$this->options['form_params']['SkillGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 * @method string getRoleName()
 * @method array getPermissionId()
 * @method string getOperator()
 */
class UpdateRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param array $permissionId
     *
     * @return $this
     */
	public function withPermissionId(array $permissionId)
	{
	    $this->data['PermissionId'] = $permissionId;
		foreach ($permissionId as $i => $iValue) {
			$this->options['form_params']['PermissionId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getSkillGroupName()
 * @method $this withSkillGroupName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class UpdateSkillGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getFormData()
 */
class UpdateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormData($value)
    {
        $this->data['FormData'] = $value;
        $this->options['form_params']['FormData'] = $value;

        return $this;
    }
}
