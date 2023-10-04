<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //로그인 상태여야함
    }
    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);

        //$data['user_id'] = auth()->user()->id;
        //$questionnaire = create($data);

        $questionnaire = auth()->user()->questionnaires()->create($data);

        return redirect('/questionnaire/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {   
        $questionnaire->load('questions.answers.responses');

        //dd($questionnaire);
        

        return view('questionnaire.show', compact('questionnaire'));
    }
}
