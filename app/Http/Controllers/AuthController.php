<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

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
        }

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
    }

    public function home(Request $request){
        if(Auth::check()){
            $fk=auth()->user()->id;//getting current logged in user id for displaying data of only logged in user
            $polls = DB::table('questions')->select('question', 'created_at')->where('user_id',$fk)->get();
            return view('home',compact('polls', 'fk'));
        }

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

