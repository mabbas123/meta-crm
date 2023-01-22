<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->delete();

        DB::table('forms')->insert(array(
            0 =>
            array(
                'act' => 'kyc',
                'created_at' => '2022-03-17 02:56:14',
                'form_data' => '{"full_name":{"name":"Full Name","label":"full_name","is_required":"required","extensions":null,"options":[],"type":"text"},"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":null,"options":[],"type":"text"},"gender":{"name":"Gender","label":"gender","is_required":"required","extensions":null,"options":["Male","Female","Others"],"type":"select"},"you_hobby":{"name":"You Hobby","label":"you_hobby","is_required":"required","extensions":null,"options":["Programming","Gardening","Traveling","Others"],"type":"checkbox"},"nid_photo":{"name":"NID Photo","label":"nid_photo","is_required":"required","extensions":"jpg,png","options":[],"type":"file"}}',
                'id' => 7,
                'updated_at' => '2022-10-13 06:13:55',
            ),
        ));
    }
}
