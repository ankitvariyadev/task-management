<div class="container mx-auto p-8" x-data="{ openModal : false}">
    <!-- Heading -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Employee Management</h1>
        <button @click="openModal = true" class="bg-teal-600 text-white px-6 py-3 rounded-md hover:bg-teal-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i> Add New Employee
        </button>
    </div>

    <!-- Employee Table -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead class="bg-teal-600 text-white">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Repeat this tr for each employee -->
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">John Doe</td>
                    <td class="px-4 py-2">johndoe@example.com</td>
                    <td class="px-4 py-2">Admin</td>
                    <td class="px-4 py-2">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="text-red-600 hover:text-red-800 ml-4">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">Jane Smith</td>
                    <td class="px-4 py-2">janesmith@example.com</td>
                    <td class="px-4 py-2">Employee</td>
                    <td class="px-4 py-2">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="text-red-600 hover:text-red-800 ml-4">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-model heading="Add New Employee">
        <form action="#" method="POST">
            <div class="space-y-4">
                <x-form.input type="text" label="name" name="name" placeholder="enter employee name" />
                <x-form.input type="email" label="email" name="email" placeholder="enter employee email" />
                <x-form.select name="position" label="select position" options=""/>
            </div>
            <div class="mt-6 flex justify-end space-x-4">
                <button @click="openModal = false" type="button" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400 transition">Cancel</button>
                <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-teal-700 transition">Add Employee</button>
            </div>
        </form>
    </x-model>
</div>