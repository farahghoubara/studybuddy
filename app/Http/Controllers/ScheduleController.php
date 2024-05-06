<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\LectureDay;
use Illuminate\Http\Request;
use App\Models\ScheduleSubject;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::where('user_id', Auth::id())->with('scheduleSubjects.lectureDays')->get();
        // dd($schedules);
        return view('schedule.index', compact('schedules'));
    }

    public function create()
    {
        return view('schedule.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjects.*.subject_name' => 'required|string|max:255',
            'subjects.*.credit_hours' => 'required|integer|in:3,4,8',
            'subjects.*.start_date' => 'required|date',
            'subjects.*.end_date' => 'required|date|after_or_equal:subjects.*.start_date',
            'subjects.*.lecture_days' => 'required|array',
            'subjects.*.lecture_days.*' => 'required|string|in:Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday',
        ], [
            'subjects.*.lecture_days.required' => 'The lecture days field is required.',
        ]);

        $schedule = new Schedule();
        $schedule->user_id = Auth::id();
        $schedule->save();

        foreach ($request->subjects as $subjectData) {
            $subject = new ScheduleSubject();
            $subject->subject_name = $subjectData['subject_name'];
            $subject->credit_hours = $subjectData['credit_hours'];
            $subject->start_date = $subjectData['start_date'];
            $subject->end_date = $subjectData['end_date'];
            $subject->schedule_id = $schedule->id;
            $subject->save();

            $lectureDays = LectureDay::whereIn('day', $subjectData['lecture_days'])->pluck('id');
            $subject->lectureDays()->attach($lectureDays);
        }

        return redirect()->route('schedule')->with('success', 'Schedule created successfully');
    }
}
