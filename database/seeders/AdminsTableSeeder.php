<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $admins = [
            [
                'created_at' => NULL,
                'email' => 'aleedhx@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'image' => '6379b33c94bd11668920124.jpg',
                'name' => 'Super Admin',
                'password' => '$2y$10$DPcZdU5ncDNJqfcQyNRYuuvyj4QKYq1QLVcxJ/TNqELQN/JkyxAvO',
                'remember_token' => 'kqfFlwwvuRFqUju7xUMHHr7vcvg4qD3lTRQjrFWeCBpGm2wb8inV9MDLEN0H',
                'updated_at' => '2022-11-20 02:25:24',
                'username' => 'admin',
            ]
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
