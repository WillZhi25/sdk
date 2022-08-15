<?php
/**
 * ================================================
 * 日期: 2022/8/8
 *
 */

namespace Pay\model;

class CocsOrderAppend2Request
{
    protected $cust_id;
    protected $cust_order_no;
    protected $order_amount;
    protected $order_detail;
    protected $payer_name;
    protected $payer_mobile;
    protected $payer_email;
    protected $acquirer_type;
    protected $limit_product_id;
    protected $success_url;
    protected $apn_url;
    protected $send_time;

    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $order_detail
     * @param $payer_name
     * @param $payer_mobile
     * @param $payer_email
     * @param $acquirer_type
     * @param $limit_product_id
     * @param $success_url
     * @param $apn_url
     * @param $send_time
     */
    public function initData($cust_id, $cust_order_no, $order_amount, $order_detail, $payer_name, $payer_mobile, $payer_email, $acquirer_type, $limit_product_id, $success_url, $apn_url, $send_time)
    {
        $this->cust_id = $cust_id;
        $this->cust_order_no = $cust_order_no;
        $this->order_amount = $order_amount;
        $this->order_detail = $order_detail;
        $this->payer_name = $payer_name;
        $this->payer_mobile = $payer_mobile;
        $this->payer_email = $payer_email;
        $this->acquirer_type = $acquirer_type;
        $this->limit_product_id = $limit_product_id;
        $this->success_url = $success_url;
        $this->apn_url = $apn_url;
        $this->send_time = $send_time;
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
    public function getPayerName()
    {
        return $this->payer_name;
    }

    /**
     * @param mixed $payer_name
     */
    public function setPayerName($payer_name)
    {
        $this->payer_name = $payer_name;
    }

    /**
     * @return mixed
     */
    public function getPayerMobile()
    {
        return $this->payer_mobile;
    }

    /**
     * @param mixed $payer_mobile
     */
    public function setPayerMobile($payer_mobile)
    {
        $this->payer_mobile = $payer_mobile;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payer_email;
    }

    /**
     * @param mixed $payer_email
     */
    public function setPayerEmail($payer_email)
    {
        $this->payer_email = $payer_email;
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


}