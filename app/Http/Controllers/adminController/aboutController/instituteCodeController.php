<?php

namespace App\Http\Controllers\adminController\aboutController;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\InstituteCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class instituteCodeController extends Controller
{
    use ImageUploadTrait;
    public function Index(){
        return view('admin/page/about/institute_code');
    }

// store institute code 
    public function Store(Request $request){
       $request->validate([
        'institiuteLoge' => 'required|mimes:png,jpg,jpeg,webp',
        'instituteName' => 'required',
        'instituteCode' => 'required',
        'webLink' => 'nullable ',
        'instituteType' => 'required',
       ]);

        $path = $this->uploadImage($request, 'institiuteLoge', 'instituteCode');
        $relativePath = str_replace(public_path(), '', $path);

        //insert data into database
        $data['ins_logo'] = $relativePath;
        $data['ins_name'] = $request->instituteName;
        $data['ins_code'] = $request->instituteCode;
        $data['Institute_type_id'] = $request->instituteType;
        $data['web_link'] = $request->webLink;

        InstituteCode::create($data);
        return redirect()->back()->with('success','The institute has been successfully added');
    }

    //edit institute code
    public function Edit($id){

        $id = decrypt($id);
        $data = InstituteCode::FindOrFail($id);
        return view('admin/page/about/institute_code_edit',compact('data'));
    }

    // update institute code 
    public function Update(Request $request, $id){
        
        $request->validate([
            'institiuteLoge' => 'mimes:png,jpg,jpeg,webp',
            'instituteName' => 'required',
            'instituteCode' => 'required',
            'webLink' => 'nullable ',
            'instituteType' => 'required',
        ]);
        $id = decrypt($id);

        // recheck id 
        $data = InstituteCode::FindOrFail($id);
        if(!$data){
            abort(404,'Institute not Found');
        }

        //update new image and delete old image from storage
        if($request->hasFile('institiuteLoge')){
            $path = $this->uploadImage($request, 'institiuteLoge', 'instituteCode');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->ins_logo) {
                unlink($data->ins_logo);
            }

            $data->ins_logo =  $relativePath ;
        }
        
        // update another data 
        $data->ins_name = $request->instituteName;
        $data->ins_code = $request->instituteCode;
        $data->Institute_type_id = $request->instituteType;
        $data->web_link = $request->webLink;
        $data->save();

        // save update record 
        $activites['name'] = 'Institute code section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);

        return redirect()->route('institute-code')->with('success','Changes have been successfully saved');
    }
    
    //delete institute 
    public function Destroy($id){
        $id = decrypt($id);
        $data = InstituteCode::FindOrFail($id);
        
        //delete image from storage
        Storage::delete('public/instituteCode/' . $data->ins_logo);
        $data->delete();

        return redirect()->back()->with('delete','The institute has been successfully deleted');
    }
}
