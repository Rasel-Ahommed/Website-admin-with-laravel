<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class TenderController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = Tender::paginate(10);
        return view('admin/page/quick_links/tender',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'headline' => 'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'file' => 'required|mimes:pdf'
        ]);
        
        $path = $this->uploadImage($request, 'file', 'tender');
        $relativePath = str_replace(public_path(), '', $path);

       //insert data into database
       $data['file'] = $relativePath;
       $data['headline'] = $request->headline;
       $data['startDate'] = $request->start_date;
       $data['endDate'] = $request->end_date;

       Tender::create($data);
       return redirect()->back()->with('success','The institute has been successfully added');
    }

    public function edit($id){
        $data = Tender::FindOrFail($id);
        return view('admin/page/quick_links/editTender',compact('data'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'headline' => 'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'file' => 'mimes:pdf'
        ]);

        $data = Tender::FindOrFail($id);
        

        //update new image and delete old image from storage
        if($request->hasFile('file')){
            $path = $this->uploadImage($request, 'file', 'tender');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->file) {
                unlink($data->file);
            }

            $data->file = $relativePath ;
        }
        
        // update another data 
        $data->headline = $request->headline;
        $data->startDate = $request->start_date;
        $data->endDate = $request->end_date;
        $data->save();

        // save update record 
        $activites['name'] = 'Tender section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('admin.tender')->with('success','Changes have been successfully saved');
    }

    public function destroy($id){
        $data =Tender::FindOrFail($id);
        
        //delete image from storage
        unlink($data->file);
        $data->delete();

        return redirect()->back()->with('delete','The Tender has been successfully deleted');
    }
}
