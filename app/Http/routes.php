<?php

// Home route to show all tasks
$app->get('/', function() {
  return view('list')->with('items', \App\Models\Item::all());
});

// Add a task
$app->post('/task/add',
           ['as' => 'task.add',
           'uses' => 'App\Http\Controllers\ListController@add']);

// Check a task as complete
$app->post('/task/check',
          ['as' => 'task.check',
           'uses' => 'App\Http\Controllers\ListController@check']);

// Uncheck a task
$app->post('/task/uncheck',
          ['as' => 'task.uncheck',
           'uses' => 'App\Http\Controllers\ListController@unCheck']);

// Remove a task
$app->post('/task/remove',
          ['as' => 'task.remove',
           'uses' => 'App\Http\Controllers\ListController@remove']);

