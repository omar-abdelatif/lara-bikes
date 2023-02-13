<?php

namespace App\Http\Controllers\Bike;

use App\Models\Bike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class BikeController extends Controller
{
    public function storeBikes(Request $request)
    {
        $validation = $request->validate([
            "type" => "required|min:5 ",
            "model" => "required ",
            "bikes_img" => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "serial_number" => "required|unique:bikes,serial_number",
            'status' => 'required|in:owned,stolen,sold'
        ]);
        $bike = new Bike();
        $bike->type = $validation['type'];
        $bike->model = $validation['model'];
        $bike->serial_number = $validation['serial_number'];
        $bike->status = $validation['status'];
        $bike->user_id = Auth::id();
        if ($request->hasFile('bikes_img')) {
            $image = $request->file('bikes_img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('frontend_assets/imgs/bikes/');
            $image->move($destinationPath, $name);
            $bike->bikes_img = $name;
        }
        $bike->save();
        return redirect("bikesignup")->withErrors("Something Went Wrong")->with('image', $name);
    }
}
