<?php

namespace App\Http\Controllers;

use App\Services\payService;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public $payService;

    public function __construct(payService $payService)
    {
        $this->payService = $payService;
    }

    public function pay(Request $request)
    {
        $pay_type = $request->type;

        $this->payService->pay($pay_type);
    }
}
