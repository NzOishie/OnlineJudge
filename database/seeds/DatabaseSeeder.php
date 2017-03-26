<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'first_name' => 'Naz Zarreen',
            'last_name' => 'Oishie',
            'Gender' => 'Female',
            'email' => 'nazzarreen@oishie.com',
            'country' => 'Bangladesh',
            'password' => bcrypt('password'),
            'institute' => 'Khulna Universtiy'
        ]);
    }
}
