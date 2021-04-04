<?php

namespace App\Services\Pay;

class EcPay
{
    public $payment;

    public function __construct()
    {
        $payment = new ECPay_AllInOne();
    }
}
