<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $table = "impacts";
    protected $fillable = ["name","main_image","icon_image","description","status"];
    protected $hidden = ['created_at','updated_at'];

    public function categories(){
        return $this->hasMany('App\Models\Category','impact_id','id');
    }

}
