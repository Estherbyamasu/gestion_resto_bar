<?php

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


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');

Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::post('categorie','CategoriesController@storeprod');
Route::get('categories/edit/{category}','CategoriesController@edit');

Route::get('categories/show/{category}','CategoriesController@show');
Route::put('categories/{category}','CategoriesController@update');

Route::post('categories/destroy/{category}','CategoriesController@destroy');

Route::get('products','ProductsController@index');
Route::get('products/create','ProductsController@create');
Route::post('products','ProductsController@store');
Route::get('products/edit/{product}','ProductsController@edit');
Route::put('products/{product}','ProductsController@update');
Route::post('products/destroy/{product}','ProductsController@destroy');
Route::post('search','ProductsController@search');

Route::get('clients','ClientsController@index');
Route::get('clients/create','ClientsController@create');
Route::post('clients','ClientsController@store');
Route::get('clients/edit/{client}','ClientsController@edit');
Route::put('clients/{client}','ClientsController@update');
Route::post('clients/destroy/{client}','ClientsController@destroy');

Route::get('serveurs','ServeursController@index');
Route::get('serveurs/create','ServeursController@create');
Route::post('serveurs','ServeursController@store');
Route::get('serveurs/edit/{serveur}','ServeursController@edit');
Route::put('serveurs/{serveur}','ServeursController@update');
Route::post('serveurs/destroy/{serveur}','ServeursController@destroy');

Route::get('fournisseurs','FournisseursController@index');
Route::get('fournisseurs/create','FournisseursController@create');
Route::post('fournisseurs','FournisseursController@store');
Route::get('fournisseurs/edit/{fournisseur}','FournisseursController@edit');
Route::put('fournisseurs/{fournisseur}','FournisseursController@update');
Route::post('fournisseurs/destroy/{fournisseur}','FournisseursController@destroy');

Route::get('caissiers','CaissiersController@index');
Route::get('caissiers/create','CaissiersController@create');
Route::post('caissiers','CaissiersController@store');
Route::get('caissiers/edit/{caissier}','CaissiersController@edit');
Route::put('caissiers/{caissier}','CaissiersController@update');
Route::post('caissiers/destroy/{caissier}','CaissiersController@destroy');

Route::get('achats','AchatsController@index');
Route::get('achats/create','AchatsController@create');
Route::post('achats','AchatsController@store');
Route::get('achats/edit/{achat}','AchatsController@edit');
Route::put('achats/{achat}','AchatsController@update');
Route::post('achats/destroy/{achat}','AchatsController@destroy');

Route::get('factures','FacturesController@index');
Route::get('factures/create','FacturesController@create');
Route::post('factures','FacturesController@store');
Route::get('factures/edit/{facture}','FacturesController@edit');
Route::put('factures/{facture}','FacturesController@update');
Route::post('factures/destroy/{facture}','FacturesController@destroy');
Route::post('search','FacturesController@search');

Route::get('detaillefactures','DetaillefacturesController@index');
Route::get('detaillefactures/create','DetaillefacturesController@create');
Route::post('detaillefactures','DetaillefacturesController@store');
Route::get('detaillefactures/edit/{detaillefacture}','DetaillefacturesController@edit');
Route::put('detaillefactures/{detaillefacture}','DetaillefacturesController@update');
Route::post('detaillefactures/destroy/{detaillefacture}','DetaillefacturesController@destroy');
