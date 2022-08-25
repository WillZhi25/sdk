<?php
/**
 * ================================================
 * 日期: 2022/8/8
 *
 */

namespace Pay\model;

class CocsOrderAppendRequest  extends BaseModel
{
    public $cust_id;
    public $cust_order_no;
    public $order_amount;
    public $order_detail;
    public $acquirer_type;
    public $limit_product_id;
    public $send_time;
    public $success_url;
    public $apn_url;


    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $order_detail
     * @param $acquirer_type
     * @param $limit_product_id
     * @param $send_time
     * @param $success_url
     * @param $apn_url
     */
    public function initData($cust_id, $cust_order_no, $order_amount, $order_detail, $acquirer_type, $limit_product_id, $send_time, $success_url = '', $apn_url = '')
    {
        $this->cust_id = $cust_id;
        $this->cust_order_no = $cust_order_no;
        $this->order_amount = $order_amount;
        $this->order_detail = $order_detail;
        $this->acquirer_type = $acquirer_type;
        $this->limit_product_id = $limit_product_id;
        $this->send_time = $send_time;
        $this->success_url = $success_url;
        $this->apn_url = $apn_url;
    }


    /**
     * @return mixed
     */
    public function getCustId()
    {
        return $this->cust_id;
    }

    /**
     * @param mixed $cust_id
     */
    public function setCustId($cust_id)
    {
        $this->cust_id = $cust_id;
    }

    /**
     * @return mixed
     */
    public function getCustOrderNo()
    {
        return $this->cust_order_no;
    }

    /**
     * @param mixed $cust_order_no
     */
    public function setCustOrderNo($cust_order_no)
    {
        $this->cust_order_no = $cust_order_no;
    }

    /**
     * @return mixed
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    /**
     * @param mixed $order_amount
     */
    public function setOrderAmount($order_amount)
    {
        $this->order_amount = $order_amount;
    }

    /**
     * @return mixed
     */
    public function getOrderDetail()
    {
        return $this->order_detail;
    }

    /**
     * @param mixed $order_detail
     */
    public function setOrderDetail($order_detail)
    {
        $this->order_detail = $order_detail;
    }

    /**
     * @return mixed
     */
    public function getAcquirerType()
    {
        return $this->acquirer_type;
    }

    /**
     * @param mixed $acquirer_type
     */
    public function setAcquirerType($acquirer_type)
    {
        $this->acquirer_type = $acquirer_type;
    }

    /**
     * @return mixed
     */
    public function getLimitProductId()
    {
        return $this->limit_product_id;
    }

    /**
     * @param mixed $limit_product_id
     */
    public function setLimitProductId($limit_product_id)
    {
        $this->limit_product_id = $limit_product_id;
    }

    /**
     * @return mixed
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    /**
     * @param mixed $send_time
     */
    public function setSendTime($send_time)
    {
        $this->send_time = $send_time;
    }

    /**
     * @return mixed
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * @param mixed $success_url
     */
    public function setSuccessUrl($success_url)
    {
        $this->success_url = $success_url;
    }

    /**
     * @return mixed
     */
    public function getApnUrl()
    {
        return $this->apn_url;
    }

    /**
     * @param mixed $apn_url
     */
    public function setApnUrl($apn_url)
    {
        $this->apn_url = $apn_url;
    }



}