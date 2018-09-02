<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = json_encode(Post::all(), JSON_PRETTY_PRINT);
        return "<pre>$posts</pre>";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Nossa página (view) create terá
         * o formulário para cadastrar um
         * post
         */
        return "Na próxima parte teremos o formulário de cadastro do post aqui.";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * É para cá que os dados do formulário
         * virão quando clicarmos no botão
         * para cadastrar um autor
         */
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $author = $post->author->name;
        $text = <<<TEXT
        ID:         $post->id
        Title:      $post->title
        Content:    $post->content
        Author:     $author
TEXT;
        return "<pre>$text</pre>";
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        /**
         * Nossa página (view) edit terá
         * o formulário para editar o
         * post
         */
        return "Ainda não podemos editar o post <br><strong>$post->title</strong><br> porque não temos o formulário.";
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        /**
         * É para cá que os dados do formulário
         * virão quando clicarmos no botão
         * para editar o post
         */
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        /**
         * Ainda não vamos apagar o
         * autor do banco de dados
         * mas logo teremos a view
         * para isso
         */
    }
}