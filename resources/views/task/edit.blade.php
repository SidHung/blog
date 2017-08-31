@extends('layout')

@section('content')
<h1>修改家事表單</h1>
<form method="POST" action="/task/{{ $task->id }}">
	{{-- CSRF token，防止來自外部的表單送資料進來 --}}
	{{ csrf_field() }}

	{{-- 因為HTML 只支援 GET ＆ POST，所以要用另外的input 帶上put，Laravel 才能將之當成 PUT request --}}
	{{-- <input type="hidden" name="_method" value="PUT"> --}}
	{{ method_field('put') }}

	<h4>名稱：</h4>
	<input type="text" name="name" value="{{ $task->name }}" class="form-control">

	<h4>敘述：</h4>
		<textarea name="description" value=" " class="form-control">{{ $task->description }}</textarea>

	<br>
	<br>
	<input type="submit" value="送出">
</form>
@endsection