<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('practice.index', compact('subjects'));
    }

    public function createTest(Request $request)
    {
        // dd($request);
        // Get the selected subject ID
        $subjectId = $request->input('subject');
        // dd($subjectId);

        // Redirect to the test route with the selected subject ID
        return redirect()->route('test', ['subjectId' => $subjectId]);
    }

    public function test(Request $request)
    {
        $subjectId = $request->input('subjectId');
        $selectedSubject = Subject::find($subjectId);
        return view('practice.test', compact('selectedSubject'));
    }

    public function result(Request $request)
    {
        $subjectId = $request->input('subject_id');
        $subject = Subject::find($subjectId);
        $correctAnswers = 0;

        foreach ($subject->questions as $question) {
            $answerKey = 'answer.' . $question->id;
            if ($request->has($answerKey) && $request->input($answerKey) == $question->correct_answer) {
                $correctAnswers++;
            }
        }

        $passingScore = 7;
        $result = ($correctAnswers >= $passingScore) ? 'Pass' : 'Fail';

        $message = "You scored $correctAnswers out of 10. You $result the practice test.";

        return redirect()->route('practice')->with('message', $message);
    }
}
