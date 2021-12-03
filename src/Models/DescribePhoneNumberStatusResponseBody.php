<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusResponseBody\phoneStatus;
use AlibabaCloud\Tea\Model;

class DescribePhoneNumberStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var phoneStatus
     */
    public $phoneStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'phoneStatus' => 'PhoneStatus',
        'requestId'   => 'RequestId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phoneStatus) {
            $res['PhoneStatus'] = null !== $this->phoneStatus ? $this->phoneStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PhoneStatus'])) {
            $model->phoneStatus = phoneStatus::fromMap($map['PhoneStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
