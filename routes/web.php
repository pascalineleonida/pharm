<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginControlleur;
use App\Http\Controllers\PharmaControlleur;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PharmaControlleur::class,'index'])->name('index');
Route::get('/product-{id}',[PharmaControlleur::class,'show'])->name('show');
Route::get('about',function (){
    return view('pharma.about');
})->name('about');
Route::get('contact', function (){
    return view('pharma.contact');
})->name('contact');
//login

Route::prefix('/')->controller(LoginControlleur::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::post('/login','login');
    Route::get('/sign','sign')->name('sign');
    Route::post('/sign','storeSign');
});

//admin

Route::prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function(){
    Route::get('/','index')->name('');
    Route::get('/users','lists')->name('users');
    Route::get('/category','listsCategory')->name('category');
    Route::get('/produits','listsProduit')->name('produit');
    Route::get('/add-produits','add')->name('add-produit');
    Route::get('/add-produits/{id}','edit')->name('editProduit');
    Route::post('/add-produits/{id}','editProduit');
    Route::post('/add-produits','storeProduit');

});

