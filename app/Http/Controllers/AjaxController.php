<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Voter;
use App\Models\Option;

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
            'voterName' => 'required',
            'voterEmail' => 'required',
            'voterContact' => 'required',
            'vote' => 'required'
        ]);
        $data = $request->all();
        $qid=$request->qid;
        $this->create($data, $qid);

        $selected_option = $data['vote'];
        $option_number='';
        if($selected_option==1){
            $option_number='option1';
        }else if($selected_option==2){
            $option_number='option2';
        }else if($selected_option==3){
            $option_number='option3';
        }else if($selected_option==4){
            $option_number='option4';
        }else if($selected_option==5){
            $option_number='option5';
        }else{
            $option_number='option6';
        }
        if(Option::where('q_id', '=', $qid)->exists()){
            $this->updateOptionTable($qid, $option_number);
            // echo "data found";
        }else{
            $this->insertOptionTable($qid, $option_number);
            // echo "data not found found" ;
        }
        
        return view('thanks_page');
    }

    public function create(array $data, $qid){
        return Voter::create([
            'name' => $data['voterName'],
            'email' => $data['voterEmail'],
            'contact' => $data['voterContact'],
            'q_id' => $qid,
            'selected_option' => $data['vote']
        ]);
    }

    public function updateOptionTable($qid, $option_number){
        return Option::where('q_id', $qid)->increment($option_number);
    }

    public function insertOptionTable($qid, $option_number){
        return Option::create([
            'q_id' => $qid,
            $option_number => 1
        ]);
    }

    public function deleteQuestion(Request $request){
        if(Auth::check()){
            $data=$request->all();
            $qid=$data['qid'];
            // echo $data['qid'];
            // print_r($data);
            Question::where('id', $qid)->delete();
            // return view('pollcard', compact('pollsData'));
        }
    }
}