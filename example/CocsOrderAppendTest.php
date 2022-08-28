<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\CocsOrderClient;
use Pay\model\CocsOrderAppendRequest;

/**
 * COCS 線上刷卡
 * 契客新增刷卡訂單
 */
class CocsOrderAppendTest
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

        $request = new CocsOrderAppendRequest();
        $request->initData('CV0100000008', 'COCSTEST20220826113853372', '100', '111', 'esun',
            '0123812312', date('Y-m-d H:i:s', time() + 8 * 3600), '', '');
        $result = $client->CocsOrderAppend($request);

        var_dump($result);
    }

}

$test = new CocsOrderAppendTest();
$test->test();