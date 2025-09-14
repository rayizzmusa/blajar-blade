<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledBladeTest extends TestCase
{
    public function testDisabled()
    {
        $this->view('/disabled', ['name' => 'rayhan'])
            ->assertDontSee('rayhan')
            ->assertSee('hello {{$name}}');
    }
}
