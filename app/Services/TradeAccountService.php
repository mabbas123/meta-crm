<?php

namespace App\Services;

use MTUser;
use Throwable;
use App\Models\User;
use App\Models\TradeGroup;
use Illuminate\Support\Str;
use App\Models\TradeAccount;
use AleeDhillon\MetaFive\Entities\Trade;
use AleeDhillon\MetaFive\Facades\Client;
use AleeDhillon\MetaFive\Entities\User as MetaUser;

class TradeAccountService
{
    public function getTotalFreeMargin(User $user)
    {
        return $user->tradeAccounts->sum(function ($tradeAccount) {
            return $tradeAccount->info->MarginFree;
        });
    }

    public function create(User $user, TradeGroup $tradeGroup, $leverage, bool $isIB = false)
    {
        $trader = new MetaUser;

        $trader->setName($user->name);
        $trader->setEmail($user->email);
        $trader->setGroup($tradeGroup->code);
        $trader->setLeverage((int) $leverage);
        $trader->setMainPassword(Str::random(8));
        $trader->setInvestorPassword(Str::random(8));
        $trader->setCompany(config('app.name'));

        $sponsor = $user->sponsor;

        if ($sponsor) {
            $ibAccount = $sponsor->refCode();

            if ($ibAccount) {
                $trader->setAgent($ibAccount);
            }
        }

        try {
            $account = Client::createUser($trader);

            return $user->tradeAccounts()
                ->create([
                    'trade_group_id' => $tradeGroup->id,
                    'account' => (string) $account->getLogin(),
                    'main_password' => $account->getMainPassword(),
                    'investor_password' => $account->getInvestorPassword(),
                    'leverage' => $account->getLeverage(),
                    'is_ib' => $isIB
                ]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function desposit(string $login, float $amount, string $gateway = '')
    {
        try {
            $trade = new Trade;
            $trade->setLogin($login);
            $trade->setAmount($amount);
            $trade->setComment('Deposit via ' . $gateway);
            $trade->setType(Trade::DEAL_BALANCE);

            return Client::trade($trade);
        } catch (Throwable $th) {
            throw $th;
            return null;
        }
    }

    public function withdraw(string $login, float $amount, string $gateway = '')
    {
        try {
            $trade = new Trade;
            $trade->setLogin($login);
            $trade->setAmount(-$amount);
            $trade->setComment('Withdrawal via ' . $gateway);
            $trade->setType(Trade::DEAL_BALANCE);
            return Client::trade($trade);
        } catch (\Throwable $th) {
            throw $th;
            return null;
        }
    }

    public function updatePassword(TradeAccount $tradeAccount, string $password, bool $isInvestor = false)
    {
        try {
            Client::changePasswordUser(
                $tradeAccount->account,
                $password,
                $isInvestor ? 'INVESTOR' : 'MAIN'
            );

            if ($isInvestor) {
                $tradeAccount->investor_password = $password;
            } else {
                $tradeAccount->main_password = $password;
            }

            $tradeAccount->save();

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function updateLeverage(TradeAccount $tradeAccount, int $leverage)
    {
        try {
            $user = Client::getUser($tradeAccount->account);
            $user->Leverage = $leverage;
            $user = Client::updateUser($user);

            $tradeAccount->leverage = $user->Leverage;
            $tradeAccount->save();

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function updateIB(TradeAccount $tradeAccount, TradeAccount $ib)
    {
        try {
            /**
             * @var MTUser $user
             */
            $user = Client::getUser($tradeAccount->account);
            $user->Agent = $ib->account;
            $user = Client::updateUser($user);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function transferFunds(TradeAccount $fromAccount, TradeAccount $toAccount, float $amount)
    {
        try {
            $this->withdraw($fromAccount->account, $amount, 'Internal Transfer');
            $this->desposit($toAccount->account, $amount, 'Internal Transfer');

            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }
}
