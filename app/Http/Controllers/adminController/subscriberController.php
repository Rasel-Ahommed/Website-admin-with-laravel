<?php

namespace App\Http\Controllers\adminController;

use App\Models\Suscriber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subscriberController extends Controller
{
    public function Index(){
        
        $datas = Suscriber::latest()->paginate(10);
        return view('admin/subscriber/subscriber',compact('datas'));
    }
}
