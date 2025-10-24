<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome!') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="text-2xl">To-do: </h1>

        <h2 class="text-xl">Database:</h2>

        <ul class="list-disc">
            <li>Creating models for: <ul class="list-disc ms-5">
                    <li>Company</li>
                    <li>CompanyRule</li>
                    <li>CompanyStudent</li>
                    <li>CompanyStamp</li>
                </ul>
            </li>
            <li>Renaming Users to CompanyAdmin and setting up authentication</li>
        </ul>
        <h2 class="text-xl">Frontend:</h2>
        <ul class = "list-disc">
            <li>Student Registration Page</li>
            <li>Student Failure Page (Dynamic Error)</li>
            <li>Student Success Page (Dynamic Message)</li>
            <li>Student T&C Page</li>
            <li>Student Login Page</li>
            <li>Student Update ESNcard Page</li>
            <li>Student Stamp Count Page</li>
            <li>Admin Login Page</li>
            <li>Admin Forgotten Password Page</li>
            <li>Admin Dashboard Page</li>
            <li>Admin Stats Page</li>
        </ul>
        <h2 class = "text-xl">Backend:</h2>
        <ul class = "list-disc">
            <li>Student Registration w/ ESNcard verification</li>
            <li>Student Login w/ ESNcard verification</li>
            <li>Student Stamp Count logic</li>
            <li>Student Update ESNcard logic</li>
            <li>Admin Reset Password </li>
            <li>Admin Dashboard </li>
            <li>Admin Apply Stamp</li>
            <li>Admin Stamp Notification</li>
        </ul>
    </div>
</x-app-layout>
