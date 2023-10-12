<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Voter;

class AjaxController extends Controller
{
    //
    function pollData(Request $request)
    { 
        if(Auth::check()){
            $fk=auth()->user()->id;//getting current logged in user id for displaying data of only logged in user
            $data=$request->all();
            $qid=$data['qid'];
            // echo $data['qid'];
            // print_r($data);
            $pollsData=Question::select('id', 'question', 'option1', 'option2', 'option3', 'option4', 'option5', 'option6', 'created_at')->where('id', $qid)->where('user_id', $fk)->get();
            return view('pollcard', compact('pollsData'));
        }
    }

    function voteSubmit(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'q_id' => 'required',
            'selected_option' => 'required'
        ]);
        $data = $request->all();
        // $check = $this->create($data);
        $data = $request->all();
        return view('test', compact('data'));
    }

    public function create(array $data){
        return Voter::create([
            'name' => $data['voterName'],
            'email' => $data['voterEmail'],
            'contact' => $data['voterContact'],
            'q_id' => $data['qid'],
            'selected_option' => $data['opt3']
        ]);
    }
}
