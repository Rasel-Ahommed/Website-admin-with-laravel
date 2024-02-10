<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicCouncil;
use Illuminate\Support\Facades\Storage;

class AcademicCouncilController extends Controller
{
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
        
        // get file extension 
        $extension = $request->file('image')->getClientOriginalExtension();

        //create uniq image name
        $fileName = uniqid(). '.'.$extension;
        //storage path
        $path = 'public/academic';
        //store new image
        $request->file('image')->storeAs($path,$fileName);
       
       $data=[
           'img' => $fileName,
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
            
            // get file extension 
            $extension = $request->file('image')->getClientOriginalExtension();
            
            //create uniq image name
            $fileName = time().'-'. uniqid(). '.'.$extension;

            //storage path
            $path = 'public/academic';
            //store new image
            $request->file('image')->storeAs($path,$fileName);

            // delete old image 
            if ($data->img) {
                Storage::delete('public/academic/' . $data->img);
            }

            $data->img = $fileName ;
        }
        $data->name = $request->name;
        $data->post = $request->post;
        $data->email = $request->email;

        $data->save();

        return redirect('/academiccouncil')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $data= AcademicCouncil::FindOrFail($id);
        $data->delete();
        return back()->with('success','The member has been successfully deleted');
    }
}
