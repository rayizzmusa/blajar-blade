<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeachTest extends TestCase
{

    public function testForeach()
    {
        $this->view("foreach", [
            "hobbies" => [
                "makan",
                "minum"
            ]
        ])->assertSeeText("makan")->assertSeeText("minum");
    }

    public function testForelse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("Tidak ada hobi");

        $this->view("forelse", [
            "hobbies" => [
                "makan",
                "minum"
            ]
        ])->assertSeeText("makan")->assertSeeText("minum");
    }
}
