<?php

namespace App\Services;

use App\Services\Pay\Pay;

class payService
{
    public $payment;

    public function createOrder($request)
    {
        $this->payment = new Pay();

        $pay_type = strtolower($request->pay_type);

        $this->payment->setPay($pay_type);
        $this->payment->setInput();

        return $this->payment->createOrder();
    }
}
