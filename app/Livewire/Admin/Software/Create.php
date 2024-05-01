<?php

namespace App\Livewire\Admin\Software;

use App\Livewire\Forms\SoftwareForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    
    public SoftwareForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('success', 'Sistema adicionado com sucesso!');

        $this->redirect(route('softwares.index'), true);
    }

    public function render()
    {
        return view('livewire.admin.software.create');
    }
}
