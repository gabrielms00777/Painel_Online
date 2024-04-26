<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public array $headers = [
        ['index' => 'id', 'label' => '#'],
        ['index' => 'name', 'label' => 'Nome'],
        ['index' => 'email', 'label' => 'Email'],
    ];

    #[Computed()]
    public function rows()
    {
        return User::query()->latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.user.index');
    }
}
