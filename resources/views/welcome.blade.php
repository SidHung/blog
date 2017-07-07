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
  		<?php foreach ($tasks as $task_name):?>
  			<li> <?php echo $task_name;?> </li>
  		<?php endforeach ?>
  </ul>		
</body>
</html>