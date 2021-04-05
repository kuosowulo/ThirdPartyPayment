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

    public function createOrder(Request $request)
    {
        return $this->payService->createOrder($request);
    }
}
