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
	public function create()
	{
		// 建立一個變數 task，值是到 tasks table 抓回該 id 的資料
		return view('task.create');
	}	

	public function store()
	{
		// 在 tasks table 新增一筆資料
		Task::create([
			// name 的欄位，要使用form 裡面的 name 輸入框的值
			'name' => request()->input('name'),
			// description 的欄位，要使用form 裡面的 description 輸入框的值
			'description' => request()->input('description')
		]);
		// 回到 tasks 列表頁面
		return redirect()->to('/task');
	}
	public function edit($id) // 接收從 routes/web.php 設定的 id
    {
    	// 建立一個變數 task，值是到 task
    	$task = Task::find($id);

    	return view('task.edit')->with(compact('task'));
    }
    public function update($id)
	{
		// 建立一個變數 task ，值是到 tasks table 抓回該 id 的資料
		$task = Task::find($id);

		// 把該筆資料的欄位，更新成來自表單的資料，並寫入到 tasks table
		$task->update([
			// name 的欄位，要使用form 裡面的 name 輸入框的值
			'name' => request()->input('name'),
			// description 的欄位，要使用form 裡面的 description 輸入框的值
			'description' => request()->input('description')
		]);

		// 回到 tasks 列表頁面
		return redirect()->to('/task');
	}

	public function destroy($id)
    {
    	$task = Task::find($id);

    	$task->delete();
    	return redirect()->to('/task');
   	}
    
    public function show($id) // 接收從 routes/web.php 設定的 id
    {
    	// 建立一個變數 task，值是到 task
    	$task = Task::find($id);

    	return view('task.show')->with(compact('task'));
    }
}