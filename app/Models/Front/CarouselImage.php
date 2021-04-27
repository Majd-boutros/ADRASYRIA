<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    protected $table = 'carousel_images';
    protected $fillable = ['image','status'];
    protected $hidden = ['created_at','updated_at'];

    public static function getCarouselImages(){
        $images = CarouselImage::select('image')->where('status',1)->limit(4)->get()->toArray();
        return $images;
    }

}
