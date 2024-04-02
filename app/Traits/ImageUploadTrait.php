<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageUploadTrait
{
    public function uploadImage(Request $request, $inputName, $folder)
    {
        
        // Validate the uploaded file
        // $request->validate([
        //     $inputName => 'image|mimes:jpeg,png,jpg,gif', 
        // ]);
        
        // Check if the request has the file
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            
            // Generate a unique file name
            $fileName = time() . '_' . 'user' . '.' . $file->getClientOriginalExtension();

            // Move the file to the custom folder
            $path = $file->move("sitedata/{$folder}", $fileName);
            
            return $path;
        }

        return null;
    }
}
