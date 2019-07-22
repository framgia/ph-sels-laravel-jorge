<?php

namespace App\Http\Controllers;

use App\User;
use App\Answer;
use App\Course;
use App\Result;
use App\UserCourse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function start_course(Course $course)
    {
        $lessons = $course->lessons;

        $choices = array();

        for($i=0; $i < count($lessons); $i++) {
            $lessonChoices = $lessons[$i]->choices;
            array_push($choices, $lessonChoices);
        }

        return view('lesson.start', compact('course','lessons', 'choices'));
    }

    public function end_course(Course $course)
    {
        $userCourse = UserCourse::create([
            'owner_id' => Auth::user()->id,
            'course_id' => $course->id
        ]);

        $lessons = $course->lessons;

        $answers = array();
        for($i=0; $i < count($lessons); $i++) {
            array_push($answers, 
                Answer::create([
                    'user_course_id' => $userCourse->id,
                    'lesson_id' => $lessons[$i]->id,
                    'answer_id' => request('answers')[$i],
                    'isCorrect' => (request('answers')[$i] == $lessons[$i]->correct_choice_id)? true : false
                ])
            );
        }

        $correctAnswers = 0;
        for($i=0; $i<count($answers); $i++) {
            if($answers[$i]->isCorrect) {
                $correctAnswers++;
            }
        }

        $result = Result::create([
            'user_course_id' => $userCourse->id,
            'score' => $correctAnswers,
            'totalScore' => count($lessons)
        ]);

        $userCourse->save();
        $result->save();
        for($i=0; $i<count($answers); $i++) {
            $answers[$i]->save();
        }

        //dd($answer);
        return response()->json([
            'result' => $result,
        ]);
    }

    public function result(Result $result) {
        $userCourse = $result->userCourse;
        $course = $userCourse->course;
        $answers = $userCourse->answers;
        return view('lesson.result', compact('result','course','answers'));
    }
}
