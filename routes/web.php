<?php

factory(\App\User::class)->create();
factory(\App\User::class)->create();
factory(\App\User::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();
factory(\App\Project::class)->create();

// $project = \App\Project::first();
// $project->update([
//     'title' => 'updated'
// ]);


$project = \App\Project::first();
$project->users()->sync([1,2]);

dd('ok');


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

Route::get('/', function () {
    return view('welcome');
});
