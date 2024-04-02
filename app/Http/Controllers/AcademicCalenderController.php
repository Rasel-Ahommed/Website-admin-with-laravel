<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\AcademicCalender;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class AcademicCalenderController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $data = AcademicCalender::first();
        return view('admin/page/academic/academicCalender', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $data = AcademicCalender::FindOrFail($id);

        if($request->hasFile('image')){
            $path = $this->uploadImage($request, 'image', 'calender');
            $relativePath = str_replace(public_path(), '', $path);

            // delete old image 
            if ($data->img) {
               unlink($data->img);
            }

            $data->img = $relativePath ;
        }
       
        $data->save();

        // save update record 
        $activites['name'] = 'Academic section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return redirect()->route('academiccalender')->with('success','The member has been successfully changed');
    }
}
