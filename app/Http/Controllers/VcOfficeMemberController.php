<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vcOfficeMember;
use Illuminate\Support\Facades\Storage;

class VcOfficeMemberController extends Controller
{
    public function store( Request $request){
        $request->validate([
            'mem_image' => 'required|mimes:png,jpg,jpeg,webp',
            'mem_name' => 'required',
            'mem_post' => 'required',
        ]);

         // get file extension 
         $extension = $request->file('mem_image')->getClientOriginalExtension();

         //create uniq image name
         $fileName = uniqid(). '.'.$extension;

         //storage path
         $path = 'public/vc-office-member';
         //store new image
         $request->file('mem_image')->storeAs($path,$fileName);
        
        $data=[
            'img' => $fileName,
            'name' => $request->mem_name,
            'post' => $request->mem_post,
            'facebook' => $request->mem_facebook,
            'twitter' => $request->mem_twitter,
            'linkedin' => $request->mem_twitter
        ];

        vcOfficeMember::create($data);
        return back()->with('success','The member info has been successfuly added');
    }

    public function edit($id){
        $id = decrypt($id);
        $data = vcOfficeMember::FindOrFail($id);

        return view('admin/page/administration/editVcOfficeMember',compact('data'));
    }

    public function update(Request $request,$id ){

        $request->validate([
            'mem_image' => 'mimes:png,jpg,jpeg,webp',
            'mem_name' => 'required',
            'mem_post' => 'required',
        ]);

        $id = decrypt($id);
        $data = vcOfficeMember::FindOrFail($id);
        
        if($request->hasFile('mem_image')){
            
            // get file extension 
            $extension = $request->file('mem_image')->getClientOriginalExtension();
            
            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/vc-office-member';
            //store new image
            $request->file('mem_image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->img) {
                Storage::delete('public/vc-office-member/' . $data->img);
            }

            $data->img = $fileName ;
        }
        $data->name = $request->mem_name;
        $data->post = $request->mem_post;
        $data->facebook = $request->mem_facebook;
        $data->twitter = $request->mem_twitter;
        $data->linkedin = $request->mem_linkedIn;

        $data->save();

        return redirect('/Vice-Chancellor')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $id = decrypt($id);
        
        $data = vcOfficeMember::FindOrFail($id);

        //delete image from storage
        Storage::delete('public/vc-office-member/' . $data->img);
        $data->delete();

        return redirect()->back()->with('delete','The member has been successfully deleted');
        
    }
}
