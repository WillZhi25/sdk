<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;

// mark
class CocsOrderCancelTest
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

        $result = $client->CocsOrderCancel('CV0100000008', 'COCSTEST20220825113853322', '100', 'esun', date('Y-m-d H:i:s', time() + 8 * 3600));

        var_dump($result);
    }

}

$test = new CocsOrderCancelTest();
$test->test();