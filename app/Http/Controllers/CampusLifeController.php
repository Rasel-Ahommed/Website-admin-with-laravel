<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\CampusLife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;
class CampusLifeController extends Controller
{
    use ImageUploadTrait;
    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,jpg,webp,png',
        ]);

        $data = CampusLife::FindOrFail($id);
        //update new image and delete old image from storage

        // get file extension 
        $path = $this->uploadImage($request, 'file', 'home_banner');
        $relativePath = str_replace(public_path(), '', $path);
        

        // delete old image 
        if ($data->img && file_exists($data->img)) {
            unlink($data->img);
        }

        $data->img =$relativePath;
        $data->save();

        // save update record 
        $activites['name'] = 'Campus Life section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        return back()->with('success', 'The campus life image has been successfully changed');
    }
}
