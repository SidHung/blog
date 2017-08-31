@extends('layout')

@section('content')
<h1 class="page-header">家事管理</h1>
<div class="row">
  <div class="col-xs-8">
    <a href="/task/create" class="btn btn-success">
      <i class="fa fa-plus"></i> 新增
    </a>
  </div>
   <div class="col-xs-4">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
          <i class="fa fa-search"> </i>&nbsp;
        </button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
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
@endsection