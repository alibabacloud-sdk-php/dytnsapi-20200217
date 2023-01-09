<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class PhoneNumberEncryptRequest extends Model
{
    /**
     * @example QASDW@#**
     *
     * @var string
     */
    public $authCode;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $inputNumber;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $mask;

    /**
     * @example 89
     *
     * @var int
     */
    public $numberType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'authCode'             => 'AuthCode',
        'inputNumber'          => 'InputNumber',
        'mask'                 => 'Mask',
        'numberType'           => 'NumberType',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->numberType) {
            $res['NumberType'] = $this->numberType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PhoneNumberEncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['NumberType'])) {
            $model->numberType = $map['NumberType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
