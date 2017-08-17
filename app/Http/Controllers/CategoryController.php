<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index()
	{
		$heading = '重要';
		$queue = 1;
		// $tasks = [
		// 	'吃飯',
		// 	'睡覺',
		// 	'顆顆'
		// ];

		// $tasks = \DB::table('tasks')
		// 	->where('is_completed', 0)
		// 	->get();
		$categories = Category::get();

		// dd($tasks);
		return view('category.index', compact('heading','queue', 'categories'));
	}
	
	public function create()
	{
		// 建立一個變數 task，值是到 tasks table 抓回該 id 的資料
		return view('category.create');
	}	

	public function store()
	{
		// 在 tasks table 新增一筆資料
		Category::create([
			// name 的欄位，要使用form 裡面的 name 輸入框的值
			'heading' => request()->input('heading'),
			// description 的欄位，要使用form 裡面的 description 輸入框的值
			'queue' => request()->input('queue'),
			'description' => request()->input('description')
		]);
		// 回到 tasks 列表頁面
		return redirect()->to('/category');
	}
	public function edit($id) // 接收從 routes/web.php 設定的 id
    {
    	// 建立一個變數 task，值是到 task
    	// $category = Category::where('heading', $heading)->first();
    	// $category = Category::where('id', $id)->first();下面那行等於這行
    	$category = Category::find($id);
    	// dd($category);
    	return view('category.edit')->with(compact('category'));


    }
    public function update($id)
	{
		// 建立一個變數 task ，值是到 tasks table 抓回該 id 的資料
		$category = Category::find($id);

		// 把該筆資料的欄位，更新成來自表單的資料，並寫入到 tasks table
		$category->update([
			// name 的欄位，要使用form 裡面的 name 輸入框的值
			'heading' => request()->input('heading'),
			// description 的欄位，要使用form 裡面的 description 輸入框的值
			'queue' => request()->input('queue'),
			'description' => request()->input('description')
		]);

		// 回到 tasks 列表頁面
		return redirect()->to('/category');
	}

	public function destroy($id)
    {
    	$category = Category::find($id);
    	$category->delete();

    	return redirect()->to('/category');
   	}
    
    public function show($heading) // 接收從 routes/web.php 設定的 id
    {
    	// 建立一個變數 task，值是到 task
    	$category = Category::find($heading);

    	return view('category.show')->with(compact('category'));
    }
}