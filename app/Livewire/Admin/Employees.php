<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\EmployeeForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

#[Layout("components.layouts.app")]
class Employees extends Component
{
    public ?User $user = null;

    public EmployeeForm $form;

    use WithPagination;
    
    public function mount(): void
    {
        $this->form->user = $this->user; 
    }

    public function store(): void
    {
        $this->form->store();

        Toaster::success($this->form->employeeId ? "Employee Updated Successfully" : "Employee Added Successfully");

        $this->dispatch('formSubmitted');
    }

    public function edit(User $user): void
    {
        $this->form->edit($user);
    }

    public function render()
    {
        return view('livewire.admin.employees', ['employees' => User::query()->where('role', 'employee')->paginate(10)]);   
    }
}
