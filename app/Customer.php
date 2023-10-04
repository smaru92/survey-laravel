<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //option 1
    //protected $fillable = ['name', 'email'];

    //option 2
    protected $guarded = [];
}
