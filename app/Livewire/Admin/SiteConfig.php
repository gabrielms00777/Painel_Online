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

    #[Validate('nullable|string|max:255')] 
    public ?string $facebook;
    #[Validate('nullable|string|max:255')] 
    public ?string $instagram;
    #[Validate('nullable|string|max:255')] 
    public ?string $twitter;
    #[Validate('nullable|string|max:255')] 
    public ?string $linkedin;

    #[Validate('nullable|string|max:255')] 
    public ?string $og_title;
    #[Validate('nullable|string|max:255')] 
    public ?string $og_description;
    #[Validate('nullable|string|max:255')] 
    public ?string $og_image;
    #[Validate('nullable|string|max:255')] 
    public ?string $og_url;
    #[Validate('nullable|string|max:255')] 
    public ?string $og_type;

    public function mount()
    {
        $this->siteConfig = ModelsSiteConfig::getConfig();
        $this->contact_name = $this->siteConfig->contact_name;
        $this->contact_email = $this->siteConfig->contact_email;
        $this->description = $this->siteConfig->description;
        $this->address = $this->siteConfig->address;
        $this->phone = $this->siteConfig->phone;

        $this->facebook = $this->siteConfig->facebook;
        $this->instagram = $this->siteConfig->instagram;
        $this->twitter = $this->siteConfig->twitter;
        $this->linkedin = $this->siteConfig->linkedin;

        $this->og_title = $this->siteConfig->og_title;
        $this->og_description = $this->siteConfig->og_description;
        $this->og_image = $this->siteConfig->og_image;
        $this->og_url = $this->siteConfig->og_url;
        $this->og_type = $this->siteConfig->og_type;
    }

    public function save()
    {
        $this->validate();
        $this->siteConfig->update($this->all());
        $this->dialog()->success('Os dados foram atualizados com sucesso!')->send();
    }

    public function render()
    {
        return view('livewire.admin.site-config');
    }
}
