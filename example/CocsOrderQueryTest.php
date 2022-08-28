<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

/**
 * COCS 線上刷卡
 * 訂單查詢
 */
class CocsOrderQueryTest
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

        $result = $client->CocsOrderQuery('CV0100000008', 'COCSTEST20220629113853322');

        var_dump($result);
    }

}

$test = new CocsOrderQueryTest();
$test->test();