<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybookNodesOutputRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example DataFormat_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example ac343acc-1a61-4084-9a1c-xxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'lang'         => 'Lang',
        'nodeName'     => 'NodeName',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookNodesOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
