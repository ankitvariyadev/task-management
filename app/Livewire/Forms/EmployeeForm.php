<?php

namespace App\Livewire\Forms;

use App\Enums\EmployeePositions;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Form;

class EmployeeForm extends Form
{
    public ?User $user = null;

    public ?int $employeeId = null;

    public string $name = '';

    public string $email = '';

    public string $password = '';


    public string $position = '';

    public function rules(): array
    {

        return [
            'name'=> ['required', 'string'],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],
            'password' => [
                'sometimes',
                Password::min(8)->mixedCase()->letters()->numbers()->symbols(),
            ],
            'position' => ['required']
        ];
    }

    public function store(): void 
    {
        User::query()->updateOrCreate(
            ['id' => $this->user->id],
            $this->validate(),
        );
        
        $this->reset();
    }

    public function edit(User $user): void
    {
        $this->user = $user;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->position = $this->user->position->value;
    }
}
