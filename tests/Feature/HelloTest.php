<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHelloView()
    {
        $this->get('/hello')
            ->assertSeeText('Rayhan');
    }

    public function testHelloWorld()
    {
        $this->get('/world')
            ->assertSeeText('Bejo');
    }

    public function testViewTanpaRoute()
    {
        $this->view('hello.world', ['name' => 'Syifa'])
            ->assertSeeText('Syifa');
    }
}
