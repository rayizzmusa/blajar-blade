<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view("while", ["limit" => 10])
            ->assertSeeText("ini bapak budi")->assertSeeText("1")->assertSeeText("9");
    }
}
