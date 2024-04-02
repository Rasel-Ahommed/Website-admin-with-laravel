<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\AcademicCouncil;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class AcademicCouncilController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = AcademicCouncil::paginate(10);
        return view('admin/page/administration/academicCouncil', compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'required|mimes:png,jpg,jpeg,webp'
        ]);
        
        $path = $this->uploadImage($request, 'image', 'academic_council');
        $relativePath = str_replace(public_path(), '', $path);
       
       $data=[
           'img' => $relativePath,
           'name' => $request->name,
           'post' => $request->post,
           'email' => $request->email,
       ];

       AcademicCouncil::create($data);
       return back()->with('success','The member info has been successfuly added');
    }

    public function edit($id){
        $data = AcademicCouncil::FindOrFail($id);

        return view('admin/page/administration/editAcademicCouncil', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'mimes:png,jpg,jpeg,webp'
        ]);

        $data = AcademicCouncil::FindOrFail($id);

        if($request->hasFile('image')){
           
            $path = $this->uploadImage($request, 'image', 'academic_council');
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
        $activites['name'] = 'Academic councile section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('academiccouncil')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $data= AcademicCouncil::FindOrFail($id);
        unlink($data->img);
        $data->delete();
        return back()->with('success','The member has been successfully deleted');
    }
}
