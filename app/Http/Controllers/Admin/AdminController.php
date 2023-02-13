<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $admin = DB::table('lara_bikes')->get();
        return redirect('dashboard', compact('admin'));
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "",
            "email" => "",
            "password" => "",
            "gender" => "",
            "user_img" => ""
        ]);
        $store = DB::table('lara_bikes')->insert($request->except('_token'));
        if($store){
            return redirect('dashboard')->with('success', 'Admin Inserted Successfully');
        }
        return redirect('login')->withErrors("Something Went Wrong");
    }
    public function loginRequest(Request $request)
    {
        dd($request);
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
