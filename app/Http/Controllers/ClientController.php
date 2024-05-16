<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{ public function index(){
    $clients = Client::all();

    foreach ($clients as $client) {
        // Fetch posts for each user (N queries)
        foreach ($client->posts as $post) {
            echo "Post: {$post->title}\n";
            //reative data but n number of querys
        }
    }
}
public function create(){
    $client=DB::select('SELECT * FROM clients');

    $insert=DB::insert('INSERT INTO clients (age,addresses) VALUE (21,india)');


}
}
