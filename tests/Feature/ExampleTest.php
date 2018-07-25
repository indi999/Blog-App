<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        $this->get('/posts/1')->assertSee('SHOW POST');
        #$response = $this->get('/');
        #$response->assertStatus(200);
    }
}
