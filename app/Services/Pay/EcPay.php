<?php

namespace App\Services\Pay;

use App\Services\Pay\EcPayInput;
use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Exceptions\RtnException;

class EcPay
{
    const hashKey = '5294y06JbISpM5x9';

    const hashIv = 'v77hoKGq4kWxNNIS';

    const action = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';

    private $service;

    private $input;

    public function __construct()
    {
        try {
            $factory = new Factory;
            $this->service = $factory->createWithHash('AutoSubmitFormWithCmvService', self::hashKey, self::hashIv);
        } catch (RtnException $e) {
            echo '(' . $e->getCode() . ')' . $e->getMessage() . PHP_EOL;
        }
    }

    public function setInput()
    {
        $input = new EcPayInput();
        $input->setMerchantTradeNo();
        $input->setMerchantTradeDate();
        $input->setTradeDesc();

        $this->input = (array) $input;
    }

    public function createOrder()
    {
        try {
            if (is_null($this->input)) {
                echo 'need input.';
            }

            echo $this->service->generate($this->input, self::action);
        } catch (RtnException $e) {
            echo '(' . $e->getCode() . ')' . $e->getMessage() . PHP_EOL;
        }
    }
}
