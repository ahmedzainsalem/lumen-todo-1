<?php

// Home route to show all tasks
$app->get('/', function() {
  return view('list')->with('items', \App\Models\Item::all());
});

// Add a task
$app->post('/list/add',
           ['as' => 'add_list_item',
           'uses' => 'App\Http\Controllers\ListController@add']);

// Check a task as complete
$app->post('/list/check',
          ['as' => 'check_list_item',
           'uses' => 'App\Http\Controllers\ListController@check']);

// Uncheck a task
$app->post('/list/uncheck',
          ['as' => 'uncheck_list_item',
           'uses' => 'App\Http\Controllers\ListController@unCheck']);

// Remove a task
$app->post('/list/remove',
          ['as' => 'remove_list_item',
           'uses' => 'App\Http\Controllers\ListController@remove']);

