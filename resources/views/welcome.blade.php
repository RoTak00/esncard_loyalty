<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome!') }}
        </h2>
    </x-slot>

    <div>
        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif
        <h1>Try these links:</h1>
        <a href = "/register/aaa">Register to Cafe Bar</a>


        <h1 class="text-2xl">To-do: </h1>

        <h2 class="text-xl">Database:</h2>

        <ul class="list-disc">
            <li>Creating models for (Ion): <ul class="list-disc ms-5">
                    <li>Company</li>
                    <li>CompanyRule</li>
                    <li>CompanyStudent</li>
                    <li>CompanyStamp</li>
                </ul>
            </li>
            <li>Renaming Users to CompanyAdmin and setting up authentication</li>
            <li>Implementing an "Auth" based on the ESNcard (Robert)</li>
        </ul>

    </div>
</x-app-layout>
