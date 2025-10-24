<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome back!') }}
        </h2>
    </x-slot>

    <form action="/submit-login" method="POST">
        @csrf

        <div class="mb-4">
            <label for="esncard_serial_code" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ESNcard Serial Code:</label>
            <input type="text" name="esncard_serial_code" id="esncard_serial_code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        </div>

    </form>
</x-app-layout>
