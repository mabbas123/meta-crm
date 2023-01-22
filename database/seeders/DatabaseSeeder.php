<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GeneralSettingsTableSeeder::class,
            AdminsTableSeeder::class,
            ExtensionsTableSeeder::class,
            FormsTableSeeder::class,
            FrontendsTableSeeder::class,
            GatewayCurrenciesTableSeeder::class,
            GatewaysTableSeeder::class,
            LanguagesTableSeeder::class,
            NotificationTemplatesTableSeeder::class,
            PagesTableSeeder::class,
            UserSeeder::class,
            TradeGroupSeeder::class,
        ]);
    }
}
