<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\DphOrderClient;

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

        $result = $client->DphOrderCancel('CV0100000008', '2019021500654741',
            '6290', '2022-10-10', 'CCAT', '904906547417');

        var_dump($result);
    }

}

$test = new DphOrderCancelTest();
$test->test();