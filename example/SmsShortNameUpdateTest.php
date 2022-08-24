<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;
use Pay\api\SmsClient;

class SmsShortNameUpdateTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $token = ExampleConst::TOKEN;
        $client = new SmsClient($token);

        $result = $client->SmsShortNameUpdate('CV0100000008', '2019021500654741', '6290');

        var_dump($result);
    }

}

$test = new SmsShortNameUpdateTest();
$test->test();