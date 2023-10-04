<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;

class QuestionController extends Controller
{
    public function index()
    {

    }

    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaire.show', compact('questionnaire'));
    }

    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        //dd(request()->all());

        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required'  
        ]);
        //배열의 모든걸 가져올때는 .*

        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionnaire/'.$questionnaire->id);
    }
    
    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->answers->each->delete();
        $question->delete();
        
        return redirect($questionnaire->path());
        //$questionnaire->questions()->destroy();
    }
    
}
