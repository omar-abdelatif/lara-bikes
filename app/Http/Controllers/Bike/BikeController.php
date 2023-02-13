<?php

namespace App\Http\Controllers\Bike;

use App\Models\Bike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class BikeController extends Controller
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function storeBikes(Request $request)
    {
        $validation = $request->validate([
            "type" => "required",
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
            $images = $request->file('bikes_img');
            foreach ($images as $image) {
                $imagename = $image->store('public/frontend_assets/imgs/bikes/');
                $bike->photos()->create(['path' => $imagename]);
            }
            $name = time() . '.' . $images->getClientOriginalExtension();
            $destinationPath = public_path('frontend_assets/imgs/bikes/');
            $image->move($destinationPath, $name);
            $bike->bikes_img = $name;
        }
        $store = $bike->save();
        if ($store) {
            return redirect('bikesignup')->with('success', 'Bike Added Successfully');
        }
        return redirect("bikesignup")->withErrors("Something Went Wrong")->with('image', $name);
    }
}
