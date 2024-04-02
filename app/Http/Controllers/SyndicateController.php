<?php

namespace App\Http\Controllers;

use App\Models\Syndicate;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class SyndicateController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $datas = Syndicate::paginate(10);
        return view('admin/page/administration/universitySyndicate', compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'required|mimes:png,jpg,jpeg,webp'
        ]);
        
        $path = $this->uploadImage($request, 'image', 'univercity_syndicate');
        $relativePath = str_replace(public_path(), '', $path);
       
       $data=[
           'img' => $relativePath,
           'name' => $request->name,
           'post' => $request->post,
           'email' => $request->email,
       ];

       Syndicate::create($data);
       return back()->with('success','The member info has been successfuly added');
    }

    public function edit($id){
        $data = Syndicate::FindOrFail($id);
        return view('admin/page/administration/editUniversitySyndicate', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'post'=> 'required',
            'email'=> 'required|email',
            'image'=> 'mimes:png,jpg,jpeg,webp'
        ]);

        $data = Syndicate::FindOrFail($id);

        if($request->hasFile('image')){
            
            $path = $this->uploadImage($request, 'image', 'univercity_syndicate');
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
        $activites['name'] = 'Syndicate section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return redirect()->route('univercity.syndicate')->with('success','The member has been successfully changed');
    }

    public function destroy($id){
        $data= Syndicate::FindOrFail($id);
        $data->delete();
        return back()->with('success','The member has been successfully deleted');
    }
}
