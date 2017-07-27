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

		return view('articles.index', compact('id','name', 'articles'));
	}
    
    public function show($id)
    {
    	$articles = Articles::find($id);

    	return view('articles.show')->with(compact('articles'));
    }
}
