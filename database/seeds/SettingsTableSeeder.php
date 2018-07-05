<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'id'=>1,
            'email'=>'riba_moya_777@mail.ru',
            'tel'=>'0000'
        ]);
    }
}
