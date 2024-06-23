<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $usersList = [];

    public function mount()
    {
        $this->usersList = User::all();
    }

    public function render()
    {
        return view('livewire.users');
    }
}
