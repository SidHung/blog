<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // $name = 'Sid';
        // $age = 23;
        // // $tasks = [
        // //   '吃飯',
        // //   '睡覺',
        // //   '顆顆'
        // // ];

        // // $tasks = \DB::table('tasks')
        // //   ->where('is_completed', 0)
        // //   ->get();
        // $tasks = Task::get();

        // // dd($tasks);
        // return view('task.index', compact('name','age', 'tasks'));


        //搜尋：用變數$keyword,來接收我們輸入的關鍵字
        $keyword = request()->input('keyword');
        if ($keyword =='') {
            //如果keyword的值是空的字串,就不篩選
            $tasks = Task::get();
        } else { //不是的話就
            //從task table中,找出name欄位值為$keyword的資料
            $tasks = Task::where('name', $keyword)->get();
        }
        return view('task.index', compact('name', 'age', 'tasks', 'keyword'));
    }

    public function create()
    {
        // 建立一個變數 task，值是到 tasks table 抓回該 id 的資料
        return view('task.create');
    }

    public function store()
    {
        // 在 tasks table 新增一筆資料

        // Task::create([
        //  // name 的欄位，要使用form 裡面的 name 輸入框的值
        //  'name' => request()->input('name'),
        //  // description 的欄位，要使用form 裡面的 description 輸入框的值
        //  'description' => request()->input('description')
        // ]);

        Task::create(request()->input());

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
        // $task->update([
        //  // name 的欄位，要使用form 裡面的 name 輸入框的值
        //  'name' => request()->input('name'),
        //  // description 的欄位，要使用form 裡面的 description 輸入框的值
        //  'description' => request()->input('description')
        // ]);
        $task->update(request()->input());
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
