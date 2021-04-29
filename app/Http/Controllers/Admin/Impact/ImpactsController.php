<?php

namespace App\Http\Controllers\Admin\Impact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Impact;
use File;
use Image;
use Session;

class ImpactsController extends Controller
{
    public function impacts()
    {
        $impacts = Impact::select('id', 'name', 'main_image', 'status')->get()->toArray();
        //echo "<pre>"; print_r($impacts); die;
        return view('admin.impact.impacts', compact('impacts'));
    }

    public function infoImpacts($id){
        $impact = Impact::find($id)->toArray();
        //echo "<pre>"; print_r($impacts); die;
        return view('admin.impact.details_impact', compact('impact'));

    }

    public function addImpact()
    {
        return view('admin.impact.add_impact');
    }

    public function storeImpact(Request $request)
    {
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $rules = [
            'name' => 'required',
            'description' => 'required',
            'main_image' => 'required|image|mimes:jpeg,jpg,png',
            'icon_image' => 'required|image|mimes:jpeg,jpg,png'
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'main_image.required' => 'Main image is required',
            'main_image.image' => 'Valid Main image is required',
            'icon_image.required' => 'Icon image is required',
            'icon_image.image' => 'Valid Icon image is required'
        ];
        $this->validate($request, $rules, $customMessage);
        $impact = new Impact();

        $impact_name_folder = str_replace(' ', '_', $data['name']);
        $impact_images_path_folder = 'images/front/impact_images/' . $impact_name_folder;
        $main_image_tmp = $data['main_image'];
        $icon_image_tmp = $data['icon_image'];

        if ($main_image_tmp->isValid() && $icon_image_tmp->isValid()) {
            //Get Images Extension
            $mainExtension = $main_image_tmp->getClientOriginalExtension();
            $mainImageName = rand() . '.' . $main_image_tmp->getClientOriginalName();

            $iconExtension = $icon_image_tmp->getClientOriginalExtension();
            $iconImageName = rand() . '.' . $icon_image_tmp->getClientOriginalName();

            if (!File::isDirectory($impact_images_path_folder)) {

                File::makeDirectory($impact_images_path_folder, 0777, true, true);
            }

            $impact_mainImage_name_folder = $impact_images_path_folder . '/' . $mainImageName;
            $impact_iconImage_name_folder = $impact_images_path_folder . '/' . $iconImageName;
            //Upload the image
            Image::make($main_image_tmp)->resize(1000, 750)->save($impact_mainImage_name_folder);
            Image::make($icon_image_tmp)->resize(300, 300)->save($impact_iconImage_name_folder);
        }

        //Save in Database
        $impact->name = $data['name'];
        $impact->description = $data['description'];
        $impact->main_image = $mainImageName;
        $impact->icon_image = $iconImageName;
        $impact->status = 1;
        $impact->save();

        Session::flash('success_message', 'Impact has been added successfully !');
        return redirect()->route('get.impacts');

    }

    public function editImpact($id)
    {
        $impact = Impact::find($id)->toArray();
        //echo "<pre>"; print_r($impact); die;
        return view('admin.impact.edit_impact', compact('impact'));
    }

    public function rename_folder($c_folderName,$oldFolder){
        if($oldFolder == $c_folderName){
            return $folderName = $c_folderName;
        }else{
            $old_path = 'images/front/impact_images/'.$oldFolder;
            $new_path = 'images/front/impact_images/'.$c_folderName;
            rename($old_path,$new_path);
            return $folderName = $c_folderName;
        }
    }

    public function updateImpact(Request $request, $id)
    {
        //Validation

        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $rules = [
            'name' => 'required',
            'description' => 'required',
            'main_image' => 'image|mimes:jpeg,jpg,png',
            'icon_image' => 'image|mimes:jpeg,jpg,png'
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'main_image.image' => 'Valid Main image is required',
            'icon_image.image' => 'Valid Icon image is required'
        ];
        $this->validate($request, $rules, $customMessage);


        $impact = Impact::find($id);
        //return $impact;
        $mainImageName = '';
        $iconImageName = '';

//        $impact_name_folder = str_replace(' ', '_', $data['name']);
//        $impact_images_path_folder = 'images/front/impact_images/' . $impact_name_folder;

        $folderName = '';
        $oldFolder = str_replace(' ','_',$impact->name);
        $c_folderName = str_replace(' ','_',$data['name']);

        if($oldFolder == $c_folderName){
            $folderName = $this->rename_folder($c_folderName,$oldFolder);

        }else{
            $folderName = $this->rename_folder($c_folderName,$oldFolder);
        }

        if ($request->has('main_image')) {
            $mainImageOldPath = 'images/front/impact_images/'.$folderName . '/' . $impact->main_image;
            if (file_exists($mainImageOldPath)) {
                unlink($mainImageOldPath);
            }
            $temp_mainImage = $data['main_image'];
            if ($temp_mainImage->isValid()) {

                //Get Images Extension and Name
                $mainExtension = $temp_mainImage->getClientOriginalExtension();
                $mainImageName = rand() . '.' . $temp_mainImage->getClientOriginalName();

                $folderName_Path =  'images/front/impact_images/' . $folderName ;
                if (!File::isDirectory($folderName_Path)) {

                    File::makeDirectory($folderName_Path, 0777, true, true);
                }
                $impact_mainImage_name_folder = 'images/front/impact_images/'.  $folderName . '/' . $mainImageName;
                //Upload the image
                Image::make($temp_mainImage)->resize(1000, 750)->save($impact_mainImage_name_folder);
            }

        } else {
            $mainImageName = $impact->main_image;
        }

        if ($request->has('icon_image')) {

            $iconImageOldPath = 'images/front/impact_images/'.$folderName . '/' . $impact->icon_image;
            if (file_exists($iconImageOldPath)) {
                unlink($iconImageOldPath);
            }
            $temp_iconImage = $data['icon_image'];
            if ($temp_iconImage->isValid()) {

                //Get Images Extension and Name
                $iconExtension = $temp_iconImage->getClientOriginalExtension();
                $iconImageName = rand() . '.' . $temp_iconImage->getClientOriginalName();

                $folderName_Path =  'images/front/impact_images/' . $folderName ;
                if (!File::isDirectory($folderName_Path)) {

                    File::makeDirectory($folderName_Path, 0777, true, true);
                }
                $impact_iconImage_name_folder = 'images/front/impact_images/'. $folderName . '/' . $iconImageName;
                //Upload the image
                Image::make($temp_iconImage)->resize(300, 300)->save($impact_iconImage_name_folder);

            }
        }else {
            $iconImageName = $impact->icon_image;
        }
        //Save in Database
        $impact->name = $data['name'];
        $impact->description = $data['description'];
        $impact->main_image = $mainImageName;
        $impact->icon_image = $iconImageName;
        $impact->status = 1;
        $impact->save();

        Session::flash('success_message', 'Impact has been updated successfully !');
        return redirect()->route('get.impacts');
    }

    public function updatesImpactStatus(Request $request){

        if($request->ajax()){
            $data = $request->all();
            if($data['status']=='Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            Impact::where('id',$data['impact_id'])->update(['status'=>$status]);
            return response()->json([
                'success' => true,
                'status' => $status,
                'impact_id' => $data['impact_id']
            ]);
        }
    }

    public function deleteImpact($id){
        //Get Impact
        $impact = Impact::find($id);
        $impact_name_folder = str_replace(' ', '_', $impact->name);
        $folder = 'images/front/impact_images/' . $impact_name_folder;
        //return $folder;
        File::deleteDirectory($folder);

        $impact->delete();
        Session::flash('success_message', 'Impact has been deleted successfully !');
        return redirect()->route('get.impacts');
    }
}
