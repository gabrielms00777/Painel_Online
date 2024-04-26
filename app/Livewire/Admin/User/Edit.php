<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.admin.user.edit');
    }
}
