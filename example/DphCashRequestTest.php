<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

class DphCashRequestTest
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

        $result = $client->DphCashRequest('2020120800660052', '100',
            '100', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new DphCashRequestTest();
$test->test();