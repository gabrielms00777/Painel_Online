<?php

namespace App\Livewire\Admin;

use App\Models\ContactMessage as ModelsContactMessage;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class ContactMessage extends Component
{
    use WithPagination;

    public ?int $quantity = 10;

    public ?string $search = null;

    public array $headers = [
        ['index' => 'id', 'label' => '#'],
        ['index' => 'name', 'label' => 'Nome'],
        ['index' => 'email', 'label' => 'Email'],
    ];

    #[Computed()]
    public function rows()
    {
        return ModelsContactMessage::query()
                                        ->latest()
                                        ->when($this->search, function (Builder $query) {
                                            return $query->where('name', 'like', "%{$this->search}%");
                                        })
                                        ->paginate($this->quantity)
                                        ->withQueryString();
    }

    public function render()
    {
        return view('livewire.admin.contact-message');
    }
}
