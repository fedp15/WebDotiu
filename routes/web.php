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

Route::bind('user',function($id){
  return App\User::where('id',$id)->first();
});

Route::bind('mensaje',function($id){
  return App\Mensaje::where('id',$id)->first();
});


Route::resource('home/mapa', 'MapaController');

Route::post('/registrarse','UserController@store');

Route::post('/enviar','ContactoController@enviarContacto');

Route::post('/enviarforo','MensajeController@store');
Route::post('/enviarContacto','ContactoController@store');

Route::get('usuario/create', function () {
        return View::make('admin/usuario/create');
});

Route::get('mensaje/create', function () {
        return View::make('admin/mensaje/create');
});


Route::get('foro', [
    'uses' => 'MensajeController@store'
  ]);



Route::get('foro','ForoController@index');
Route::get('contacto','ContactoController@index');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get("contact", function(){
   return View::make('home/contact');
});
Route::get('inicio', function () {
    return view('welcome');
});
Route::get('about', function () {
        return View::make('home/about');
});

Route::get('galeria', function () {
        return View::make('home/galeria');
});

Route::get('perfil', function () {
        return View::make('home/perfil');
});



Route::get('acoso', function () {
        return View::make('home/acoso');
});



Route::get('foro', function () {
        return View::make('home/foro');
});

Route::get('foro','MensajeController@index');



Route::get('mapa', function () {
        return View::make('home/mapa');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('enviar.php', function () {
    return view('enviar');
});

Route::get('/registro', function () {
    return view('auth/registro');
});

route::get('admin/home', function(){
  return view('admin/home');

});


Route::group(['middleware' => 'admin'], function () {
  Route::resource('admin/mensaje','AdminMensajeController');
  Route::resource('admin/usuario', 'AdminUserController');
  Route::resource('admin/mapa', 'AdminMapaController');
  Route::resource('admin/contacto', 'ContactoController');
  Route::resource('admin/usuario/', 'AdminUserController');
  route::get('admin/home', function(){
    return view('admin/home');

  });
});


Auth::routes();








Route::get('logout',[
  'as'=> 'logout',
  'uses'=>'Auth\LoginController@logout'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
