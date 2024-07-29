<?php
// app/Http/Controllers/SubmitQuizController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class SubmitQuizController extends Controller
{
    public function submit(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $questions = $quiz->questions;
        $userAnswers = $request->input('answers', []);
        $correctCount = 0;
        $totalQuestions = $questions->count();
        $mistakes = [];

        foreach ($questions as $question) {
            $userAnswer = $userAnswers[$question->id] ?? null;
            $correctAnswer = $question->correct;

            if ($userAnswer == $correctAnswer) {
                $correctCount++;
            } else {
                $mistakes[$question->id] = [
                    'question' => $question->question,
                    'user_answer' => $userAnswer,
                    'correct_answer' => $correctAnswer,
                ];
            }
        }

        return view('quiz-results', [
            'quiz' => $quiz,
            'correctCount' => $correctCount,
            'totalQuestions' => $totalQuestions,
            'userAnswers' => $userAnswers,
            'mistakes' => $mistakes,
        ]);
    }
}


