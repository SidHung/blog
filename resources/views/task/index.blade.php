<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <h1>Hello, {{ $name}}</h1>
  <p>You age is : {{$age}} </p>

  <a href="/task/create">新增一件家事yayaya</a>
  <br>
  <br>

  要做der事：
  <table>
    <thead>
      <tr>
          <th style="text-align:left">ID</th>
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
                <a href="/task/{{ $task_object->id }}/edit">
                修改</a>
                <a href="#">
                刪除</a>
            </td>
  	   </tr>
  		@endforeach
    </tbody>  
 	</table>
</body>
</html>