<?php

namespace App\Http\Controllers\adminController\administration;

use App\Models\Chancellor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class chancellorController extends Controller
{
    use ImageUploadTrait;
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
            $path = $this->uploadImage($request, 'image', 'home_banner');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->chan_img) {
               unlink($data->chan_img);
            }

            $data->chan_img = $relativePath ;
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
