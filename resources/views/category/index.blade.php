<!DOCTYPE html>
<html>
<head>
<title>Sid's Workshop</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Stream Workshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/task">家事管理 <span class="sr-only">(current)</span></a></li>
        <li><a href="/articles">文章管理</a></li>
        <li><a href="/category">分類管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="https://scontent.ftpe8-3.fna.fbcdn.net/v/t1.0-9/14055159_1236147206418167_1925319583161016240_n.jpg?oh=556b59189bffd7283f0fc49e1ccbbeb0&oe=5A2898D1" style="height: 20px" class="img-circle">  Sid <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <h1 class="page-header">分類管理</h1>

  <a href="/category/create" class="btn btn-success">
  <i class="fa fa-plus"></i> 新增</a>
  <br>
  <br>

  分類列表
  <table class="table table-responsive">
    <thead>
      <tr>
          <th style="text-align:left">序號</th>
          <th style="text-align:left">名稱</th>          
          <th style="text-align:left">編輯</th>
      </tr>    
    </thead>   
    <tbody>   
  		@foreach ($categories as $category_object)
  			<tr>
            <td>{{ $category_object->heading }}</td>
            <td>
                <a href="/category/{{ $category_object->heading }}">
					           {{ $category_object->queue }}</a>
            </td> 
            <td>
               
                <form method="POST" action="/category/{{ $category_object->heading }}">
                 <a href="/category/{{ $category_object->heading }}/edit" class="btn btn-warning">
                <i class="fa fa-pencil"></i> 修改
                </a>
                {{ csrf_field() }}

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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
  </body>
</html>