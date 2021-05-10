<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id){
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId'=> 2,
            'id' => 12,
            'title'=> "in quibusdam tempore odit est dolorem",
            'body' => "itaque id aut magnam praesentium quia et ea odit et ea voluptas et sapiente quia nihil amet occaecati quia id voluptatem incidunt ea est distinctio odio"
        ]);
        return $post->json();
    }

    public function updatePost(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => "updated title",
            'body' => 'updated body'
        ]);
        return $response->json();
    }

    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
