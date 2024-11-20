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
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Create Task</button>
                </div>

                <!-- Table with Sorting Icons -->
                <table class="min-w-full table-auto">
                    <thead class="bg-teal-600 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Task
                                <i class="fas fa-sort ml-2"></i> <!-- Sorting Icon -->
                            </th>
                            <th class="px-4 py-2 text-left">Assigned To
                                <i class="fas fa-sort ml-2"></i> <!-- Sorting Icon -->
                            </th>
                            <th class="px-4 py-2 text-left">Status
                                <i class="fas fa-sort ml-2"></i> <!-- Sorting Icon -->
                            </th>
                            <th class="px-4 py-2 text-left">Priority
                                <i class="fas fa-sort ml-2"></i> <!-- Sorting Icon -->
                            </th>
                            <th class="px-4 py-2 text-left">Due Date
                                <i class="fas fa-sort ml-2"></i> <!-- Sorting Icon -->
                            </th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Task 1</td>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">In Progress</td>
                            <td class="px-4 py-2">High</td>
                            <td class="px-4 py-2">2024-12-01</td>
                            <td class="px-4 py-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Task 2</td>
                            <td class="px-4 py-2">Jane Smith</td>
                            <td class="px-4 py-2">Completed</td>
                            <td class="px-4 py-2">Medium</td>
                            <td class="px-4 py-2">2024-11-20</td>
                            <td class="px-4 py-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>      <!-- Dashboard Overview -->
        