<?php

$app->get('/', function() {
  return view('list')->with('items', \App\Models\Item::all());
});
$app->post('/list/add', ['as' => 'add_list_item', 'uses' => 'App\Http\Controllers\ListController@add']);
$app->post('/list/check', 'App\Http\Controllers\ListController@check');
$app->post('/list/uncheck', 'App\Http\Controllers\ListController@unCheck');
$app->post('/list/remove', 'App\Http\Controllers\ListController@remove');

