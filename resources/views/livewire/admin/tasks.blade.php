<div class="container mx-auto p-8" x-data="{ openModal: false }">
    <!-- Heading -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Task Management</h1>
        <button @click="openModal = true" class="bg-teal-600 text-white px-6 py-3 rounded-md hover:bg-teal-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i> Add New Task
        </button>
    </div>

    <!-- Task Table -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead class="bg-teal-600 text-white">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Task Name</th>
                    <th class="px-4 py-2">Assigned Employee</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Repeat this tr for each task -->
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">Task 1</td>
                    <td class="px-4 py-2">John Doe</td>
                    <td class="px-4 py-2">In Progress</td>
                    <td class="px-4 py-2">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="text-red-600 hover:text-red-800 ml-4">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">Task 2</td>
                    <td class="px-4 py-2">Jane Smith</td>
                    <td class="px-4 py-2">Completed</td>
                    <td class="px-4 py-2">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="text-red-600 hover:text-red-800 ml-4">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Add New Task Modal -->
    <div x-show="openModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 z-50">
        <div @click.away="openModal = false" class="bg-white rounded-lg p-8 w-96 shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Add New Task</h2>
            <form action="#" method="POST">
                <div class="space-y-4">
                    <!-- Task Name Input -->
                    <div>
                        <label for="task_name" class="block text-gray-700 font-medium">Task Name</label>
                        <input type="text" id="task_name" name="task_name" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Enter task name" required>
                    </div>

                    <!-- Task Description Input -->
                    <div>
                        <label for="task_description" class="block text-gray-700 font-medium">Task Description</label>
                        <textarea id="task_description" name="task_description" rows="4" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Enter task description" required></textarea>
                    </div>

                    <!-- Employee Allocation Input -->
                    <div>
                        <label for="employee" class="block text-gray-700 font-medium">Assign Employee</label>
                        <select id="employee" name="employee" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                            <option value="1">John Doe</option>
                            <option value="2">Jane Smith</option>
                            <option value="3">David Lee</option>
                        </select>
                    </div>

                    <!-- Status Input -->
                    <div>
                        <label for="status" class="block text-gray-700 font-medium">Status</label>
                        <select id="status" name="status" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-4">
                    <button @click="openModal = false" type="button" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
                    <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-teal-700 transition">Add Task</button>
                </div>
            </form>
        </div>
    </div>
</div>