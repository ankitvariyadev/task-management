<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class Employees extends Component
{
    public rules(): array
    {
        return [
            "name"=> ["required","string","max:50"],
            "email"=> ["required","string",""],
        ];
    }

    public function storeOrUpdate() : void 
    {
        
    }

    function edit() : void 
    {
        
    }

    public function render()
    {
        return view('livewire.admin.employees');
    }
}
