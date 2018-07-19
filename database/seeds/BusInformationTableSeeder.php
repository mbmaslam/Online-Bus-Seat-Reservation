<?php

use Illuminate\Database\Seeder;

class BusInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $busInformations =
            [
                [
                    'bi_travelName' => 'ZEENA TRAVEL',
                    'bi_busType' => 'Super Luxury',
                    'bi_photo' => 'luxuryBus.jpeg',
                    'bi_busNo' => 'NF-9797',
                    'bi_routeNo' => '48',
                    'bi_numSeat' => '50',
                    'bi_departure' => 80,
                    'bi_arrival' => 41,
                    'bi_time' => '8:00 PM',
                    'bi_price' => 1100,
                ]
            ];
        foreach ($busInformations as $busInformation){
            DB::table('businformation')->insert($busInformation);
        }
    }
}
