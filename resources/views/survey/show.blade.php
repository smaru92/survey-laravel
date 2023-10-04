@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $questionnaire->title }}</h1>

            <form action="/survey/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="post">
                @csrf

                @foreach ($questionnaire->questions as $key => $question)

                <div class="card">
                    <div class="card-header">
                        <strong>{{ $key + 1}}</strong> {{ $question->question }}
                    </div>
                    <div class="card-body">

                        @error('responses.'.$key.'.answer_id')
                        <small class="text-danger"> {{ $message }}</small>
                        @enderror

                        <ul class="list-group">
                            @foreach ($question->answers as $answer)
                            <label for="answer{{ $answer->id }}">
                                <li class="list-group-item">
                                    <input type="radio" name="responses[{{ $key }}][answer_id]"
                                        id="answer{{ $answer->id }}"
                                        {{ (old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : '' }}
                                        class="mr-2" value="{{ $answer->id }}">
                                    {{ $answer->answer }}

                                    <input type="hidden" name="responses[{{ $key }}][question_id]"
                                        value="{{ $question->id }}">
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

                <div class="card mt-4">
                    <div class="card-header">설문자 정보</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">이름</label>
                            <input name="survey[name]" type="text" class="form-control" id="name"                                 
                                value="{{ old('name') }}"
                                aria-describedby="titleHelp" placeholder="이름 입력">
                            <small id="nameHelp" class="form-text text-muted">안녕하세요! 이름은 무엇인가요?</small>

                            @error('survey.name')
                            <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">이메일</label>
                            <input name="survey[email]" type="text" class="form-control" id="email"
                                value="{{ old('email') }}"
                                aria-describedby="purposeHelp" placeholder="이메일 입력">
                            <small id="emailHelp" class="form-text text-muted">이메일을 입력해주세요.</small>

                            @error('survey.email')
                            <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-dark" type="submit">설문 완료</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection