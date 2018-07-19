<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusInformation extends Model
{
    protected $table = 'businformation';
    protected $primaryKey = 'bi_Id';


    public function busCitys()
    {
        return $this->belongsTo('App\Models\BusCity', 'bc_Id');
    }


    public function bookingDetails()
    {
        return $this->hasMany(' App\Models\BookingDetails','bi_Id');

    }
}
