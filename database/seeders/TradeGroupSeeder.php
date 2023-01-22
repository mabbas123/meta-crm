<?php

namespace Database\Seeders;

use App\Models\TradeGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TradeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'name' => 'Default',
                'code' => 'ABS\RAW'
            ]
        ];

        foreach ($groups as $group) {
            TradeGroup::create($group);
        }
    }
}
