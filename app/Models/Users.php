<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'u_id';


    public function bookingDetails()
    {

        return $this->hasMany('namespace App\Models\BookingDetails','u_Id');
    }

}
