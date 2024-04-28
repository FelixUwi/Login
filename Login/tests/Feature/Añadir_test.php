<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;


class ExampleTest extends TestCase
{
    public function test_create(){

        $response = $this->get('.../inicio.php');

        $response->assertRedirect('/login.php');
    }
}
    
