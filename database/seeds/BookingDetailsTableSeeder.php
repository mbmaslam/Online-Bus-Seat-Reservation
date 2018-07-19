<?php

use Illuminate\Database\Seeder;

class BookingDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookingDetails =
            [
                [
                    'u_id' => 1,
                    'bi_id' => 1,
                    'bd_dateTravel' => '2018-07-19',
                    'bd_departure' => 46,
                    'bd_arrival' => 41,
                    'bd_numSeat' => 21,
                    'bd_time' => '4:00AM',
                    'bd_price' => 1100,
                    'status' => 'Processing Seats',

                ],
            ];

        foreach ($bookingDetails as $bookingDetail) {

            DB::table('bookingDetails')->insert($bookingDetail);
        }
    }
}
