<?php

namespace App\Livewire\Admin\User;

use App\Livewire\Forms\UserForm;
use Livewire\Component;

class Create extends Component
{
    public UserForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('success', 'Usuário adicionado com sucesso!');

        $this->redirect(route('users.index'), true);
    }

    public function render()
    {
        return view('livewire.admin.user.create');
    }
}
