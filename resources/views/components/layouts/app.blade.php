<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Task Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div x-data="{ sidebarOpen: true, activeLink: 'dashboard' }" class="flex h-screen">

        <!-- Sidebar -->
        <div x-bind:class="sidebarOpen ? 'w-72' : 'w-20'" class="bg-gradient-to-b from-teal-600 to-blue-800 text-white p-6 space-y-8 transition-all duration-300 ease-in-out shadow-lg">

            <!-- Logo -->
            <div class="text-3xl font-bold mb-10 flex items-center space-x-3">
                <img src="https://via.placeholder.com/50/00bcd4/ffffff?text=TM" alt="Logo" class="rounded-full">
                <span x-show="sidebarOpen" class="text-xl">Task Manager</span>
            </div>
            <!-- Navigation Links -->
            <ul class="space-y-6 mt-10">
                <li>
                    <a wire:navigate href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-md hover:bg-teal-700 transition duration-300 hover:text-white {{ Route::is('dashboard') ? 'bg-teal-700' : '' }}">
                        <i class="fas fa-tachometer-alt mr-3 text-xl"></i>
                        <span x-show="sidebarOpen">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('employees') }}" class="flex items-center p-3 rounded-md hover:bg-teal-700 transition duration-300 hover:text-white {{ Route::is('employees') ? 'bg-teal-700' : '' }}">
                        <i class="fas fa-users mr-3 text-xl"></i>
                        <span x-show="sidebarOpen">Employees</span>
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('tasks') }}" wire::navigate class="flex items-center p-3 rounded-md hover:bg-teal-700 transition duration-300 hover:text-white {{ Route::is('tasks') ? 'bg-teal-700' : '' }}">
                        <i class="fas fa-tasks mr-3 text-xl"></i>
                        <span x-show="sidebarOpen">Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="#" :class="{'bg-teal-700': activeLink === 'notifications'}" @click="activeLink = 'notifications'" class="flex items-center p-3 rounded-md hover:bg-teal-700 transition duration-300 hover:text-white">
                        <i class="fas fa-bell mr-3 text-xl"></i>
                        <span x-show="sidebarOpen">Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="#" :class="{'bg-teal-700': activeLink === 'settings'}" @click="activeLink = 'settings'" class="flex items-center p-3 rounded-md hover:bg-teal-700 transition duration-300 hover:text-white">
                        <i class="fas fa-cogs mr-3 text-xl"></i>
                        <span x-show="sidebarOpen">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-6">
                    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-200 p-2 hover:bg-teal-700 rounded-full">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h1 class="text-3xl font-semibold text-gray-800">Dashboard</h1>
                </div>

                <!-- Logged User Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center space-x-2 text-gray-700 bg-gray-200 p-3 rounded-full hover:bg-gray-300">
                        <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
                        <span class="font-semibold">Admin</span>
                        <i class="fas fa-caret-down"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-show="open" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-teal-100">Profile</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-teal-100">Settings</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-teal-100">Logout</a>
                    </div>
                </div>
            </div>

            <!-- Dashboard Overview -->
           {{ $slot }}

        </div>
    </div>

</body>
</html>
