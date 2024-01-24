<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class activitiesController extends Controller
{
    public function Index(){
        return view('admin/activities/activities');
    }
}
