<?php

namespace App\Http\Controllers\adminController\aboutController;

use App\Models\ActDocs;
use App\Models\ActText;
use App\Models\Activities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class shmuActController extends Controller
{
    use ImageUploadTrait;
    public function Index(){
        $data = ActText::first();
        $acts = ActDocs::latest()->paginate(10);
        return view('admin/page/about/act',compact('data','acts'));
    }

    // update Act text 
    public function UpdateActText(Request $request, $id){
        $request->validate([
            'heading' => 'required',
            'title' => 'required',
            'text' => 'required',
        ]);

        $id = decrypt($id);
        $data = ActText::FindOrFail($id);

        $data->act_heading = $request->heading;
        $data->act_title = $request->title;
        $data->act_text = $request->text;

        // save update record 
        $activites['name'] = 'Shmu Act section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);

        $data->save();
        return redirect()->back()->with('success','The Act Text has been successfully changed');
    }

    public function StoreAct(Request $request){
        $request->validate([
            'actDoc'=> 'required|mimes:pdf',
            'actTitle' => 'required'
        ]);

        // $extension = $request->file('actDoc')->getClientOriginalExtension();
        // $fileName = 'Shmu_Act'.uniqid(). '.' . $extension;

        // $path = 'public/shmuAct';

        // $request->file('actDoc')->storeAs($path,$fileName);
        $path = $this->uploadImage($request, 'actDoc', 'act');
        $relativePath = str_replace(public_path(), '', $path);
       

        $data['actDoc_heading'] = $request->actTitle;
        $data['actDoc_file'] = $relativePath;

        ActDocs::create($data);
        return redirect()->back()->with('success','The act has been successfully added');
    }

    // edit act doc
    public function Edit($id){
        $id = decrypt($id);
        $data = ActDocs::FindOrFail($id);
        return view('admin/page/about/editAct',compact('data'));
    }

    // update act doc 
    public function Update(Request $request,$id){
        $request->validate([
            'actDoc'=> 'mimes:pdf',
            'actTitle' => 'required'
        ]);
        $id = decrypt($id);
        $data = ActDocs::FindOrFail($id);

        if($request->hasFile('actDoc')){
            $path = $this->uploadImage($request, 'actDoc', 'act');
            $relativePath = str_replace(public_path(), '', $path);

            if($data->actDoc_file){
                unlink($data->actDoc_file);
            }

            $data->actDoc_file = $relativePath; 
        }
        $data->actDoc_heading =  $request->actTitle;
        $data->save();
        return redirect()->route('admin-shmu-Act')->with('success','The act has been successfuly changed');
        
    }

    // delete act doc 
    public function Destroy($id){
        $id = decrypt($id);
        $data = ActDocs::FindOrFail($id);
        
        if($data->actDoc_file){
            unlink($data->actDoc_file);
        }

        $data->delete();
        return redirect()->back()->with('delete','The act has been successfuly delete');
    }

}
