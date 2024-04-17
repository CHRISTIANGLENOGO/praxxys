<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800">
            <!-- Sidebar content -->
            <div class="p-4 text-white">
                <h2 class="text-xl font-semibold mb-4">Dashboard</h2>
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Analytics</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Settings</a>
                    </li>
                    <!-- Add more sidebar links as needed -->
                </ul>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-gray-200">
            <!-- Top navigation bar -->
            <div class="bg-white shadow p-4">
                <h1 class="text-xl font-semibold">Dashboard</h1>
                <!-- Add navigation items or user profile dropdown here -->
            </div>

            <!-- Main content area -->
            <div class="p-4">
                <h2 class="text-lg font-semibold">Welcome to your dashboard</h2>
                <p>This is the main content area where you can display various dashboard widgets, charts, and data.</p>
            </div>
        </div>
    </div>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>