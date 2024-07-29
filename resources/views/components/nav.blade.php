<nav class="flex justify-between items-center py-4 border-b border-dark/25 pl-2 pr-2">

    <a href="/">LearnEase</a>

    <div class="flex space-x-6 font-bold ">
        <a href="/quizzes" class="text-lg">Quizzes</a>
        <a href="/teachers" class="text-lg">Teachers</a>
        <a href="/guides" class="text-lg">Guides</a>

        @guest
            <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
        @endguest

        @auth
            <a href="/activity" class="text-lg">Your Activity </a>
            <x-nav-clink href="/create-quiz" class="pr-3 font-bold text-lg">Create Quiz</x-nav-clink>
            <form method="POST" action="/logout">
                @csrf

                <x-form-button>Log Out</x-form-button>

            </form>
        @endauth
    </div>

</nav>
