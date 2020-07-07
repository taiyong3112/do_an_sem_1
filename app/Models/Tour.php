<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	'name',
    	'destination_id',
    	'summary',
    	'content',
    	'image',
    	'adult_price',
    	'children_price',
    	'duration',
        'meta_keywords',
        'meta_descriptions'
    ];
    public $timestamps = false;

    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_details', 'tour_id', 'package_id');
    }
}
