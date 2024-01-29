<?php

namespace App\Http\Controllers\adminController\administration;

use App\Models\Chancellor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class chancellorController extends Controller
{
    public function Index(){
        $data = Chancellor::first();
        return view('admin/page/administration/chancellor',compact('data'));
    }

    // update chancellor 
    public function Update(Request $request,$id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'aboutChancellor' => 'required',
            // 'webLink' => 'url ',
            // 'fbLink' => 'url ',
            // 'twLink' => 'url',
            // 'linkedLink' => 'url',
            'paragraph' => 'required',
        ]);
        $id = decrypt($id);
        $data = Chancellor::FindOrFail($id);

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
            if ($data->chan_img) {
                Storage::delete('public/chancellorImg/'. $data->chan_img);
            
            }

            $data->chan_img = $fileName ;
        }
        $data->chan_name = $request-> name;
        $data->chan_about = $request-> aboutChancellor;
        $data->chan_web = $request-> webLink;
        $data->chan_fb = $request-> fbLink;
        $data->chan_tw = $request-> twLink;
        $data->chan_link = $request-> linkedLink;
        $data->chan_welcome = $request-> paragraph;

        $data->save();
        return redirect()->back()->with('success','The Chancellor info has been successfuly Changed');
    }
}
