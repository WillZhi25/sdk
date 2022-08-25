<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;

// pass
class CvsOrderQueryTest
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

        $result = $client->CvsOrderQuery('CV0100000008', '20145021500654741');

        var_dump($result);
    }

}

$test = new CvsOrderQueryTest();
$test->test();