<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = "documentos";

    protected $fillable = [];

    protected $dates = ['desde','hasta'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function tipodocs()
    {
    	return $this->belongsTo('App\Models\Tipodoc');
    }
}
