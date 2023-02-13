<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class SiteController extends Controller
{
    public function viewData()
    {
        $users = User::all();
        // $user = Auth::user();
        return view('frontend.home');
    }
    public function viewProfile()
    {
        // $data = DB::table('users')->get();
        return view('frontend.profile');
    }
    public function home()
    {
        return view('frontend.layouts.master');
    }
    public function main()
    {
        return view('frontend.home');
    }
    public function storeuser(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|min:3",
            "email" => 'required|email|unique:users,email',
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required",
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            "user_img" => 'required'
        ]);
        $user = new User();
        $user->name = $validation['name'];
        $user->email = $validation['email'];
        $user->password = bcrypt($validation['password']);
        $user->phone = $validation['phone'];
        $user->address = $validation['address'];
        $user->gender = $validation['gender'];
        $user->user_img = $validation['user_img'];
        if ($request->hasFile('user_img')) {
            $image = $request->file('user_img');
            $extension = $image->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            $destinationPath = public_path('frontend_assets/imgs/users/');
            $image->move($destinationPath, $newName);
            $user->user_img = $newName;
        }
        $store = $user->save();
        if ($store) {
            return redirect('signin')->with('success', 'User Registed Successfully');
        }
        return redirect("signup")->withErrors("Something Went Wrong")->with('image', $newName);
    }
    public function loginRequest(Request $request)
    {
        $request->validate([
            "password" => "min:3|required",
            "email" => "required|email"
        ]);
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        $token = Auth::attempt($credentials);
        if (!$token) {
            return redirect("signin")->withErrors([
                'email' => 'These credentials do not match our records.'
            ]);
        }
        $user = Auth::user();
        return view("frontend.home", compact("user"));
    }
    public function updatePassword(Request $request)
    {
        //! Validation
        $password = $request->password;
        $confirmPassword = $request->password_confirmation;
        if ($password != $confirmPassword) {
            return redirect('lost-password')->withErrors(['message' => 'The Passwords do not match']);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $password = bcrypt($password);
            // User::
            DB::table('users')->where('id', $user->id)->update(['password' => $password]);
            return redirect('signin')->with(['success' => 'Password updated successfully']);
        } else {
            return redirect('lost-password')->withErrors(['message' => 'Error Happened Please Try Again']);
        }
    }
    public function checkEmail(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            return redirect('lost-password')->with(['email' => $email]);
        } else {
            return redirect()->back()->withErrors('No such record found for this email');
        }
    }
    public function render($request, Exception $exception)
    {
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return response()->view('frondend.404', [], 404);
        }
        return parent::render($request, $exception);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return view('frontend.auth.login');
    }
}
