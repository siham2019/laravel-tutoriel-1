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

/* Route::get('/', function () {
    return view('welcome');
})->middleware("checkRole"); */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/khra', function () {
    return "fgh ggggg hhhhhhhhhhhh";
});

Route::get('/zbal/{id}', function ($id) {
    echo $id;
})->where('id','[0-9]+');

Route::get('/zbal/{id}', function ($id) {
    echo $id;
})->middleware("checkAge:12");

Route::prefix('zag')->group(function () {
    
    Route::get('/{id}', function ($id) {
        echo $id;
    })->where('id','[0-9]+');

    Route::get('/ee', function () {
        return "eeeee eee";
    });


});

Route::get('/posts/', 'PostController@showPost')->name("postss");

Route::get('/posts/add', 'PostController@addPost')->name("postss.add");
Route::post('/posts/add','PostController@storePost' )->name("posts.add");

Route::get('/post/delete/{id}','PostController@deletePost')->name("posts.delete");

Route::get('/post/edit/{id}','PostController@editPost')->name("posts.edit");
Route::post('/post/update/{id}','PostController@updatePost')->name("posts.update");


Route::get('/phones','PhoneController@show');

Route::get('/booksi','BookController@show');

Route::get('/courses','courseController@show');

Route::get('/co','courseController@vb');



Route::get('/posts/comments','PostController@showComments');



Route::get('/zbal', function () {
    echo "id";
})->name("z");



Route::resource('book','BookController')->only([
    'destroy', 'delete','edit','update','create'
]);


Route::resource('course','courseController')->except([
     'destroy','index','store','show'
])->names([
    'create' => 'course.insert'
]);