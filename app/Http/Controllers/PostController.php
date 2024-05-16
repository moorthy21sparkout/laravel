<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class PostController extends Controller
{
    public function post(){
      // Fetch all users with their posts (Eager Loading)
$client = Client::with('posts')->get();

foreach ($client as $client) {
    // Access user data
    echo "User: {$client->name}\n";
    
    // Access user's posts without causing additional queries
    foreach ($client->posts as $post) {
        echo "Post: {$post->title}\n";
    }
}
    }
}
