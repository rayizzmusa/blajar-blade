<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForforeachTest extends TestCase
{
    public function testFor()
    {
        $this->view("forforeach", ["limit" => 8])
            ->assertSeeText('0')
            ->assertSeeText('3')
            ->assertSeeText('4')
            ->assertSeeText('5')
            ->assertSeeText('7');
    }
}
