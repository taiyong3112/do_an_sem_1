<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
    	'name',
    	'status'
    ];
    public $timestamps = false;

    public function tours()
    {
    	return $this->belongsToMany(Tour::class,'package_details', 'package_id', 'tour_id');
    }
}
