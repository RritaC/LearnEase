<x-layout>
    <div class="p-6 bg-dark rounded-xl flex flex-col items-center justify-between hover:shadow-lg group text-white">
        <div class="text-white text-sm font-medium">{{ $quiz->subject }} Course</div>
        <div class="flex flex-col items-center">
            <h3 class="text-white text-lg font-bold group-hover:text-yellow-500">Grade: {{ $quiz->grade }}</h3>
        </div>
        <form id="quizForm" method="POST" action="{{ route('quiz.submit', $quiz->id) }}">
            @csrf
            @foreach($quiz->questions as $key => $question)
                <div class="mb-4">
                    <h3 class="text-lg font-bold text-white">{{ $key + 1 }}. {{ $question->question }} ?</h3>
                    <div>
                        @foreach(range(1, 4) as $optionNumber)
                            <label>
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $optionNumber }}">
                                {{ $question->{'option' . $optionNumber} }}
                            </label><br>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded-full mt-4 hover:bg-yellow-600">
                Submit
            </button>
        </form>
    </div>

    <script>
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            let allAnswered = true;
            const form = e.target;

            // Get all questions
            form.querySelectorAll('div.mb-4').forEach(function(questionDiv) {
                const questionId = questionDiv.querySelector('input[type="radio"]').name.match(/\d+/)[0];
                const selectedOption = form.querySelector(`input[name="answers[${questionId}]"]:checked`);

                if (!selectedOption) {
                    allAnswered = false;
                    questionDiv.style.border = '2px solid red'; // Highlight unanswered question
                } else {
                    questionDiv.style.border = 'none'; // Remove highlight if answered
                }
            });

            if (!allAnswered) {
                e.preventDefault(); // Stop form from submitting
                alert('Please answer all questions.');
            }
        });
    </script>
</x-layout>
