<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert
    (
         [
             'a_Name'=>'Admin',
             'a_Email'=>'admin@gmail.com',
             'a_password'=>Hash::make('admin123'),
         ]
    );
    }
}
