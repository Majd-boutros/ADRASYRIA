<?php

namespace App\Http\Controllers\Admin\Carousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\CarouselImage;
use File;
use Image;
use Session;

class CarouselController extends Controller
{
    public function carouselImages(){
        $images = CarouselImage::select('id','image','status')->get()->toArray();

        //echo "<pre>"; print_r($images); die;

        return view('admin.carousel.carousel',compact('images'));
    }

    public function AddImagesCarousel(){
        return view('admin.carousel.addImage');
    }

    public function saveImagesCarousel(Request $request){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $rules = ['carousel_image' => 'required|image|mimes:jpeg,jpg,png'];
        $customMessage = [
            'carousel_image.required' => 'Image is required',
            'carousel_image.image' => 'Valid image is required'
        ];
        $this->validate($request,$rules,$customMessage);

        $image_carousel_path_folder = 'images/admin_images/carousel_images';
        $image_tmp = $data['carousel_image'];

        if($image_tmp->isValid()){
            //Get Image Extension
            $extension = $image_tmp->getClientOriginalExtension();
            $imageName = rand() .'.'.$image_tmp->getClientOriginalName();

            if(!File::isDirectory($image_carousel_path_folder)){

                File::makeDirectory($image_carousel_path_folder, 0777, true, true);
            }

            $admin_image_path_folder = $image_carousel_path_folder . '/' .  $imageName;
            //Upload the image
            Image::make($image_tmp)->resize(1000,750)->save($admin_image_path_folder);
        }

        CarouselImage::create([
            'image' => $imageName,
            'status' => 1
        ]);

        Session::flash('success_message','Image has been added successfully !');
        return redirect()->route('get.carousel.images');

    }

    public function updatesCarouselImageStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=='Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            CarouselImage::where('id',$data['carousel_id'])->update(['status'=>$status]);
            return response()->json([
                'success' => true,
                'status' => $status,
                'carousel_id' => $data['carousel_id']
            ]);
        }
    }

    public function EditImagesCarousel($id){
        $image = CarouselImage::find($id);
        return view('admin.carousel.edit_image_carousel',compact('image'));
    }

    public function UpdateImagesCarousel(Request $request,$id){
        $image = CarouselImage::find($id);
        $imageOldName = $image->image;
        $image_carousel_path_folder = 'images/admin_images/carousel_images';
        $imageOldPath =  $image_carousel_path_folder . '/' . $imageOldName;
        $data = $request->all();
        $rules = ['carousel_image' => 'required|image|mimes:jpeg,jpg,png'];
        $customMessage = [
            'carousel_image.required' => 'Image is required',
            'carousel_image.image' => 'Valid image is required'
        ];
        $this->validate($request,$rules,$customMessage);


        $image_tmp = $data['carousel_image'];

        if($image_tmp->isValid()){
            //Get Image Extension
            $extension = $image_tmp->getClientOriginalExtension();
            $imageName = rand() .'.'.$image_tmp->getClientOriginalName();

            if(!File::isDirectory($image_carousel_path_folder)){

                File::makeDirectory($image_carousel_path_folder, 0777, true, true);
            }

            if(file_exists($imageOldPath)){
                unlink($imageOldPath);
            }

            $admin_image_path_folder = $image_carousel_path_folder . '/' .  $imageName;
            //Upload the image
            Image::make($image_tmp)->resize(1000,750)->save($admin_image_path_folder);
        }

        $image->update([
            'image'=>$imageName
        ]);

        Session::flash('success_message','Image has been updated successfully !');
        return redirect()->route('get.carousel.images');

    }


    public function DeleteImagesCarousel($id){
        //Get Banner image
        $image = CarouselImage::find($id);

        //Get folder images path
        $image_carousel_path_folder = 'images/admin_images/carousel_images/'.$image->image;

        //Delete image from folder

        if(file_exists($image_carousel_path_folder)){
            unlink($image_carousel_path_folder);
        }

        //Delete image from dataBase

        $image->delete();

        Session::flash('success_message','Image has been deleted successfully !');
        return redirect()->route('get.carousel.images');
    }
}
