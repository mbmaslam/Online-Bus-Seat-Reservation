<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusCity extends Model
{
    protected $table = 'buscity';
    protected $primaryKey = 'bc_Id';


    public function busInformations()
    {
    return $this->hasMany('App\Models\BusInformation','bc_Id');

    }
}
