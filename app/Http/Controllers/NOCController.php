<?php

namespace App\Http\Controllers;

use App\Models\NOC;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class NOCController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = NOC::paginate(10);
        return view('admin/page/quick_links/noc',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'headline' => 'required',
            'date'=>'required',
            'file' => 'required|mimes:pdf'
        ]);
        $path = $this->uploadImage($request, 'file', 'Noc');
        $relativePath = str_replace(public_path(), '', $path);

       //insert data into database
       $data['pdf'] = $relativePath;
       $data['headline'] = $request->headline;
       $data['date'] = $request->date;

       NOC::create($data);
       return redirect()->back()->with('success','The institute has been successfully added');
    }

    public function edit($id){
        $data = NOC::FindOrFail($id);
        return view('admin/page/quick_links/editNoc',compact('data'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'headline' => 'required',
            'date'=>'required',
            'file' => 'mimes:pdf'
        ]);

        $data = NOC::FindOrFail($id);
        

        //update new image and delete old image from storage
        if($request->hasFile('file')){
            $path = $this->uploadImage($request, 'file', 'Noc');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->pdf) {
               unlink($data->pdf);
            }

            $data->pdf = $relativePath ;
        }
        
        // update another data 
        $data->headline = $request->headline;
        $data->date = $request->date;
        $data->save();

        // save update record 
        $activites['name'] = 'NOC section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('admin.noc')->with('success','Changes have been successfully saved');
    }

    public function destroy($id){
        $data = NOC::FindOrFail($id);
        
        //delete image from storage
        unlink($data->pdf);
        $data->delete();

        return redirect()->back()->with('delete','The NOC has been successfully deleted');
    }

}
