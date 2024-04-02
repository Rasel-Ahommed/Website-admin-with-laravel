<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\EventGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class EventGalleryController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = EventGallery::paginate(10);
        return view('admin/page/eventAndGallery',compact('datas'));
    }

    // store event and gallery 
    public function store(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,jpeg,png,webp',
            'title'=>'required'
        ]);

        $path = $this->uploadImage($request, 'image', 'event_gallery');
        $relativePath = str_replace(public_path(), '', $path);

        $data['img'] = $relativePath;
        $data['title'] = $request->title;

        EventGallery::create($data);

        return back()->with('success', 'The event and gallery has been successfully added');
    }

    // edit eventand EventGallery
    public function edit($id){
        $data = EventGallery::FindOrFail($id);
        return view('admin/page/editEventAndGallery',compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image'=>'mimes:jpg,jpeg,png,webp',
            'title'=>'required'
        ]);
        $data = EventGallery::FindOrFail($id);

        if($request->hasfile('image')){
            
            $path = $this->uploadImage($request, 'image', 'event_gallery');
            $relativePath = str_replace(public_path(), '', $path);

            if($data->img){
                unlink($data->img);
            }
            $data->img =$relativePath;
        }
        $data->title = $request->title;

        $data->save();

        // save update record 
        $activites['name'] = 'Event & Gallery section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return redirect()->route('event.gallery')->with('success','The event and gallery has been successfully changed');
    }

    public function destroy($id){
        $data = EventGallery::FindOrFail($id);

        $data->delete();
        unlink($data->img);

        return back()->with('success', 'The event and gallery has been successfull deleted');
    }
}
