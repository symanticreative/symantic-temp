<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Eamon Boonzaaier',
            'email' => 'eamon@symantic.co.za',
            'password' => bcrypt('secret'),
            'admin' => 1
        ]);
    }
}
