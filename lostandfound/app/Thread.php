<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = "thread";
    protected $fillable = [
    		'id', 'title', 'description', 'picture', 'location', 'time'
    ];

    protected $casts = [
    		'id' => 'string'
    ];

    protected $primaryKey = "id";

    public function types(){
    	return $this->
    }
}
