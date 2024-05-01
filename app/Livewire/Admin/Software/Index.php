<?php

namespace App\Livewire\Admin\Software;

use App\Models\Software;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public array $headers = [
        ['index' => 'id', 'label' => '#'],
        ['index' => 'name', 'label' => 'Nome'],
        // ['index' => 'email', 'label' => 'Email'],
    ];

    #[Computed()]
    public function rows()
    {
        return Software::query()->latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.software.index');
    }
}
