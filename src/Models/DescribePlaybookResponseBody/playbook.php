<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class playbook extends Model
{
    /**
     * @example 124xxxxx3435
     *
     * @var string
     */
    public $creator;

    /**
     * @example demo playbook
     *
     * @var string
     */
    public $description;

    /**
     * @example demo_test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1
     *
     * @var int
     */
    public $failExeNum;

    /**
     * @example 1665288858000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1677482519000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example [
     * ]
     * @var string
     */
    public $inputParams;

    /**
     * @example 1665288858000
     *
     * @var int
     */
    public $lastExeTime;

    /**
     * @example 124xxxxx3435
     *
     * @var string
     */
    public $modifier;

    /**
     * @example 0
     *
     * @var bool
     */
    public $onlineActive;

    /**
     * @example asdfsdfe232-e2b2-44fd-b2cc-xxxxx
     *
     * @var string
     */
    public $onlineReleaseTaskflowMd5;

    /**
     * @example preset
     *
     * @var string
     */
    public $ownType;

    /**
     * @example 8db257d3-e2b2-44fd-b2cc-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 100
     *
     * @var int
     */
    public $successExeNum;

    /**
     * @example <?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>
     *
     * @var string
     */
    public $taskflow;
    protected $_name = [
        'creator'                  => 'Creator',
        'description'              => 'Description',
        'displayName'              => 'DisplayName',
        'failExeNum'               => 'FailExeNum',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'inputParams'              => 'InputParams',
        'lastExeTime'              => 'LastExeTime',
        'modifier'                 => 'Modifier',
        'onlineActive'             => 'OnlineActive',
        'onlineReleaseTaskflowMd5' => 'OnlineReleaseTaskflowMd5',
        'ownType'                  => 'OwnType',
        'playbookUuid'             => 'PlaybookUuid',
        'successExeNum'            => 'SuccessExeNum',
        'taskflow'                 => 'Taskflow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->failExeNum) {
            $res['FailExeNum'] = $this->failExeNum;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->lastExeTime) {
            $res['LastExeTime'] = $this->lastExeTime;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->onlineActive) {
            $res['OnlineActive'] = $this->onlineActive;
        }
        if (null !== $this->onlineReleaseTaskflowMd5) {
            $res['OnlineReleaseTaskflowMd5'] = $this->onlineReleaseTaskflowMd5;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->successExeNum) {
            $res['SuccessExeNum'] = $this->successExeNum;
        }
        if (null !== $this->taskflow) {
            $res['Taskflow'] = $this->taskflow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbook
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FailExeNum'])) {
            $model->failExeNum = $map['FailExeNum'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['LastExeTime'])) {
            $model->lastExeTime = $map['LastExeTime'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['OnlineActive'])) {
            $model->onlineActive = $map['OnlineActive'];
        }
        if (isset($map['OnlineReleaseTaskflowMd5'])) {
            $model->onlineReleaseTaskflowMd5 = $map['OnlineReleaseTaskflowMd5'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['SuccessExeNum'])) {
            $model->successExeNum = $map['SuccessExeNum'];
        }
        if (isset($map['Taskflow'])) {
            $model->taskflow = $map['Taskflow'];
        }

        return $model;
    }
}
