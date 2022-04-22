<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\InvalidPhoneNumberFilterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $encryptedNumber;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $originalNumber;
    protected $_name = [
        'code'            => 'Code',
        'encryptedNumber' => 'EncryptedNumber',
        'expireTime'      => 'ExpireTime',
        'originalNumber'  => 'OriginalNumber',
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
        if (null !== $this->encryptedNumber) {
            $res['EncryptedNumber'] = $this->encryptedNumber;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->originalNumber) {
            $res['OriginalNumber'] = $this->originalNumber;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EncryptedNumber'])) {
            $model->encryptedNumber = $map['EncryptedNumber'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['OriginalNumber'])) {
            $model->originalNumber = $map['OriginalNumber'];
        }

        return $model;
    }
}
