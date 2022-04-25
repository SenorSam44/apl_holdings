<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable=["post_name", "post_description", "deadline", "publication_status"];
}
