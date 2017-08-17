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

// function triple($number_a){
// 	return $number_a * 3;
// }

// function square($number_b){
// 	return $number_b * $number_b * $number_b;
// }

// function getRemainder($number_a, $number_b){
// 	$remainder = $number_a % $number_b;
// 	return '餘數是' . $remainder ;
// }
// function checkRemainderOfNumber($number){
// 	$remainder = $number % 2;
// 	if ($remainder == 0){
// 		return $number . ',這是偶數';
// 	} else {
// 		return $number . ',這是奇數';
// 	}
// }
// function getNumbersSum($arr_number){
// 	$totalNumber = 0;
// 	foreach($arr_number as $number) {
// 		$totalNumber = $totalNumber + $number;		
// 	}
// 	return $totalNumber;
// }
// 1000每天漏一半，第幾天會小於50

// function getDayCount($water_ml){
// 	for ($days = 1 ; $days < 100 ; $days+=1) { 
// 		$water_ml = $water_ml / 2;
// 		if ($water_ml < 50) {
// 			return $days;
// 			# code...
// 		}
// 	}
// }
// function getSumNumber($totalNumber) {
// 	$sumNumber = 0;
// 	foreach ($totalNumber as $single_number) {
//         $sumNumber = $sumNumber + $single_number;
// 	}	
// 		return $totalNumber;
// }

function getMulNumber($totalNumber){
	for ($number = 1 ; $number < 100 ; $number+=1){
		$totalNumber = $totalNumber * $totalNumber + 1;
		if ($totalNumber > 100){
			return $number;
		}
	}
}

Route::get('/function_practice', function(){
	$totalNumber > 100;
	echo getMulNumber($totalNumber);
});









// Route::get('/homework_practice', function(){
// 	$totalNumber = [1, 2, 3, 4, 5];
// 	dd(getSumNumber($totalNumber));
// });
// $index++;

// $index = $index / 3;
// $index /= 3;



// Route::get('/function_practice', function(){
//   	$water_ml = 1000;
   	// echo getDayCount($water_ml);
// });
 // Route::get('/function_practice', function(){
 // 	$totalNumber = [1, 2, 3, 4, 5];
 // 	echo getNumbersSum($totalNumber);
 // });

// Route::get('/function_practice', function(){
// 	echo checkRemainderOfNumber(9); //這是奇數
// 	echo '<br>';
// 	echo checkRemainderOfNumber(4); //這是偶數
// });

// $what_i_get = press_button(123);

// echo $what_i_get; // 'water'

Route::get('/price',function(){
	return view ('price');
});

Route::get('/kerker',function(){
	echo square(4).','.square(5); // 64,125
});

// Route::get('/', function () {
// 	return press_button();
// });

Route::get('/about', function  () {
	return view('about');
});

// Route::get('/',function(){

// 	$lesson_name = 'My Workshop';

// 	$member = [
// 		'Stream' => [
// 			'age' => 18,
// 			'gender' => 'male'],
// 		'Sid' => [
// 			'age' => 18,
// 			'gender' => 'male'],
// 		'Jessie' => [
// 			'age' => 18,
// 			'gender' => 'female'],
// 		'Jeff' => [
// 			'age' => 18,
// 			'gender' => 'male'],
// 		'Eli' => [
// 			'age' => 18,
// 			'gender' => 'male'],
// 	];

// 	foreach($member as $member_name => $member_data) {
// 		echo $member_name . ',性別：' . $member_data['gender'] . '<br>' . ',年齡：' . $member_data['age'];
// 	}

// 	//echo $member[2];
// });

Route::get('task', 'TaskController@index');

Route::get('task/create', 'TaskController@create');

Route::post('task', 'TaskController@store');

Route::get('task/{id}/edit', 'TaskController@edit');

Route::put('task/{id}', 'TaskController@update');

Route::delete('task/{id}', 'TaskController@destroy');

Route::get('/task/{id}', 'TaskController@show');

//我只是個分隔線

Route::get('articles','ArticlesController@index');

Route::get('articles/create', 'ArticlesController@create');

Route::post('articles', 'ArticlesController@store');

Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::put('articles/{id}', 'ArticlesController@update');

Route::delete('articles/{id}', 'ArticlesController@destroy');

Route::get('/articles/{id}','ArticlesController@show');

//我是分隔線

Route::get('category', 'CategoryController@index');

Route::get('category/create', 'CategoryController@create');

Route::post('category', 'CategoryController@store');

Route::get('category/{id}/edit', 'CategoryController@edit');

Route::put('category/{id}', 'CategoryController@update');

Route::delete('category/{id}', 'CategoryController@destroy');

Route::get('category/{id}', 'CategoryController@show');


