<?php
/**
 * ================================================
 * 日期: 2022/8/13
 *
 */

namespace Pay\api;

class DphOrderClient extends BaseClient
{

    /**
     * @param $cust_id
     * @param $cust_order_no
     * @param $order_amount
     * @param $order_detail
     * @param $payer_name
     * @param $acquirer_type
     * @param $send_time
     * @param string $success_url
     * @param string $apn_url
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-25
     */
    public function DphOrderAppend($cust_id, $cust_order_no, $order_amount, $order_detail,
                                   $payer_name, $acquirer_type, $send_time, $success_url = '', $apn_url = '')
    {
        $params = [
            "cmd" => "DphOrderAppend",
            "cust_id" => $cust_id,
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "order_detail" => $order_detail,
            "payer_name" => $payer_name,
            "acquirer_type" => $acquirer_type,
            "send_time" => $send_time,
            "success_url" => $success_url,
            "apn_url" => $apn_url,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單查詢
     * @param $cust_order_no
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function DphOrderQuery($cust_order_no)
    {
        $params = [
            "cmd" => "DphOrderQuery",
            "cust_order_no" => $cust_order_no
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單日期區間查詢
     * @param $order_start_date
     * @param $order_end_date
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function DphOrderListQuery($order_start_date, $order_end_date)
    {
        $params = [
            "cmd" => "DphOrderListQuery",
            "order_start_date" => $order_start_date,
            "order_end_date" => $order_end_date,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單取消授權
     * @param $cust_order_no
     * @param $order_amount
     * @param $acquirer_type
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function DphOrderCancel($cust_order_no, $order_amount, $acquirer_type, $send_time)
    {
        $params = [
            "cmd" => "DphOrderCancel",
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "acquirer_type" => $acquirer_type,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單取消交易(退貨、退款)
     * @param $cust_order_no
     * @param $order_amount
     * @param $acquirer_type
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function DphOrderRefund($cust_order_no, $order_amount, $acquirer_type, $send_time)
    {
        $params = [
            "cmd" => "DphOrderRefund",
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "acquirer_type" => $acquirer_type,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }

    /**
     * 訂單請款(僅支援 OPEN 錢包)
     * @param $cust_order_no
     * @param $order_amount
     * @param $cr_amount
     * @param $send_time
     * @return mixed
     * @author will <zhiwupei@gmail.com>
     * @since  2022-08-13
     */
    public function DphCashRequest($cust_order_no, $order_amount, $cr_amount, $send_time)
    {
        $params = [
            "cmd" => "DphCashRequest",
            "cust_order_no" => $cust_order_no,
            "order_amount" => $order_amount,
            "cr_amount" => $cr_amount,
            "send_time" => $send_time,
        ];
        return $this->baseCollect($params);
    }
}