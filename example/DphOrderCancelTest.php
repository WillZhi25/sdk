<?php

namespace unit;
require '../autoload.php';

use Pay\api\OrderClient;

class CvsIbonUpdateDateTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function CvsIbonUpdateDate()
    {
        $token = 'ia70p8-vtY5Cdw5K1fnC5nckln_bXlfUXmqHb28kBsyDQuHpiyWBqJ6E-KxZuDtfB9ssWczdeg4ACuUblx7rKwi66cdtHrgtrA42zHDn0ZVFjqVA7kVF-ZTpUjrGZ5mb580nL2vsLpxSI9Dq2QZxuTBRAmMWKqK3KNzu5h5Gu5g5R8FpTMhn9dOCKFOnU_NqZC1H61MntyGODX0AnocIH5duX8cxEsUSutaqal578XA';
        $client = new OrderClient($token);

        $result = $client->CvsIbonUpdateDate('CV0100000008', '2019021500654741',
            '6290', '2022-10-10', 'CCAT', '904906547417');

        var_dump($result);
    }

}

$test = new CvsOrderAppendTest();
$test->CvsIbonUpdateDate();