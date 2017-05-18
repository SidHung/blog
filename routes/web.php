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
// $number 是數字
function press_button() {
	return 'water';
}

Route::get('/', function () {
	return press_button();
});

Route::get('/about', function  () {
	return view('about');
});

Route::get('/',function(){

	$lesson_name = 'My Workshop';

	$member = [
		'Stream' => [
			'age' => 18,
			'gender' => 'male'],
		'Sid' => [
			'age' => 18,
			'gender' => 'male'],
		'Jessie' => [
			'age' => 18,
			'gender' => 'female'],
		'Jeff' => [
			'age' => 18,
			'gender' => 'male'],
		'Eli' => [
			'age' => 18,
			'gender' => 'male'],
	];

	foreach($member as $member_name => $member_data) {
		echo $member_name . ',性別：' . $member_data['gender'] . '<br>' . ',年齡：' . $member_data['age'];
	}

	//echo $member[2];
});




