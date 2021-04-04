<?php

namespace App\Services\Pay;

use App\Services\Pay\EcPay;
use App\Services\Pay\LinePay;

class Pay
{
    public $payment;

    public function setPay(string $pay_type)
    {
        switch ($pay_type) {
            case 'ecpay':
                $this->payment = new EcPay();
            break;

            case 'linepay':
                $this->payment = new LinePay();
            break;
        }
    }

    public function setParameter($data)
    {
        $this->payment->setParameter($data);
    }
}
