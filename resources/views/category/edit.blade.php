<h1>修改分類表單</h1>

<form method="POST" action="/category/{{ $category->id }}">
	{{-- CSRF token，防止來自外部的表單送資料進來 --}}
	{{ csrf_field() }}

	{{-- 因為HTML 只支援 GET ＆ POST，所以要用另外的input 帶上put，Laravel 才能將之當成 PUT request --}}
	{{-- <input type="hidden" name="_method" value="PUT"> --}}
	{{ method_field('put') }}

	<h4>分類名稱：</h4>
	<input type="text" name="heading" value="{{ $category->heading }}">

	<h4>重要性：</h4>
	<input type="text" name="queue" value=" {{ $category->queue }}">

	<h4>詳細內容敘述： </h4>
	<input type="text" name="description" value=" {{ $category->description }}">    

	<br>
	<br>
	<input type="submit" value="送出">
</form>