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

Route::get('/', function(){
    return view('index'); /* retorna o que vier após o return */
});

Route::get('/catalogo', function(){
    return view('catalog'); /* retorna o que vier após o return */
});

Route::get('/contato', function(){
    return view('contact'); /* retorna o que vier após o return */
});

Route::get('/login', function(){
    return view('login'); /* retorna o que vier após o return */
});

Route::get('/pagamento', function(){
    return view('payment'); /* retorna o que vier após o return */
});

Route::get('/produto', function(){
    return view('product'); /* retorna o que vier após o return */
}); 

# tentativa 
// Route::get('/produto')->name('produto');

Route::get('/registro', function(){
    return view('registration'); /* retorna o que vier após o return */
});

Route::get('/comprar', function(){
    return view('shopping'); /* retorna o que vier após o return */
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
