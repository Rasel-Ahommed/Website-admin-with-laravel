<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\vcOfficeMember;
use App\Models\viceChancellor;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class ViceChancellorController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $data = viceChancellor::first();
        $members = vcOfficeMember::paginate(10);
        if($data){
            return view('admin/page/administration/viceChancellor',compact('data','members'));
        }
        else{
           return abort(404);
        }
        
    }

    
    // update chancellor 
    public function update(Request $request,$id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'Degree' => 'required',
            'address' => 'required',
            'emali' => 'required',
            'phone' => 'required',
            'aboutChancellor' => 'required',
            'message' => 'required',
        ]);
        $data = viceChancellor::FindOrFail($id);
        
        if(!$data){
            abort(404,'Institute not Found');
        }

        //update new image and delete old image from storage
        if($request->hasFile('image')){
            $path = $this->uploadImage($request, 'image', 'home_banner');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->img) {
                unlink($data->img);
            }
            
            $data->img = $relativePath ;
        }
        $data->name = $request-> name;
        $data->degree = $request-> Degree;
        $data->address = $request-> address;
        $data->email = $request-> emali;
        $data->phone = $request-> phone;
        $data->webLink = $request-> webLink;
        $data->Twitter = $request->twLink;
        $data->facebook = $request->fbLink;
        $data->linkedIn = $request-> linkedLink;
        $data->about = $request-> aboutChancellor;
        $data->message = $request-> message;

        $data->save();

        // save update record 
        $activites['name'] = 'Vice Chancellor section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return redirect()->back()->with('success','The Vice Chancellor info has been successfuly Changed');
    }
}
