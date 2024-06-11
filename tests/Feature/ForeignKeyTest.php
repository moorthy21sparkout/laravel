<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeignKeyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function check(){
        $author=Author::create(['name'=>'author first']);

          
        Book::create(['title'=>'first Book','author_id'=>$author->id]);
        Book::create(['title'=>'secound Book','author_id'=>$author->id]);

        // //check the book for database
        $this->assertDatabaseHas('Book',['title'=>'first Book','author_id'=>$author->id]);
        $this->assertDatabaseHas('Book',['title'=>'secound Book','author_id'=>$author->id]);

        $author->save();


         $this->assertDatabaseMissing('Book',['title'=>'first Book','author_id'=>$author->id]);
        $this->assertDatabaseMissing('Book',['title'=>'secound Book','author_id'=>$author->id]);

    }
}
