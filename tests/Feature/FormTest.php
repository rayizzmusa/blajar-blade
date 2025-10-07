<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [

            "name" => "Rayhan",
            "premium" => true,
            "admin" => false

        ]])
            ->assertSee("Rayhan")
            ->assertSee("checked")
            ->assertSee("readonly");
    }
}
