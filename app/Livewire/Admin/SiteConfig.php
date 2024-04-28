<?php

namespace App\Livewire\Admin;

use App\Models\SiteConfig as ModelsSiteConfig;
use Livewire\Attributes\Validate;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class SiteConfig extends Component
{
    use Interactions;

    public ?ModelsSiteConfig $siteConfig;

    #[Validate('required|string|max:255')] 
    public ?string $contact_name; 
    #[Validate('required|email|max:255')] 
    public ?string $contact_email; 
    #[Validate('required|string|max:255')] 
    public ?string $description; 
    #[Validate('required|string|max:255')] 
    public ?string $address; 
    #[Validate('required|string|max:255')] 
    public ?string $phone;

    public function mount()
    {
        $this->siteConfig = ModelsSiteConfig::getConfig();
        $this->contact_name = $this->siteConfig->contact_name;
        $this->contact_email = $this->siteConfig->contact_email;
        $this->description = $this->siteConfig->description;
        $this->address = $this->siteConfig->address;
        $this->phone = $this->siteConfig->phone;
    }

    public function save()
    {
        $this->validate();
        $this->siteConfig->update($this->all());
        $this->dialog()->success('Os dados foram atualizados com sucesso!')->send();
        // $this->redirect(route('dashboard'), true);
    }

    public function render()
    {
        return view('livewire.admin.site-config');
    }
}
