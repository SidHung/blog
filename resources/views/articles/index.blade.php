@extends('layout')

@section('content')
  <h1 class="page-header">文章管理</h1>
  <p>Hello, {{ $id}} </p>
  <p>文章標題 : {{$name}} </p>

  <a href="/articles/create" class="btn btn-primary">新增</a>
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
                <form method="POST" action="/articles/{{ $article_object->id }}">
                 <a href="/articles/{{ $article_object->id }}/edit"> 修改
                 </a>
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit"/> 刪除
                </button>
                </form>
            </td>
        </tr>
      @endforeach   
    </tbody>
  </table>	
@endsection