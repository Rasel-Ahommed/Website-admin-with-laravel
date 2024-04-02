<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class SiteSettingController extends Controller
{
    use ImageUploadTrait;
    public function index(){
        $data = SiteSetting::first();
        return view('admin/siteSetting',compact('data'));
    }

    // update
    public function update(Request $request, $id){
        $request->validate([
            'siteLogo' => "mimes:jpg,jpeg,png,webp",
            'bannerImg' => "mimes:jpg,jpeg,png,webp",
            'faviconLogo' => "mimes:jpg,jpeg,png,webp",
            'address' => 'required',
            'phone' => 'required',
            'email' => "email|required",
        ]);

        $data = SiteSetting::FindOrFail($id);

        $this->handelImgUpload($request, 'siteLogo', 'site_logo', $data);
        $this->handelImgUpload($request, 'bannerImg', 'manu_banner', $data);
        $this->handelImgUpload($request, 'faviconLogo', 'favicon', $data);

        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->facebook = $request->fbLink;
        $data->twitter = $request->twLink;
        $data->linkedIn = $request->linkedLink;
        $data->instagram = $request->instaLink;
        $data->youtube = $request->youtubeLink;

        $data->save();

        // save update record 
        $activites['name'] = 'Site Setting section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        

        return back()->with('success', 'The site setting has been successfully changed');
    }

    // image upload function 
    private function handelImgUpload(Request $request,$fileKey,$field,$data){
        if($request->hasFile($fileKey)){

            $path = $this->uploadImage($request, $fileKey, 'siteImg');
            $relativePath = str_replace(public_path(), '', $path);

           
            $data->{$field} = $relativePath ;
        }
    }
}
