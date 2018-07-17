<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers =
            [
                ['c_Name' => 'Mohamed Aslam', 'c_Email' => 'mbmaslam4@gmail.com', 'c_password' => 'aslam123', 'c_Mobile' => '0777245567'],
                ['c_Name' => 'Steven', 'c_Email' => 'steven@gmail.com', 'c_password' => 'steven123', 'c_Mobile' => '0711234567'],
                ['c_Name' => 'Johan', 'c_Email' => 'johan@gmail.com', 'c_password' => 'johan123', 'c_Mobile' => '0721234567'],
                ['c_Name' => 'Methew', 'c_Email' => 'mathew@yahoo.com', 'c_password' => 'mathew123', 'c_Mobile' => '0701234567'],
            ];

       foreach ($customers as $customer){
           DB::table('customer')->insert($customer);
       }

    }
}
