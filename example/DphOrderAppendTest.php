<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

/**
 * DPH 行動支付
 * 契客新增行動支付訂單
 */
class DphOrderAppendTest
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

        $result = $client->DphOrderAppend('CV0100000008','DPHTEST20220624175112699', '100',
            '', 'pay', 'opw', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new DphOrderAppendTest();
$test->test();