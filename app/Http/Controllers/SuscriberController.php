<?php

namespace App\Http\Controllers;

use App\Models\Suscriber;
use Illuminate\Http\Request;

class SuscriberController extends Controller
{

    public function store(Request $request){
        $data['email'] = $request->email;

        Suscriber::create($data);
        return back();
    }
}
