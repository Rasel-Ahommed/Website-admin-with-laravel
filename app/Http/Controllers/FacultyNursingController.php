<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\FacultyNursing;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class FacultyNursingController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $data = FacultyNursing::first();
        return view('admin/page/administration/facultyOfNursing', compact('data'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'post' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        
        $data = FacultyNursing::FindOrFail($id);

        // check image set or not 
        if($request->hasFile('image')){
            $path = $this->uploadImage($request, 'image', 'all_facultys');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->img) {
               unlink($data->img);
            }

            $data->img = $relativePath ;
        }

        $data->name = $request->name;
        $data->post =$request->post ;
        $data->phone = $request->phone;
        $data->email = $request->email;

        $data->save();

        // save update record 
        $activites['name'] = 'Faculty Of Nursing section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }
}
