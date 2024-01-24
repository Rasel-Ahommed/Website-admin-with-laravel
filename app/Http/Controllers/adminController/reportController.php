<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function Index(){
        return view('admin/report/report');
    }
}
