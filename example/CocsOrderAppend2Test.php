<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
use Pay\model\CocsOrderAppend2Request;

/**
 * COCS 線上刷卡
 * 契客新增刷卡訂單-加值服務
 */
class CocsOrderAppend2Test
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

        $request = new CocsOrderAppend2Request();
        $request->initData('CV0100000008', 'COCSTEST20220825113853322', '100', '111', 'YY',
            '0123812312', 'ffff@gmail.com', 'esun', '', '', '', date('Y-m-d H:i:s', time() + 8 * 3600));
        $result = $client->CocsOrderAppend2($request);

        var_dump($result);
    }

}

$test = new CocsOrderAppend2Test();
$test->test();