<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOncetest extends TestCase
{
    public function testEachOnce()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Rayhan",
                "hobbies" => ["coding", "game"]
            ],
            [
                "name" => "Muhammad",
                "hobbies" => ["coding", "game"]
            ]
        ]])
            ->assertSeeInOrder([".red", "Rayhan", "coding", "game", "Muhammad", "coding", "game"]);
    }
}
