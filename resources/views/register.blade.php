<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome!')}}
        </h2>
    </x-slot>

    <h3>Register to {{ $restaurant_name }}</h3>

    <form action="{{ $register_action }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" value = "{{ old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="surname" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Surname:</label>
            <input type="text" name="surname" id="surname"  value = "{{ old('surname') }}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="esncard_serial_code" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ESNcard Serial Code:</label>
            <input type="text" name="esncard_serial_code" id="esncard_serial_code"  value = "{{ old('esncard_serial_code') }}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" id="agree_to_terms" name="agree_to_terms" class="mr-2">
            <label for="agree_to_terms" class="text-gray-700 dark:text-gray-300">I agree to the <a href="{{ $terms_of_service_url }}" class="text-blue-500 hover:text-blue-700">Terms of Service</a></label>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
        </div>

    </form>
</x-app-layout>
