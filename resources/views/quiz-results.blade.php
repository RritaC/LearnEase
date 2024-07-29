<x-layout>
    <div class="p-6 bg-dark rounded-xl flex flex-col items-center justify-between hover:shadow-lg group text-white">
        <a href="/" class="absolute bottom-4 right-4 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-full">Go Back</a>
        <div class="text-white text-sm font-medium">{{ $quiz->subject }} Course</div>
        <div class="flex flex-col items-center">
            <h3 class="text-white text-lg font-bold group-hover:text-yellow-500">Grade: {{ $quiz->grade }}</h3>
            <p class="text-white text-sm mt-2">You got {{ $correctCount }} out of {{ $totalQuestions }} correct!</p>
        </div>
        <div>
            @foreach ($quiz->questions as $key => $question)
                <div class="text-white mt-4">
                    <p class="font-bold">{{ $key + 1 }}. {{ $question->question }} ?</p>

                    <p>
                        Your Answer:
                        @if (isset($userAnswers[$question->id]))
                            Option {{ $userAnswers[$question->id] }} -> {{ $question->{'option'.$userAnswers[$question->id]} }}
                        @else
                            None
                        @endif
                    </p>
                    @if (isset($userAnswers[$question->id]))
                        @if ($userAnswers[$question->id] == $question->correct)
                            <p class="text-yellow-600">Correct: {{$question->points}} points</p>
                        @else
                            <p class="text-red-500">The correct answer is: Option {{ $question->correct }} -> {{ $question->{"option".$question->correct} }}.
                                <br>Minus - {{$question->points}} points</p>
                        @endif
                    @else
                        <p class="text-gray-500">No answer given. </p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
