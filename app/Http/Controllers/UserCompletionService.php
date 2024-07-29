<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class UserCompletionService extends Controller
{
    public function getTotalCompletedQuizzes(int $userId): int
    {
        return DB::table('completed_quizzes')->where('user_id', $userId)->count();
    }

    public function getCompletedQuizzesPerQuiz(): array
    {
        return DB::table('completed_quizzes')
            ->select('quiz_id', DB::raw('count(*) as completions'))
            ->groupBy('quiz_id')
            ->get()
            ->toArray();
    }
}
