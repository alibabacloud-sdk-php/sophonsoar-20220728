<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeDistinctReleasesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example demo version
     *
     * @var string
     */
    public $description;

    /**
     * @example 17cf53049bc8efa941207xxxxx
     *
     * @var string
     */
    public $taskflowMd5;
    protected $_name = [
        'description' => 'Description',
        'taskflowMd5' => 'TaskflowMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        return $model;
    }
}
