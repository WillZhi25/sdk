<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 訂單取消授權
 */
class DphOrderCancelTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN;
        $client = new DphOrderClient($token);

        $result = $client->DphOrderCancel('CV0100000008','DPHTEST20220624175112699', '100',
            'opw', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new DphOrderCancelTest();
$test->test();