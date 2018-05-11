<?php
require_once __DIR__ . '/../bootstrap/app.php';
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
Route::get( '/' , [
		  'as' => 'home' ,
		  function() {

				  return view( 'welcome' );
		  } ,
] );
Route::get( '/' , [
		  'as'   => 'home' ,
		  'uses' => 'Admin\IndexController@show'
] );
//Route::get('/article/{id}', ['as' =>'article', function ($id) {
//    echo $id;
//}]);
//Route::get('page/{id?}', function ($id=null) {
//
//    echo $id . '<pre>';
////    print_r($_ENV);
////    echo config('app.locale');
////    echo Config::set('app.locale', 'ru');
////    echo Config::get('app.locale');
//
//    echo  '</pre>';
//});
//Route::get('page/{id}', function ($id) {
//
//    echo $id . '<pre>';
////    print_r($_ENV);
////    echo config('app.locale');
////    echo Config::set('app.locale', 'ru');
////    echo Config::get('app.locale');
//
//    echo  '</pre>';
//});
//    ->where('id', "[0-9]+");
//Route::post('/comments', function (){
//    echo "asdf";
//   print_r($_POST);
//});
//Route::match(['get','post'],'/comments', function (){
//    print_r($_POST);
//});
//Route::group(['prefix' => 'admin',] , function (){ //
//
//    Route::get('page/create', function (){
//       return redirect()->route('article', array('id'=>25));
//
//    });
//
//    Route::get('page/edit', function (){
//
//        $route = Route::current();
//        echo $route->getName();
////       echo 'page/edit';
//    })->name("Edit page admin");
//
//});
//Route::any('commnets', function (){
//    print_r($_POST);
//});
///////////////////////////////////////////////
Route::get( '/about' , [
		  'as'   => 'about' ,
		  'uses' => 'Admin\AboutController@show'
   ]);
Route::get( '/articles' , [
		  'uses' => 'Admin\Core@getArticles' ,
		  'as'   => 'articles' ,
] );
Route::match(['get', 'post'],   '/contact' , [
		  'as'   => 'contact' ,
		  'uses' => 'Admin\ContactController@show' ,
   ]);
Route::get( '/article/{page}' , [
		  'uses'       => 'Admin\Core@getArticle' ,
		  'as'         => 'article' ,
] );
//list pages
//Route::get('/pages/add', 'Admin\CoreResource@add');
//Route::resource('/pages','Admin\CoreResource', ['only' => ['show', 'index']]);
Route::resource( '/pages' , 'PagesController' );


