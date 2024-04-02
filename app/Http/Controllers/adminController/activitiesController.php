<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use Illuminate\Http\Request;

class activitiesController extends Controller
{
    public function Index(){
        $datas = Activities::latest()->paginate(20);
        return view('admin/activities/activities',compact('datas'));
    }

    
}
