<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Profile extends Component
{
    use Interactions;

    public ?User $user;

    #[Validate(['required', 'string', 'max:50'])]
    public string $name = '';

    #[Validate(['required', 'max:50', 'email'])]
    public string $email = '';

    #[Validate(['nullable', 'string', 'max:50', 'confirmed'])]
    public string $password = '';

    #[Validate(['nullable', 'string', 'max:50'])]
    public string $password_confirmation  = '';

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function save()
    {
        $this->validate();

        $this->user->update($this->all());

        $this->dialog()->success('Dados atualizados com sucesso!')->send();
    }

    public function render()
    {
        return view('livewire.admin.profile');
    }
}
