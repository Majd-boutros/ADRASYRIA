<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = "donors";
    protected $fillable = ['name','image','status'];
    protected $hidden = ["created_at","updated_at"];

}
