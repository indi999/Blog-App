<?php

namespace Tests\Unit;

use App\Post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        #$this->assertTrue(true);

        # Given (I have two record in database for this post)
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);
        
        # When 
        $posts = Post::archives();
        # Then
        # $this->assertCount(2, $posts);
        $this->assertEquals([
            [
            'year'=> $first->created_at->format('Y'),
            'month'=> $first->created_at->format('F'),
            'published'=> 1
             ],
             [
            'year'=> $second->created_at->format('Y'),
            'month'=> $second->created_at->format('F'),
            'published'=> 1
             ]
        ], $posts );

    }
}
