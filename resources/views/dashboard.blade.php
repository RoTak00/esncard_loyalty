<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard!') }}
        </h2>
    </x-slot>

    @auth('student')
        <p>Hello, {{ auth('student')->user()->forename }} {{ auth('student')->user()->surname }}</p>

        <h3>Here's your QR!</h3>
        <div class="qr-container">
            {!! QrCode::size(300)->generate(auth('student')->user()->student_id) !!}

        </div>
    @endauth

</x-app-layout>
