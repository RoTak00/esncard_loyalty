<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome, admin!') }}
        </h2>
    </x-slot>

    <div class="mt-8">
        <h2 class="text-xl font-bold mb-4">Erasmus Students</h2>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Fullname</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody id="erasmus-students-table-body">
                    <tr>
                        <td>John Doe</td>
                        <td>
                            <form action="/add-stamp" method="POST">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Stamp</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>
                            <form action="/add-stamp" method="POST">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Stamp</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob Johnson</td>
                        <td>
                            <form action="/add-stamp" method="POST">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Stamp</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <input type="text" id="search-input" placeholder="Search by fullname" class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    <script>
        const input = document.getElementById('search-input');
        const tableBody = document.getElementById('erasmus-students-table-body');
        const tableRows = Array.from(tableBody.getElementsByTagName('tr'));

        input.addEventListener('input', function() {
            const searchTerm = input.value.toLowerCase();
            tableRows.forEach(row => {
                const fullname = row.getElementsByTagName('td')[0].textContent.toLowerCase();
                if (fullname.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
