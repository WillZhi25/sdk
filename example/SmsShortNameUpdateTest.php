<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\SmsClient;

// pass
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
        $result = $client->SmsShortNameUpdate('CV0100000008', '0', 'E貓哥UAT1');
        var_dump($result);
    }

}

$test = new SmsShortNameUpdateTest();
$test->test();