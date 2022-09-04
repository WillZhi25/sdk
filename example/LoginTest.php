<?php

namespace example;
require_once "ExampleConst.php";
require '../autoload.php';

use Pay\api\LoginClient;

// pass
class LoginTest
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

//        echo $result['access_token'];
        if (!empty($result['access_token'])) {
            // save token to local
            file_put_contents("token.txt", $result['access_token']);
        }
        var_dump($result);
    }

}

$test = new LoginTest();
$test->testBasicTest();