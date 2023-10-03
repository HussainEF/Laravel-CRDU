<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    
    public function index(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function postLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            //Authentication passed ...
            return redirect()->intended('home');
            // var_dump($request['email']);
        }
        /* else{
            var_dump(Request('password'));
        } */

        return Redirect::to("login")->withSuccess('Oppoes! You have enteren worng email or password');
    }

    public function postRegister(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:6',
            'contact' => 'required',
            'gender' => 'required'
        ]);
    
        $data = $request->all();
        $check = $this->create($data);
        return Redirect::to('home')->withSuccess('Your Have Registered Successuflly');

        // var_dump(Request('name'));
        // var_dump($request['name']);
    }

    public function home(){
        if(Auth::check()){
            return view('home');
        }
        // return view('home');

        /* $test = Auth::check();
        var_dump($test);
        var_dump(Request('name')); */
        return Redirect::to('login')->withSuccess('You have not logged in. or You dont have an account');
    }

    public function create(array $data){
        return user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}

