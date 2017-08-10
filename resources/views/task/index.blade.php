<!DOCTYPE html>
<html>
<head>
<title>Sid's Workshop</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<div class="container">
  <h1>Hello, {{ $name}}</h1>
  <p>You age is : {{$age}} </p>

  <a href="/task/create" class="btn btn-success">
  <i class="fa fa-plus"></i> 新增</a>
  <br>
  <br>

  要做der事：
  <table class="table table-responsive">
    <thead>
      <tr>
          <th style="text-align:left">序號</th>
          <th style="text-align:left">名稱</th>          
          <th style="text-align:left">操作</th>
      </tr>    
    </thead>   
    <tbody>   
  		@foreach ($tasks as $task_object)
  			<tr>
            <td>{{ $task_object->id }}</td>
            <td>
                <a href="/task/{{ $task_object->id }}">
					           {{ $task_object->name }}</a>
            </td> 
            <td>
               
                <form method="POST" action="/task/{{ $task_object->id }}">
                 <a href="/task/{{ $task_object->id }}/edit" class="btn btn-warning">
                <i class="fa fa-pencil"></i> 修改
                </a>
                  {{-- CSRF token，防止來自外部的表單送資料進來 --}}
                {{ csrf_field() }}

                {{-- 因為HTML 只支援 GET ＆ POST，所以要用另外的input 帶上put，Laravel 才能將之當成 PUT request --}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger"/>
                  <i class="fa fa-times"></i> 刪除
                </button>
                </form>

            </td>
  	   </tr>
  		@endforeach
    </tbody>  
 	</table>
</body>
</html>