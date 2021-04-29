<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Image;
use Session;

class ProjectsController extends Controller
{
    public function projects(){
        return 'ss';
    }

    public function addProject(){
        return view('admin.project.add_project');
    }

    public function storeProject(Request $request){
        return $request;
    }
}
