<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate, Response, Redirect;
use App\Models\Question;

class QuestionController extends Controller
{
    //
    public function pollCreation(Request $request){
        //
        request()->validate([
            'pollQuestion' => 'required',
            'opt1' => 'required',
            'opt2' => 'required',
            'opt3' => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return Redirect::to('home')->withSuccess('Your Have Registered Successuflly');
    }

    public function create(array $data){
        return Question::create([
            'question' => $data['pollQuestion'],
            'option1' => $data['opt1'],
            'option2' => $data['opt2'],
            'option3' => $data['opt3']
        ]);
    }
}
