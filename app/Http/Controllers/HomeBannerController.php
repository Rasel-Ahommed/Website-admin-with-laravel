<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class HomeBannerController extends Controller
{
    use ImageUploadTrait;
    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,webp',
            'welcome_text' => 'required',
            'title' => 'required',
            'text' => 'required'
        ]);


    $path = $this->uploadImage($request, 'image', 'home_banner');
    $relativePath = str_replace(public_path(), '', $path);

       //insert data into database
       $data['img'] = $relativePath;
       $data['welcome_title'] = $request->welcome_text;
       $data['title'] = $request->title;
       $data['text'] = $request->text;

       HomeBanner::create($data);
       return redirect()->back()->with('success','The banner has been successfully added');
    }

    public function edit($id){
        $data = HomeBanner::FindOrFail($id);
        return view('admin/page/editHomeBanner',compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,webp',
            'welcome_text' => 'required',
            'title' => 'required',
            'text' => 'required'
        ]);

        $data = HomeBanner::FindOrFail($id);

        //update new image and delete old image from storage
        if($request->hasFile('image')){
           
            $path = $this->uploadImage($request, 'image', 'home_banner');
            $relativePath = str_replace(public_path(), '', $path);
            // delete old image 
            if ($data->img) {
                // $imagePath = public_path($data->img);
                unlink($data->img);
            }

            $data->img = $relativePath ;
        }
        
        // update another data 
        $data->welcome_title = $request->welcome_text;
        $data->title = $request->title;
        $data->text = $request->text;
        $data->save();

        // save update record 
        $activites['name'] = 'Home banner section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);

        return redirect()->route('adminHome')->with('success', 'The banner has been successfully changed');
    }

    public function destroy($id){
        $data = HomeBanner::FindOrFail($id);
        
        unlink($data->img);
        $data->delete();

        return back()->with('success','The banner has been successfully deleted');
    }
}
