<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $fillable = [
        'title','budget','description',
        'primary_beneficiaries','area',
        'main_image','category_id','start_date','end_date','status'
    ];
    protected $hidden = ['created_at','updated_at'];
//    protected $casts = [
//        'shifts' => 'donors'
//    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

}
