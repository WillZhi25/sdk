<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
// mark
class CocsUnionpayRefundTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN;
        $client = new CocsOrderClient($token);
        $result = $client->CocsUnionpayRefund('CV0100000008', 'COCSTEST20220825113853389',
            '100', '100', date('Y-m-d H:i:s', time() + 8 * 3600));
        var_dump($result);
    }
}

$test = new CocsUnionpayRefundTest();
$test->test();