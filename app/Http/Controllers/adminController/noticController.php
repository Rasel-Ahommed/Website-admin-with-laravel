<?php

namespace App\Http\Controllers\adminController;

use App\Models\Notice;
use App\Models\Activities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;


class noticController extends Controller
{
    use ImageUploadTrait;
    // view notice page 
    public function Index(){
        return view('admin/page/notice');
    }

    //store notice
    public function Store(Request $request){
       $request->validate([
            'selectOption' => 'required',
            // 'notice_file' => 'required|mimes:pdf,jpeg,png,jpg',
            'notice_text' => 'required'
       ]);

        $path = $this->uploadImage($request, 'notice_file', 'notice');
        $relativePath = str_replace(public_path(), '', $path);
    
       
    //    remove html tag form text 
       $notice_text = strip_tags($request->notice_text);
    //insert data into database
       $data = [
        'notice_text' => $notice_text,
        'notice_file' => $relativePath,
        'is_academic' => $request->selectOption,
        ];
    
        Notice::create($data);
        return redirect()->back()->with('success',"New notice has been successfully added");
    }

    // edit notice 
    public function Edit($id) {
        $decryptedId = decrypt($id);
        $data = Notice::find($decryptedId);
    
        return view('admin/page/editNotice',compact('data'));   
    }

    // update notice 
    public function Update(Request $request, $id)
    {
        // Validation rules
        $request->validate([
            'selectOption' => 'required',
            // 'notice_file' => 'nullable|mimes:pdf,jpeg,png,jpg',
            'notice_text' => 'required'
        ]);
       $id= decrypt($id);
        // Check if the notice record exists
        $data = Notice::find($id);
    
        if (!$data) {
            // Handle the case where the notice record does not exist
            abort(404, 'Notice not found');
        }
    
        // Update the notice_file if a new file is provided
        if ($request->hasFile('notice_file')) {

            $path = $this->uploadImage($request, 'notice_file', 'notice');
            $relativePath = str_replace(public_path(), '', $path);
    
            // Delete the old file if it exists
            if ($data->notice_file) {
               unlink($data->notice_file);
            }
    
            $data->notice_file = $relativePath;
        }
    
         //    remove html tag form text 
        $notice_text = strip_tags($request->notice_text);

        // Update other fields
        $data->notice_text = $notice_text;
        $data->is_academic = $request->selectOption;
    
        // Save the changes to the database
        $data->save();

        // save update record 
        $activites['name'] = 'Notice section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return redirect()->route('notice')->with('success', "Changes have been successfully saved");


        // Redirect or perform any other necessary action after successful update
    }

    // delete notice 
    public function Destroy($id){
        $id = decrypt($id);
        
        // Find the notice record
        $data = Notice::find($id);

        // Check if the notice record exists
        if ($data) {
            // Delete the associated file from storage
           unlink($data->notice_file);

            // Delete the notice record from the database
            $data->delete();

            // Redirect back after successful deletion
            return redirect()->back()->with('delete', 'The notice has been successfully deleted');
        } 
    }
    
}
