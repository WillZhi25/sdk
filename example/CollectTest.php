<?php

namespace unit;
require '../../autoload.php';

use Pay\api\LoginClient;

class CollectTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $client = new LoginClient();
        $token = 'kt_09Mc8GVmDLdGfL8crLH-jNx3vDOCsc3WPwo31xN-Vrto3ebUmqV6Dxbi8yArXGCe7qIhvhur2-keRXSJyq0EXNjigvlhNygQYyYtWE4LCDtj7lYDO9XFLB10w95GT6LC3N5dYvg71KAP2W8K1K1eGfa1L1VsO6h_6xByjGJCf474Tn3xaxnBAfDtJ60pugt61TxbcgSti1BIcSK63sr77XIq3OBgFmvbD88HSyRI';
        $result = $client->collect($token, 'CV0100000008', '2019021500654741',
            '6290', '2022-10-10', 'CCAT', '904906547417');
        var_dump($result);
    }
}

$test = new CollectTest();
$test->testBasicTest();