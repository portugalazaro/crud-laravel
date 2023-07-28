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
            'title' => 'Post para Testes',
            'content' => 'meu conteudo do primeiro post...',
            'author'  => 'Desconhecido'
        ];

        // modo mais convencional de salvar os dados no banco, passando direto para o
        // construtor do model POST
        // $post = new Post($dados);
        // $post->save();
        // dd($post);

        // ------------------------------------------

        // Passando cada valor para seu dado
        $post = new Post($dados);
        // $post->title = 'Segudo post';
        // $post->content = 'Conteudo segundo post...';
        // $post->author = 'Savio Portugal';
        return $post->save();

    }


    public function read(Request $request)
    {
        // all() -> retorna todos os dados da tabela
        // find() -> retorna somente 1 dado, que é buscado pela sua primary key


        // verificando se id existe e se é diferente de vazio
        if(isset($request['id']) && $request['id'] != '') {

            // verificando se o post existe no banco de dados
            if(Post::find($request['id'])) {
                return Post::find($request['id']);
            }
        }
        
        return false;
    }


    public function all(Request $request)
    {
        // retornando todos os post
        return $post = Post::all();
    } 



    public function update(Request $request)
    {
        // pegando o post pelo id
        // $post =  $this->read($request);

        // Forma 1 de atualizar dados no banco
        // $post->title = 'testando';
        // $post->author = 'lazinho';
        // $post->content = 'conteudo';
        // $post->save();
        // -----------------------------------------------
        
        
        // forma 2 de atualizar um ou varios registros no banco de dados
        // Dessa forma nao precisa chamar o metodo save, o metodo update já salva no banco


        $post = Post::where('id', '>' , 0)->update([
            'title' => 'Atualizando post',
            'author' => 'Maquina',
            'content' => rand(1,100)
        ]);

        return $post;


    }


    public function delete(Request $request)
    {
        // pegando o post valido
        $post = $this->read($request); 

        // verificando se o post é valido, se for, deltar. caso contrário retorna false
        return $post ? $post->delete($post->id) : false;
    }


    public function deleteAll(Request $request)
    {
        $post = Post::where('id', '>', 0)->delete();
        return 'deu liga';
    }


    public function index(Request $request)
    {
        return view('welcome');
    }
}
