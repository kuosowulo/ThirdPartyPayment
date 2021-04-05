<?php

namespace App\Services\Pay;

use Ecpay\Sdk\Services\UrlService;

class EcPayInput
{
    public $MerchantID = '2000132';

    public $MerchantTradeNo;

    public $MerchantTradeDate;

    public $PaymentType = 'aio';

    public $TotalAmount = 100;

    public $TradeDesc;

    public $ItemName = '範例商品一批 100 TWD x 1';

    public $ReturnURL = 'https://www.ecpay.com.tw/example/receive';

    public $ChoosePayment = 'ALL';

    public $EncryptType = 1;

    public function __construct()
    {
        $this->setMerchantTradeDate();
    }

    public function setMerchantID(string $id)
    {
        $this->MerchantID = $id;
    }

    public function setMerchantTradeNo(string $tradeNo = null)
    {
        $this->MerchantTradeNo = $tradeNo ?? 'Test' . time();
    }

    public function setMerchantTradeDate()
    {
        $this->MerchantTradeDate = date('Y/m/d H:i:s');
    }

    public function setPaymentType(string $type)
    {
        $this->PaymentType = $type;
    }

    public function setTotalAmount(int $totalAmount)
    {
        $this->TotalAmount = $totalAmount;
    }

    public function setTradeDesc(string $tradeDesc = '交易描述範例')
    {
        $this->TradeDesc = UrlService::ecpayUrlEncode($tradeDesc);
    }

    public function setItemName(string $itemName)
    {
        $this->ItemName = $itemName;
    }

    public function setReturnURL(string $returnURL)
    {
        $this->ReturnURL = $returnURL;
    }

    public function setChoosePayment(string $choosePayment)
    {
        $this->ChoosePayment = $choosePayment;
    }

    public function setEncryptType(int $encryptType)
    {
        $this->EncryptType = $encryptType;
    }
}
