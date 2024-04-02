<?php

namespace App\Http\Controllers;

use App\Models\Circuler;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class CirculerController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = Circuler::paginate(10);
        return view('admin/page/quick_links/circuler',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'headline' => 'required',
            'post'=>'required',
            'end_date'=>'required',
            'file' => 'required|mimes:jpg,jpeg,webp,png,pdf',
            'form' => 'required|mimes:pdf'
        ]);
        $path1 = $this->uploadImage($request, 'file', 'circuler');
        $relativePath1 = str_replace(public_path(), '', $path1);

        $path2 = $this->uploadImage($request, 'form', 'circuler');
        $relativePath2 = str_replace(public_path(), '', $path2);

       //insert data into database
       $data['file'] = $relativePath1;
       $data['form'] = $relativePath2;
       $data['headline'] = $request->headline;
       $data['post'] = $request->post;
       $data['endDate'] = $request->end_date;

       Circuler::create($data);
       return redirect()->back()->with('success','The institute has been successfully added');
    }

    public function edit($id){
        $data = Circuler::FindOrFail($id);
        return view('admin/page/quick_links/editCirculer',compact('data'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'headline' => 'required',
            'post'=>'required',
            'end_date'=>'required',
            'file' => 'mimes:jpg,jpeg,webp,png,pdf',
            'form' => 'mimes:pdf'
        ]);

        $data = Circuler::FindOrFail($id);
        

        //update new image and delete old image from storage
        if($request->hasFile('file')){
            $path1 = $this->uploadImage($request, 'file', 'circuler');
            $relativePath1 = str_replace(public_path(), '', $path1);

            // delete old image 
            

            $data->file = $relativePath1 ;
        }


        //update new image and delete old image from storage
        if($request->hasFile('form')){

            $path2 = $this->uploadImage($request, 'form', 'circuler');
            $relativePath2 = str_replace(public_path(), '', $path2);


            $data->form = $relativePath2 ;
        }
        
        // update another data 
        $data->headline = $request->headline;
        $data->post = $request->post;
        $data->endDate = $request->end_date;
        $data->save();

        // save update record 
        $activites['name'] = 'Circuler section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('admin.circuler')->with('success','Changes have been successfully saved');
    }

    public function destroy($id){
        $data =Circuler::FindOrFail($id);
        
        //delete image from storage
        Storage::delete('public/circuler/' . $data->file);
        Storage::delete('public/circuler/' . $data->form);
        $data->delete();

        return redirect()->back()->with('delete','The Circuler has been successfully deleted');
    }
}
