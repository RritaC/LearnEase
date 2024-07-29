<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function homepage()
    {
        $quizzes = Quiz::all();
        return view('welcome', compact('quizzes'));

    }


    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz', compact('quizzes'));
    }

    public function show($id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id);
        return view('show-quiz', compact('quiz'));
    }


    public function create()
    {
        return view('/create-quiz');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'subject' => ['required'],
            'grade' => ['required'],
            'creator' => ['required']
        ]);

        $questionsAttributes = $request->validate([
            'questions' => ['required', 'array'],
            'questions.*' => ['required', 'string'],
            'options1' => ['required', 'array'],
            'options1.*' => ['required', 'string'],
            'options2' => ['required', 'array'],
            'options2.*' => ['required', 'string'],
            'options3' => ['required', 'array'],
            'options3.*' => ['required', 'string'],
            'options4' => ['required', 'array'],
            'options4.*' => ['required', 'string'],
            'corrects' => ['required', 'array'],
            'corrects.*' => ['required', 'string'],
            'points' => ['required', 'array'],
            'points.*' => ['required', 'integer'],
        ]);

        $attributes['user_id'] = Auth::id();


        $quiz = Quiz::create($attributes);
        foreach ($questionsAttributes['questions'] as $index => $question) {
            $quiz->questions()->create([
                'question' => $question,
                'option1' => $questionsAttributes['options1'][$index],
                'option2' => $questionsAttributes['options2'][$index],
                'option3' => $questionsAttributes['options3'][$index],
                'option4' => $questionsAttributes['options4'][$index],
                'correct' => $questionsAttributes['corrects'][$index],
                'points' =>  $questionsAttributes['points'][$index],
            ]);
        }

        return redirect('/quizzes')->with('message', 'Success!');
    }
    public function edit(Request $request, $id)
    {
        // Fetch the quiz data for the given ID
        $quiz = Quiz::with('questions')->findOrFail($id);

        if (Auth::id() !== $quiz->user_id) {
            return abort(403, 'Unauthorized');
        }

        return view('edit-quiz', compact('quiz')); // Replace with your view name
    }

    public function update(Request $request, $id)
    {

        $quiz = Quiz::with('questions')->findOrFail($id);

        // Check if the currently logged-in user created the quiz
        // (Implement appropriate logic based on your authentication system)
        if (Auth::id() !== $quiz->user_id) {
            return abort(403, 'Unauthorized'); // Or redirect with an error message
        }

        $attributes = $request->validate([
            'title' => ['required'],
            'subject' => ['required'],
            'grade' => ['required'],
            'creator' => ['required'],
        ]);

        $questionsAttributes = $request->validate([
            'questions' => ['required', 'array'], // Make the entire questions array required
            'questions.*' => ['string'], // Validate individual questions as strings (if any)
            'options1' => ['nullable', 'array'], // Allow empty array for removing questions
            'options1.*' => ['string'], // Validate individual options as strings (if any)
            'options2' => ['nullable', 'array'], // Allow empty array for removing questions
            'options2.*' => ['string'], // Validate individual options as strings (if any)
            'options3' => ['nullable', 'array'], // Allow empty array for removing questions
            'options3.*' => ['string'], // Validate individual options as strings (if any)
            'options4' => ['nullable', 'array'], // Allow empty array for removing questions
            'options4.*' => ['string'], // Validate individual options as strings (if any)
            'corrects' => ['nullable', 'array'], // Allow empty array for removing questions
            'corrects.*' => ['string'], // Validate individual correct answers as strings (if any)
            'points' => ['nullable', 'array'], // Allow empty array for removing questions
            'points.*' => ['integer'], // Validate individual points as integers (if any)
        ]);


        $quiz->update($attributes); // Update quiz attributes

        // Handle updating or deleting questions
        $existingQuestionIds = $quiz->questions->pluck('id')->toArray();
        $updatedQuestionIds = [];

        // Loop through new/updated questions
        foreach ($questionsAttributes['questions'] as $index => $question) {
            $questionId = isset($request['question_ids'][$index]) ? $request['question_ids'][$index] : null;

            // Update existing question (use relationship)
            if ($questionId) {
                $quizQuestion = $quiz->questions()->findOrFail($questionId);
                $updatedQuestionIds[] = $questionId;
            } else {
                // Create new question (use relationship)
                $quizQuestion = $quiz->questions()->create([
                    'question' => $question,
                    'option1' => $questionsAttributes['options1'][$index] ?? null, // Handle empty array
                    'option2' => $questionsAttributes['options2'][$index] ?? null, // Handle empty array
                    'option3' => $questionsAttributes['options3'][$index] ?? null, // Handle empty array
                    'option4' => $questionsAttributes['options4'][$index] ?? null, // Handle empty array
                    'correct' => $questionsAttributes['corrects'][$index] ?? null, // Handle empty array
                    'points' => $questionsAttributes['points'][$index] ?? null, // Handle empty array
                ]);
            }

            // ... rest of your logic for handling individual questions
            $updatedQuestionIds[] = $quizQuestion->id;
        }

        // Delete removed questions (not included in updatedQuestionIds)
        $deletedQuestionIds = array_diff($existingQuestionIds, $updatedQuestionIds);
        Question::whereIn('id', $deletedQuestionIds)->delete();

        return redirect('/quizzes/')->with('message', 'Quiz Updated Successfully!');

    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }


    public function showActivity(User $user) // Assuming Route Binding
    {
        $user = Auth::user();
        $completedQuizzes = $user->completedQuizzes; // Assuming a relationship
        $createdQuizzes = $user->createdQuizzes; // Assuming a relationship

        return view('activity', compact('user', 'completedQuizzes', 'createdQuizzes'));
    }


}
