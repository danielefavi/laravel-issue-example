<?php

// NOTE: uncomment to create some users and projects
// factory(\App\User::class)->create();
// factory(\App\User::class)->create();
// factory(\App\User::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();
// factory(\App\Project::class)->create();

// NOTE: uncomment to listen to the updating event raised by the project
// $project = \App\Project::first();
// $project->update([
//     'title' => 'updated'
// ]);

// NOTE: this is the syncing issue
// $project = \App\Project::first();
// $project->users()->sync([1,2]);
// $project->users()->attach([3]);
// $project->users()->detach([3]);
// $project->users()->detach([1,2]);

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
