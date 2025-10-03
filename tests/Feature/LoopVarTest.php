<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVarTest extends TestCase
{
    public function testLoopVar()
    {
        $this->view("loopvariable", ["hobbies" => ["makan", "tidur", "begadang"]])
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("1. makan");
    }
}
