<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfstatementTest extends TestCase
{
    public function testIfstatement()
    {
        $this->view("if-statement", ['hobbies' => []])
            ->assertSeeText("i don't have anything", false);

        $this->view("if-statement", ['hobbies' => ['coding']])
            ->assertSeeText("i have one hobby!");

        $this->view("if-statement", ['hobbies' => ['coding', 'game']])
            ->assertSeeText('i have many hobbies!');
    }
}
