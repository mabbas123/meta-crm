<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [];

    public function scopeIb($query)
    {
        return $query->where('is_ib', 1);
    }

    public function scopeNotIb($query)
    {
        return $query->where('is_ib', 0);
    }
}
