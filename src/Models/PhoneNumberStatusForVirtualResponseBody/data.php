<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVirtualResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isPrivacyNumber;
    protected $_name = [
        'isPrivacyNumber' => 'IsPrivacyNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPrivacyNumber) {
            $res['IsPrivacyNumber'] = $this->isPrivacyNumber;
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
        if (isset($map['IsPrivacyNumber'])) {
            $model->isPrivacyNumber = $map['IsPrivacyNumber'];
        }

        return $model;
    }
}
