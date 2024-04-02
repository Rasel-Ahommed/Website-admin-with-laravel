<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class FormsController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = Forms::paginate(10);
        return view('admin/page/quick_links/form',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'headline' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        $path = $this->uploadImage($request, 'file', 'forms');
        $relativePath = str_replace(public_path(), '', $path);

       //insert data into database
       $data['file'] = $relativePath;
       $data['headline'] = $request->headline;

       Forms::create($data);
       return redirect()->back()->with('success','The institute has been successfully added');
    }

    public function edit($id){
        $data = Forms::FindOrFail($id);
        return view('admin/page/quick_links/editform',compact('data'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'headline' => 'required',
            'file' => 'mimes:pdf'
        ]);

        $data = Forms::FindOrFail($id);
        

        //update new image and delete old image from storage
        if($request->hasFile('file')){
            $path = $this->uploadImage($request, 'file', 'forms');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->file) {
               unlink($data->file);
            }

            $data->file = $relativePath ;
        }
        
        // update another data 
        $data->headline = $request->headline;
        $data->save();

        // save update record 
        $activites['name'] = 'Forms section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('admin.forms')->with('success','Changes have been successfully saved');
    }

    public function destroy($id){
        $data =Forms::FindOrFail($id);
        
        //delete image from storage
        // unlink($data->file);
        $data->delete();

        return redirect()->back()->with('delete','The form has been successfully deleted');
    }
}
