<?php

namespace App\Http\Controllers;

use AleeDhillon\MetaFive\Client;
use App\Models\TradeGroup;
use App\Models\User;
use App\Services\TradeAccountService;
use Illuminate\Http\Request;

class DevController extends Controller
{
    public function __invoke(TradeAccountService $tradeAccountService)
    {
        $user = User::first();
        $tradeGroup = TradeGroup::first();
        $leverage = 200;

        $tradeAccount = $tradeAccountService->create($user, $tradeGroup, $leverage);

        dd($tradeAccount);
    }
}
