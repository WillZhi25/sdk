<?php
/**
 * ================================================
 * 日期: 2022/7/29
 *
 */

namespace Pay\model;

/**
 * 契客新增訂單
 */
class CvsOrderAppendRequest extends BaseModel
{
    public $cust_id;
    public $cust_order_no;
    public $order_amount;
    public $expire_date;
    public $payer_name;
    public $payer_postcode;

    public $payer_address;
    public $payer_mobile;
    public $payer_email;
    public $payment_type;
    public $payment_acquirerType = 0;
    public $apn_url;
    public $order_detail;

    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $expire_date
     * @param $payer_name
     * @param $payer_postcode
     * @param $payer_address
     * @param $payer_mobile
     * @param $payer_email
     * @param $payment_type
     * @param int $payment_acquirerType
     * @param $apn_url
     * @param $order_detail
     */
    public function initData($cust_id, $cust_order_no, $order_amount, $expire_date, $payer_name, $payer_postcode, $payer_address, $payer_mobile, $payer_email, $payment_type, $payment_acquirerType, $apn_url, $order_detail)
    {
        $this->cust_id = $cust_id;
        $this->cust_order_no = $cust_order_no;
        $this->order_amount = $order_amount;
        $this->expire_date = $expire_date;
        $this->payer_name = $payer_name;
        $this->payer_postcode = $payer_postcode;
        $this->payer_address = $payer_address;
        $this->payer_mobile = $payer_mobile;
        $this->payer_email = $payer_email;
        $this->payment_type = $payment_type;
        $this->payment_acquirerType = $payment_acquirerType;
        $this->apn_url = $apn_url;
        $this->order_detail = $order_detail;
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
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * @param mixed $expire_date
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;
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
    public function getPayerPostcode()
    {
        return $this->payer_postcode;
    }

    /**
     * @param mixed $payer_postcode
     */
    public function setPayerPostcode($payer_postcode)
    {
        $this->payer_postcode = $payer_postcode;
    }

    /**
     * @return mixed
     */
    public function getPayerAddress()
    {
        return $this->payer_address;
    }

    /**
     * @param mixed $payer_address
     */
    public function setPayerAddress($payer_address)
    {
        $this->payer_address = $payer_address;
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
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return int
     */
    public function getPaymentAcquirerType()
    {
        return $this->payment_acquirerType;
    }

    /**
     * @param int $payment_acquirerType
     */
    public function setPaymentAcquirerType($payment_acquirerType)
    {
        $this->payment_acquirerType = $payment_acquirerType;
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




}