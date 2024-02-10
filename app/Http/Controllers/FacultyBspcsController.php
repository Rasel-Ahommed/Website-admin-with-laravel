<?php

namespace App\Http\Controllers;

use App\Models\FacultyBspcs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacultyBspcsController extends Controller
{
    public function index(){
        $data = FacultyBspcs::first();
        return view('admin/page/administration/facultybspcs', compact('data'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'post' => 'required',
            'phone' => 'required',
        ]);
        
        $data = FacultyBspcs::FindOrFail($id);

        // check image set or not 
        if($request->hasFile('image')){
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();

            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/deanImg';
            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->img) {
                Storage::delete('public/deanImg/' . $data->img);
            }

            $data->img = $fileName ;
        }

        $data->name = $request->name;
        $data->post =$request->post ;
        $data->phone = $request->phone;

        $data->save();
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }
}
