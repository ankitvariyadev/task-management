<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class Employees extends Component
{
    public function store() : void 
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
