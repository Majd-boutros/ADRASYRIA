<?php

namespace App\Http\Controllers\Admin\Impact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Impact;

class ImpactsController extends Controller
{
    public function impacts(){
        return view('admin.impact.impacts');
    }

    public function addImpact(){
        return view('admin.impact.add_impact');
    }
}
