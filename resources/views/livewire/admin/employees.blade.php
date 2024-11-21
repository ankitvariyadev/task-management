@use('App\Enums\EmployeePositions')
<div class="container mx-auto p-8" x-data="{ openModal : false }" x-init=" @this.on('formSubmitted', () => openModal = false)">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Employee Management</h1>
        <button @click="openModal = true" class="bg-teal-600 text-white px-6 py-3 rounded-md hover:bg-teal-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i> Add New Employee
        </button>
    </div>
    <div class="bg-white shadow-lg rounded-lg p-6">
        <x-table>
            <x-slot name="tableHead">
                <x-table.tr>
                    <x-table.th>#</x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Email</x-table.th>
                    <x-table.th>Position</x-table.th>
                    <x-table.th>Action</x-table.th>
                </x-table.tr>
            </x-slot>
            <x-slot name="tableBody">
                @forelse ($employees as $employee)
                <x-table.tr wire:key="{{ $employee->id }}" class="hover:bg-gray-100">
                    <x-table.td>{{ $employee->id }}</x-table.td>
                    <x-table.td>{{ $employee->name }}</x-table.td>
                    <x-table.td>{{ $employee->email }}</x-table.td>
                    <x-table.td>{{ $employee->position->value }}</x-table.td>
                    <x-table.td>
                        <!-- Edit Button -->
                        <button 
                            @click="openModal = true; $wire.edit({{ $employee->id }})"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                            <i class="fas fa-edit"></i> Edit
                        </button>

                        <!-- Delete Button -->
                        <button 
                            wire:click="delete({{ $employee->id }})"
                            class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </x-table.td>
                </x-table.tr>
                @empty
                <x-table.tr>
                    <x-table.td colspan="5" class="text-center text-gray-500">No employees found.</x-table.td>
                </x-table.tr>
                @endforelse
            </x-slot>
        </x-table>
        <div class="mt-5">
            {{ $employees->links() }}
        </div>
    </div>

    <x-model heading="{{ $form->employeeId ? 'Edit Employee Record' : 'Add New Employee' }}">
        <form wire:submit.prevent="store">
            <div class="space-y-4">
                <x-form.input wire:model="form.name" type="text" label="Name" name="form.name" placeholder="Enter employee name"/>
                <x-form.input wire:model="form.email" type="email" label="Email" name="form.email" placeholder="Enter employee email"/>
                <x-form.input wire:model="{{ $form->employeeId ? 'form.password' : ''}}" type="password" label="Password" name="form.password" placeholder="Enter employee password"/>
                <x-form.select 
                    wire:model="form.position" 
                    name="form.position" 
                    label="Select Position" 
                    :options="EmployeePositions::displaySelectionBox()"
                />
            </div>
            <div class="mt-6 flex justify-end space-x-4">
                <button 
                    @click="openModal = false" 
                    type="button" 
                    class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400 transition">
                    Cancel
                </button>
                <button 
                    type="submit" 
                    class="bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-teal-700 transition">
                    {{ $form->employeeId ? 'Update' : 'Save' }}
                    <div wire:loading wire:target="store" class="inline-block h-4 w-4 animate-spin rounded-full border-2 border-solid border-current border-e-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"></div>
                </button>
            </div>
        </form>
    </x-model>
</div>
