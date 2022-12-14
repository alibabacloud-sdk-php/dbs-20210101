<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadTaskResponseBody;

use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadTaskResponseBody\data\content;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the download tasks.
     *
     * @var content
     */
    public $content;

    /**
     * @description The extra description of the download task.
     *
     * @example dbtest
     *
     * @var string
     */
    public $extra;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalElements;

    /**
     * @description The total number of returned pages.
     *
     * @example 2
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'content'       => 'Content',
        'extra'         => 'Extra',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalElements' => 'TotalElements',
        'totalPages'    => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
