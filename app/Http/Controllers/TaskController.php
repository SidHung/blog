<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
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

		// $tasks = \DB::table('tasks')
		// 	->where('is_completed', 0)
		// 	->get();
		$tasks = Task::get();

		// dd($tasks);
		return view('task.index', compact('name','age', 'tasks'));
	}
    
    public function show($id)
    {
    	return Task::find($id);
    }
}