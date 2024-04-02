<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Activities;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required'
        ]);
        $data = AboutUs::FindOrFail($id);
        $data->title = $request->title;
        $data->text = $request->paragraph;

        // save update record 
        $activites['name'] = 'About section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        $data->save();
        return back()->with('success','The banner has been successfully updated');
    }
}
