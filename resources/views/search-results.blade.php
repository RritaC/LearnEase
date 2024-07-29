
<x-layout>
    <h1 class="pb-6 pt-6 font-bold text-3xl">Search Results</h1>

    @if($quizzes->isEmpty())
        <p>No quizzes found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($quizzes as $quiz)
                <x-quiz-card :quiz="$quiz" />
            @endforeach
        </div>
    @endif
</x-layout>

