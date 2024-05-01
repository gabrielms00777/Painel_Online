<?php

namespace App\Livewire\Forms;

use App\Models\Software;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SoftwareForm extends Form
{
    public ?Software $software = null;

    #[Validate(['required', 'string', 'max:255'])]
    public string $name = 'teste';

    #[Validate(['required', 'max:255', 'string'])]
    public string $description = 'teste';
    
    #[Validate(['required', 'max:255', 'string'])]
    public string $url = 'teste';

    #[Validate(['required', 'image', 'max:1024'])]
    public $image;


    public function setUser()
    {
        // $this->name = $this->user->name;
        // $this->email = $this->user->email;
    }

    public function store()
    {
        $this->validate();

        if(!$this->software){
            $this->image = $this->image->store('software/images', 'public');
        }

        Software::create($this->all());

        // User::create($this->all());
    }
}
