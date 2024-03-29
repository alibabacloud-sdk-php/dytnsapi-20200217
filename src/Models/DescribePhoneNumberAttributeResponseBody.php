<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponseBody\phoneNumberAttribute;
use AlibabaCloud\Tea\Model;

class DescribePhoneNumberAttributeResponseBody extends Model
{
    /**
     * @description The response code. Valid values:
     *
     *   **OK**: The request is successful.
     *   **InvalidParameter**: The specified phone number is invalid or the parameter format is invalid.
     *   **PhoneNumberNotfound**: No attribute information can be found for the specified phone number.
     *   **isp.UNKNOWN**: An unknown exception occurred.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The attribute information about the phone number.
     *
     * @var phoneNumberAttribute
     */
    public $phoneNumberAttribute;

    /**
     * @description The request ID.
     *
     * @example CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'phoneNumberAttribute' => 'PhoneNumberAttribute',
        'requestId'            => 'RequestId',
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
        if (null !== $this->phoneNumberAttribute) {
            $res['PhoneNumberAttribute'] = null !== $this->phoneNumberAttribute ? $this->phoneNumberAttribute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberAttributeResponseBody
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
        if (isset($map['PhoneNumberAttribute'])) {
            $model->phoneNumberAttribute = phoneNumberAttribute::fromMap($map['PhoneNumberAttribute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
