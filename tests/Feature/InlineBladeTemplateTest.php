<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTemplateTest extends TestCase
{
    public function testInline()
    {
        $response = Blade::render('Nama saya {{$name}}', ['name' => 'Rayhan']);
        self::assertEquals("Nama saya Rayhan", $response);
    }
}
