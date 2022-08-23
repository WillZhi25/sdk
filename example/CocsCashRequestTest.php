<?php

namespace unit;
require '../autoload.php';

use Pay\api\LoginClient;

class TokenTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $client = new LoginClient();

        $result = $client->getToken('CV0100000008', '@CV0100000008');

        var_dump($result);
    }

}

$test = new LoginTest();
$test->testBasicTest();