<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome, admin!') }}
        </h2>
    </x-slot>

    <form action="/submit-admin-login" method="POST">
        @csrf
         <div class="mb-4">
            <label for="admin_username" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Username:</label>
            <input type="text" name="admin_username" id="admin_username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

         <div class="mb-4">
            <label for="admin_password" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Password:</label>
            <input type="password" name="admin_password" id="admin_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        </div>


    </form>
</x-app-layout>
