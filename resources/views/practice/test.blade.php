@extends('layouts.app')

@section('title', 'Practice')

@section('content')
    <div class="main_container" style="min-height: 65vh;">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <h2 class="text-center mb-4">Practice Test: {{ $subject->name }}</h2>

        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form id="practiceTestForm" action="{{ route('test.result') }}" method="POST">
                        @csrf
                        <input type="hidden" name="subject_id" value="1">
                        <div class="mb-4">
                            <p><strong>Instructions:</strong></p>
                            <p>You must get at least 7 correct answers out of 10 to pass this practice test.</p>
                        </div>
                        @foreach ($questions as $key => $question)
                        <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $key + 1 }}. {{ $question->header }}</h5>
                                    @foreach ($question->answers as $key => $answer)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="answer[{{ $key + 1 }}]" value="{{ $answer->id }}">
                                            <label class="form-check-label">{{ $answer->answer_sentence }}</label>
                                        </div>
                                    @endforeach
                                    {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer[2]"
                                            value="2">
                                        <label class="form-check-label" for="answer_1_2">4</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer[3]"
                                            value="3">
                                        <label class="form-check-label" for="answer_1_3">5</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer[4]"
                                            value="4">
                                        <label class="form-check-label" for="answer_1_4">6</label>
                                    </div> --}}
                                </div>
                            </div>
                            @endforeach
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit Test</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
