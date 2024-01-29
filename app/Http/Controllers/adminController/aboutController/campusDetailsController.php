<?php

namespace App\Http\Controllers\adminController\aboutController;

use Illuminate\Http\Request;
use App\Models\CampusDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class campusDetailsController extends Controller
{
    public function Index(){
        $data = CampusDetails::all();
        return view('admin/page/about/campus_details',compact('data'));
    }

    // update campus details
    public function Update(Request $request,$id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'title' => 'required',
            'paragraph' => 'required',
            'map_link' => 'required',
        ]);

        $id = decrypt($id);
        $data = CampusDetails::FindOrFail($id);

        // check image set or not 
        if($request->hasFile('image')){
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();

            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/aboutImages';
            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->cam_img) {
                Storage::delete('public/aboutImages/' . $data->cam_img);
            }

            $data->cam_img = $fileName ;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->cam_title = $request->title;
        $data->cam_text =$request->paragraph ;
        $data->cam_map = $request->map_link;

        $data->save();
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }
}