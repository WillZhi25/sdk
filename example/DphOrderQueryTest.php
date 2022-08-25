<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

class DphOrderQueryTest
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

        $result = $client->DphOrderQuery('2020120800660052');

        var_dump($result);
    }

}

$test = new DphOrderQueryTest();
$test->test();