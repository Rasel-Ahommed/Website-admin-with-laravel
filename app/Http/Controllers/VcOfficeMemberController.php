<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\vcOfficeMember;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class VcOfficeMemberController extends Controller
{
    use ImageUploadTrait;
    public function store( Request $request){
        $request->validate([
            'mem_image' => 'required|mimes:png,jpg,jpeg,webp',
            'mem_name' => 'required',
            'mem_post' => 'required',
        ]);

        $path = $this->uploadImage($request, 'mem_image', 'vc_office');
        $relativePath = str_replace(public_path(), '', $path);
        $data=[
            'img' => $relativePath,
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
            
            $path = $this->uploadImage($request, 'mem_image', 'vc_office');
            $relativePath = str_replace(public_path(), '', $path);
            // delete old image 
            if ($data->img) {
                unlink($data->img);
            }

            $data->img = $relativePath ;
        }
        $data->name = $request->mem_name;
        $data->post = $request->mem_post;
        $data->facebook = $request->mem_facebook;
        $data->twitter = $request->mem_twitter;
        $data->linkedin = $request->mem_linkedIn;

        $data->save();

        // save update record 
        $activites['name'] = 'Vc Office Member section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('Vice-Chancellor')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $id = decrypt($id);
        
        $data = vcOfficeMember::FindOrFail($id);

        //delete image from storage
        unlink($data->img);
        $data->delete();

        return redirect()->back()->with('delete','The member has been successfully deleted');
        
    }
}
