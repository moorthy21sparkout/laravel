<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Book;
use App\Models\Count;
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
    // public function check(){
    //     $author=Author::create(['name'=>'author first']);

          
    //     Book::create(['title'=>'first Book','author_id'=>$author->id]);
    //     Book::create(['title'=>'secound Book','author_id'=>$author->id]);

    //     // //check the book for database
    //     $this->assertDatabaseHas('Book',['title'=>'first Book','author_id'=>$author->id]);
    //     $this->assertDatabaseHas('Book',['title'=>'secound Book','author_id'=>$author->id]);

    //     $author->delete();


    //      $this->assertDatabaseMissing('Book',['title'=>'first Book','author_id'=>$author->id]);
    //     $this->assertDatabaseMissing('Book',['title'=>'secound Book','author_id'=>$author->id]);

    // }
    public function test_check(){
        $test1=Count::find(1);
        $test2=Count::find(2);
        $this->assertTrue($test1!=$test2);
    }


    public function test_delete(){
        $test=Count::find(3);
        if($test){
            $test->delete();
            $this->assertFalse(false);
        }
    }
}



