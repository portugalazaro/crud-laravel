# Uma api simples de um CRUD em laravel

Estrutura dos dados retornados

    "id": 2,
    "title": "Post para Testes",
    "content": "meu conteudo do primeiro post...",
    "author": "Desconhecido",
    "deleted_at": null,
    "created_at": "2023-07-28T13:25:42.000000Z",
    "updated_at": "2023-07-28T13:25:42.000000Z"

## Rotas

Route::get('/post/create', [PostController::class, 'create']);
-> Cria um post no Banco de dados

Route::get('/post/read/{id}', [PostController::class, 'read']);
-> Busca um post no Banco de dados pelo seu ID

Route::get('/post/all', [PostController::class, 'all']);
-> Retorna todos os posts do Banco de dados

Route::get('/post/update/{id?}', [PostController::class, 'update']);
-> Atualiza um ou mais registros no banco de dados dependendo de qual modo você escolher 

Route::get('/post/delete/all', [PostController::class, 'deleteAll']);
-> Deleta todos os registros do Banco de dados

Route::get('/post/delete/{id?}', [PostController::class, 'delete']);
-> Deleta somente o registro passado pela rota