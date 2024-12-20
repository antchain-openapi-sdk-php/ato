<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\ATO\Models;

use AlibabaCloud\Tea\Model;

class PagequeryInnerCustomerserviceResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 总数
    /**
     * @var int
     */
    public $total;

    // 客服信息
    /**
     * @var CustomerServiceInfo[]
     */
    public $customerServiceInfoList;
    protected $_name = [
        'reqMsgId'                => 'req_msg_id',
        'resultCode'              => 'result_code',
        'resultMsg'               => 'result_msg',
        'total'                   => 'total',
        'customerServiceInfoList' => 'customer_service_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->customerServiceInfoList) {
            $res['customer_service_info_list'] = [];
            if (null !== $this->customerServiceInfoList && \is_array($this->customerServiceInfoList)) {
                $n = 0;
                foreach ($this->customerServiceInfoList as $item) {
                    $res['customer_service_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PagequeryInnerCustomerserviceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['customer_service_info_list'])) {
            if (!empty($map['customer_service_info_list'])) {
                $model->customerServiceInfoList = [];
                $n                              = 0;
                foreach ($map['customer_service_info_list'] as $item) {
                    $model->customerServiceInfoList[$n++] = null !== $item ? CustomerServiceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
