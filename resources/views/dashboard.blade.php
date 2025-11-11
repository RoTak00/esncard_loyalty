<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard!')}}
        </h2>
    </x-slot>

    <p>Hello, {{ session('student.name') }} {{ session('student.surname') }}</p>
    <h3>Here's your QR!</h3>

</x-app-layout>
