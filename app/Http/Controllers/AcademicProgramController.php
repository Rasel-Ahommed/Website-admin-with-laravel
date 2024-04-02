<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\AcademicProgram;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class AcademicProgramController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        $datas = AcademicProgram::all();
        return view('admin/page/academic/academicPrograms',compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp',
            'time' => 'required',
            'name' => 'required'
        ]);

        $path = $this->uploadImage($request, 'image', 'programs');
        $relativePath = str_replace(public_path(), '', $path);
       

        $data = [
            'img' => $relativePath,
            'name' => $request->name,
            'time' => $request->time,
            'faculty1' => $request->faculty1,
            'facultyLink1' => $request->facultyLink1,
            'faculty2' => $request->faculty2,
            'facultyLink2' => $request->facultyLink2,
            'faculty3' => $request->faculty3,
            'facultyLink3' => $request->facultyLink3,
        ];

        AcademicProgram::create($data);
        return back()->with('success', 'The member info has been successfuly added');
    }

    public function edit($id){
        $data = AcademicProgram::FindOrFail($id);
        return view('admin/page/academic/editAcademicPrograms', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'time' => 'required',
            'name' => 'required'
        ]);

        $data = AcademicProgram::FindOrFail($id);

        if($request->hasFile('image')){
            
            $path = $this->uploadImage($request, 'image', 'programs');
            $relativePath = str_replace(public_path(), '', $path);
            

            // delete old image 
            if ($data->img) {
                unlink($data->img);
            }

            $data->img = $relativePath ;
        }
        $data->name = $request->name;
        $data->time = $request->time;
        $data->faculty1 = $request->faculty1;
        $data->facultyLink1 = $request->facultyLink1;
        $data->faculty2 = $request->faculty2;
        $data->facultyLink2 = $request->facultyLink2;
        $data->faculty3 = $request->faculty3;
        $data->facultyLink3 = $request->facultyLink3;
        $data->save();

        // save update record 
        $activites['name'] = 'Academic program section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('academic.program')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $data= AcademicProgram::FindOrFail($id);
        unlink($data->img);
        $data->delete();
        return back()->with('success','The member has been successfully deleted');
    }
}
