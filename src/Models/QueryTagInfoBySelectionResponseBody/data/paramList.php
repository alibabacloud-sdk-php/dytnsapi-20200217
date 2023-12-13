<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList\valueDict;
use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @description The English name of the parameter.
     *
     * @example preame
     *
     * @var string
     */
    public $code;

    /**
     * @description The input hint.
     *
     * @example none
     *
     * @var string
     */
    public $hint;

    /**
     * @description Indicates whether the parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $must;

    /**
     * @description The Chinese name of the parameter.
     *
     * @example none
     *
     * @var string
     */
    public $name;

    /**
     * @description The type. The code that corresponds to EnumUIWidgetTypes.
     *
     * @example aqzx
     *
     * @var string
     */
    public $type;

    /**
     * @description The definitions of the enumerated values such as Code or Desc.
     *
     * @var valueDict[]
     */
    public $valueDict;
    protected $_name = [
        'code'      => 'Code',
        'hint'      => 'Hint',
        'must'      => 'Must',
        'name'      => 'Name',
        'type'      => 'Type',
        'valueDict' => 'ValueDict',
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
        if (null !== $this->hint) {
            $res['Hint'] = $this->hint;
        }
        if (null !== $this->must) {
            $res['Must'] = $this->must;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->valueDict) {
            $res['ValueDict'] = [];
            if (null !== $this->valueDict && \is_array($this->valueDict)) {
                $n = 0;
                foreach ($this->valueDict as $item) {
                    $res['ValueDict'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Hint'])) {
            $model->hint = $map['Hint'];
        }
        if (isset($map['Must'])) {
            $model->must = $map['Must'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValueDict'])) {
            if (!empty($map['ValueDict'])) {
                $model->valueDict = [];
                $n                = 0;
                foreach ($map['ValueDict'] as $item) {
                    $model->valueDict[$n++] = null !== $item ? valueDict::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
