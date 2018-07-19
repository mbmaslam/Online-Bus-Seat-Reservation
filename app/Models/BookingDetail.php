<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $table = 'bookingdetails';
    protected $primaryKey = 'bd_Id';




    public function busInformation()
    {
        return $this->belongsTo('App\Models\BusInformation', 'bi_Id');
    }

    public function users(){
        return $this->belongsTo('App\Models\Users','u_Id');
    }
}
