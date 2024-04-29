<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ContactMessage::class)
            ->assertStatus(200);
    }
}
