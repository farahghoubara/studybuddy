@extends('layouts.app')

@section('title', 'Schedule')

@section('content')
    <div class="main_container" style="min-height: 65vh;">
        @if ($schedules->isEmpty())
            <div class="section_2_landing">
                <div class="row d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                    <div class="slogan">
                        <h1 class="font-600-lg identity_color text-center">You haven't created the schedule yet!</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <img class="" style="max-width: 500px" src="{{ asset('images/no-schedule.svg') }}" alt="Study">
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="1000">
                    <div class="buttons-cta d-flex justify-content-center align-items-center">
                        @auth
                            <a href="{{ route('schedule.create') }}" class="st-primary-button-1 w-button">Create your own</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="st-primary-button-1 w-button">Create your own</a>
                        @endauth
                    </div>
                </div>
            </div>
        @else
            <h3>Your Schedule</h3>
            <hr class="mb-5">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Credit Hours</th>
                            <th scope="col">Days</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Tips</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules[0]->scheduleSubjects as $subject)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->credit_hours }}</td>
                                <td>
                                    @foreach ($subject->lectureDays as $day)
                                        {{ $day->day }}
                                    @endforeach
                                </td>
                                <td>{{ $subject->start_date }}</td>
                                <td>{{ $subject->end_date }}</td>
                                <td>
                                    @if ($subject->credit_hours == 8)
                                        For a good understanding of this subject, it is recommended to study 4
                                        times
                                        a week.
                                    @elseif ($subject->credit_hours == 4)
                                        For a good understanding of this subject, it is recommended to study 3
                                        times
                                        a week.
                                    @elseif ($subject->credit_hours == 3)
                                        For a good understanding of this subject, it is recommended to study 2
                                        times
                                        a week.
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
