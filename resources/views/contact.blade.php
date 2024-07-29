<x-layout>
    <div class="container py-5">
        <h1 class=" mb-4 text-3xl font-bold pt-3 pb-5">Contact Us</h1> <form method="POST" action="/register">
            @csrf
        <form  method="POST">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-form-field>
                                <x-form-label for="first_name">First Name</x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="first_name" id="first_name" placeholder="Joe" required />
                                    <x-form-error name="first_name" />
                                </div>
                            </x-form-field>
                        </div>
                        <div>
                            <x-form-field>
                                <x-form-label for="last_name">Last Name</x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="last_name" id="last_name" placeholder="Bakers" required />
                                    <x-form-error name="last_name" />
                                </div>
                            </x-form-field>
                        </div>
                        <div>
                            <x-form-field>
                                <x-form-label for="email">Email</x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="email" id="email" type="email" placeholder="joe@example.com" required />
                                    <x-form-error name="email" />
                                </div>
                            </x-form-field>
                        </div>
                        <div>
                            <x-form-field>
                                <x-form-label for="message-topic">Reason for Message</x-form-label>
                                <div class="mt-2">
                                    <x-form-input name="message-topic" id="message" type="message" placeholder="Reason of Message" required />
                                    <x-form-error name="message" />
                                </div>
                            </x-form-field>
                        </div>
                        <div>
                            <x-form-field>
                                <x-form-label for="message">Message</x-form-label>
                                <div class="mt-2">
                                    <textarea class="form-control rounded-md shadow-sm border border-gray-300 px-3 py-1 " name="message" id="message" rows="10" placeholder="Your message to us" required></textarea>
                                    <x-form-error name="message" />
                                </div>
                            </x-form-field>
                        </div>
                    </div>

        </form>
            <br>
            <div class="col-12">
                <a href="/" class="bg-yellow-500 text-white py-2 px-4 rounded-full mt-4 hover:bg-yellow-600">Send Message</a>
            </div>
    </div>
</x-layout>
