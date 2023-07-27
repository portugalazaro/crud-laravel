<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function create(Request $request)
    {
        $dados = [
            'title' => 'Primeiro Post',
            'content' => 'meu conteudo do primeiro post...',
            'author'  => 'Lázaro Portugal'
        ];

        // modo mais convencional de salvar os dados no banco, passando direto para o
        // construtor do model POST
        // $post = new Post($dados);
        // $post->save();
        // dd($post);

        // ------------------------------------------

        // Passando cada valor para seu dado
        $post = new Post();
        $post->title = 'Segudo post';
        $post->content = 'Conteudo segundo post...';
        $post->author = 'Savio Portugal';
        $post->save();

    }
}
