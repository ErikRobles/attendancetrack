<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function QuizQuestionAdd() {
        return view('admin.quiz.quizquestions.quiezquestion_add');
    }
}
