<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    public function index(){
        $users = User::select('users.*', 'user_role.name as user_role')
                ->join('user_role', 'users.role', '=', 'user_role.id')
                ->get();
        return view('auth.custom_system.manageUser',compact('users'));
    }
    
    // edit 
    public function edit($id){
        $data = User::FindOrFail($id);
        $roles = DB::table('user_role')->get();
        return view('auth.custom_system.editManageUser',compact('data','roles'));
    }

    // update 
    public function update(Request $request,$id){
        $user = User::FindOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'role' => 'required',
            'password' => ['nullable',Rules\Password::defaults()],
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();
        return redirect()->route('manage.user')->with('success','The user data has been successfully updated');
    }

    public function destroy($id){
        $data = User::FindOrFail($id);
        $data->delete();
        
        return back()->with('success','The user data has been successfully deleted');
    }
}
