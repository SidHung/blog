<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$name = 'Sid';
		$age = 23;
		// $tasks = [
		// 	'吃飯',
		// 	'睡覺',
		// 	'顆顆'
		// ];

		$tasks = \DB::table('tasks')->get();

		// dd($tasks);
		return view('welcome', compact('name','age', 'tasks'));
	}
    
}
