<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_page extends Model
{
    protected $table = 'client_page';

    protected $fillable = ['title','description','importance'];

}
