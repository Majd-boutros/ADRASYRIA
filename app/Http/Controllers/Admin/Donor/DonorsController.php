<?php

namespace App\Http\Controllers\Admin\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;
use File;
use Image;
use Session;

class DonorsController extends Controller
{
    public function donors(){
        $donors = Donor::get()->toArray();
        return view('admin.donor.donors',compact('donors'));
    }
    public function addDonor(){
        return view('admin.donor.add_donor');
    }

    public function storeDonor(Request $request){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        //Validation
        $rules = [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'image.image' => 'Image is required',
        ];
        $this->validate($request, $rules, $customMessage);
        $donor = new Donor();

        $donor_name = str_replace(' ', '_', $data['name']);

        $image_tmp = $data['image'];
        $imageName = '';
        if ($image_tmp->isValid()) {
            //Get Images Extension
            $imageExtension = $image_tmp->getClientOriginalExtension();
            $imageName = rand() . '.' . $image_tmp->getClientOriginalName();

            //Make Path Folder
            $imagePath =  'images/front/donors_images/' . $donor_name;

            if (!File::isDirectory($imagePath)) {

                File::makeDirectory($imagePath, 0777, true, true);
            }
            //Upload image to the folder
            $imagePath = $imagePath . '/' .  $imageName;
            Image::make($image_tmp)->save($imagePath);

        }

        //Save in Database
        $donor->name = $data['name'];
        $donor->image = $imageName;
        $donor->status = 1;
        $donor->save();

        Session::flash('success_message', 'Donor has been added successfully !');
        return redirect()->route('get.donors');

    }

    public function editDonor($id){
        $donor = Donor::find($id)->toArray();
        return view('admin.donor.edit_donor',compact('donor'));
    }

    public function rename_folder($c_folderName,$oldFolder){
        if($oldFolder == $c_folderName){
            return $folderName = $c_folderName;
        }else{
            $old_path = 'images/front/donors_images/'.$oldFolder;
            $new_path = 'images/front/donors_images/'.$c_folderName;
            rename($old_path,$new_path);
            return $folderName = $c_folderName;
        }
    }

    public function updateDonor(Request $request, $id){
        $data = $request->all();
        //Validation
        $rules = [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'image.image' => 'Image is required',
        ];
        $this->validate($request, $rules, $customMessage);

        $donor = Donor::find($id);
        $imageName = '';
        $donor_name = str_replace(' ', '_', $data['name']);

        $oldFolder = str_replace(' ','_',$donor->name);
        $c_folderName = $donor_name;

        if($oldFolder == $c_folderName){
            $folderName = $this->rename_folder($c_folderName,$oldFolder);

        }else{
            $folderName = $this->rename_folder($c_folderName,$oldFolder);
        }

        if ($request->has('image')) {
            $mainImageOldPath = 'images/front/donors_images/'.$folderName . '/' . $donor->image;
            if (file_exists($mainImageOldPath)) {
                unlink($mainImageOldPath);
            }
            $image_tmp = $data['image'];
            $imageName = '';
            if ($image_tmp->isValid()) {
                //Get Images Extension
                $imageExtension = $image_tmp->getClientOriginalExtension();
                $imageName = rand() . '.' . $image_tmp->getClientOriginalName();

                //Make Path Folder
                $imagePath =  'images/front/donors_images/' . $folderName;

                if (!File::isDirectory($imagePath)) {

                    File::makeDirectory($imagePath, 0777, true, true);
                }
                //Upload image to the folder
                $imagePath = $imagePath . '/' .  $imageName;
                Image::make($image_tmp)->save($imagePath);
            }
        }else{
            $imageName = $donor->image;
        }

        //Save in Database
        $donor->name = $data['name'];
        $donor->image = $imageName;
        $donor->status = 1;
        $donor->save();

        Session::flash('success_message', 'Donor has been updated successfully !');
        return redirect()->route('get.donors');

    }

    public function updatesDonorStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=='Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            Donor::where('id',$data['donor_id'])->update(['status'=>$status]);
            return response()->json([
                'success' => true,
                'status' => $status,
                'donor_id' => $data['donor_id']
            ]);
        }
    }

    public function deleteDonor($id){
        //Get Donor
        $donor = Donor::find($id);
        $donor_name_folder = str_replace(' ', '_', $donor->name);
        $folder = 'images/front/donors_images/' . $donor_name_folder;
        //return $folder;
        File::deleteDirectory($folder);

        $donor->delete();
        Session::flash('success_message', 'Donor has been deleted successfully !');
        return redirect()->route('get.donors');
    }
}
