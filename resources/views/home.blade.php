@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-md-8">
        @if(Session::has('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
        @endif
            <div class="card">
                <div class="card-header">Exam</div>
                @if($isExamAssigned)
                @foreach($quizzes as $quiz)
                <div class="card-body">
                    
                    <p><h3>{{$quiz->name}}</h3></p>
                    <p><span style="font-weight: 700 !important;">About exam: </span>{{$quiz->description}}</p>
                    <p><span style="font-weight: 700 !important;">Time alocated: </span>{{$quiz->minutes}} minutes</p>
                    <p><span style="font-weight: 700 !important;">Number of questions: </span>{{$quiz->questions->count()}}</p>
                        @if(!in_array($quiz->id, $wasQuizCompleted))
                            <a href="user/quiz/{{$quiz->id}}" class="">
                                <button class="btn btn-success">Start Quiz</button>
                            </a>
                        @else
                        <a href="/result/user/{{auth()->user()->id}}/quiz/{{$quiz->id}}" class="btn btn-primary">View result</a>
                        @endif
                </div>
                @endforeach
                @else
                <p>You have not assigned any exam</p>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">User Profile</div>
                <div class="card-body">
                    <p>Email:{{auth()->user()->email}}</p>
                    <p>Occupation:{{auth()->user()->occupation}}</p>
                    <p>Address:{{auth()->user()->address}}</p>
                    <p>Phone:{{auth()->user()->phone}}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
