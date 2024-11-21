    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <!-- Total Tasks -->
            <div class="bg-white shadow-lg rounded-lg p-6 hover:bg-gray-50 transition">
                <h2 class="text-xl font-semibold text-gray-800">Total Tasks</h2>
                <p class="text-3xl font-bold text-gray-600">250</p>
                <i class="fas fa-clipboard-list text-3xl text-blue-500 mt-4"></i>
            </div>
            <!-- Completed Tasks -->
            <div class="bg-white shadow-lg rounded-lg p-6 hover:bg-gray-50 transition">
                <h2 class="text-xl font-semibold text-gray-800">Completed Tasks</h2>
                <p class="text-3xl font-bold text-gray-600">180</p>
                <i class="fas fa-check-circle text-3xl text-green-500 mt-4"></i>
            </div>
            <!-- Active Employees -->
            <div class="bg-white shadow-lg rounded-lg p-6 hover:bg-gray-50 transition">
                <h2 class="text-xl font-semibold text-gray-800">Active Employees</h2>
                <p class="text-3xl font-bold text-gray-600">15</p>
                <i class="fas fa-users text-3xl text-yellow-500 mt-4"></i>
            </div>
            <!-- Pending Tasks -->
            <div class="bg-white shadow-lg rounded-lg p-6 hover:bg-gray-50 transition">
                <h2 class="text-xl font-semibold text-gray-800">Pending Tasks</h2>
                <p class="text-3xl font-bold text-gray-600">50</p>
                <i class="fas fa-hourglass-half text-3xl text-red-500 mt-4"></i>
            </div>
        </div>
        <!-- Task Management Table -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Task Management</h2>
            </div>
            <!-- Table with Sorting Icons -->
            <x-table>
                <x-slot name="tableHead">
                    <x-table.tr>
                        <x-table.th column="task">{{ __('Task') }}</x-table.th>
                        <x-table.th>{{ __('AssignTo') }}</x-table.th>
                        <x-table.th>{{ __('Status') }}</x-table.th>
                        <x-table.th>{{ __('Priority') }}</x-table.th>
                        <x-table.th>{{ __('Due Date') }}</x-table.th>
                    </x-table.tr>
                </x-slot>
                <x-slot name="tableBody">
                    <x-table.tr class="hover:bg-gray-100">
                        <x-table.td>Task 1</x-table.td>
                        <x-table.td>John Doe</x-table.td>
                        <x-table.td>In Progress</x-table.td>
                        <x-table.td>High</x-table.td>
                        <x-table.td>2024-12-01</x-table.td>
                    </x-table.tr>
                </x-slot>
            </x-table>
        </div>
    </div>
