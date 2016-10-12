<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipodoc extends Model
{
    protected $table = "tipodocs";

    protected $fillable = ["tipo"];

    public $timestamps = false;

    public function documento()
    {
    	return $this->hasMany('App\Models\Documento');
    }
}
