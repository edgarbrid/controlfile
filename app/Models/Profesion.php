<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table = "profesiones";

    protected $fillable = ["profesion"];

    public $timestamps = false;

    public function user()
    {
    	return $this->hasMany('App\User');
    }
}
