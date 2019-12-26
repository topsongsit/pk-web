<?php

use Illuminate\Database\Seeder;
// use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'New Admin',
            'username' => 'admin2',
            'surname' => 'admin',
            'history' => '',
            'gender_id' => 1,
            'previlege_id' => 1,
            'age' => 20,
            'tel' => '0864536253',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
