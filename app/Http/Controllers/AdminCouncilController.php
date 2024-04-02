<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\AdminCouncil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class AdminCouncilController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = AdminCouncil::all();
        return view('admin/page/administration/adminCouncil',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'required|mimes:png,jpg,jpeg,webp'
        ]);
        
        $path = $this->uploadImage($request, 'image', 'admin_council');
        $relativePath = str_replace(public_path(), '', $path); 
       
       $data=[
           'img' => $relativePath,
           'name' => $request->name,
           'post' => $request->post,
           'email' => $request->email,
       ];

       AdminCouncil::create($data);
       return back()->with('success','The member info has been successfuly added');
    }

    public function edit($id){
        $data = AdminCouncil::FindOrFail($id);
        return view('admin/page/administration/editAdminCouncil', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'mimes:png,jpg,jpeg,webp'
        ]);

        $data = AdminCouncil::FindOrFail($id);

        if($request->hasFile('image')){
            
            $path = $this->uploadImage($request, 'image', 'home_banner');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->img) {
                unlink($data->img);
            }

            $data->img = $relativePath ;
        }
        $data->name = $request->name;
        $data->post = $request->post;
        $data->email = $request->email;

        $data->save();

        // save update record 
        $activites['name'] = 'Admin council section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('admincouncil')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $data= AdminCouncil::FindOrFail($id);
        unlink($data->img);
        $data->delete();
        return back()->with('success','The member has been successfully deleted');
    }
}
