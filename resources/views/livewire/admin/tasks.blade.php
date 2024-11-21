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
        <x-table>
            <x-slot name="tableHead">
                <x-table.tr>
                    <x-table.th>#</x-table.th>
                    <x-table.th>Task Name</x-table.th>
                    <x-table.th>Assigned Employee</x-table.th>
                    <x-table.th>Status</x-table.th>
                    <x-table.th>Due Date</x-table.th>
                    <x-table.th>Action</x-table.th>
                </x-table.tr>
            </x-slot>
            <x-slot name="tableBody">
                <x-table.tr class="hover:bg-gray-100">
                    <x-table.td>1</x-table.td>
                    <x-table.td>Task 2</x-table.td>
                    <x-table.td>john smith</x-table.td>
                    <x-table.td>in progress</x-table.td>
                    <x-table.td>16-12-2002</x-table.td>
                    <x-table.td>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </x-table.td>
                </x-table.tr>
            </x-slot>
        </x-table>
    </div>

    <!-- Add New Task Modal -->
            <x-model heading="add new task">
                <form action="#" method="POST">
                    <div class="space-y-4">
                        <!-- Task Name Input -->
                        <x-form.input name="task_name" type="text" label="task name" placeholder="Enter Task Name"/>
                        <x-form.input name="task_description" type="textarea" label="Task Description" placeholder="Enter Task Description"/>
                        <x-form.select name="employee" label="Assign Employee" options=""/>
                    </div>
                    <div class="mt-6 flex justify-end space-x-4">
                        <button @click="openModal = false" type="button" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
                        <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-teal-700 transition">Add Task</button>
                    </div>
                </form>
            </x-model>
        </div>
    </div>
</div>