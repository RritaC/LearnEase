<x-layout>
    <div class="px-10">
        <h1 class="font-bold text-4xl text-center pb-6 pt-6">Choose Your Quiz</h1>
        <h3 class="text-lg text-center pb-10"> Created from our own users </h1>
            <div class="px-10 ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($quizzes as $quiz)
                        <x-quiz-card :quiz="$quiz" />
                    @endforeach
                </div>
            </div>
    </div>
</x-layout>
