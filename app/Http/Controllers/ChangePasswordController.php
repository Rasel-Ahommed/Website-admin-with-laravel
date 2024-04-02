<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.custom_system.changePassword');
    }

    public function edit(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $authUser = auth()->user()->email;

       if($request->email == $authUser){
            $data = User:: where('email', $request->email)->first();
            
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()]
            ]);

            $data->password = Hash::make($request->password);
            $data->save();
            return redirect('/dashboard')->with('success','Password has been successfully changed');
       }
       else{
            return back()->withErrors(['email' => 'The provided email does not match your current email.'])->withInput();
       }
    }

    // public function update(Request $request,$id){
    //     $request->validate([
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);
    //     // $id = decrypt($id);

    //     // $data = User::FindOrFail($id);

    //     // $data->password = Hash::make($request->password);

    //     // $data->save();
 
    //     // return redirect('/dashboard')->with('success','Password has been successfully changed');
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()]
    //     ]);
    
    //     // Your update logic here...
    
    //     // // Redirect back to the same page after successful update
    //     // return redirect()->back()->with('success', 'Password has been successfully changed');
    // }
}
