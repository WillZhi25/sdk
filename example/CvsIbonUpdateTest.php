<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;

// pass
class CvsIbonUpdateTest
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

        $result = $client->CvsIbonUpdate('CV0100000008', '20145021500654741',
            '100', 'CCAT', '228306634703');

        var_dump($result);
    }

}

$test = new CvsIbonUpdateTest();
$test->test();