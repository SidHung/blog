<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
	public function index()
	{
		// 捏造一個變數 id
		$id = 'Sid';

		// 捏造一個變數 name
		$name = 23;

		// 從資料庫撈回 articles table 的所有資料，作為變數 articles 的值
		$articles = Articles::get();

		// 回傳 view : task/index.blade.php，並回以上的變數們
		return view('articles.index', compact('id','name', 'articles'));
	}
    public function create()
    {
    	return view('articles.create');
    }
    public function store()
    {
    	Articles::create([
    		'id' => request()->input('id'),
    		'content' => request()->input('content')
    	]);
    	return redirect()->to('/articles');
    }
    public function edit($id)
    {
    	$articles = Articles::find($id);
    	return view('articles.edit')->with(compact('articles'));
    }
    public function show($id) // 接收從routes/web.php 設定的 id
    {
    	//建立一個變數，值是依照 id，到 articles table 抓回該id 的資料
    	$articles = Articles::find($id);

    	// 回傳 view ：task/show.blade.php，並帶回 task 變數
    	return view('articles.show')->with(compact('articles'));
    }
}
