<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetTest extends TestCase
{
    public function testIssetSukses()
    {
        $status = ['sukses' => '1'];
        $this->view('isset', compact('status'))
            ->assertSeeText('Sukses');
    }

    public function testIssetEror()
    {
        $status = ['error' => '1'];
        $this->view('isset', compact('status'))
            ->assertSeeText('Error');
    }
}
