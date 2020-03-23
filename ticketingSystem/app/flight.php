<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $table = 'my_flights';
    protected $primaryKey = 'flight_id';
    public $timestamps = false; //no created_at and updated_at table in your database table
    protected $keyType = 'string'; //set to string the primary key if the primary key its not integer
    protected $connection = 'connection-name';
}
