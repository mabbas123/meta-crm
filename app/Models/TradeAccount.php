<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use AleeDhillon\MetaFive\Facades\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Objects\ErrorAccountObj;
use App\Objects\EmptyMetaAccount;

class TradeAccount extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    private $cachedInfo = null;
    private $cachedUserInfo = null;
    private $cachedMonthlyGain = 0;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tradeGroup()
    {
        return $this->belongsTo(TradeGroup::class, 'trade_group_id', 'id');
    }

    public function scopeNotIb($query)
    {
        return $query->where('is_ib', 0);
    }

    public function scopeReal($query)
    {
        return $query->where('is_real', 1);
    }

    public function scopeNotOnCopy($query)
    {
        return $query->whereNull('master_account_id');
    }

    public function scopeOnCopy($query)
    {
        return $query->whereNotNull('master_account_id');
    }

    public function isOnCopy()
    {
        return !!$this->master_account_id;
    }

    public function scopeDepositable($query)
    {
        return $query
            ->notIb()
            ->real();
    }

    public function getTypeAttribute()
    {
        return $this->is_real ?
            ($this->is_ib ? 'IB' : 'Real') :
            'Demo';
    }

    public function getInfoAttribute()
    {
        if ($this->cachedInfo) {
            return $this->cachedInfo;
        }

        try {
            $this->cachedInfo = Client::getTradingAccounts($this->account);
            $this->cachedInfo->liveStatus = '✅';

            return $this->cachedInfo;
        } catch (\Throwable $th) {
            // throw $th;
            return new ErrorAccountObj;
        }
    }

    public function isLive()
    {
        return !($this->info instanceof ErrorAccountObj);
    }

    public function getUserInfoAttribute()
    {
        if ($this->cachedUserInfo) {
            return $this->cachedUserInfo;
        }
        try {
            $this->cachedUserInfo = Client::getUser($this->account);
            return $this->cachedUserInfo;
        } catch (\Throwable $th) {
            return new EmptyMetaAccount;
        }
    }

    public function getServerAttribute()
    {
        return config('meta-five.server-name');
    }

    // public function deposits()
    // {
    //     return $this->hasMany(Deposit::class, 'trade_account_id', 'id');
    // }

    // public function withdrawals()
    // {
    //     return $this->hasMany(Withdrawal::class, 'trade_account_id', 'id');
    // }

    // public function master()
    // {
    //     return $this->belongsTo(MasterAccount::class, 'master_account_id', 'id');
    // }

    // public function copyRequests()
    // {
    //     return $this->hasMany(CopyRequest::class, 'trade_account_id', 'id');
    // }

    // public function isUnsubSent()
    // {
    //     return $this->copyRequests()
    //         ->unsub()
    //         ->pending()
    //         ->exists();
    // }
}
