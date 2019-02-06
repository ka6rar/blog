<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([


             'blog_name'      =>  'karar Jabr',
            'phone_number'    => '07821675',
            'blog_email'      =>  'karar@gmail.com',
            'address'         =>  'iraq',

        ]);
    }
}
