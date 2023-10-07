<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class AjaxController extends Controller
{
    //
    function pollData(Request $request)
    { 
        // if(Auth::check()){
            $fk=auth()->user()->id;//getting current logged in user id for displaying data of only logged in user
            $data=$request->all();
            $qid=$data['qid'];
            // echo $data['qid'];
            // print_r($data);
            $pollsData=Question::select('question', 'option1', 'option2', 'option3', 'option4', 'option5', 'option6', 'created_at')->where('id', $qid)->where('user_id', $fk)->get();
            return view('pollcard', compact('pollsData'));
        // }
    }
}
