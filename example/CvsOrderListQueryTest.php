<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;

// pass
class CvsOrderListQueryTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN;
        $client = new OrderClient($token);

        $result = $client->CvsOrderListQuery('CV0100000008', '2022-06-01',
            '2022-09-01');

        var_dump($result);
    }

}

$test = new CvsOrderListQueryTest();
$test->test();