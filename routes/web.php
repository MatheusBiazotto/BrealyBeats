<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::match(['get', 'post'], '/login', [UsuarioController::class, 'login'])->name('login');

Route::match(['get', 'post'], '/beats', [ProdutoController::class, 'produtos'])->name('beats');

Route::match(['get', 'post'], '/categorias', [ProdutoController::class, 'categorias'])->name('categorias');

Route::match(['get', 'post'], '/categorias/{id_categoria}', [ProdutoController::class, 'categorias'])->name('id_categoria');

Route::match(['get', 'post'], '/carrinho/add/{idprod}', [ProdutoController::class, 'add_carrinho'])->name('add_carrinho');

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'carrinho'])->name('carrinho');

Route::match(['get', 'post'], '/carrinho/remove/{iditem}', [ProdutoController::class, 'remove_carrinho'])->name('delete_carrinho');

Route::match(['get', 'post'], '/compra/finalizada/34563-gfgdg34543543-gfhjghf345', [ProdutoController::class, 'compra_finalizada'])->name('compra_ok');

Route::match(['get', 'post'], '/cadastro', [UsuarioController::class, 'cadastrar'])->name('cadastro');
