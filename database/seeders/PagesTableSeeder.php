<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        DB::table('pages')->insert(array(
            0 =>
            array(
                'created_at' => '2020-07-11 06:23:58',
                'id' => 1,
                'is_default' => 1,
                'name' => 'HOME',
                'secs' => '["about","service","how_it_works","team","plan","transactions","counter","testimonial","subscribe","blog","faq"]',
                'slug' => '/',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-23 03:05:47',
            ),
            1 =>
            array(
                'created_at' => '2020-10-22 01:14:43',
                'id' => 4,
                'is_default' => 1,
                'name' => 'Blog',
                'secs' => NULL,
                'slug' => 'blog',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-20 11:05:36',
            ),
            2 =>
            array(
                'created_at' => '2020-10-22 01:14:53',
                'id' => 5,
                'is_default' => 1,
                'name' => 'Contact',
                'secs' => '["faq"]',
                'slug' => 'contact',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-24 06:03:36',
            ),
            3 =>
            array(
                'created_at' => '2022-11-17 04:44:36',
                'id' => 19,
                'is_default' => 0,
                'name' => 'About',
                'secs' => '["about","team","testimonial"]',
                'slug' => 'about',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-17 04:44:51',
            ),
            4 =>
            array(
                'created_at' => '2022-11-17 04:45:32',
                'id' => 20,
                'is_default' => 0,
                'name' => 'Marketing Tool',
                'secs' => '["marketing_tool","team"]',
                'slug' => 'marketing-tool',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-27 15:57:16',
            ),
            5 =>
            array(
                'created_at' => NULL,
                'id' => 22,
                'is_default' => 1,
                'name' => 'Plan',
                'secs' => '["service"]',
                'slug' => 'plan',
                'tempname' => 'templates.basic.',
                'updated_at' => '2022-11-27 15:57:04',
            ),
        ));
    }
}
