<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\OrderClient;
use Pay\model\CvsOrderAppendRequest;

/**
 * CVS 代收代付
 * 契客新增訂單
 */
class CvsOrderAppendTest
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

        $request = new CvsOrderAppendRequest();

        $request->initData("CV0100000008", '20145021500654741', '2022', '2022-10-10',
        '王大', '115', '台北', '0900123123', 'yanlee@bankpro.com.tw', '0',
            '', '', '');

        $result = $client->CvsOrderAppend($request);

        var_dump($result);
    }

}

$test = new CvsOrderAppendTest();
$test->test();