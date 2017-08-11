<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <h1>Hello, {{ $id}}</h1>
  <p>文章標題 : {{$name}} </p>

  <a href="/articles/create">每天寫文章，頭腦好棒棒</a>
  <br>
  <br>

  文章列表：
  <table>
    <thead>
      <tr>
          <th style="text-align:left">ID</th>
          <th style="text-align:left">標題</th>
          <th style="text-align:left">修改</th>
      </tr>    
    </thead>  
    <tbody>
      @foreach ($articles as $article_object)
        <tr>
            <td>{{ $article_object->id }}</td>
            <td>
                <a href="/articles/{{ $article_object->id }}">
                     {{ $article_object->content }}</a>
            </td>         
            <td>
                <a href="/articles/{{ $article_object->id }}/edit">
                編輯</a>
                <a href="#">
                刪除</a>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>	
</body>
</html>