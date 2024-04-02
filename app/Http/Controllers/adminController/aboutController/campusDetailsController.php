<?php

namespace App\Http\Controllers\adminController\aboutController;

use App\Models\Activities;
use Illuminate\Http\Request;
use App\Models\CampusDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class campusDetailsController extends Controller
{
    use ImageUploadTrait;
    public function Index()
    {
        $data = CampusDetails::all();
        return view('admin/page/about/campus_details', compact('data'));
    }

    // update campus details
    public function Update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp',
            'title' => 'required',
            'paragraph' => 'required',
            'map_link' => 'required',
        ]);

        $id = decrypt($id);
        $data = CampusDetails::FindOrFail($id);

        // check image set or not 
        if ($request->hasFile('image')) {
            $path = $this->uploadImage($request, 'image', 'campus_deatile');
            $relativePath = str_replace(public_path(), '', $path);
            // delete old image 
            if ($data->cam_img) {
                unlink($data->cam_img);
            }

            $data->cam_img = $relativePath;
        }
        // remove html tag from paragraph 
        // $paragraph = strip_tags($request->paragraph);

        $data->cam_title = $request->title;
        $data->cam_text = $request->paragraph;
        $data->cam_map = $request->map_link;

        $data->save();

        // save update record 
        $activites['name'] = 'Campus details section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        return redirect()->back()->with('success', "The campus details has been successfully changed");
    }
}
