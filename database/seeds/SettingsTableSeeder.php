<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2021-2022'],
            ['key' => 'school_title', 'value' => 'GD'],
            ['key' => 'school_name', 'value' => 'George Derderian International Schools'],
            ['key' => 'end_first_term', 'value' => '01-12-2021'],
            ['key' => 'end_second_term', 'value' => '01-03-2022'],
            ['key' => 'phone', 'value' => '0123456789'],
            ['key' => 'address', 'value' => 'Damascus'],
            ['key' => 'school_email', 'value' => 'georgederderian7@gmail.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }
}
