<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "areas";

    protected $fillable = ["area"];

    public $timestamps = false;

    public function user()
    {
    	return $this->hasMany('App\User');
    }
}
