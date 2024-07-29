<x-layout>
    <header class="bg-gray-800 py-4 text-white text-center">
        <h1 class="text-3xl font-bold">Learn Ease</h1>
        <p class="mb-0">Follow us on social media!</p>
        <div class="flex gap-4 justify-center pt-4">
            <a href="https://facebook.com/test" target="_blank">
                <img src="{{ asset('/images/icons8-facebook-24.png') }}" alt="" title="">
            </a>
            <a href="https://instagram.com/test" target="_blank">
                <img src="{{ asset('/images/icons8-instagram-24.png') }}" alt="" title="">
            </a>
            <a href="https://x.com/test" target="_blank">
                <img src="{{ asset('/images/icons8-x-24.png') }}" alt="" title="">
            </a>
        </div>
    </header>

    <main class="container py-4 pb-3">
        <section class="pt-8 bg-gray-300 rounded-lg p-6 shadow hover:shadow-md hover:text-black transition duration-300">
            <h2 class="text-2xl mb-4 ">Join a Community of Lifelong Learners</h2>

            <p class="font-semibold">At Learn Ease, we believe in fostering a supportive and engaging community where learners can:</p>
            <br>
            <ul class="list-disc pl-4 space-y-1">
                <li>Challenge themselves with a wide variety of quizzes.</li>
                <li>Share knowledge and tips, fostering collaboration among learners.</li>
                <li>Learn from a diverse group of individuals with unique perspectives.</li>
            </ul>

            <p class="mt-8">We strive to create a positive and inclusive environment. Everyone feels welcome to participate and grow. </p>
            <a href="/register" class="inline-flex items-center px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-4">
                Become part of our learning community. <br>Join for FREE!
            </a>
        </section>

        <section>
            <ul class="list-disc pl-4">
            </ul>

            <h3 class="text-xl mt-8 mb-4 font-bold">Monthly Growth:</h3>
            <table class="table-auto w-full mx-auto border border-gray-700 rounded-lg overflow-hidden">
                <thead>
                <tr class="bg-gray-800 text-left">
                    <th class="px-4 py-2 text-white">Platform</th>
                    <th class="px-4 py-2 text-white">Followers</th>
                    <th class="px-4 py-2 text-white">Growth (Last Month)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="px-4 py-2">Facebook</td>
                    <td class="px-4 py-2">50,000</td>
                    <td class="px-4 py-2 text-green-500">+1000</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Instagram</td>
                    <td class="px-4 py-2">189,000</td>
                    <td class="px-4 py-2 text-green-500">+23,000</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Twitter</td>
                    <td class="px-4 py-2">234,000</td>
                    <td class="px-4 py-2 text-green-500">+100,000</td>
                </tr>
                </tbody>
            </table>
        </section>

    </main>
</x-layout>




