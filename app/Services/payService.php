<?php

namespace App\Services;

use App\Services\Pay\Pay;

class payService
{
    public $payment;

    public function pay(string $pay_type)
    {
        $this->payment = new Pay();
        $this->payment->setPay($pay_type);
    }
}
