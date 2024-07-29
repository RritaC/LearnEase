<x-layout :user="$user">
    <div class="px-10">
        <h1 class="font-bold text-4xl text-center pt-6">Welcome, {{ $user->first_name }} what are we working on today?</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
            <div class="activity-card bg-gray-200 rounded-lg p-6 shadow hover:shadow-md">
                <h3 class="text-xl font-medium mb-2">Completed Quizzes</h3>
                <p class="text-gray-700">See a list of all the quizzes you've tackled so far!</p>
                <ul class="list-disc pl-4 mt-4">
                    <li>Quiz 1: History - Your Score: 80%</li>
                    <li>Quiz 2: Science - Your Score: 95%</li>
                    <li>Quiz 3: Math - Your Score: 100%</li>
                </ul>
            </div>

            <div class="activity-card bg-gray-200 rounded-lg p-6 shadow hover:shadow-md ">
                <h3 class="text-xl font-medium mb-2">Created Quizzes</h3>
                <p class="text-gray-700">Find all the quizzes you've created for others to enjoy!</p>
                <ul class="list-disc pl-4 mt-4">
                    <li>Quiz 3: Math - 10 Questions </li>
                    <li>Quiz 4: English - 15 Questions </li>
                    <li>Quiz 5: Geography 12 Questions</li>
                </ul>
            </div>
            <div class="activity-card bg-gray-200 rounded-lg p-6 shadow hover:shadow-md">
                <h3 class="text-xl font-medium mb-2">Total Completions</h3>
                <p class="text-gray-700">Here's a breakdown of how many users have completed your quizzes:</p>
                <ul class="list-disc pl-4 mt-4">
                    <li>Quiz 1: History - 10 Participants</li>
                    <li>Quiz 2: Science - 5 Participants</li>
                    <li>Quiz 3: Math - 2 Participants</li>
                </ul>
            </div>
                <div class="activity-card bg-gray-200 rounded-lg p-6 shadow hover:shadow-md">
                    <h3 class="text-xl font-medium mb-2">Edited Quizzes</h3>
                    <p class="text-gray-700">Revisit all the quizzes you've edited and polished!</p>
                    <ul class="list-disc pl-4 mt-4">
                        <li>Quiz 5: Geography (Removed 2 Questions)</li>
                        <li>Quiz 2: History (Updated difficulty level)</li>
                    </ul>
                </div>
        </div>
        <hr class="border-gray-300 mt-8 mb-4">
        <h2 class="font-bold text-lg pb-4"> Info for Completed Quizzes:</h2>
        <table class="table-auto w-full mx-auto border border-gray-700 rounded-lg overflow-hidden">
            <thead>
            <tr class="bg-gray-800 text-left text-white">
                <th class="px-4 py-2">Quiz</th>
                <th class="px-4 py-2">Correct Answers</th>
                <th class="px-4 py-2">Your Points</th>
                <th class="px-4 py-2">Attempts</th>
                <th class="px-4 py-2">Average Time</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="px-4 py-2">Math</td>
                <td class="px-4 py-2">8 Out of 10 </td>
                <td class="px-4 py-2">8/10 Points</td>
                <td class="px-4 py-2">2</td>
                <td class="px-4 py-2">5 minutes</td>
            </tr>
            <tr>
                <td class="px-4 py-2">Science</td>
                <td class="px-4 py-2">14 Out of 15 </td>
                <td class="px-4 py-2">14/15 Points</td>
                <td class="px-4 py-2">1</td>
                <td class="px-4 py-2">8 minutes</td>
            </tr>
            <tr>
                <td class="px-4 py-2">History</td>
                <td class="px-4 py-2">14 Out of 20 </td>
                <td class="px-4 py-2">14/20 Points</td>
                <td class="px-4 py-2">3</td>
                <td class="px-4 py-2">7 minutes</td>
            </tr>
            </tbody>
        </table>
    </div>
</x-layout>
