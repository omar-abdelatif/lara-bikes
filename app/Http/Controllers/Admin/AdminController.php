<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function login(){
        return view('index');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function password(){
        return view('password');
    }
    public function viewData(){
        $admin = DB::table('admin')->get();
        return redirect('dashboard', compact('admin'));
    }
    public function storeadmin(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|min:3",
            "email" => 'required|email|unique:users,email',
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required",
            'gender' => 'required|in: male,female',
            "admin_img" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $admin = new Admin();
        $admin->name = $validation['name'];
        $admin->email = $validation['email'];
        $admin->password = bcrypt($validation['password']);
        $admin->gender = $validation['gender'];
        $admin->admin_img = $validation['admin_img'];
        if ($request->hasFile('admin_img')) {
            $image = $request->file('admin_img');
            $extension = $image->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            $destinationPath = public_path('backend_assets/dist/img/admin/');
            $image->move($destinationPath, $newName);
            $admin->admin_img = $newName;
        }
        $store = $admin->save();
        if ($store) {
            return redirect('login')->with('success', 'Admin Registed Successfully');
        }
        return redirect("regist")->withErrors("Something Went Wrong")->with('image', $newName);
    }
    public function loginRequest(Request $request)
    {
        dd($request);

        $credentials = $request->only('email', 'password');
        $admin = Admin::where('email', $credentials['email'])->first();
        if (!$admin || !Hash::check($credentials['password'], $admin->password)) {
            return redirect("signin")->withErrors([
                'email' => 'These credentials do not match our records.'
            ]);
        }
    }

    public function edit($id)
    {
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
    }

    public function logout()
    {
    }

    public function f6()
    {
    }

    public function f7()
    {
    }

    public function f8()
    {
    }

    public function f9()
    {
    }

    public function f10()
    {
    }

    public function f11()
    {
    }

    public function f12()
    {
    }

    public function f13()
    {
    }

    public function f14()
    {
    }

    public function f15()
    {
    }
}
