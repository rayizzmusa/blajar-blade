<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InharitanceYieldTest extends TestCase
{
    public function testInharitance()
    {
        $this->view("yield-child", [])
            ->assertSeeText("Default header")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("ini adalah content Halaman Utama")
            ->assertDontSee("default content");
    }
}
