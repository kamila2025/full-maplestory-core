<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $user;

    public function mount()
    {
        $this->user = User::all();
    }

    public function render()
    {
        return view('livewire.pages.users')
            ->layout('components.layouts.app');
    }
}
