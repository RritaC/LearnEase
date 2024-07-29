<x-layout>
    <h1 class="pb-6 pt-6 font-bold text-3xl">Create Your Own Quiz</h1>

    <form method="POST" action="/create-quiz">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <x-form-field>
                    <x-form-label for="title">Title of Quiz</x-form-label>

                    <div class="mt-2">
                        <x-form-input name="title" id="title" placeholder="The Great Discoveries" required />

                        <x-form-error name="title" />
                    </div>
                </x-form-field>
            </div>

            <div>
                <x-form-field>
                    <x-form-label for="subject">Subject</x-form-label>

                    <div class="mt-2">
                        <x-form-input name="subject" id="subject" placeholder="Geography" required />

                        <x-form-error name="subject" />
                    </div>
                </x-form-field>
            </div>

            <div>
                <x-form-field>
                    <x-form-label for="grade">Grade</x-form-label>

                    <div class="mt-2">
                        <x-form-input name="grade" id="grade" placeholder="7th Grade" required />

                        <x-form-error name="grade" />
                    </div>
                </x-form-field>
            </div>
            <div>
                <x-form-field>
                    <x-form-label for="creator">Creator Name</x-form-label>

                    <div class="mt-2">
                        <x-form-input name="creator" id="creator" placeholder="Miss. Jules" required />

                        <x-form-error name="creator" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <div class="pt-10 pb-10">
            <table class="table table-bordered" id="questionsTable">
                <thead>
                    <tr>
                        <th></th>
                        <th>Question</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                        <th>Option 4</th>
                        <th>Correct Answer</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 </td>
                        <td><x-form-input type="text" class="form-control" name="questions[]"
                                placeholder="Which country has the most natural lakes?" required /></td>
                        <td><x-form-input type="text" class="form-control" name="options1[]" placeholder="A. Canada"
                                required /></td>
                        <td><x-form-input type="text" class="form-control" name="options2[]" placeholder="B. Russia"
                                required /></td>
                        <td><x-form-input type="text" class="form-control" name="options3[]"
                                placeholder="C. United States" required /></td>
                        <td><x-form-input type="text" class="form-control" name="options4[]" placeholder="D. Finland"
                                required /></td>
                        <td>
                            <select class="form-control flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md" name="corrects[]" required>
                                <option  value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                        </td>
                        <td><x-form-input type="number" class="form-control" name="points[]" min="1"
                                placeholder="5" required />
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>



        <x-form-button type="button" class="btn btn-primary" id="addQuestionBtn">Add Question</x-form-button>
        <br><br>

        <x-form-button type="submit" class="btn btn-success">Create Quiz</x-form-button>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            const addQuestionBtn = $('#addQuestionBtn');
            const questionsTable = $('#questionsTable');

            questionsTable.find('tbody tr td:last').html(
                '<button type="button" class="btn btn-danger removeQuestionBtn">Remove</button>');

            addQuestionBtn.click(function() {
                const newRow = questionsTable.find('tbody tr:first').clone(true);
                const questionNumber = questionsTable.find('tbody tr').length + 1;

                newRow.find('td:first').text(questionNumber);
                newRow.find('input[type="text"], input[type="number"], select').val(
                    '');

                newRow.find('td:last').html(
                    '<button type="button" class="btn btn-danger removeQuestionBtn">Remove</button>');

                questionsTable.find('tbody').append(newRow);
            });

            questionsTable.on('click', '.removeQuestionBtn', function() {
                const totalRows = questionsTable.find('tbody tr').length;
                if (totalRows <= 1) {
                    alert(
                        "You cannot remove the last question row. A quiz must have at least one question."
                    );
                    return;
                }
                if (confirm("Are you sure you want to remove this question?")) {
                    $(this).parent().parent().remove(); // Remove the clicked button's parent row (question)
                }
            });
        });
    </script>
</x-layout>
