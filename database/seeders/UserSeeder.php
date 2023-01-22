<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserExtra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'pos_id' => 1,
            'position' => 1,
            'plan_id' => 1,
            'total_invest' => 1000,
            'total_ref_com' => 0,
            'total_binary_com' => 0,
            'firstname' => 'Alee',
            'lastname' => 'Dhillon',
            'username' => 'aleedhillon',
            'email' => 'aleedhx@gmail.com',
            'country_code' => '+92',
            'mobile' => '3333333333',
            'ref_by' => 0,
            'balance' => 0,
            'password' => '$2y$10$FrK46MQIEUg.iCz37sIJie87tH.1EPFdwLAcTIFxGwfwfs2sfZcHq',
            'image' => 'https://avatars.githubusercontent.com/u/13802089',
            'address' => 'Lahore, Pakistan',
            'status' => 1,
            'kyc_data' => '[]',
            'kv' => 1,
            'ev' => 1,
            'sv' => 1,
            'profile_complete' => 1,
            'ver_code' => '123456',
            'ver_code_send_at' => '2023-01-01 00:00:00',
            'ts' => 1,
            'tv' => 1,
            'tsc' => '[]',
        ]);

        UserExtra::create([
            'user_id' => $user->id,
            'paid_left' => 1,
            'paid_right' => 1,
            'free_left' => 1,
            'free_right' => 1,
            'bv_left' => 1,
        ]);
    }
}
