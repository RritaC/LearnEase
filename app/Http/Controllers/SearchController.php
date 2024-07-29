<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search for quizzes by title, subject, or creator
        $quizzes = Quiz::where('title', 'LIKE', "%{$query}%")
            ->orWhere('subject', 'LIKE', "%{$query}%")
            ->orWhere('creator', 'LIKE', "%{$query}%")
            ->get();

        return view('/search-results', compact('quizzes'));
    }
}
