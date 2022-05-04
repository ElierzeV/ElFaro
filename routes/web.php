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
*/


/*RUTAS DE ACCESO PARA LAS PAGINAS DE ARTICULOS*/
Route :: view('/','home')->name('home');
Route :: view('negocio','bussines')->name('bussines');
Route :: view('deporte','sport')->name('sport');

/*RUTAS DE ACCESO PARA LOS FORMULARIOS CONTACTO Y REGISTRO DE USUARIO*/

Route :: view('contacto','contact')->name('contact');
Route :: view('registro','register')->name('register');


/*RUTAS DE ACCESO PARA EL BLOG, FUTURAS NOTICIAS*/

Route :: get('blog','BlogController@index')->name('blog.index');
Route :: get('blog/{post:slug}','BlogController@show')->name('blog.show');



