<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Profile::class)
            ->assertStatus(200);
    }
}
