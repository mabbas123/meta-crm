<?php

namespace App\Objects;


class ErrorAccountObj
{
    public $Login             = 0;
    public $CurrencyDigits    = 0;
    public $Balance           = 0.00;
    public $Credit            = 0.00;
    public $Margin            = 0.00;
    public $MarginFree        = 0.00;
    public $MarginLevel       = 0.00;
    public $MarginLeverage    = 0;
    public $Profit            = 0.00;
    public $Storage           = 0.00;
    public $Commission        = 0.00;
    public $Floating          = 0.00;
    public $Equity            = 0.00;
    public $SOActivation      = 0;
    public $SOTime            = 0;
    public $SOLevel           = 0.00;
    public $SOEquity          = 0.00;
    public $SOMargin          = 0.00;
    public $Assets            = 0.00;
    public $Liabilities       = 0.00;
    public $BlockedCommission = 0.00;
    public $BlockedProfit     = 0.00;
    public $MarginInitial     = 0.00;
    public $MarginMaintenance = 0.00;
    public $liveStatus = '❌';
}
