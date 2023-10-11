<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;
class PollingController extends Controller
{
    //
    function pollForm(Request $request){
        if(Auth::check()){
            $fk=auth()->user()->id;//getting current logged in user id for displaying data of only logged in user
            $qid=$request->id;
            $data=Question::select('id', 'question', 'option1', 'option2', 'option3', 'option4', 'option5', 'option6', 'created_at')->where('id', $qid)->where('user_id', $fk)->get();
            return view('polling_form', compact('data'));
        }
    }
}
