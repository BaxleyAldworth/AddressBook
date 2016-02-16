<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'name',
    'address',
    'phone',
    'email'
    ];
}


//Good practice to explicitly define which attributes get assigned
//This protects from dangerous user input