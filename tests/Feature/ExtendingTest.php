<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view("extending", ["name" => "Rio Febrian"])
            ->assertSeeText("Hello Rio Febrian");
    }
}
