<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("Switch", ["value" => "A"])
            ->assertSeeText("Anjing");
        $this->view("Switch", ["value" => "B"])
            ->assertSeeText("Buaya");
        $this->view("Switch", ["value" => "C"])
            ->assertSeeText("Cacing");
        $this->view("Switch", ["value" => "Default"])
            ->assertSeeText("Binatang");
    }
}
