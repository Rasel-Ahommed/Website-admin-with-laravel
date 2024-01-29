<?php

namespace App\Http\Controllers\adminController\aboutController;

use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class missionAndVisionController extends Controller
{
    public function Index(){
        $data = MissionVision::get();
        return view('admin/page/about/missionAndvision',compact('data'));
    }

    // update mission
    public function UpdateMission(Request $request, $id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'title' => 'required',
            'text' => 'required',
        ]);

        $id = decrypt($id);
        $data = MissionVision::FindOrFail($id);

        // check image set or not 
        if($request->hasFile('image')){
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();

            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/mission_visionImg';
            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->mv_img) {
                Storage::delete('public/mission_visionImg/' . $data->mv_img);
            }

            $data->mv_img = $fileName ;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->mv_title =$request->title ;
        $data->mv_text = $request->text;

        $data->save();
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }


    // update vision 
    public function UpdateVision(Request $request, $id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'title' => 'required',
            'text' => 'required',
        ]);

        $id = decrypt($id);
        $data = MissionVision::FindOrFail($id);

        // check image set or not 
        if($request->hasFile('image')){
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();

            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/mission_visionImg';
            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->mv_img) {
                Storage::delete('public/mission_visionImg/' . $data->mv_img);
            }

            $data->mv_img = $fileName ;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->mv_title =$request->title ;
        $data->mv_text = $request->text;

        $data->save();
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }
}
