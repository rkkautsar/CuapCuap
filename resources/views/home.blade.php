@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br />
                    <br />
                    This is for development purposes, <br />
                    available routes: <br />
                        /profile/{id} <br />
                        /profile <br />
                        /profiles <br />
                        /profile/edit <br />
                        /thread/{id} <br />
                        /home <br />
                        /logout <br />
                        /login <br />
                        / <br />
                    <br />
                    <br />
                    Complete Route:
                    Route::get('/home', 'HomeController@index');<br/>    
                    Route::get('/users/{id}/{filename}', 'UserController@getResource');<br/>
                    <br/>
                    Route::get('/profile/edit', 'UserController@edit');<br/>
                    Route::post('/profile/edit', 'UserController@update');<br/>
                    Route::get('/profile', 'UserController@show');<br/>
                    Route::get('/profile/{id}', 'UserController@show');<br/>
                    Route::get('/profiles', 'UserController@index');<br/>
                    <br/>
                    Route::get('/threads', 'ThreadController@index');<br/>
                    Route::get('/threads/{$category}', 'ThreadController@index');<br/>
                    Route::get('/thread/new', 'ThreadController@create');<br/>
                    Route::post('/thread/new', 'ThreadController@store');<br/>
                    Route::get('/thread/{id}/edit', 'ThreadController@edit');<br/>
                    Route::post('/thread/{id}/edit', 'ThreadController@update');<br/>
                    Route::get('/thread/{id}/delete', 'ThreadController@destroy');<br/>
                    Route::get('/thread/{id}', 'ThreadController@show');<br/>
                    <br/>
                    Route::get('/thread/{thread_id}/{parent_id}/reply', 'ReplyController@create');<br/>
                    Route::post('/thread/{thread_id}/{parent_id}/reply', 'ReplyController@store');<br/>
                    Route::get('/thread/{thread_id}/reply', 'ReplyController@create');<br/>
                    Route::post('/thread/{thread_id}/reply', 'ReplyController@store');<br/>
                    Route::get('/thread/{thread_id}/{id}', 'ReplyController@show');<br/>
                    Route::get('/thread/{thread_id}/{id}/edit', 'ReplyController@edit');<br/>
                    Route::post('/thread/{thread_id}/{id}/edit', 'ReplyController@update');<br/>
                    Route::get('/thread/{thread_id}/{id}/delete', 'ReplyController@destroy');<br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
