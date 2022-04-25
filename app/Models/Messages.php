<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
        "user_name",
        "subject",
        "phone",
        "email",
        'message',
        "CV",
        "postID",
        'publication_status'
    ];
}
