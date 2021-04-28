<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name','impact_id','status'];
    protected $hidden = ['created_at','updated_at'];

    public function projects(){
        return $this->hasMany('App\Models\Project','category_id','id');
    }

    public function impact(){
        return $this->belongsTo('App\Models\Impact','impact_id','id');
    }

}
