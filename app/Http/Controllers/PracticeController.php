<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PracticeController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('practice.index', compact('subjects'));
    }

    public function createTest(Request $request)
    {
        $subjectId = $request->input('subject');
        return redirect()->route('test', ['subjectId' => $subjectId]);
    }

    public function test(Request $request)
    {
        $subjectId = $request->input('subjectId');
        $subject = Subject::find($subjectId);
        $questions = $subject->questions->shuffle()->take(10);
        return view('practice.test', compact('subject', 'questions'));
    }

    public function result(Request $request)
    {
        // dd($request);
        $answers = $request->answer;
        $answersFromDatabase = Answer::whereIn('id', $answers)->get();
        // dd($answersFromDatabase);
        $correctAnswers = 0;
        $incorrectAnswers = 0;

        foreach ($answersFromDatabase as $answer) {
            if ($answer->is_correct) {
                $correctAnswers++;
            }
        }
        $passingScore = 7;
        $result = ($correctAnswers >= $passingScore) ? 'Pass' : 'Fail';

        $message = "You scored $correctAnswers out of 10. You $result the practice test.";
        if ($result == 'Pass') {
            Session::flash('success', $message);
        } else {
            Session::flash('fail', $message);
        }
        return redirect()->route('practice');
    }
}
