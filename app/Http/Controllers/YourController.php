<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class YourController extends Controller
{
    public function activity(User $user)
    {
        $user = Auth::user();
        $completedQuizzes = $user->completedQuizzes; // Assuming a relationship
        $createdQuizzes = $user->createdQuizzes; // Assuming a relationship

        return view('activity', compact('user', 'completedQuizzes', 'createdQuizzes'));
    }


}
