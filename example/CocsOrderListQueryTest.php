<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
use Pay\api\LoginClient;
use Pay\api\OrderClient;

// pass
class CocsOrderListQueryTest
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

        $result = $client->CocsOrderListQuery('CV0100000008', '2022-06-28', '2022-07-01');

        echo json_encode($result);
        var_dump($result);
    }

}

$test = new CocsOrderListQueryTest();
$test->test();