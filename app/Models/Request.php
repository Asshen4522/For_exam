<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'name','description','category_id','photo_start', 'photo_end'
    ];

    protected $attributes = [
        'status_id' => 1,
    ]
}
