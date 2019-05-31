<?php

Route::get('/', 'PagesController@home');
Route::get('/user','PagesController@user_info');
Route::get('/user_profile','PagesController@user_profile');
Route::post('/register','RegistrationController@store');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');
Route::get('/logout_user','SessionController@destroy_user');
Route::get('/admin_login','AdminController@create')->name('login');
Route::get('/admin','AdminController@index');
Route::post('/user_update/{id}','UserController@update');
Route::get('{batch}','UserController@getBatchdata')->where(['batch' => '[0-9]+']);
Route::get('/single-page/{post}','PagesController@details');
Route::get('/cricket-page','PagesController@cricket_page');
Route::get('/team-page','PagesController@team_page');
Route::get('/privacy-page','PagesController@privacy_page');



Route::get('/login/facebook', 'SessionController@redirectToFacebookProvider');
 
Route::get('login/facebook/callback', 'SessionController@handleProviderFacebookCallback');


Route::post('/post_create','PostsController@store');
Route::post('/post_update','PostsController@post_update');
Route::get('/delete-post/{post}','PostsController@delete_post');
Route::post('/comment/{userId}/{postID}','CommentController@store');

//player
Route::post('player/create','PlayerController@PlayerCreate');
Route::get('player/get_player/{player_id}', 'PlayerController@getPlayerInfo');
Route::get('player/get_players', 'PlayerController@getPlayers');
Route::post('player/edit','PlayerController@PlayerEdit');

//manager
Route::post('manager/create','ManagerController@ManagerCreate');
Route::get('manager/get_managers', 'ManagerController@getManagers');
Route::post('manager/edit','ManagerController@ManagerEdit');

//coach
Route::post('coach/create','CoachController@CoachCreate');
Route::get('coach/get_coach/{coach_id}', 'CoachController@getCoachInfo');
Route::get('coach/get_coaches', 'CoachController@getCoaches');
Route::post('coach/edit','CoachController@CoachEdit');

//team
Route::post('team/create','TeamController@TeamCreate');
Route::get('team/get_team/{team_id}', 'TeamController@getTeamInfo');
Route::get('team/team_details/{team_id}', 'TeamController@getTeamDetails');
Route::get('team/get_teams', 'TeamController@getTeams');
Route::post('team/edit','TeamController@TeamEdit');

//fixture
Route::post('fixture/create','FixtureController@FixtureCreate');
Route::get('fixture/get_fixture/{team_id}', 'FixtureController@getFixtureInfo');
Route::get('fixture/get_fixtures', 'FixtureController@getFixtures');
Route::post('fixture/result_update', 'FixtureController@resultUpdate');
Route::post('fixture/edit','FixtureController@FixtureEdit');

Route::get('team/point_table', 'TeamController@getTeams');