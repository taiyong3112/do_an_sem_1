<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
    	'name',
    	'image',
    	'status'
    ];
    public $timestamps = false;

    public function tours()
    {
    	return $this->hasMany(Tour::class,'destination_id','id')->where('status', 1);
    }
}
