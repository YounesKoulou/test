<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/git', function () {
    return view('okey');
});

Route::get('genererCommentaire', function(){
    
    $articles = App\Article::all();

    foreach($articles as $article) {
    	for($i = 0; $i < 2; $i++) {
    		$comment = new App\Comment();
    		$comment->auteur  = "test auteur $i";
    		$comment->contenu = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, voluptatibus - $i";
    		$comment->article_id = $article->id;
    		$comment->save(); 
    	}
    }
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('articles', 'ArticleController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
