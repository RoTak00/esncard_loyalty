<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome!')}}
        </h2>
    </x-slot>

    <form action="/submit-registration" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="surname" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Surname:</label>
            <input type="text" name="surname" id="surname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="esncard_serial_code" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ESNcard Serial Code:</label>
            <input type="text" name="esncard_serial_code" id="esncard_serial_code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" id="agree_to_terms" name="agree_to_terms" class="mr-2">
            <label for="agree_to_terms" class="text-gray-700 dark:text-gray-300">I agree to the <a href="/terms-of-service" class="text-blue-500 hover:text-blue-700">Terms of Service</a></label>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
        </div>

        <p class="text-center mt-4">Already registered? <a href="/login" class="text-blue-500 hover:text-blue-700">Login</a></p>

        <p class="text-center mt-4">By registering, you agree to our <a href="/privacy-policy" class="text-blue-500 hover:text-blue-700">Privacy Policy</a>.</p>
    </form>
</x-app-layout>
