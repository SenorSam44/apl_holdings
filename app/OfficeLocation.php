<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeLocation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'logoUrl', 'latitude', 'longitude'];
}
