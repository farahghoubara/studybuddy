@extends('layouts.app')

@section('title', 'Create Schedule')

@section('content')
    <div class="main_container">
        <h3>Create Schedule</h3>
        <hr class="mb-5">
        <form action="{{ route('schedule.store') }}" method="POST" id="schedule_form">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="offset-3 col-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div id="subject_fields">
                            <div class="subject_field mb-5 border rounded p-5"
                                style="background-color: #343a40; color: white;">
                                <h4 class="text-center">Subject 1</h4>
                                <div class="form-group mb-3">
                                    <label for="subject_name">Subject Name</label>
                                    <input type="text" class="form-control" name="subjects[0][subject_name]" required>
                                    @error('subjects.0.subject_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="credit_hours">Credit Hours</label>
                                    <select class="form-control selectpicker" name="subjects[0][credit_hours]" required>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="8">8</option>
                                    </select>
                                    @error('subjects.0.credit_hours')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" class="form-control" name="subjects[0][start_date]" required>
                                    @error('subjects.0.start_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="end_date">End Date</label>
                                    <input type="date" class="form-control" name="subjects[0][end_date]" required>
                                    @error('subjects.0.end_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="lecture_days">Lecture Days</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Saturday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckSaturday1">
                                                <label class="form-check-label" for="flexCheckSaturday1">
                                                    Saturday
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Sunday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckSunday1">
                                                <label class="form-check-label" for="flexCheckSunday1">
                                                    Sunday
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Monday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckMonday1">
                                                <label class="form-check-label" for="flexCheckMonday1">
                                                    Monday
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Tuesday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckTuesday1">
                                                <label class="form-check-label" for="flexCheckTuesday1">
                                                    Tuesday
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Wednesday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckWednesday1">
                                                <label class="form-check-label" for="flexCheckWednesday1">
                                                    Wednesday
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Thursday"
                                                    name="subjects[0][lecture_days][]" id="flexCheckThursday1">
                                                <label class="form-check-label" for="flexCheckThursday1">
                                                    Thursday
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('subjects.0.lecture_days')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success" onclick="addSubject()">Add Subject</button>
                        <button type="submit" class="btn btn-primary">Create Schedule</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/schedule-script.js') }}"></script>
@endpush
