@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaire" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control"
                                    id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Give your questionnaire a question that attracts attention.</small>
                            
                            @error('question.question')
                                <small class="text-danger">{{ $message }} </small>                                
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give shoices that give you the most insight into your question</small>

                                <div class="form-group">
                                    <label for="answer1">Choice 1</label>
                                    <input name="answer[][answer]" type="text" class="form-control" 
                                            id="answer1" aria-describedby="choiceHelp" placeholder="Enter Choice 1">                                    

                                    @error('answer.0.answer')
                                        <small class="text-danger">{{ $message }} </small>                                
                                    @enderror
                                </div>
                            </fieldset>
                        </div>


                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
