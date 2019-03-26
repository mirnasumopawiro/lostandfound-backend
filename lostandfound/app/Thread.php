<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = "threads";
    protected $fillable = [
    		'id', 'is_found', 'title', 'description', 'picture', 'location', 'time'
    ];

    protected $casts = [
    		'id' => 'string'
    ];

    protected $primaryKey = "id";


}
