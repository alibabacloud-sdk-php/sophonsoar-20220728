<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybookMetricsRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UUID of the playbook.
     *
     * This parameter is required.
     * @example 2a687089-d4dd-47d4-9709-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'lang'         => 'Lang',
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
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
