<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    #[Validate(['required', 'string', 'max:50'])]
    public string $name = 'teste';

    #[Validate(['required', 'max:50', 'email'])]
    public string $email = 'teste@teste';

    #[Validate(['required', 'string', 'max:50', 'confirmed'])]
    public string $password = 'teste';

    #[Validate(['required', 'string', 'max:50'])]
    public string $password_confirmation  = 'teste';


    public function setUser()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function store()
    {
        $this->validate();

        User::create($this->all());
    }
}
