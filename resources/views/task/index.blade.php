<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <h1>Hello, {{ $name}}</h1>
  <p>You age is : {{$age}} </p>
  要做der事：
  <ul>
  		@foreach ($tasks as $task_object)
  			<li>
  				<a href="/task/{{ $task_object->id }}">
					 {{ $task_object->name }} 
				</a>
  			</li>
  			
  		@endforeach 
  </ul>		
</body>
</html>