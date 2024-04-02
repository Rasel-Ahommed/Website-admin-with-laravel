<?php

namespace App\Http\Controllers\adminController\aboutController;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class missionAndVisionController extends Controller
{
    use ImageUploadTrait;
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
            $path = $this->uploadImage($request, 'image', 'mission_vision');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->mv_img) {
                unlink($data->mv_img);
            }

            $data->mv_img = $relativePath ;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->mv_title =$request->title ;
        $data->mv_text = $request->text;

        $data->save();

        // save update record 
        $activites['name'] = 'Mission and vision section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
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
            $path = $this->uploadImage($request, 'image', 'mission_vision');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->mv_img) {
                unlink($data->mv_img);
            }

            $data->mv_img = $relativePath ;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->mv_title =$request->title ;
        $data->mv_text = $request->text;

        $data->save();
        return redirect()->back()->with('success',"The campus details has been successfully changed");
    }
}
