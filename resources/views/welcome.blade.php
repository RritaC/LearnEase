<x-layout>
    <head>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Learn Ease</title>
        <style>
            .hero-container h1, .hero-container h2, .hero-container p {
                animation: flyUp 2s ease-in-out;
            }

            @keyframes flyUp {
                0% {
                    opacity: 0;
                    transform: translateY(50px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>
    <body>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    <div class="hero-container">

    </div>
    <div class="space-y-10 pt-6 ">
        <section class="text-center">
            <h1 class="font-bold text-4xl pb-4"> Search from hundreds of quizzes and pdfs</h1>
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="After Searching, Hit Enter"  class=" rounded-xl text-dark bg-dark/10 border-dark/15 px-5 py-4 w-full max-w-l">
            </form>
            <section class="pt-10">
                <h3 class="mb-6 text-2xl"> The most preferred quizzes:</h3>

                <div class="grid lg:grid-cols-3 gap-8">
                    @forelse ($quizzes->take(3) as $quiz)
                        <x-quiz-card :quiz="$quiz" />
                    @empty
                        <p>There are no quizzes available.</p>
                    @endforelse
                </div>
                @if (count($quizzes) > 3)
                    <div class="text-right mt-4">
                        <a href="/quizzes" class="inline-flex items-center px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Show More Quizzes
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></svg>
                        </a>
                    </div>
                @endif
            </section>
    </div>
    <hr class="border-gray-300 mt-8 mb-4">
    <div class="hero-section grid grid-cols-1 md:grid-cols-2 gap-4 pt-10">
        <img src="images/image1.jpg" alt="Hero Image" class="hero-image">
        <div class="hero-text-wrapper text-white bg-dark p-4 rounded-lg shadow-md flex flex-col gap-2">
            <h1 class="hero-title text-2xl font-bold">The Importance of Self-Testing</h1>
            <p class="hero-description text-white/70 pt-3">Self-testing is like being a detective on a mission to solve a mystery about your own knowledge. It's a superpower that helps you understand what you know well and what might need a bit more practice. Imagine you're on a treasure hunt, and each question you answer correctly brings you closer to discovering a shiny gem of understanding. So, next time you're learning something new, remember to give yourself a little quiz—it's not just fun, it's your secret weapon to becoming a super-smart detective of your own knowledge!</p>
        </div>
    </div>
    <hr class="border-gray-300 mt-8 mb-4">
    <section class="text-center pt-8">
        <h3 class="text-xl mb-4 pb-10">What Learners Are Saying</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <blockquote class="p-4 border border-gray-300 rounded-lg hover:bg-dark hover:text-white transition duration-700">
                "Learn Ease has been a game-changer for my learning! The quizzes are challenging but fun, and I love being able to track my progress."
                <br> -Sarah Langford
                <br>
                Student
            </blockquote>
            <blockquote class="p-4 border border-gray-300 rounded-lg hover:bg-dark hover:text-white transition duration-700">
                "I've found so many great resources on Learn Ease, from history quizzes to in-depth PDFs. It's a one-stop shop for all my learning needs."
                <br>
                -John Smith
                <br>
                Teacher
            </blockquote>
        </div>
    </section>
    <hr class="my-8">
    <div class="content-section">
        <div class="content-section grid grid-cols-1 md:grid-cols-2 gap-4 pt-10">
            <div class="content-text-wrapper text-dark bg-gray-200 p-4 rounded-lg shadow-md flex flex-col gap-2 mr-1">
                <h2 class="text-2xl font-extrabold text-dark mb-4">Level Up Your Learning Game!</h2>
                <ol class="list-decimal space-y-2 flex flex-col pt-3 pl-2">
                    <li class="text-m font-bold">
                        <span class="text-darkred">Master Any Subject:</span> Dive into our massive library of quizzes and PDFs, covering everything from history to rocket science.
                    </li>
                    <li class="text-m font-bold">
                        <span class="text-darkred">Track Your Progress:</span> Become an unstoppable learning machine! Monitor your progress and identify areas for improvement.
                    </li>
                    <li class="text-m font-bold">
                        <span class="text-darkred">Personalized Learning Path:</span> Get smart recommendations tailored to your goals. Reach your learning milestones faster and easier!
                    </li>
                    <li class="text-m font-bold">
                        <span class="text-darkred">Learning Made Fun:</span> Ditch the boring textbooks! We make learning engaging and interactive, so you never get bored.
                    </li>
                </ol>
                <div class="cta-wrapper mb-8 pt-4">
                    <a href="/register" class="inline-flex items-center px-4 py-2 rounded-md bg-dark text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-4">Sign Up for Free Today!</a>
                </div>
            </div>
            <div class="content-image">
                <img src="images/image2.jpeg" alt="Learning Icon">
            </div>
        </div>
    </div>
    <br>


    <hr class="my-8">

    <section class="pt-8">
        <h2 class="text-2xl mb-4">Learn Even More with Our Guides</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <article class="p-4 border border-gray-300 rounded-lg shadow-md">
                <h3 class="text-xl mb-2">How to fall in love with studying</h3>
                <p class="text-gray-700 mb-4">Feeling nervous about an upcoming quiz? We've got you covered! Read our tips and tricks to boost your confidence and score high.</p>
                <a href="/guides" class="inline-flex items-center px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Download our Guides
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></svg>
                </a>
            </article>
            <article class="p-4 border border-gray-300 rounded-lg shadow-md">
                <h3 class="text-xl mb-2">The Art of Listening</h3>
                <p class="text-gray-700 mb-4">Exam anxiety got you stressed? Conquer those nerves and ace your tests! Read our tips to boost your confidence. </p>
                <a href="/guides" class="inline-flex items-center px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Download our Guides
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></svg>
                </a>
            </article>
            <article class="p-4 border border-gray-300 rounded-lg shadow-md">
                <h3 class="text-xl mb-2">The Ins and Outs of Exams</h3>
                <p class="text-gray-700 mb-4">Exams stressing you out? Achieve exam success with proven techniques and a positive outlook. Don't let anxiety hold you back!</p>
                <a href="/guides" class="inline-flex items-center px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Download our Guides
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></svg>
                </a>
            </article>
        </div>
    </section>

</x-layout>

