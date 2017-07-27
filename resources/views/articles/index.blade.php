<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <h1>Hello, {{ $id}}</h1>
  <p>文章標題 : {{$name}} </p>
  文章列表：
  <ul>
  		@foreach ($articles as $articles_object)
  			<li>
  				<a href="/articles/{{ $articles_object->id }}">
					 {{ $articles_object->content }} 
				</a>
  			</li>
  			
  		@endforeach 
  </ul>		
</body>
</html>