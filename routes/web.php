<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function(){
    return view('outras.produtos');
})->name('produtos');
Route::get('departamentos', function(){
    return view('outras.departamentos');
})->name('departamentos');


Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('cliente', 'ClienteControlador');

Route::get('opcoes/{opcao?}', function ($opcao=null) {
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');




/* Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
    return "Olá!, seja bem vindo,  .$nome $sobrenome ";
});

Route::get('/seunome/{nome?}', function($nome=null){
    if(isset($nome))
        return "Olá!, seja bem vindo, $nome!";
    return "Você não digitou um nome.";
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
   for($i=0; $i<$n; $i++)
        echo "Olá, Seja bem Vindo, $nome <br>"; 
})->where('nome','[A-Z-a-z]+')->where('n','[0-9]+');


Route::prefix('/app')->group(function(){
    
    Route::get('/', function () {
        return view('app');
    })->name('app');

    Route::get('/user', function () {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');

});

Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressor</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos1', 'produtos', 301);

Route::get('todosprodutos2', function () {
    return redirect()->route('meusprodutos');
});

Route::post('/requisicoes', function (Request $request) {
    
    return 'Hello POST';
});

Route::delete('/requisicoes', function (Request $request) {
    
    return 'Hello Delete';
});

Route::put('/requisicoes', function (Request $request) {
    
    return 'Hello PUT';
});

Route::patch('/requisicoes', function (Request $request) {
    
    return 'Hello Patch';
});

Route::options('/requisicoes', function (Request $request) {
    
    return 'Hello Options';
});

Route::get('/requisicoes', function (Request $request) {
    
    return 'Hello GET';
}); */