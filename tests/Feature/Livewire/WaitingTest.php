<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Waiting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class WaitingTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Waiting::class)
            ->assertStatus(200);
    }
}
