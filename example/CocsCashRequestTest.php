<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

// mark
class CocsCashRequestTest
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

        $date = date('Y-m-d H:i:s', time() + 8 * 3600);

        $result = $client->CocsCashRequest('CV0100000008', 'COCSTEST20220825113853388',
            '100', '100',  $date);

        var_dump($result);
    }

}

$test = new CocsCashRequestTest();
$test->test();