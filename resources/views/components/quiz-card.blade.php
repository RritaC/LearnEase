<div class="p-6 bg-dark rounded-xl flex flex-col items-center justify-between hover:shadow-lg group">
    <div class="text-white text-sm font-medium self-start"> Grade: {{ $quiz->grade }}</div>
    <div class="text-white text-sm font-medium self-start">{{ $quiz->subject }} Course</div>
    <br>

    <div class="flex flex-col items-center">
        <h3 class="text-white text-lg font-bold group-hover:text-yellow-500">{{ $quiz->title }}</h3>
        <div class="text-white text-sm font-medium">Created by : {{ $quiz->creator }}</div>
        <br>
    </div>
    <div class="flex flex-row space-x-20">
        <a href="{{ route('quiz.show', $quiz->id) }}"
           class="bg-yellow-500 text-white py-2 px-4 rounded-full mt-4 hover:bg-yellow-600 ">Start Quiz</a>
        @auth
            @if(Auth::id() === $quiz->user_id)
                <a href="{{ route('quiz.edit', $quiz->id) }}"
                   class="bg-yellow-500 text-white py-2 px-4 rounded-full mt-4 hover:bg-yellow-600">Edit Quiz</a>
            @endif
        @endauth


    </div>
</div>
