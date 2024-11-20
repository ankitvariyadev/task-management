<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Employees;
use App\Livewire\Admin\Tasks;
use Illuminate\Support\Facades\Route;

Route::get('/',Dashboard::class)->name('dashboard');
Route::get('/employees', Employees::class)->name('employees');
Route::get('/tasks', Tasks::class)->name('tasks');

Route::get('/login', function () {
    return view('login');
});