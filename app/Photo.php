<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = array('album_id','photo','title','description','size');

    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
