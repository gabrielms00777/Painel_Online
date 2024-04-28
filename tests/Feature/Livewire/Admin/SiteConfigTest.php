<?php

namespace Tests\Feature\Livewire\Admin;

use App\Livewire\Admin\SiteConfig;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SiteConfigTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(SiteConfig::class)
            ->assertStatus(200);
    }
}
