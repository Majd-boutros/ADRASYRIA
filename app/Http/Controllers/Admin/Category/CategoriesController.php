<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Impact;
use Illuminate\Http\Request;
use App\Models\Category;
use File;
use Image;
use Session;

class CategoriesController extends Controller
{
    public function categories(){
        $categories = Category::select('id','name','impact_id','status')
            ->with(['impact'=>function($query){
                $query->select('id','name');
            }])
            ->get()->toArray();
        //echo "<pre>"; print_r($categories); die;
        return view('admin.category.categories',compact('categories'));
    }

    public function addCategory(){
        $impacts = Impact::select('id','name')->get()->toArray();
        //echo "<pre>"; print_r($impacts); die;
        return view('admin.category.add_category',compact('impacts'));
    }

    public function storeCategory(Request $request){
        //Validation
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $rules = [
            'name' => 'required',
            'impact' => 'required|numeric',
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'impact.required' => 'Impact is required',
            'impact.numeric' => 'Valid Impact is required',
        ];
        $this->validate($request, $rules, $customMessage);
        $category = new Category();
        $category->name = $data['name'];
        $category->impact_id = $data['impact'];
        $category->status = 1;
        $category->save();
        Session::flash('success_message', 'Category has been added successfully !');
        return redirect()->route('get.categories');

    }

    public function editCategory($id){
        $category = Category::find($id)->toArray();
        $impacts = Impact::select('id','name')->get()->toArray();
        return view('admin.category.edit_category',compact('category','impacts'));
    }

    public function updateCategory(Request $request, $id){
        //Validation
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $rules = [
            'name' => 'required',
            'impact' => 'required|numeric',
        ];
        $customMessage = [
            'name.required' => 'Name is required',
            'impact.required' => 'Impact is required',
            'impact.numeric' => 'Valid Impact is required',
        ];
        $this->validate($request, $rules, $customMessage);

        $category = Category::find($id);

        $category->name = $data['name'];
        $category->impact_id = $data['impact'];
        $category->status = 1;
        $category->save();

        Session::flash('success_message', 'Category has been updated successfully !');
        return redirect()->route('get.categories');

    }

    public function updatesCategoryStatus(Request $request){

        if($request->ajax()){
            $data = $request->all();
            if($data['status']=='Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json([
                'success' => true,
                'status' => $status,
                'category_id' => $data['category_id']
            ]);
        }

    }

    public function deleteCategory($id){
        //Get Category
        $category = Category::find($id);
        $category->delete();
        Session::flash('success_message', 'Category has been deleted successfully !');
        return redirect()->route('get.categories');
    }
}
