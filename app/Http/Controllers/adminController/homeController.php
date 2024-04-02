<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CampusLife;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function Index(){
        
        $datas = HomeBanner::all();
        $aboutUs = AboutUs::first();
        $campusLife = CampusLife::first();
        return view('admin/page/home',compact('datas','aboutUs','campusLife'));
    }
}
