<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateDownloadResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example DBS.ParamIsInValid
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error code returned if the request failed.
     *
     * @example DBS.ParamIsInValid
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example formatType can not be empty
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error message returned if the request failed.
     *
     * @example formatType can not be empty
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example A08F908D-2C35-583F-93C1-ED80753F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'data'       => 'Data',
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
