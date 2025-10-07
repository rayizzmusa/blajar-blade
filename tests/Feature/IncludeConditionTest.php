<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", ["user" => [
            "name" => "Syifa",
            "owner" => true
        ]])
            ->assertSeeText("Selamat datang owner")
            ->assertSeeText("Selamat datang Syifa");

        $this->view("include-condition", ["user" => [
            "name" => "Syifa",
            "owner" => false
        ]])
            ->assertDontSeeText("Selamat datang owner")
            ->assertSeeText("Selamat datang Syifa");
    }
}
