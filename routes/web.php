<?php

    use App\Http\Controllers\YourController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\RegisteredUserController;
    use App\Http\Controllers\SessionController;
    use App\Http\Controllers\SearchController;
    use App\Http\Controllers\QuizController;
    use App\Http\Controllers\SubmitQuizController;



    Route::get('/', [QuizController::class, 'homepage']);
    Route::get('/teachers', function () {return view('teachers');});

    Route::get('/activity', [YourController::class, 'activity']);
    Route::get('/quizzes', function () {return view('quizzes');});
    Route::get('/guides', function () {return view('guides');});
    Route::get('/register', function () {return view('register');});
    Route::get('/create-quiz', function () {return view('create-quiz');});
    Route::get('/contact', function () {return view('contact');});
    Route::get('/social-media', function () {return view('social-media');});

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/create-quiz', [QuizController::class, 'create']);
    Route::post('/create-quiz', [QuizController::class, 'store']);
    Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
    Route::post('/logout', [SessionController::class, 'destroy']);

    Route::get('/search', [SearchController::class, 'search'])->name('search');


    // routes/web.php
    Route::post('/quiz/{quiz}/submit', [SubmitQuizController::class, 'submit'])->name('quiz.submit');
    Route::post('/quiz-results/{quiz}', [SubmitQuizController::class, 'showResults'])->name('quiz.results');

    Route::get('/quiz/{quiz}/edit', [QuizController::class, 'edit'])->name('quiz.edit');
    Route::patch('/quiz/{quiz}', [QuizController::class, 'update'])->name('quiz.update');
    Route::post('/quiz/{id}', [QuizController::class, 'destroy'])->name('quiz.destroy');
