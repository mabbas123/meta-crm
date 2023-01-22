<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'code' => 'en',
                'created_at' => '2020-07-06 03:47:55',
                'id' => 1,
                'is_default' => 1,
                'name' => 'English',
                'updated_at' => '2022-04-09 03:47:04',
            ),
            1 => 
            array (
                'code' => 'hn',
                'created_at' => '2020-12-29 02:20:07',
                'id' => 5,
                'is_default' => 0,
                'name' => 'Hindi',
                'updated_at' => '2022-04-09 03:47:04',
            ),
            2 => 
            array (
                'code' => 'bn',
                'created_at' => '2021-03-14 04:37:41',
                'id' => 9,
                'is_default' => 0,
                'name' => 'Bangla',
                'updated_at' => '2022-03-30 12:31:55',
            ),
            3 => 
            array (
                'code' => 'es',
                'created_at' => '2022-11-27 16:01:22',
                'id' => 11,
                'is_default' => 0,
                'name' => 'Spanish',
                'updated_at' => '2022-11-27 16:01:22',
            ),
        ));
        
        
    }
}