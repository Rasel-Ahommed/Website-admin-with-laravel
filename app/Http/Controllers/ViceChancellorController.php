<?php

namespace App\Http\Controllers;

use App\Models\vcOfficeMember;
use Illuminate\Http\Request;
use App\Models\viceChancellor;
use Illuminate\Support\Facades\Storage;

class ViceChancellorController extends Controller
{
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
        ]);
        $data = viceChancellor::FindOrFail($id);
        
        if(!$data){
            abort(404,'Institute not Found');
        }

        //update new image and delete old image from storage
        if($request->hasFile('image')){
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();

            //create uniq image name
            $fileName = uniqid(). '.'.$extension;
            
            //storage path
            $path = 'public/chancellorImg';

            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->img) {
                Storage::delete('public/chancellorImg/'.$data->img);
            }
            
            $data->img = $fileName ;
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

        $data->save();
        return redirect()->back()->with('success','The Vice Chancellor info has been successfuly Changed');
    }
}
