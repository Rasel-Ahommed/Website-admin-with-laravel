<?php

namespace App\Http\Controllers\adminController\aboutController;

use Illuminate\Http\Request;
use App\Models\InstituteCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class instituteCodeController extends Controller
{
    public function Index(){
        return view('admin/page/about/institute_code');
    }

// store institute code 
    public function Store(Request $request){
       $request->validate([
        'institiuteLoge' => 'required|mimes:png,jpg,jpeg,webp',
        'instituteName' => 'required',
        'instituteCode' => 'required',
        'webLink' => 'url|nullable ',
       ]);

        // get image orginal image extension 
       $extension = $request->institiuteLoge->getClientOriginalExtension();

        //make uniq file name 
       $fileName = time() . '_' . uniqid() . '.' . $extension;

        //image save path 
       $path = 'public/instituteCode';

        //save image into the path
       $request->institiuteLoge->storeAs($path , $fileName);

        //insert data into database
        $data['ins_logo'] = $fileName;
        $data['ins_name'] = $request->instituteName;
        $data['ins_code'] = $request->instituteCode;
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
            'webLink' => 'url|nullable ',
        ]);
        $id = decrypt($id);

        // recheck id 
        $data = InstituteCode::FindOrFail($id);
        if(!$data){
            abort(404,'Institute not Found');
        }

        //update new image and delete old image from storage
        if($request->hasFile('institiuteLoge')){
            // get file extension 
            $extension = $request->file('institiuteLoge')->getClientOriginalExtension();

            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/instituteCode';
            //store new image
            $request->file('institiuteLoge')->storeAs($path,$fileName);

            // delete old image 
            if ($data->ins_logo) {
                Storage::delete('public/instituteCode/' . $data->ins_logo);
            }

            $data->ins_logo = $fileName ;
        }
        
        // update another data 
        $data->ins_name = $request->instituteName;
        $data->ins_code = $request->instituteCode;
        $data->web_link = $request->webLink;

        $data->save();

        return redirect('/institute/code')->with('success','Changes have been successfully saved');
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
