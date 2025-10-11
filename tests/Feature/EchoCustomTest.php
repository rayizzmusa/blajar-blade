<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoCustomTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "Rayhan Muhammad";
        $person->address = "Campang";

        $this->view("echo", ["person" => $person])
            ->assertSeeText("Rayhan Muhammad : Campang");
    }
}
